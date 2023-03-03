<?php 

$conn = mysqli_connect('localhost','root','') or die(mysqli_error()); //database connection
$db_select = mysqli_select_db($conn,'cart_system') or die(mysqli_error()); //selecting database


session_destroy();

header("location:".'http://localhost/project/login/login.php');


?>