<?php
include("./connectDB/connectDB.php");
$usernameErr = $passwordErr = $repasswordErr = $warnErr = " ";
$username = $password = $gmail = $repassword = $warn=  " ";
if ( $_SERVER ["REQUEST_METHOD"] == "POST" ) {
    //Lấy dữ liệu do người dùng nhập
    $reg_username =$_POST ["reg-username"] ; 
    $reg_mail = $_POST["reg-email"];
    $reg_password=md5($_POST ["reg-password"] ) ;
    $reg_repassword=md5($_POST ["reg-repassword"] ) ;

    //Check pass same
    if ($reg_password != $reg_repassword){
        $warnErr = "Mật khẩu không giống nhau";
    }
//Truy vấn 
$sql = "INSERT INTO user(username,password,gmail,role)
            VALUES ('$reg_username', '$reg_password','$reg_mail', 0)";
            $result = mysqli_query($conn, $sql);
            echo "<script type='text/javascript'>alert('Đăng kí thành công');</script>";
            }
    //Phone

            

return false;
   ?>