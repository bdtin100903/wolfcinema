<?php
include("connectDB.php");
session_start();
$name_u=$_SESSION ["fullname"];
$timef= $_SESSION['timef'];
$id_film= $_SESSION["id_film"];
$id_timef= $_SESSION["id_timef"];
$sl_seated = $_SESSION["sl-seated"];
$seated = $_SESSION["seated"];
$namef = $_SESSION['tenphm'];
$sumtotal = $_SESSION['sumtotal'];
//  $namefod = $_SESSION['namefod'];
//  $quantity = $_SESSION['quantity'];
 $doan = "$namefod:$quantity";
 if (isset($item['name']) && isset($item['quantity']) && isset($item['price'])) {
     $namefod = $item['name'];
     $quantity = $item['quantity'];
     $totalprice = $item['quantity'] * $item['price'];
 } else {
     $namefod = NULL;
     $quantity = NULL;
     $totalprice = NULL;
 }      if ( $_SERVER ["REQUEST_METHOD"] == "POST" ) {
                   //Lấy dữ liệu do người dùng nhập
               $time = time();
              
            if (isset($namefod))
            {$doan == " ";}; 
$thongtindatve = "INSERT INTO `thongtindatve`( `id_timef`,`name_cus`, `name_film`, `time_film`, `ticked`, `num_tickbooked`, `food`, `total_pay`)
VALUES (
    '$id_timef',
    '$name_u',
    '$namef',
    '$timef',
    '$seated',
    '$sl_seated',
    '$doan',
    '$sumtotal'
)";
               $selectedSeats = $_SESSION['$selectedSeats'] ;
    $result = mysqli_query($conn, $thongtindatve);
    foreach ($selectedSeats as $seat) {
        // Truy vấn INSERT
        
        $escapedValue = $conn->real_escape_string($seat);
        $sqlInsert = "INSERT INTO `booked_seats` (`id_timef`, `seat_id`) VALUES ('$id_timef', '$escapedValue')";
        $conn->query($sqlInsert);
    }
}


// Hiển thị mã JavaScript để hiển thị cửa sổ thông báo
echo '<script>';
echo 'alert("Vui lòng đợi xác nhận !!! \n Theo dõi đơn hàng trong lịch sử");';
echo 'window.location.href = "./index.php";';
echo '</script>';


?>