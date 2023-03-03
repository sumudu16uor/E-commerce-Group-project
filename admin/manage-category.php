<?php include('partials/menu.php') ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage product</h1>

        <br><br>

        <?php  
            if(isset($_SESSION['add'])){
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['remove'])){
              echo $_SESSION['remove'];
              unset($_SESSION['remove']);
          }

          if(isset($_SESSION['delete'])){
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
            }

            if(isset($_SESSION['no-category-found'])){
              echo $_SESSION['no-category-found'];
                  unset($_SESSION['no-category-found']);
              }

              if(isset($_SESSION['update'])){
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }
            
            if(isset($_SESSION['upload'])){
              echo $_SESSION['upload'];
              unset($_SESSION['upload']);
          }

          if(isset($_SESSION['failed-remove'])){
            echo $_SESSION['failed-remove'];
            unset($_SESSION['failed-remove']);
        }
      
        
        ?>
        <br><br>

                <!--Button to Add Admin-->
                <a href="http://localhost/project/admin/add-category.php" class="btn-primary">Add Product</a>
                <br><br><br>


                 <table class ="tbl-full">
                        <tr>    
                          <th>Product ID</th>               
                          <th>Product Name</th>
                          <th>Price</th>
                          <th>Quantity</th>  
                          <th>Image</th>
                          <th>Product Code</th>   
                          <th>Category</th>
                                                                   
                        </tr>

                        <?php 
                        
                        $sql = "SELECT * FROM product";
                        $res = mysqli_query($conn,$sql);

                        $count = mysqli_num_rows($res);

                        //$sn =1;

                        if($count>0){
                            while($row=mysqli_fetch_assoc($res)){
                              $id = $row['id'];
                              $p_name = $row['product_name'];
                              $price = $row['product_price'];
                              $qty = $row['product_qty'];
                              $image_name = $row['product_image'];
                              $product_code = $row['product_code'];
                              $category=  $row['category']; 
                              
                              
                             
                              ?>

                                        <tr>
                                              <td><?php echo $id; ?></td>
                                              <td><?php echo $p_name; ?></td>
                                              <td><?php echo $price; ?></td>
                                              <td><?php echo $qty; ?></td>

                                              <td>
                                              <?php 
                                                if($image_name !=""){
                                                  ?>
                                                        <img src=" http://localhost/project/image<?php echo $image_name; ?> "
                                                        width = "120px">

                                                  <?php
                                                }
                                                else{
                                                  echo "No image";
                                                }
                                              ?>
                                              </td>

                                              <td><?php echo $product_code; ?></td>
                                              <td> <?php echo $category; ?></td>
                                              <td>
                                              <a href="http://localhost/project/admin/update-category.php?id=<?php echo $id; ?>" class="btn-secondary"> Update Product</a>
                                              <a href="http://localhost/project/admin/delete-category.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger"> Delete Product</a>
                                              </td>

                                      
                                      </tr>

                              <?php
                            }
                        }
                        else{

                          ?>
                              <tr>
                                  <td colspan="6"><div class="error">No Category Added.</div></td>
                              </tr>
                          <?php
                        }
                        ?>

                      

                        

                 
                 </table>

    </div>


</div>




<?php include('partials/footer.php') ?>