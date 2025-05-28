<?php
include("./connectDB/connectDB.php");
$id_phimERR = $timeERR = $dateERR = "";
$date = $time = $id_phim ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_phim = $_POST['film_id'];
    $date = $_POST["date"];
    $time = $_POST["time"];

$ngayObj = DateTime::createFromFormat('d/m/Y', $date);
if ($ngayObj === false) {
    echo "Ngày không hợp lệ";
} else {
    // Chuyển đổi định dạng và hiển thị
    $ngayDaChuyenDoi = $ngayObj->format('Y/m/d');
    echo "Ngày đã chuyển đổi: " . $ngayDaChuyenDoi;
}

    //NO_NULL
    if ($id_phim == null || $time == null || $date == null) {
        if($id_phim == null) {
            $nameERR = 'Vui lòng chọn phim ';
        }
        elseif($time == null) {
            $timeERR = 'Vui lòng nhập giờ';
        }
        elseif($date == null) {
            $dateERR = 'Vui lòng nhập ngày';
        }
    }
    else {
        // Kiểm tra xem dữ liệu có trùng lặp hay không
        $check_duplicate_query = "SELECT * FROM timefilm WHERE id_phim='$id_phim' AND date='$ngayDaChuyenDoi' AND time='$time'";
        $check_duplicate_result = mysqli_query($conn, $check_duplicate_query);

        if (mysqli_num_rows($check_duplicate_result) > 0) {
            echo '<script>alert("Dữ liệu đã tồn tại. Vui lòng chọn ngày và giờ khác.")</script>';
        } else {
            // Nếu không có dữ liệu trùng lặp, thực hiện thêm vào cơ sở dữ liệu
            $insert_query = "INSERT INTO timefilm (id_phim, date, time) VALUES ('$id_phim', '$ngayDaChuyenDoi', '$time')";
            $insert_result = mysqli_query($conn, $insert_query);

            if ($insert_result) {
                echo '<script>alert("Thêm thành công")</script>';
            } else {
                echo '<script>alert("Lỗi khi thêm dữ liệu. Vui lòng thử lại.")</script>';
            }
        }
    }
}

?>
