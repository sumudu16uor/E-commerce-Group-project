<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $conn=mysqli_connect('localhost','root','') or die (mysqli_error());
      $db_select=mysqli_select_db($conn,'travelnine') or die (mysqli_error());

    ?>
    
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
          <form action="#" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />
            </div>
            <input type="submit" value="Login" class="btn solid" name="login" />
            <?php
                if(isset($_POST['login'])){
                  $username=$_POST['username'];
                  $Password=$_POST['password'];
                    if($username == '' || $Password == ''){
                      echo "Please fill all fields";
                    }else{
                      $sql = "select * from admin where AdminId='$username' AND Password = '$Password'";
                      $res = mysqli_query($conn,$sql);
                      $count=mysqli_num_rows($res);
                      if($count == 1){
                        header("location:".'https://www.facebook.com/nicoelakshith/');
                      }else{
                        echo "please Register You dont have already account";
                      }
                      
                    }
                    
                    
                    }




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
          <form action="#" class="sign-up-form" method="POST">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password"  name="password" />
            </div>
            <input type="submit" class="btn" value="Sign up" name="signup" />
            <?php
              if(isset($_POST['signup'])){
                $user= $_POST['username'];
                $email=$_POST['email'];
                $pass=$_POST['password'];


                
                $sql="insert into Customer values ('$user','$email','$pass')";
                if(mysqli_query($conn,$sql)){
                  echo "new record added";
                }
              }



            ?>



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
