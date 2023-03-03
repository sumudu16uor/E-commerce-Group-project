<?php 


session_start();

$conn = mysqli_connect('localhost','root','') or die(mysqli_error()); //database connection
$db_select = mysqli_select_db($conn,'cart') or die(mysqli_error()); //selecting database

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelNine-Ecommerce Website</title>
    <link rel="stylesheet"   href="admin.css">

</head>
<body>




<!-- Menu Section Starts -->
        <div class = "menu">
           <div class = "wrapper">
                <ul >
                    <li><a href="index.php">Home</a></li>
                    <li><a href="manage-admin.php">Admin </a></li>
                    <li><a href="manage-category.php">Products</a></li>
                    <li><a href="manage-customer.php">Customer</a></li>
                    <li><a href="manage-order.php">Order</a></li>
                    <li><a href="logout.php">Logout</a></li>
                
                </ul>
           </div>

        </div>
<!-- Menu Section Ends -->