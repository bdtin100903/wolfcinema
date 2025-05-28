<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./CSS/style.css">


<style>
.container .th {

    padding: 10px;
}

.container tr {

    padding: 10px;
}

.container td {
    border: solid;
}

th {
    border: solid;
}

img {
    background-color: #131E28;
    max-width: 100%;
    height: auto;
    display: block;

}
</style>

<head>
    <?php
include('./menu.php');
?>
</head>
    <?php
echo '<body style="background-image: url(\'../Image/thongtindatve-bg.png\');
            background-color:#131E28;
            background-position: center;
            background-repeat: no-repeat;
            padding-top:20px">';

 date_default_timezone_set("Asia/Ho_Chi_Minh");
 $timep = date('H:i:s d-m-Y');
//  echo $timep;
    $iduser = $_SESSION["fullname"];
    $sql = "SELECT * FROM  thongtindatve where name_cus =  '$iduser'";
    $result = mysqli_query($conn, $sql);
    if (!empty($iduser)) {
        echo '<table style="color: white; margin-top: 20px;" class="container">;
              <tbody style=" text-align:center;     font-weight: bold;
              line-height: 1.5; font-family: Courier New
              Courier
              ">
                <tr>
                    <th>Tên Khách Hàng</th>
                    <th>Phim</th>
                    <th>Thời Gian</th>
                    <th>Ghế Đã Đặt</th>
                    <th>Đồ ăn</th>
                    <th>Tổng Tiền</th>
                    <th>Thời Gian Đặt</th>
                    <th>Trạng thái</th>';
    
        while ($output = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td><p>' . $output['name_cus'] . '</p></td>';
            echo '<td><p>' . $output['name_film'] . '</p></td>';
            echo '<td><p>' . $output['time_film'] . '</p></td>';
            echo '<td><p>' . $output['ticked'] . '</p></td>';
            echo '<td><p>' . $output['food'] . '</p></td>';
            echo '<td><p>' . $output['total_pay'] . '</p></td>';
            echo '<td><p>' . $output['time_booked'] . '</p></td>';
            
    
            if ($output['status'] === '0') {
                echo '<td style = "background-color: #808080;"><p>';
                echo 'Đợi xác nhận';
                echo '</p></td>';
            } elseif ($output['status'] === '1') {
                echo '<td style = "background-color: green;"><p>';
                echo 'Đã thanh toán';
                echo '</p></td>';
               
            } elseif ($output['status'] === '2') {
                echo '<td style = "background-color: red;"><p>';
                echo 'Chưa thanh toán';
                echo '</p></td>';
              
            }
    
           
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</body>';
    } else {
        echo '<body>';
        echo '<img src="../Image/thongtindatve.png" alt="">';
        echo '</body>';
    }
    ?>

    </html>
    