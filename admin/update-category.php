<?php include('partials/menu.php') ?>

<div class="main-content">

    <div class="wrapper">
    <h1>Update Product</h1>
    
    <br><br>

    <?php

    if(isset($_GET['id'])){

        //echo "Getting Data";

        $id = $_GET['id'];
        $sql = "SELECT * FROM product WHERE id='$id' ";

        $res = mysqli_query($conn,$sql);

        $count = mysqli_num_rows($res);

        if($count==1){

            $row = mysqli_fetch_assoc($res);
            $p_name = $row['product_name'];
            $price = $row['product_price'];
            $qty = $row['product_qty'];
             $current_image = $row['product_image'];
            $product_code = $row['product_code'];
            $category=  $row['category'];   

        }
        else{

            $_SESSION['no-category-found'] = "<div class ='error'>Category not Found.</div>";
            header("location:".'http://localhost/project/admin/manage-category.php');
        }

    }
    else{
        header("location:".'http://localhost/project/admin/manage-category.php');
    }


    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <table class="tbl-30">
        
            <tr>
                <td>Product Name:</td>
                <td><input type="text" name="title" value="<?php echo $p_name; ?>"></td>
            
            
            </tr>

            <tr>
                <td>Price:</td>
                <td><input type="number" name="price" value="<?php echo $price; ?>"></td>
            
            
            </tr>

            <tr>
                <td>Quantity:</td>
                <td><input type="number" name="quantity" value="<?php echo $qty; ?>"></td>
            
            
            </tr>

            <tr>
                <td>Current Image:</td>
                <td>
                <?php 
                    if($current_image !=""){
                        ?>
                        <img src="http://localhost/project/image<?php echo $current_image; ?>" width="150px">

                        <?php
                    }
                    else{
                        echo "<div class='error'>Image not Added</div>";
                    }
                ?>
                
                </td>
    
            </tr>

            <tr>
                <td>New Image:</td>
                <td><input type="file" name="image"></td>
            </tr>

            <tr>
                <td>Product Code:</td>
                <td><input type="number" name="pcode" value="<?php echo $product_code; ?>"></td>
            
            
            </tr>

            <tr>
                <td>Category:</td>
                <td><input type="text" name="category" value="<?php echo $category; ?>"></td>
            
            
            </tr>
                    
            

            

            <tr>
                 <td>
                 <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                 <input type="hidden" name="id" value="<?php echo $id; ?>">
                 <input type="submit" name="submit" value="Update Category" class="btn-secondary">
                 </td>
            </tr>
        
        </table>
    </form>

            <?php

                    if(isset($_POST['submit'])){
                        //echo "Clicked";
                        //1.Get the all values from our form
                        $id = $row['id'];
                        $p_name = $row['product_name'];
                        $price = $row['product_price'];
                        $qty = $row['product_qty'];
                        $image_name = $row['product_image'];
                        $product_code = $row['product_code'];
                        $category=  $row['category']; 
                        
                        //2.Updating the new image
                        //check whether image is selected or not
                        if(isset($_FILES['image']['name'])){
                            $image_name = $_FILES['image']['name'];
                            if($image_name !=" " ){
                                $ext = end(explode('.',$image_name));

                                //$image_name = "Food_category".rand(000,999).'.'.$ext;
                
                
                                $source_path = $_FILES['image']['tmp_name'];
                
                                $destination_path="C:/xampp/htdocs/project/image".$image_name;
                
                                $upload=move_uploaded_file($source_path,$destination_path);
                
                                if($upload==false){
                                    
                                    $_SESSION['upload'] = "<div class='error'>Failed to Upload Image </div>";
                                    header("location:".'http://localhost/project/admin/manage-category.php');
                
                                    die();
                                }

                                //remove current image if available
                                if($current_image !=" "){

                                        $remove_path="C:/xampp/htdocs/project/image".$current_image;
                                        $remove = unlink($remove_path);
    
                                        //check whether removed or not
                                        if($remove==false){
                                        $_SESSION['failed-remove']="<div class='error'>Failed to remove current image. </div>";     
                                        header("location:".'http://localhost/project/admin/manage-category.php');
                                        die(); //stop the process
                                    }
                                }
                               

                            }
                            else{
                                $image_name = $current_image;
                            }
                        }
                        else{
                            $image_name = $current_image;
                        }

                        //3.Update the database
                        $sql2="UPDATE category SET
                        product_name='$p_name',
                        product_price='$price',
                        product_qty='$qty',
                        product_image='$image_name',
                        product_code='$product_code',
                        category='$category'
                        WHERE id='$id'
                        " ;

                        //4.Execute the query
                        $res2 = mysqli_query($conn,$sql2);

                        //5.Rediect the Manage category with message
                        if($res2==true){
                            $_SESSION['update'] = "<div class='success'> Category Successfully </div>";
                            header("location:".'http://localhost/project/admin/manage-category.php');

                        }
                        else{
                            $_SESSION['update'] = "<div class='error'>Failed to Added Category. </div>";
                            header("location:".'http://localhost/project/admin/manage-category.php');
                        }


                    } 



            ?>
                    
    
    </div>
</div>




<?php include('partials/footer.php') ?>