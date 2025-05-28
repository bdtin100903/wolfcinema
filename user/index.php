<?php
include("connectDB.php");
//connect DB
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type='text/css'>
    
    </style>
    <div class='siben'></div>
    <script>
    //<![CDATA[
    $(window).on('load', function() {
        $('.siben').fadeOut(0);
    })
    //]]>
    </script>
    </style>
</head>

<body>
    <?php
        include("menu.php");
        ?>

    <nav style="background-color: #131E28; width: 100%;">
        <div class="banner">
            <div class="mySlides fade">
                <img src="../Image/banner/banner1.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="../Image/banner/banner2.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="../Image/banner/banner3.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src=../Image/banner/banner4.jpg style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="../Image/banner/banner5.jpg" style="width:100%">
            </div>
            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 1900); // Change image every 1.9 seconds
            }
            </script>
        </div>

        <div class="movie-list-container">
            <h1 class="movie-list-title">PHIM ĐANG CHIẾU</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">

                    <?php
                        //truy vấn
                    
                        $sql = "SELECT * FROM danhsachfilm where role_film = 1";
                        $result = mysqli_query($conn, $sql);
                            while ($output = mysqli_fetch_array($result))
                        {   
                            echo '<div class="movie-list-item">';
                           
                        echo '<a href="./filmdangchieu.php?id='.$output['id'].'"><img  src="../Image/img_filmdangchieu/'.$output['img'].'" class="movie-list-item-img"></a>';                     
                        echo '<p class="movie-list-item-desc">'. $output['namef'].'</p>';
                        echo '<button class="movie-list-item-button">Đặt vé</button>';
                        echo '</img>';
                    echo '</div>';
                            
                        }
                        ?>

                </div>
            </div>

        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">PHIM SẮP RA MẮT</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                <?php
                        //truy vấn
                        $sql = "SELECT * FROM danhsachfilm where role_film = 2";
                        $result = mysqli_query($conn, $sql);
                            while ($output = mysqli_fetch_array($result))
                        {   
                            echo '<div class="movie-list-item">';
                           
                        echo '<a href="./filmsapchieu.php?id='.$output['id'].'"><img  src="../Image/img_filmsapchieu/'.$output['img'].'" class="movie-list-item-img"></a>';                     
                        echo '<p class="movie-list-item-desc">'. $output['namef'].'</p>';
                        echo '<button class="movie-list-item-button">Đặt vé</button>';
                        echo '</img>';
                    echo '</div>';
                            
                        }
                        ?>
                </div>
            </div>
        </div>
        <!-- <div class="promotion-list-container">
            <h1 class="promotion-list-title">ƯU ĐÃI</h1>
            <div class="promotion-list-wrapper">
                <div class="promotion-list-wrapper-top">
                    <div class="promotion-list">
                        <?php
                        // $sql = "SELECT * FROM khuyenmai";
                        // $result = mysqli_query($conn, $sql);
                        //     while ($output = mysqli_fetch_array($result))
                        // {  
                        // echo '<div class="promotion-list-item">';
                        // echo '<img class="promotion-list-item-img" src="../Image/img_uudai/'.$output['img'].'">';
                        // echo '<p class="promotion-list-item-desc">'.$output['name'].'</p>';
                        // echo '</img>';
                        // echo '</div>';
                        // }
                        ?>
                    </div>
                </div>
            </div>
        </div> -->
    </nav>
    <?php
        include("footer.php");

        ?>
    <button id="back2Top" title="Back to top" style="display: inline;" onclick="scrollToTop()">➤</button>
    <script>
    function scrollToTop() {
        $('html, body').animate({
            scrollTop: 0
        }, 'low');
    }
    </script>
</body>

</html>