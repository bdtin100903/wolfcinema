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

          }
         
            //SQL
            
            $sql = "SELECT * FROM danhsachfilm WHERE id = $id";
            $result = mysqli_query($conn, $sql);
                while ($output = mysqli_fetch_array($result))
            {
            echo'<div>';
            echo'   <img src="../Image/img_filmsapchieu/'.$output['img'].'" alt="" class="movie-img">';
            echo'</div>';
            echo'<div style="height: 100%; width: 10px;"></div>';
            echo'<div class="movie-content">';
            echo'<p id="header">'.$output['namef'].'</p>';
            echo'<p id="mota">'.$output['describef'].'</</p>';
             // echo'<p id="noidung">'.$output['ngaychieu'].'</</p>';
              echo'<p id="noidung">Thể Loại: '.$output['genref'].'</</p>';
              echo'<p id="noidung">Diễn Viên: '.$output['castf'].'</</p>';
              echo'<p id="thoiluong">Thời Lượng: '.$output['timef'].'phút</</p>';
              echo' <div class="button">';
                echo'<button  id="trailer"  type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/'.$output['linktrailer'].'" data-target="#myModal">';
              echo'<img src="../Image/trailer.png" alt="" id="trailer-img">TRAILER';
              echo'</button>';
              echo'<a href="#" id="trailer" onclick="canhbao()">';
              echo'<img src="../Image/datve.png" alt="" id="datve-img">ĐẶT VÉ';
              echo' </a>';
              echo' </div>';
            }
            ?>
        </div>

    </nav>
</body>
<?php
        include("footer.php");
        ?>
</html>