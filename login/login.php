<?php session_start();   ?>
<?php require_once('connection.php'); ?>

<!-- Signup Mudeesha's php -->
<?php
  $errors = array();

  if(isset($_POST['signup'])){

    //Checking required fields
    if(empty(trim($_POST['fname']))){
      $errors[] = 'First Name is Required';
    }

    if(empty(trim($_POST['lname']))){
      $errors[] = 'Last Name is Required';
    }

    if(empty(trim($_POST['email']))){
      $errors[] = 'Email is Required';
    }

    if(empty(trim($_POST['addressline1']))){
      $errors[] = 'Address line 01 Name is Required';
    }

    if(empty(trim($_POST['addressline2']))){
      $errors[] = 'Address line 02 is Required';
    }

    if(empty(trim($_POST['zipcode']))){
      $errors[] = 'Zip/Postal code is Required';
    }
 
    if(empty(trim($_POST['telephone']))){
      $errors[] = 'Telephone Number is Required';
    }

    if(empty(trim($_POST['password']))){
      $errors[] = 'Password is Required';
    }

    if(empty(trim($_POST['repassword']))){
      $errors[] = 'Please Re-enter the Password';
    }

    //Cheching max length

    //Checking if email already exist
    $email = mysqli_real_escape_string($connection, $_POST['email']);//To prevent sql injections
    $query1 = "SELECT * FROM customer WHERE email = '{$email}' LIMIT 1";
    $result_set1 = mysqli_query($connection, $query1);

    if($result_set1){
      if(mysqli_num_rows($result_set1)==1){
        $errors[] = 'Email address is already exists';
      }
    }

    //If no errors! then sign up!!
    if(empty($errors)){
      //sanitize fields
      $fname = mysqli_real_escape_string($connection, $_POST['fname']);
      $lname = mysqli_real_escape_string($connection, $_POST['lname']);
      $addressline1 = mysqli_real_escape_string($connection, $_POST['addressline1']);
      $addressline2 = mysqli_real_escape_string($connection, $_POST['addressline2']);
      $addressline3 = mysqli_real_escape_string($connection, $_POST['addressline3']);
      $zipcode = mysqli_real_escape_string($connection, $_POST['zipcode']);
      $telephone = mysqli_real_escape_string($connection, $_POST['telephone']);
      $password = mysqli_real_escape_string($connection, $_POST['password']);
      $repassword = mysqli_real_escape_string($connection, $_POST['repassword']);

      $query2 = "INSERT INTO customer(f_name,l_name,address_line_01,address_line_02,address_line_03,zip_code,email,password,telephone,is_delete)
      values('{$fname}','{$lname}','{$addressline1}','{$addressline2}','{$addressline3}','{$zipcode}','{$email}','{$password}','{$telephone}',0)";
      $result_set2=mysqli_query($connection, $query2);

      if($result_set2){
        echo "sucess!";
      }
      else{
        echo("Error description: " . mysqli_error($connection));
      }
    }

  }
 
  //Lakshith's php

  /*if(isset($_POST['signup'])){
  $user= $_POST['fname'];
  $email=$_POST['email'];
  $pass=$_POST['addressline1'];
  $user= $_POST['addressline2'];
  $email=$_POST['addressline3'];
  $pass=$_POST['zipcode'];
  $user= $_POST['telephone'];
  $email=$_POST['password'];
  $pass=$_POST['repassword'];


                
  $sql="insert into Customer values ('$user','$email','$pass')";
  if(mysqli_query($conn,$sql)){
    echo "new record added";
  }
  }*/
  ?>




  <!-- Login - Mudeesha's php -->
  <?php 

  // check for form submission
  if (isset($_POST['login'])) {

    $login_errors = array();

    // check if the username and password has been entered
    if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1 ) {
      $login_errors[] = 'Email is Missing / Invalid';
    }

    if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 ) {
      $login_errors[] = 'Password is Missing / Invalid';
    }

    // check if there are any errors in the form
    if (empty($login_errors)) {
      // No errors! Then login!!
      $email    = mysqli_real_escape_string($connection, $_POST['email']);
      $password   = mysqli_real_escape_string($connection, $_POST['password']);

      // prepare customer login database query
      $login_query = "SELECT * FROM customer 
            WHERE email = '{$email}' 
            AND password = '{$password}' 
            LIMIT 1";

      $login_result_set = mysqli_query($connection, $login_query);

      if ($login_result_set) {
        // query succesfful


        //if there are any users
        if (mysqli_num_rows($login_result_set) == 1) {
          // valid user found
          $customer = mysqli_fetch_assoc($login_result_set);
          $_SESSION['cus_id'] = $customer['cus_id'];
          $_SESSION['f_name'] = $customer['f_name'];

          // redirect to users.php
          header('Location: ../index.php');
        }


        elseif (mysqli_num_rows($login_result_set) < 1){
          // prepare admin login database query
          $login_query = "SELECT * FROM admin 
          WHERE admin_username = '{$email}' 
          AND admin_password = '{$password}' 
          LIMIT 1";

          $login_result_set = mysqli_query($connection, $login_query);

          if ($login_result_set) {
          // query succesfful

            //if there are any users
            if (mysqli_num_rows($login_result_set) == 1) {
            // valid user found
            $admin = mysqli_fetch_assoc($login_result_set);
            $_SESSION['adminid'] = $admin['admin_id'];
            $_SESSION['adminname'] = $admin['admin_f_name'];
            // redirect to users.php
            header('Location: ../admin/index.php');
          }
        } 
        else {
          // user name and password invalid
          $login_errors[] = 'Invalid Username / Password';
        }
      }
      else {
        $login_errors[] = "Error description: " . mysqli_error($connection);
      }
      }
    }
  }
?>


<!-- html -->
<html lang="en">
  <head>
        
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>


  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">




           <!-- Sign in/login -->
          <form action="#" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
             <?php
            if(isset($login_errors) || !empty($login_errors)){
              echo '<p class="login_errors"><b>Invalid Email or Password.</b></p><br>';      
            }
          ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email" name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />
            </div>
            <input type="submit" value="Login" class="btn solid" name="login" />

            <!-- lakshitha's php -->
            <?php
                /*(isset($_POST['login'])){
                  $email=$_POST['email'];
                  $Password=$_POST['password'];

                    if($email == '' || $Password == ''){
                      echo "Please fill all fields";
                    }
                    else{
                      $sql = "select * from admin where AdminId='$email' AND Password = '$Password'";
                      $res = mysqli_query($conn,$sql);
                      $count=mysqli_num_rows($res);

                      if($count == 1){
                        header("location:".'https://www.facebook.com/nicoelakshith/');
                      }
                      else{
                        echo "please Register You dont have already account";
                      }
                      
                    }
                                  
                }*/
            ?>

            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/nicoelakshith/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/lakshit07940825" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://mail.google.com/mail/u/5/#inbox" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

          

          <!-- sign up -->
          <form action="" class="sign-up-form" method="POST">
            <h2 class="title">Sign up</h2>
            <!--Display errors-->
          <?php
            if(!empty($errors)){
              echo '<div class="errormsg">';
              echo '<b>There ware error(s) on your form.</b><br>';
              foreach ($errors as $error) {
                echo $error.'<br>';
              }
              echo '</div>';
            }
          ?>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="First name" name="fname" />
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Last name" name="lname" />
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" />
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Address line 01" name="addressline1" />
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Address line 02" name="addressline2" />
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Address line 03" name="addressline3" />
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Zip/Postal Code" name="zipcode" />
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Telephone" name="telephone" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password"  name="password" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Re-Enter Password"  name="repassword" />
            </div>

            <input type="submit" class="btn" value="Sign up" name="signup" />

            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
<?php mysql_close($connection); ?>
