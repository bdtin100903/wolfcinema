<?php
include("connectDB.php");
if (isset($_SESSION["fullname"]))
{
    echo '<script>alert("Lỗi vòng lặp"); window.location.href = "index.php";</script>';
}
else{
                    if ( $_SERVER ["REQUEST_METHOD"] == "POST" ) {
                      //Lấy dữ liệu do người dùng nhập                              
                        $username = $_POST ["username"] ;
                        $password = md5($_POST ["password"]) ;
                        // Kiểm tra dữ liệu
                        // Thêm dữ liệu vào CSDL

                        
                     $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'" ;   
                        $kq = mysqli_query ($conn,$sql) ;
                        $count = mysqli_num_rows ($kq) ;
                        if ( $count == 0 )
                        echo "<script type='text/javascript'>alert('Sai tên đăng nhập hoặc mật khẩu');</script>";
                        else
                        {
                            session_start () ;
                          header ("Location: /wolfcinema/user/index.php") ;
                        $rowl = mysqli_fetch_array ( $kq ) ;
                        $_SESSION ["id_user"] = $rowl ["id"];
                        $_SESSION ["fullname"] = $rowl ["fullname"] ;
                            }
                          }

                            
                        }
                ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/style-login.css">
    <link rel="stylesheet" href="../CSS/style.css">

</head>

<body>
    <?php
        include("menu.php");
        ?>
    <nav>
        <div class="limiter">
            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                <form action="" method="post">
                    <div class="wrap-login100">
                        <span class="login100-form-logo">
                            <i> <img src="../Image/logo-login.png"></i>
                        </span>
                        <span class="login100-form-title p-b-34 p-t-27">
                            ĐĂNG NHẬP
                        </span>
                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <input class="input100" type="text" name="username" placeholder="Username">
                            <span class="focus-input100" data-placeholder=""></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100" data-placeholder=""></span>
                        </div>
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me"><span
                                style="color: white; margin-left: 10px;">Lưu mật khẩu</span>
                        </div>
                        <div class="container-login100-form-btn">
                            <input class="login100-form-btn" type="submit" value="Đăng Nhập">
                        </div>
                        <div class="text-center">
                            <div id="test">
                                <a class="txt   1" href="#">
                                    Quên mật khẩu?
                                </a>
                                <a class="txt   1" id="test1" href="./register.php">
                                    Đăng Kí
                                </a>
                            </div>
                        </div>
                </form>

            </div>
        </div>
        </div>
    </nav>
    <?php
        include("footer.php");
        ?>
</body>

</html>