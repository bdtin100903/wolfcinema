<?php
 if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
$id= $_GET["id"];
include("./connectDB/connectDB.php");

$sql="DELETE FROM user WHERE id = $id" ;
$kq = mysqli_query ($conn,$sql) ;
?>