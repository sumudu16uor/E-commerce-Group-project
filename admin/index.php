
<?php include('partials/menu.php'); ?>




<!-- Main Content Section Starts -->
<div class = "main-content">

        <div class = "wrapper">
                 <h1>DASHBOARD</h1>
                 <br><br>

                 
        <?php
            if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }

        ?><br><br>

                 <div class="col-4">
                 <?php 
                 $sql="SELECT * FROM product";
                 $res=mysqli_query($conn,$sql);
                 $count = mysqli_num_rows($res);

            
                 ?>
                     <h1><?php echo $count; ?> </h1>
                     <br>
                     Available Products
                 </div>


                 <div class="col-4 text-center">

                 <?php 
                 $sql2="SELECT * FROM customer";
                 $res2=mysqli_query($conn,$sql2);
                 $count2 = mysqli_num_rows($res2);

            
                 ?>
                     <h1><?php echo $count2; ?></h1>
                     <br>
                     Customers
                 </div>


                 <div class="col-4">

                 <?php 
                 $sql3="SELECT * FROM orders";
                 $res3=mysqli_query($conn,$sql3);
                 $count3 = mysqli_num_rows($res3);
                 ?>
                
                     <h1><?php echo $count3; ?></h1>
                     <br>
                     Total Orders
                 </div>

                 <div class="col-4">
                 <?php 
                /* $sql4="SELECT SUM(amount_paid)
                 FROM orders;";
                 $res4=mysqli_query($conn,$sql4);
                 $count4 = $res4;
                 ?>*/

                 $result = mysqli_query($conn, 'SELECT SUM(amount_paid) AS value_sum FROM orders'); 
                 $row = mysqli_fetch_assoc($result); 
                 $sum = $row['value_sum'];

                 ?>

                     <h1>Rs.<?php echo $sum; ?>.00</h1>
                     <br>
                     Revenue
                 </div>

               <div class="clearfix"></div>  
        </div>        
  </div>
<!-- Main Content Section Ends -->


<?php include('partials/footer.php') ?>


</body>
</html>