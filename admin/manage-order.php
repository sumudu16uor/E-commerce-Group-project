


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
                          <th>Name</th>
                          <th>Phone Number</th>      
                          <th>Address</th>
                          <th>Product</th>
                          <th>Paid Amount</th>
                          <th>Actions</th>                                         
                        </tr>


                        <?php
                          $sql = "SELECT * FROM orders";
                          $res = mysqli_query($conn,$sql);
                          
                          if($res == TRUE){

                            $count = mysqli_num_rows($res);
                            $sn =1;
                            if($count>0){
                              while($rows = mysqli_fetch_assoc($res)){
                                $id = $rows['id'];
                                $username = $rows['name'];
                                $phone = $rows['phone'];
                                $address = $rows['address'];
                                $product = $rows['products'];
                                $amount = $rows['amount_paid'];

                                ?>
                                   <tr>
                                        <td><?php  echo $sn++;  ?>.</td>
                                        <td><?php echo $username; ?></td>
                                        <td><?php echo $phone; ?></td>
                                        <td><?php echo $address; ?></td>
                                        <td><?php echo $product; ?></td>
                                        <td><?php echo $amount; ?></td>
                                        
                                        <td>
                                        
                                         <a href="http://localhost/project/admin/cancel-order.php?id=<?php echo $id; ?>" class="btn-danger"> Cancel Order</a>
                                         </td>
                                         
                        
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