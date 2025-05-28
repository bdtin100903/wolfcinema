<?php
include("./connectDB/connect.php");
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>WOLFCINEMA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
    <link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet" />
    <!-- Thêm link CSS của Flatpickr -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Thêm thư viện Flatpickr -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>  

    <style>
    /* CSS */
    .danhsachfilm {
        display: flex;
        list-style-type: none;
        padding: 0;
        color: white;
    }

    .danhsachfilm li {
        cursor: pointer;
        margin: 5px;
        border: 1px solid #ccc;
        padding: 10px;
    }

    .showthongtinfilm {
        display: none;
        padding: 10px;
        border: 10px solid #ccc;
        background-color: #f9f9f9;
    }

    /* CSS để làm đẹp cho thông tin phim */
    .movie-details {
        background-color: #f9f9f9;

    }

    /* CSS cho ngày chiếu */
    .release-date {
        color: black;
        font-weight: bold;
        margin-bottom: 10px;
    }

    /* CSS cho danh sách giờ chiếu */
    .showtimes-list {
        list-style-type: none;
        padding: 0;
    }

    /* CSS cho mỗi giờ chiếu */
    .showtime {
        background-color: #4CAF50;
        color: white;
        padding: 8px;
        margin: 5px;
        border-radius: 4px;
        display: inline-block;
    }
    </style>

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <?php
    include("./menu/menu-left.php")
    ?>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <?php include("./menu/menu-top.php") ?>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span
                                                    class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Dashboard v.1</a></li>
                                                <li><a href="index-1.html">Dashboard v.2</a></li>
                                                <li><a href="index-3.html">Dashboard v.3</a></li>
                                                <li><a href="product-list.html">Product List</a></li>
                                                <li><a href="product-edit.html">Product Edit</a></li>
                                                <li><a href="product-detail.html">Product Detail</a></li>
                                                <li><a href="product-cart.html">Product Cart</a></li>
                                                <li><a href="product-payment.html">Product Payment</a></li>
                                                <li><a href="analytics.html">Analytics</a></li>
                                                <li><a href="widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span
                                                    class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span
                                                    class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="file-manager.html">File Manager</a></li>
                                                1 <li><a href="contacts.html">Contacts Client</a></li>
                                                <li><a href="projects.html">Project</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="500.html">500 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface
                                                <span
                                                    class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span
                                                    class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span
                                                    class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span
                                                    class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views
                                                <span
                                                    class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span
                                                    class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-icon">
                                                <i class="icon nalika-home"></i>
                                            </div>
                                            <div class="breadcomb-ctn">
                                                <h2>THÊM THỜI GIAN CHIẾU PHIM</h2>
                                                <p>Welcome to WOLFCINEMA <span class="bread-ntd">Admin</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
                                            <button data-toggle="tooltip" data-placement="left" title="Download Report"
                                                class="btn"><i class="icon nalika-download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit"
                                                aria-hidden="true"></i> Thêm Thời Gian Chiếu</a></li>

                                </ul>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div id="myTabContent" class="tab-content custom-product-edit">
                                        <div class="product-tab-list tab-pane fade active in" id="description">

                                            <!-- PHP XỬ LÍ UPLOAD TIME FILM -->
                                            <?php
            include('./product-time-xl.php');
            ?>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="review-content-section"
                                                        style="display: flex;flex-direction: column;align-content: space-around;flex-wrap: nowrap;">
                                                        <?php
                        $sql = "SELECT * FROM danhsachfilm WHERE role_film = 1";
                        $kq = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_array($kq)) {
                            echo '<ul class="danhsachfilm">';
                            echo '<li onclick="showObjectDetails(' . $row["id"] . ')">' . $row["namef"] . '</li>';
                            echo '</ul>';

                            $sql_giochieu =
                            "SELECT *, DATE_FORMAT(timefilm.date, '%d/%m/%Y') AS formatted_date
                            FROM timefilm
                            INNER JOIN danhsachfilm ON timefilm.id_phim = danhsachfilm.id
                            WHERE timefilm.id_phim = " . $row["id"];
                            
                            // SELECT * FROM timefilm
                            // INNER JOIN danhsachfilm ON timefilm.id_phim = danhsachfilm.id
                            // WHERE timefilm.id_phim = " . $row["id"];

                        $kq_giochieu = mysqli_query($conn, $sql_giochieu);
                        
                        // Hiển thị thông tin ngày và giờ chiếu phim hiện tại
                        echo '<div id="' . $row["id"] . '" class="showthongtinfilm" style="display:none;">';
                        if (mysqli_num_rows($kq_giochieu) == 0) {
                            echo '<p style="color:black";> Phim này chưa có lịch chiếu </p>';
                        } else {
                            // Sử dụng một mảng để lưu trữ thông tin ngày và giờ
                            $lichchieu = array();
                        
                            // Duyệt qua các bản ghi và lưu thông tin vào mảng
                            while ($row_giochieu = mysqli_fetch_array($kq_giochieu)) {
                                $ngay = $row_giochieu["formatted_date"];
                                $gio = $row_giochieu["time"];
                        
                                // Nếu ngày chưa tồn tại trong mảng, tạo một mục mới
                                if (!isset($lichchieu[$ngay])) {
                                    $lichchieu[$ngay] = array();
                                }
                        
                                // Thêm giờ vào mục của ngày tương ứng
                                $lichchieu[$ngay][] = $gio;
                            }
                        
                            // Hiển thị thông tin ngày và giờ
                            foreach ($lichchieu as $ngay => $gio_arr) {
                                echo '<div class="movie-details">'; // Bắt đầu container cho thông tin phim
echo '<p style="color:black"; class="release-date">Ngày chiếu: ' . $ngay . '</p>';
echo '<ul class="showtimes-list">'; // Bắt đầu danh sách ul cho giờ chiếu
foreach ($gio_arr as $gio) {
    echo '<li class="showtime">' . $gio . '</li>';
}
echo '</ul>'; // Kết thúc danh sách ul cho giờ chiếu
echo '</div>'; // Kết thúc container cho thông tin phim

                            }
                        }
                        echo '</div>';
                        
                        }
                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="icon nalika-new-file"
                                                        aria-hidden="true"></i></span>

                                                <!-- Thêm ô chọn phim -->
                                                <select class="form-control" name="film_id">
                                                    <?php
        $sql_phim = "SELECT * FROM danhsachfilm WHERE role_film = 1";
        $kq_phim = mysqli_query($conn, $sql_phim);
        
        while ($row_phim = mysqli_fetch_array($kq_phim)) {
            echo '<option value="' . $row_phim["id"] . '">' . $row_phim["namef"] . '</option>';
        }
        ?>
                                                </select>
                                                <!-- Ô nhập dữ liệu ngày tháng năm -->
                                                <input name ="date" type="date" class="form-control" id="customDate" placeholder="Pick a date">

<script>
flatpickr("#customDate", {
    dateFormat: "d/m/Y",
    allowInput: true, // Cho phép nhập liệu thủ công
    clickOpens: true, // Không hiển thị lịch khi click vào input
});
</script>
                                                <!-- Ô nhập dữ liệu giờ -->
                                                <input  style="background:#152036" name ="time"type="time" class="form-control" id="customTime" placeholder="Pick a time">

<script>
flatpickr("#customTime", {
    enableTime: true, // Cho phép chọn giờ
    noCalendar: true, // Không hiển thị lịch
    dateFormat: "H:i", // Định dạng giờ
});
</script>

                                                <?php
    echo '<span style="color:red">' . $timeERR . '</span>';
    ?>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="text-center custom-pro-edt-ds">
                                                        <input type="submit" value="Xác Nhận"
                                                            class="btn btn-ctl-bt waves-effect waves-light m-r-10">
                                                    </div>
                                                </div>
                                            </div>

                                </form>



                                <script>
                                // JavaScript
                                function showObjectDetails(objectId) {
                                    var details = document.getElementById(objectId);
                                    var allDetails = document.querySelectorAll('.showthongtinfilm');

                                    // Ẩn tất cả các chi tiết
                                    allDetails.forEach(function(detail) {
                                        detail.style.display = 'none';
                                    });

                                    // Hiển thị chi tiết của đối tượng được chọn
                                    details.style.display = 'block';
                                }
                                </script>

                                <div class="footer-copyright-area">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="footer-copy-right">
                                                    <p>Copyright © 2018 <a
                                                            href="https://colorlib.com/wp/templates/">Colorlib</a> All
                                                        rights
                                                        reserved.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- jquery
		============================================ -->
                            <script src="js/vendor/jquery-1.12.4.min.js"></script>
                            <!-- bootstrap JS
		============================================ -->
                            <script src="js/bootstrap.min.js"></script>
                            <!-- wow JS
		============================================ -->
                            <script src="js/wow.min.js"></script>
                            <!-- price-slider JS
		============================================ -->
                            <script src="js/jquery-price-slider.js"></script>
                            <!-- meanmenu JS
		============================================ -->
                            <script src="js/jquery.meanmenu.js"></script>
                            <!-- owl.carousel JS
		============================================ -->
                            <script src="js/owl.carousel.min.js"></script>
                            <!-- sticky JS
		============================================ -->
                            <script src="js/jquery.sticky.js"></script>
                            <!-- scrollUp JS
		============================================ -->
                            <script src="js/jquery.scrollUp.min.js"></script>
                            <!-- mCustomScrollbar JS
		============================================ -->
                            <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
                            <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
                            <!-- metisMenu JS
		============================================ -->
                            <script src="js/metisMenu/metisMenu.min.js"></script>
                            <script src="js/metisMenu/metisMenu-active.js"></script>
                            <!-- morrisjs JS
		============================================ -->
                            <script src="js/sparkline/jquery.sparkline.min.js"></script>
                            <script src="js/sparkline/jquery.charts-sparkline.js"></script>
                            <!-- calendar JS
		============================================ -->
                            <script src="js/calendar/moment.min.js"></script>
                            <script src="js/calendar/fullcalendar.min.js"></script>
                            <script src="js/calendar/fullcalendar-active.js"></script>
                            <!-- tab JS
		============================================ -->
                            <script src="js/tab.js"></script>
                            <!-- plugins JS
		============================================ -->
                            <script src="js/plugins.js"></script>
                            <!-- main JS
		============================================ -->
                            <script src="js/main.js"></script>
</body>

</html>