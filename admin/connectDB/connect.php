<?php
//connect DB

$servername = "localhost";
$database = "wolfcinema";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
// Check login
session_start();
if(empty($_SESSION['username']))
{
    echo "<script type='text/javascript'>alert('Vui Lòng Đăng Nhập'); window.location='index.php'; </script>";
    exit;
}
?>
