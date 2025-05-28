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
    <link rel="stylesheet" href="../CSS/film.css">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js
    https://cdn.rawgit.com/JacobLett/bootstrap4-latest/master/bootstrap-4-latest.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS and dependencies (Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>

    </style>
</head>

<body>
    <?php
include("menu.php");

?>
    <div style='border-bottom: 1px solid rgba(255, 255, 255, 0.4)'></div>
    <nav style="background: #131E28">
        <div class="movie">


            <?php
          //  / $id = 1;
             if (isset($_GET["id"])) {
              $id = $_GET["id"];
            $_SESSION["id_film"] = $id;
                echo $id;
          }
         
            //SQL
            
            $sql = "SELECT * FROM danhsachfilm WHERE id = $id";
            $result = mysqli_query($conn, $sql);
                while ($output = mysqli_fetch_array($result))
            {
            echo'<div>';
            echo'   <img src="../Image/img_filmdangchieu/'.$output['img'].'" alt="" class="movie-img">';
            echo'</div>';
            echo'<div style="height: 100%; width: 10px;"></div>';
            echo'<div class="movie-content">';
            echo'<p id="header">'.$output['namef'].'</p>';
            echo'<p id="mota">'.$output['describef'].'</</p>';
             // echo'<p id="noidung">'.$output['ngaychieu'].'</</p>';
              echo'<p id="noidung">Thể Loại: '.$output['genref'].'</</p>';
              echo'<p id="noidung">Diễn Viên: '.$output['castf'].'</</p>';
              echo'<p id="thoiluong">Thời Lượng: '.$output['timef'].'phút</</p>';
              echo'<p id="thoiluong">Giá vé: '.$output['pricef'].'VNĐ</</p>';
              echo' <div class="button">';
              echo '<a href ="https://www.youtube.com/watch?v='.$output['linktrailer'].'">';
                echo'<button  id="trailer"  type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/'.$output['linktrailer'].'" data-target="#myModal">';
              echo'<img src="../Image/trailer.png" alt="" id="trailer-img">TRAILER';
              echo'</button>';
              echo '</a>';
              echo'<a href="#" id="trailer" onclick="canhbao()">';
              echo'<img src="../Image/datve.png" alt="" id="datve-img">ĐẶT VÉ';
              echo' </a>';
              echo' </div>';
            }

            ?>
        </div>

        </div>
        <form action="" method="get">
            <div class="row" style="display: flex;
    justify-content: space-between;
    flex-wrap: wrap;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="review-content-section"
                        style="display: flex;flex-direction: column;align-content: space-around;flex-wrap: nowrap;">
                        <?php
                
$sql = "SELECT *, DATE_FORMAT(timefilm.date, '%d/%m/%Y') AS formatted_date FROM timefilm WHERE id_phim = $id";
$kq = mysqli_query($conn, $sql);

// Mảng để lưu trữ các giá trị duy nhất
$uniqueDates = array();

while ($row = mysqli_fetch_array($kq)) {
    $id_timef = $row["id_timef"];

    $date = $row["formatted_date"];
    $time = $row["time"];

    // Kiểm tra xem đã xuất $date chưa
    if (!in_array($date, $uniqueDates)) {
        echo '<ul class="danhsachfilm">';
        echo '<li style="color:white;" onclick="showObjectDetails(' . $id_timef . ')">' . $date . '</li>';
        echo '</ul>';
        
        // Thêm giá trị vào mảng để đảm bảo không in ra lại
        $ngayObj = DateTime::createFromFormat('d/m/Y', $date);
        $uniqueDates[] = $date;
        $ngayDaChuyenDoi = $ngayObj->format('Y/m/d');

        // Tìm và xuất tất cả giờ chiếu cho ngày $date
        echo '<div id="' . $id_timef . '" class="showthongtinfilm" style="display:none;">';
        echo '<div class="movie-details">'; // Bắt đầu container cho thông tin phim
        
        echo '<ul class="showtimes-list">'; // Bắt đầu danh sách ul cho giờ chiếu

        // Dùng vòng foreach để xuất tất cả giá trị $time trong $date tương ứng
            $timesForDate = mysqli_query($conn, "SELECT * FROM timefilm WHERE id_phim = $id AND date = '$ngayDaChuyenDoi'");
            while ($timeRow = mysqli_fetch_array($timesForDate)) {
                echo '<a href="./booking_seat.php?id_timef='.$timeRow['id_timef'].'"><li class="showtime">' . $timeRow["time"] . '</li></a>';
            }

        echo '</ul>'; // Kết thúc danh sách ul cho giờ chiếu
        echo '</div>'; // Kết thúc container cho thông tin phim
        echo '</div>';
    }
}
?>


                             <script>
                            // Function to toggle visibility
                            function toggleObjectDetails(id) {
                                var element = document.getElementById(id);

                                if (element.style.display === "none") {
                                    element.style.display = "block";
                                } else {
                                    element.style.display = "none";
                                }
                            }
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
        </form>
        </div>

        </div>
    </nav>

    <!--Popup video -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">


                <div class="modal-body">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>


                </div>

            </div>
        </div>
    </div>



    </div>
    <?php
        include("footer.php");
    ?>
</body>
<!-- Popup trailer-->
<script>
$(document).ready(function() {

    // Gets the video src from the data-src on each button

    var $videoSrc;
    $('.video-btn').click(function() {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);



    // when the modal is opened autoplay it  
    $('#myModal').on('shown.bs.modal', function(e) {

        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");

    })



    // stop playing the youtube video when I close the modal
    $('#myModal').on('hide.bs.modal', function(e) {
        // a poor man's stop video
        $("#video").attr('src', $videoSrc);
    })






    // document ready  
});
</script>

</html>