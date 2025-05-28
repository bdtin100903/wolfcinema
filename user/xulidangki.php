<?php
include("connectDB.php");

$usernameErr = $usernameErr1 = $passwordErr = $nameErr = $phoneErr = $gmailERR = $repasswordErr = $passErr1 = $gmailERR1 = $phoneErr1 =  " ";
$username = $password = $name = $phone = $gmail = $repassword =  " ";
if ( $_SERVER ["REQUEST_METHOD"] == "POST" ) {
    //Lấy dữ liệu do người dùng nhập
    $username =$_POST ["username"] ; 
    $password=md5($_POST ["password"] ) ;
    $repassword=md5($_POST ["repassword"] ) ;
    $name= $_POST ["name"] ;
    $phone = $_POST["phone"] ;  
    $gmail  = $_POST["mail"] ;
//Truy vấn 
    //Phone
    $sql = "SELECT * FROM user WHERE phone = '$phone'";   
    $kq = mysqli_query ($conn,$sql) ;
    $count = mysqli_num_rows ($kq) ;
    //Gmail
    $sql1 = "SELECT * FROM user WHERE gmail = '$gmail'";   
    $kq1 = mysqli_query ($conn,$sql) ;
    $count1 = mysqli_num_rows ($kq1) ;
    //Username
    $sql2 = "SELECT * FROM user WHERE username = '$username'";   
    $kq2 = mysqli_query ($conn,$sql2) ;
    $count2 = mysqli_num_rows ($kq2) ;
    //Check phone
    
    
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } elseif (empty($phone)){
            $phoneErr = "Phone is required";
        } elseif  (!preg_match ("/^[0-9]*$/",$phone )) {  
            $phoneErr  =  "Chỉ cho phép giá trị số." ;    
        } 
        elseif (empty($username)){
            $usernameErr = "Username is required";
        } elseif (empty($gmail)){
            $gmailERR = "Gmail is required";
            return false;
        } elseif(empty($password)){
            $passwordErr = "Password is required";
        } elseif(empty($repassword)){
            $repasswordErr = "Repassword is required";
        } elseif($password != $repassword ){
            $passErr1 = "Passwords are not the same";
        } elseif ( $count != 0 ){
            $phoneErr1 = "Số điện thoại đã tồn tại";
        } elseif ( $count1 != 0 ){
            $gmailERR1 = "Gmail đã tồn tại";
        } elseif ( $count2 != 0 ){
            $usernameErr1 = "Tên đăng nhập đã tồn tại";
        } 

        else{
            // Thêm dữ liệu vào CSDL
           
            $sql = "INSERT INTO user( fullname,phone,gmail,username,password)
            VALUES ('$name','$phone','$gmail','$username','$password')";
            $result = mysqli_query($conn, $sql);
            echo "<script type='text/javascript'>alert('Đăng kí thành công');</script>";

            }

    }
   ?>