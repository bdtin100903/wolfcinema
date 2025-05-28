<?php
session_start();
include("./connectDB/connectDB.php");
if ( $_SERVER ["REQUEST_METHOD"] == "POST" ) {
    //Lấy dữ liệu do người dùng nhập                              
      $lg_username = $_POST ["lg-username"] ;
      $lg_password = md5($_POST ["lg-password"]) ;
      // Kiểm tra dữ liệu
      // if(empty($lg_username)){
      //  echo "";
      // }
      // Thêm dữ liệu vào CSDL
      $sql = "SELECT * FROM user WHERE username = '$lg_username' AND password = '$lg_password'" ;   
      $kq = mysqli_query ($conn,$sql) ;
      $count = mysqli_num_rows ($kq) ;
      $sql1 = "SELECT * FROM user WHERE username = '$lg_username' AND password = '$lg_password' AND role = 1" ;   
      $kq1 = mysqli_query ($conn,$sql1) ;
      $count1 = mysqli_num_rows ($kq1) ;
      if ( $lg_username == NULL){
        echo "<script type='text/javascript'>alert('Vui lòng nhập user');</script>";
    
      }
      elseif ($lg_password == NULL){  
        echo "<script type='text/javascript'>alert('Vui lòng nhập pass');</script>";
      }
      elseif ( $count == 0){
        echo "<script type='text/javascript'>alert('Sai tên đăng nhập hoặc mật khẩu');</script>";
      }
      elseif ( $count1 == 0 ){
        echo "<script type='text/javascript'>alert('Bạn không đủ quyền để truy cập trang này');</script>";
      }
      else
      {
      $rowl = mysqli_fetch_array ( $kq ) ;
      $_SESSION ["username"] = $rowl ["username"] ;
      header("Location: ./index1.php");
          }
        }
?>