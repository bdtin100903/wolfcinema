<html>
<!-- favicon
		============================================ -->
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<!-- Google Fonts
		============================================ -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
<!-- Bootstrap CSS
		============================================ -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Bootstrap CSS
		============================================ -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- nalika Icon CSS
		============================================ -->
<link rel="stylesheet" href="css/nalika-icon.css">
<!-- owl.carousel CSS
		============================================ -->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.transitions.css">
<!-- animate CSS
		============================================ -->
<link rel="stylesheet" href="css/animate.css">
<!-- normalize CSS
		============================================ -->
<link rel="stylesheet" href="css/normalize.css">
<!-- meanmenu icon CSS
		============================================ -->
<link rel="stylesheet" href="css/meanmenu.min.css">
<!-- main CSS
		============================================ -->
<link rel="stylesheet" href="css/main.css">
<!-- morrisjs CSS
		============================================ -->
<link rel="stylesheet" href="css/morrisjs/morris.css">
<!-- mCustomScrollbar CSS
		============================================ -->
<link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
<!-- metisMenu CSS
		============================================ -->
<link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
<link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
<!-- calendar CSS
		============================================ -->
<link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
<link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
<!-- style CSS
		============================================ -->
<link rel="stylesheet" href="style.css">
<!-- responsive CSS
		============================================ -->
<link rel="stylesheet" href="css/responsive.css">
<!-- modernizr JS
		============================================ -->
<script src="js/vendor/modernizr-2.8.3.min.js"></script>

<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index1.php"><img style="width:144px;height:58px" class="main-logo" src="img/logo/logo.png" alt="" /></a>
            <strong><img src="img/logo/logosn.png" alt="" /></strong>
        </div>
        <div class="nalika-profile">
            <div class="profile-dtl">
                <a href="#"><img src="img/notification/4.jpg" alt="" /></a>
                <h2><?php
            
                  $user = $_SESSION["username"];
                  echo $user;
                

                  ?>
                </h2>
            </div>
            <div class="profile-social-dtl">
                <ul class="dtl-social">
                    <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
                    <li><a href="#"><i class="icon nalika-twitter"></i></a></li>
                    <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">

                        <a class="has-arrow">
                            <i class="fa fa-home"></i>
                            <span class="mini-click-non">Quản Lí</span>
                        </a>
                    </li>
                    <li class="active">

                        <a class="has-arrow">
                            <i class="fa fa-film"></i>
                            <span class="mini-click-non">Phim</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Product List" href="product-list.php"><span class="mini-sub-pro">Quản Lí Các
                                        Bộ phim</span></a></li>
                            <li><a title="Thêm Phim" href="product-add_dangchieu.php"><span class="mini-sub-pro">Thêm
                                        Phim Đang Chiếu</span></a></li>
                            <li><a title="Thêm Phim" href="product-add_sapchieu.php"><span class="mini-sub-pro">Thêm
                                        Phim Sắp Chiếu</span></a></li>
                            <li><a title="Time film" href="product-time.php"><span class="mini-sub-pro">Thêm 
                                        Thời Gian Chiếu</span></a></li>
                                        <li><a title="Product Detail" href="add_uudai.php"><span class="mini-sub-pro">Thêm Ưu Đãi</span></a></li>

                            <li><a title="Product Detail" href="add-tintuc.php"><span class="mini-sub-pro">Thêm Tin Tức</span></a></li>
                            <li><a title="Product Detail" href="add-binhluan.php"><span class="mini-sub-pro">Thêm Bình Luận</span></a></li>
                                <!-- <li><a title="Product Detail" href="product-detail.php"><span class="mini-sub-pro">Tạm Sử
                                            Dụng</span></a></li>
                                <li><a title="Product Cart" href="product-cart.php"><span class="mini-sub-pro">BÁN
                                            VÉ</span></a></li>
                                <li><a title="Product Payment" href="product-payment.php"><span class="mini-sub-pro">Quản Lí
                                            Thanh Toán</span></a></li> -->
                                                      
                        </ul>
                    </li>
                    <li class="active">

                        <a class="has-arrow">
                            <i class="fa fa-user"></i>
                            <span class="mini-click-non">Người dùng</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Product List" href="./user-list.php"><span class="mini-sub-pro">Người Dùng
                                        Hiện Tại</span></a></li>
                            <li><a title="Product List" href="./thongtindatve.php"><span class="mini-sub-pro">Thông tin đặt vé</span></a></li>
                        </ul>
                    </li>
                </ul>

            </nav>
        </div>
    </nav>
</div>

</html>