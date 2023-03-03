<?php

//echo "Delete Page";
$conn = mysqli_connect('localhost','root','') or die(mysqli_error()); //database connection
$db_select = mysqli_select_db($conn,'cart_system') or die(mysqli_error()); //selecting database

if(isset($_GET['id']) AND isset($_GET['product_image'])){

    $id = $_GET['id'];
    $image_name = $_GET['product_image'];


    if($image_name !=""){
        $path = "http://localhost/project/image".$image_name;
        $remove = unlink($path);

        if($remove==false){
            $_SESSION['remove']= "<div class ='error'>Failed to Remove Category Image.</div>";
            header("location:".'http://localhost/project/admin/manage-category.php');

            die();
        }
    }

    $sql = "DELETE FROM product WHERE id='$id' ";

    $res = mysqli_query($conn,$sql);

    if($res == true){
             $_SESSION['delete']= "<div class ='success'>Category Deleted Successfully.</div>";
            header("location:".'http://localhost/project/admin/manage-category.php');
    }
    else{
        echo "failed";
        $_SESSION['delete']= "<div class ='error'>Category Deleted Successfully.</div>";
        header("location:".'http://localhost/project/admin/manage-category.php');
    }

}
    else{
        header("location:".'http://localhost/project/admin/manage-category.php');
    }





?>