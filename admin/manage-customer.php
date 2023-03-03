


<?php include('partials/menu.php'); ?>



<!-- Main Content Section Starts -->
<div class = "main-content">

        <div class = "wrapper">
                 <h1>Manage Orders</h1>
                 <br><br><br>
                 <?php 
                  if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                  }
                 if(isset($_SESSION['delete'])){
                   echo $_SESSION['delete'];
                   unset($_SESSION['delete']);
                 }

                 if(isset($_SESSION['update'])){
                   echo $_SESSION['update'];
                   unset($_SESSION['update']);
                 }
                 if(isset($_SESSION['user-not-found'])){
                  echo $_SESSION['user-not-found'];
                  unset($_SESSION['user-not-found']);
                }
                 
                if(isset($_SESSION['pwd-not-match'])){
                  echo $_SESSION['pwd-not-match'];
                  unset($_SESSION['pwd-not-match']);
                }
                
                if(isset($_SESSION['change-pwd'])){
                  echo $_SESSION['change-pwd'];
                  unset($_SESSION['change-pwd']);
                }
                 ?>


                <!--Button to Add Admin-->
                
                <br><br><br>


                 <table class ="tbl-full">
                        <tr>                       
                          <th>ID</th>
                          <th>First Name</th>
                          <th>Last Name</th> 
                          <th>Address 1</th>
                          <th>Address 2</th>
                          <th>Address 3</th>
                          <th>Zip Code</th>
                          <th>Email</th>
                          <th>Phone No</th>
                                                                 
                        </tr>


                        <?php
                          $sql = "SELECT * FROM customer";
                          $res = mysqli_query($conn,$sql);
                          
                          if($res == TRUE){

                            $count = mysqli_num_rows($res);
                            $sn =1;
                            if($count>0){
                              while($rows = mysqli_fetch_assoc($res)){
                                $id = $rows['cus_id'];
                                $f_name = $rows['f_name'];
                                $l_name = $rows['l_name'];
                                $address_1 = $rows['address_line_01'];
                                $address_2 = $rows['address_line_02'];
                                $address_3 = $rows['address_line_03'];
                                $zip_code = $rows['zip_code'];
                                $email = $rows['email'];
                                $phone_num=$rows['telephone']

                                ?>
                                   <tr>
                                        <td><?php  echo $sn++;  ?>.</td>
                                        <td><?php echo $f_name; ?></td>
                                        <td><?php echo $l_name; ?></td>
                                        <td><?php echo $address_1; ?></td>
                                        <td><?php echo $address_2; ?></td>
                                        <td><?php echo $address_3; ?></td>
                                        <td><?php echo $zip_code; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $phone_num; ?></td>
                                        
                                      
                        
                                     </tr>

                                <?php

                              }
                            }
                            else{

                            }
                          }
                        ?>

                 
                 </table>

                

               
        </div>        
  </div>
<!-- Main Content Section Ends -->




<?php include('partials/footer.php') ?>


</body>
</html>