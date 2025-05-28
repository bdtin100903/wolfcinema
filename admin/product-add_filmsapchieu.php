<?php
include("./connectDB/connectDB.php");
$nameERR = $describeERR = $genreERR = $caseERR = $timeERR = $priceERR = "";
$name = $describe = $genre = $case = $time = $price ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $describe = $_POST["describe"];
    $genre = $_POST["genre"];
    $case = $_POST["case"];
    $time = $_POST["time"];
    $trailer = $_POST["trailer"];
    $price = $_POST['price'];
    $img = $_FILES['img']['name'];

    //CHECK CONNECT
    /*if(empty($conn)){
        echo"ERROO";
    }
    else echo"SUCCESS";*/
    //Up ảnh film đang chiếu 
    $target_dir = "../Image/img_filmsapchieu/";
    $target_file = $target_dir . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
    //INPUT DATA

    //input time
    
    //NO_NULL
    if ($name == null || $describe == null || $genre == null || $case == null || $time == null || $price == NULL ) {
        if($name == null) {
            $nameERR = 'Bạn chưa nhập tên ';
        }
        if($describe == null) {
            $describeERR = 'Bạn chưa nhập mô tả';
        }
        if($genre == null) {
            $genreERR = 'Bạn chưa thể loại';
        }
        if($case == null) {
            $caseERR = 'Bạn chưa nhập diễn viên';
        }
        if($time == null) {
            $timeERR = 'Bạn chưa nhập thời lượng';
        }
        if($price == null) {
            $timeERR = 'Bạn chưa nhập Giá vé';
        }
    } else {
        $sql = "INSERT INTO danhsachfilm (img, namef, describef,genref,castf,timef,pricef, linktrailer, role_film) 
        VALUES ('$img', '$name', '$describe', '$genre', '$case', '$time', '$price' ,'$trailer',2)";
        $result = mysqli_query($conn, $sql);
        $name = $describe = $genre = $case = $time = $price= "";
        echo '<script>alert("Thêm thành công")</script>';
    }


}
?>