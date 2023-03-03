<?php include('partials/menu.php') ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>
    
        <br><br>

        <?php  
            if(isset($_SESSION['add'])){
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['upload'])){
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        
        ?>

        <br><br>

        <form action="" method="POST" enctype="multipart/form-data" >
        
            <table class="tbl-30">
                <tr>
                    <td>Product Name:</td>
                    <td><input type="text " name="title" placeholder="Product Name"></td>
                
                </tr>

                <table class="tbl-30">
                <tr>
                    <td>Price:</td>
                    <td><input type="number" name="price" placeholder="Price"></td>
                
                </tr>

                <table class="tbl-30">
                <tr>
                    <td>Quantity:</td>
                    <td><input type="number " name="quantity" placeholder="Quantity"></td>
                
                </tr>


                <tr>
                    <td>Select Image:</td>
                    <td>
                    <input type="file" name="image">
                    
                    </td>
                
                </tr>
            
                <tr>
                    <td>Product Code:</td>
                    <td><input type="number " name="pcode" placeholder="Product Code"></td>
                
                </tr>

                <tr>
                    <td>Category:</td>
                    <td><input type="text " name="category" placeholder="Category"></td>
                
                </tr>
                

                <tr>
                    <td colspan = "2">
                    <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                    </td>
                </tr>
            
            </table>
        
        
        </form>

        <?php  
        
        
            if(isset($_POST['submit'])){
               // echo "clicked";
            
               //1.get the value from category form
               $p_name = $_POST['title'];

               $price = $_POST['price'];
               $qty = $_POST['quantity'];
               $product_code = $_POST['pcode'];
               $category = $_POST['category'];

               //for the radio input type(selected or not)
             /*  if(isset($_POST['price'])){

                $price = $_POST['price'];
               }
               else{
                   $featured = "No";
               }

               if(isset($_POST['active'])){

                $active = $_POST['active'];
               }
               else{
                   $active = "No";
               }*/

               //check whether the image selected or not

              // print_r($_FILES['image']);
              // die();

              if(isset($_FILES['image']['name'])){

                $image_name = $_FILES['image']['name'];

                if($image_name != ""){

                

                $ext = end(explode('.',$image_name));

                //$image_name = "product_s".rand(000,999).'.'.$ext;


                $source_path = $_FILES['image']['tmp_name'];

                $destination_path="../image".$image_name;
                //C:/xampp/htdocs/project/image

                $upload=move_uploaded_file($source_path,$destination_path);

                if($upload==false){
                    
                    $_SESSION['upload'] = "<div class='error'>Failed to Upload Image </div>";
                    header("location:".'http://localhost/project/admin/add-category.php');

                    die();
                }
            }

              }
              else{
                  $image_name="";
              }

               $sql = " INSERT INTO product SET 
                        product_name='$p_name',
                        product_price='$price',
                        product_qty='$qty',
                        product_image='$image_name',
                        product_code='$product_code',
                        category='$category'
                ";

                /*            
                              $p_name = $row['product_name'];
                              $price = $row['product_price'];
                              $qty = $row['product_qty'];
                              $image_name = $row['product_image'];
                              $product_code = $row['product_code'];
                              $category=  $row['category'];
                              
                              */

               $res = mysqli_query($conn,$sql);

               if($res== true){
                  $_SESSION['add'] = "<div class ='success'>Category Added Successfully.</div>";
                   header("location:".'http://localhost/project/admin/manage-category.php');
               }
               else{
                $_SESSION['add'] = "<div class ='error'>Failed to Added Category .</div>";
                header("location:".'http://localhost/project/admin/add-category.php');
               }


            }
        
        
        ?>


    </div>


</div>





<?php include('partials/footer.php') ?>
