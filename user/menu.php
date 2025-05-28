<!doctype html>
<?php
session_start () ;
include("connectDB.php");
//connect DB
?>


<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./menu-top/fonts/icomoon/style.css">

    <link rel="stylesheet" href="./menu-top/css/owl.carousel.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./menu-top/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="./menu-top/css/style.css">

    <title>Website Menu #7</title>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div style="height: 73px;
    background: #131E28;">
        <div class="site-navbar-wrap">


            <div class="site-navbar site-navbar-target js-sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-2">
                        
                        <a href="index.php"><img src="../Image./thongtindatve-bg.png" alt="" style="    width: 148px;
    height: 71px;
;"></a>
                        </div>
                        <div class="col-10">
                            <nav class="site-navigation text-right" role="navigation">
                                <div class="container"
                                style ="">
                                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                            class="site-menu-toggle js-menu-toggle text-white"><span
                                                class="icon-menu h3"></span></a></div>

                                    <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">

                                        <li><a href="./index.php" class="nav-link">Home</a></li>
                                        <li><a href="./tintuc.php" class="nav-link">Tin tức</a></li>
                                        <li><a href=".#.php" class="nav-link">Bình Luận</a></li>
                                        <li><a href="./thanhvien.php" class="nav-link">Thành Viên</a></li>
                                        <li><a href=".#" class="nav-link">Giá Vé</a></li>
                                        <li><a href="./lienhe.php" class="nav-link">Liên Hệ</a></li>
                                        <li class="has-children" style="
    padding: 20px 10px;
    color: rgba(255, 255, 255, 0.6);
    font-size: 15px;
    text-decoration: none !important;
">

                                            <?php 

                                                if (isset($_SESSION ["fullname"]))
                                                {
                                                    echo '<a href="#" class="p-2 pl-0"><span class="icon-user-circle">'.$_SESSION [ "fullname" ].'</span></a>';
                                                   
                                                    echo '<ul class="dropdown arrow-top">';
                                                echo '<li><a href="thongtindatve.php" class="nav-link">Lịch sử vé</a></li>';
                                                echo '<li><a href="logout.php" class="nav-link">Đăng xuất</a></li>';

                                                }
                                                else {
                                                    echo '<a href="#" class="p-2 pl-0"><span class="icon-user-circle"></span></a>';
                                                echo '<ul class="dropdown arrow-top">';
                                                echo '<li><a href="login.php" class="nav-link">Đăng nhập</a></li>';
                                                echo '<li><a href="register.php">Đăng ký</a></li>';
                                                echo '<li><a href="#" class="nav-link">FAQ</a></li>';
                                                }
                                ?>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script src="./menu-top/js/jquery-3.3.1.min.js"></script>
    <script src="./menu-top/js/popper.min.js"></script>
    <script src="./menu-top/js/bootstrap.min.js"></script>
    <script src="./menu-top/js/jquery.sticky.js"></script>
    <script src="./menu-top/js/main.js"></script>
</body>

</html>