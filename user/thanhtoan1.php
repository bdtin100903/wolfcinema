<?php

//xu ly luu thuc an
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cart'])) {
  $cart = $_POST['cart'];
  $_SESSION['cart'] = $cart;



if (isset($_SESSION['cart'])) {
  $cart = json_decode($_SESSION['cart'], true);

  // Hiển thị thông tin giỏ hàng
include('menu.php');
if(!isset($_SESSION["fullname"])){
    echo "<script>alert('Vui lòng đăng nhập');</script>";
    echo "<script>window.location.href = './login.php';</script>";
 }
 else if(!isset($_SESSION["id_film"])){
    echo "<script>alert('Vui lòng đặt vé');</script>";
    echo "<script>window.location.href = './index.php';</script>";
 }
  foreach ($cart as $item) {
//       echo '<p>' . $item['name'] . ' - Quantity: ' . $item['quantity'] . ' - Price: ' . $item['price'] . '$</p>';
// $item['id'];
      $id_food = $item['id'];
      $totalprice = $item['quantity'] * $item['price'];
  }
} else {
  echo '<p>Your cart is empty.</  p>';
}
}

//////////

date_default_timezone_set("Asia/Ho_Chi_Minh");

include("connectDB.php");
$name_u=$_SESSION ["fullname"];
$id_film= $_SESSION["id_film"];
$id_timef= $_SESSION["id_timef"];
$sl_seated = $_SESSION["sl-seated"];
$seated = $_SESSION["seated"];
if (isset($item['name']) && isset($item['quantity']) && isset($totalprice)) {
  $namefod = $item['name'];
 
  $quantity = $item['quantity'];
  $_SESSION['namefod'] = $namefod;
  $_SESSION['quantity'] = $quantity;
  // $quantity = $_SESSION["quantity"];
  $totalprice = $item['quantity'] * $item['price'];
} else {
  $namefod = NULL;
  $quantity = NULL;
  $totalprice = NULL;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS./thanhtoan.css">

    <title>Document</title>
</head>

<body>
    <div>
        <form method="POST" action="xulithanhtoan.php">
            <div class='container-form'>
                <div class='window'>
                    <div class='order-info'>
                        <div class='order-info-content'>
                            <h2> Tổng Đơn Hàng</h2>
                            <div class='line'></div>
                            <table class='order-table'>
                                <tbody>

                                    <?php
            echo "<tr>";
               
         $sql_film = "SELECT * FROM danhsachfilm where id = $id_film";
         
         $result_film1 = mysqli_query($conn , $sql_film);
             while ($sql_film = mysqli_fetch_array($result_film1))
         {
          $namef = $sql_film['namef'];
          $_SESSION['tenphm'] = $namef;

          $pricef = $sql_film['pricef'];
          echo '<td><img src="../Image/img_filmdangchieu/'.$sql_film['img'].'"  class="full-width"></img></td>';
          echo '<td>';
          echo '<br> <span class="thin">'.$sql_film['namef'].'</span>';
          $sql_timef = "SELECT * FROM timefilm where id_timef = $id_timef";
          $result_timef = mysqli_query($conn , $sql_timef);
          while ($sql_timefilm = mysqli_fetch_array($result_timef))
         {
          $timef = $sql_timefilm['time'];
          $_SESSION['timef'] = $timef;
          echo '<br> Suất chiếu : <span class="thin small">'.$sql_timefilm['time'].'</span>';
         }
         echo '<br> Số lượng ghế đặt : <span class="thin small">'.$sl_seated.'</span>';
         echo '<br> Vị trí  : <span class="thin small">'.$seated.'<br></span>';
          echo '</td>';
          echo '</tr>';
         
         echo '<tr>';
         echo '  <td>';
         $totalticket = $pricef * $sl_seated;
         echo '    <div class="price">'.$totalticket.'VNĐ </div>';
         echo '  </td>';
         echo '</tr>';

        }
            ?>
                                </tbody>

                                <table class='order-table'>
                                    <tbody>

                                        <?php
            echo "<tr>";
            foreach ($cart as $item) {
                //       echo '<p>' . $item['name'] . ' - Quantity: ' . $item['quantity'] . ' - Price: ' . $item['price'] . '$</p>';
                // $item['id'];
                if (isset($id_food)) {
                    echo '<tr>';
                    // Hiển thị hình ảnh thức ăn
                    echo '<td><img src="../Image./img_thucan./bap.jpg"  class="full-width"></img></td>';
                    
                    // Hiển thị thông tin thức ăn
                    echo '<td>';
                    echo '<span class="thin">'.$item['name'].'</span>';
                    echo '<br> Số lượng <span class="thin small">'.$item['quantity'].'</span>';
          
                    echo '<br> <span  class="price">'.$totalticket.'VNĐ </span>';
                    echo '</td>';
                    
                    // Đóng thẻ </tr> của dòng hiện tại
                    echo '</tr>';
                    
                    // Mở một dòng mới để hiển thị thông tin khác nếu cần
                    echo '<tr>';
                    echo '<td></td>'; // Cột trống ở cột đầu tiên
                    
                    // Hiển thị thông tin khác nếu cần
                    echo '<td>';
                    // ...
                    echo '</td>';
                    
                    echo '</tr>';
                }
                
        }
            ?>
                                    </tbody>
                                </table>
                                <div class='line'></div>
                                <div class='total'>
                                    <?php
        if(isset($totalprice)){
         $VAT = ($totalticket + $totalprice)* 0.1;
         $sumtotal = $totalticket + $totalprice + $VAT;
          echo '<span style="float:left;">
          <div class="thin dense">VAT 10%</div>
          <div class="thin dense">Tiền thanh toán</div>
      </span>
      <span style="float:right; text-align:right;">
          <div class="thin dense">'.$VAT.'</div>
          <div class="thin dense">'.$sumtotal.'</div>
        
      </span>';
        }
        else{
          $VAT = $totalticket * 0.1;
          $sumtotal = $totalticket    + $VAT;
           echo '<span style="float:left;">
           <div class="thin dense">VAT 10%</div>
           <div class="thin dense">Tiền thanh toán</div>
       </span>
       <span style="float:right; text-align:right;">
           <div class="thin dense">'.$VAT.'</div>
           <div class="thin dense">'.$sumtotal.'</div>
         
       </span>
       <br><br><br>
       <p> VUI LÒNG QUÉT MÃ QR THANH TOÁN </p>';
       
        }
          ?>
                                </div>
                        </div>
                        <!-- ---------------------------------- -->
                    </div>


                    <!-- --------------Xử lí lưu thông tin khách hàng------------ -->
                    <div class="qrcode">
                        <?php
 $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://bio.ziller.vn/api/qr/add",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 2,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer 13821b34cd70a13d9360616906c57212",
            "Content-Type: application/json",
        ),
        CURLOPT_POSTFIELDS => json_encode(array (
      'type' => 'text',
      'data' => '2|99|0387740709|BUI DUY TIN||0|0|'.$sumtotal.'|Tien ve cinema ID: '.$name_u.' |transfer_myqr',
      'background' => 'rgb(255,255,255)',
      'foreground' => 'rgb(0,0,0)',
      'logo' => 'https://img.ziller.vn/ib/P1JAsl9e9d.png',
    )),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);

$huy = json_decode($response);


?>
                        <img style="height: 301px" src="<?=$huy->link;?>" alt="">
                        <input type="submit" name="submit" value="Đã thanh toán">
                        <?php


// echo '<input type="submit" name="submit" value="Đã thanh toán" onclick="redirectToHome()">';

// // JavaScript function để chuyển hướng đến trang chủ và hiển thị cảnh báo
// echo '<script>
//         function redirectToHome() {
//             alert("Vui lòng đợi xác nhận !!! \n Theo dõi đơn hàng trong lịch sử");
//             window.location.href = "./index.php";
//         }
//       </script>';
$_SESSION['sumtotal'] = $sumtotal;

// ?>
                        <script>
                        function redirectToHome() {
                            alert("Vui lòng đợi xác nhận !!! \n Theo dõi đơn hàng trong lịch sử");
                            window.location.href = "./index.php";
                        }
                        </script>


                    </div>
                </div>

        </form>
    </div>
    <?php
        include("footer.php");
        ?>

</html>