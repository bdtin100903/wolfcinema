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
    <script src="./login.js"></script>
    <link rel="stylesheet" href="../CSS/binhluan.css">
</head>

<body>
        <?php
        include("menu.php");
        ?>

<nav>
<div class="tintuc"> 
        <div>
            <p id="tintuc-tieude" >BÌNH LUẬN</p>
        </div>
        <div class="tintuc-content" style="
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: flex-start;
">
            <?php
            $sql = "SELECT * FROM comment";
            $result = mysqli_query($conn, $sql);
                while ($output = mysqli_fetch_array($result))
            {   
            echo '<div id="tintuc1">';
            echo '<a href="#">';
            echo'   <img src="../Image/binhluan/'.$output['img'].'" alt="" class="movie-img">';
            echo '</a>';
            echo '<p class="tintuc1-content" >';
            echo '<a href="#" class="tintuc1-tieude">'.$output['name'].'</a>';
            echo '<br>';
            echo '<a href="#" class="tintuc1-noidung">'.$output['comment'].'</a>';     
            echo '</p>';   
            echo '</div>';
            }
            ?>
            
        </div>
    </div>
</nav>
<?php
        include("footer.php");
        ?>
</body>

</html>