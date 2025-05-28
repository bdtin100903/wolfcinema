<?php
$id= $_GET["id"];
include("./connectDB/connectDB.php");
$sql="DELETE FROM filmdangchieu WHERE id = $id" ;
$kq = mysqli_query ($conn,$sql) ;
echo '<script>alert("Đã Xóa")</script>';
?>