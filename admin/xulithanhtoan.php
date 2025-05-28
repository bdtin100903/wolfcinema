<?php
include("./connectDB/connectDB.php");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


if (isset($_POST['buttonA']) || isset($_POST['buttonB'])) {
    $idToUpdate = mysqli_real_escape_string($conn, $_POST['buttonA'] ?? $_POST['buttonB'] ?? '');

    if (!empty($idToUpdate)) {
        if (isset($_POST['buttonA'])) {
            $sqlA = "UPDATE thongtindatve SET status = '1' WHERE id = '$idToUpdate'";
            if (mysqli_query($conn, $sqlA)) {
                echo "Dữ liệu bảng A đã được cập nhật thành công.";
            } else {
                echo "Lỗi khi cập nhật dữ liệu bảng A: " . mysqli_error($conn);
            }
        }
        // ... Add similar logic for buttonB if needed
    }
}
?>