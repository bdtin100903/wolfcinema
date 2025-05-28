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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="./login.js"></script>
    <link rel="stylesheet" href="../CSS/thanhvien.css">
</head>

<body>
        <?php
        include("menu.php");
        ?>

<nav>
    <div class="container">
        <div id="header">
            <p style="font-size: 40px;">CHÍNH SÁCH CỦA THÀNH VIÊN</p>
        </div>
        <div id="content">
            <p style="font-size: 20px;">Chương trình thành viên thân thiết WOLF CINEMAS là chương trình ưu đãi dựa trên điểm tích lũy của các thành viên của rạp.</p>
            <ul>
            <li> - Thành viên tích lũy điểm dựa trên giá trị chi tiêu tại các cụm rạp WOLF CINEMAS (tại cụm rạp & trực tuyến) trên toàn quốc</li>
            <li>- Thành viên mua bất kỳ những sản phẩm đang được bán tại các cụm rạp WOLF CINEMAS trên toàn quốc hoặc thanh toán trực tuyến, thành viên sẽ được tích lũy vào thẻ thành viên tương ứng:</li>
            <div>
            <li style="text-align: center;">
                <img src="../Image/thanhvien.png" style="height: 125px;">
            </li>
            </div>
            <li>- 1 điểm = 1.000đ, có giá trị như tiền mặt, được dùng để mua vé xem phim, thức uống hoặc các sản phẩm tương ứng tại tất cả các Quầy.</li>
            <li>- Ví dụ: Với giao dịch mua vé giá 100.000 VND bạn có thể:</li>
            <ul>
            <li > + Thanh toán 80.000 VND + 20 điểm thưởng</li>
            <li> + Thanh toán với 0 VND + 100 điểm thưởng</li>
            </ul>
            </ul>
            <br>
            <p> * Lưu ý : </p>
            <ul>
            <li> - Quy định đổi thưởng chỉ áp dụng cho giao dịch tại quầy, không áp dụng khi thanh toán Online. </li>
            <li> - Khi sử dụng từ 300 điểm trở lên, vui lòng xuất trình CMND hoặc giấy tờ tùy thân của bạn để xác nhận chính chủ sở hữu tài khoản. </li>
            <li>  - Điểm tích lũy là điểm dùng để xét cấp bậc hạng thẻ. Điểm thưởng là điểm dùng để đổi các phần quà tương ứng với số điểm. </li>
            <li>  - Điểm thưởng tối thiểu được sử dụng cho mỗi giao dịch là 20 điểm trở lên. </li>
            <li>  - Điểm thành viên bao gồm điểm tích lũy và điểm thưởng chỉ có giá trị sử dụng trong năm. Toàn bộ điểm sẽ được reset về 0 vào 23h59’ ngày 31/12 hàng năm. </li>
            </ul>
            <br>
            <p>* Cách làm tròn điểm thưởng: </p>
            <ul>
            <li>  - Làm tròn đến số thập phân thứ nhất. </li>
            <li>  - Từ 0.11 đến 0.14: làm tròn xuống (Ví dụ: 3.113 điểm sẽ được tích vào tài khoản 3.1 điểm) </li>
            <li> - Từ 0.15 đến 0.19: làm tròn lên (Ví dụ: 3.15 điểm sẽ được tích vào tài khoản 3.2 điểm) </li>
            <li> - Bạn có thể dễ dàng kiểm tra điểm của mình trên Website WOLF Cinemas. </li>
            <p> *Lưu ý : Đối với những giao dịch trực tuyến, thành viên phải đăng nhập vào tài khoản mới được quyền tích điểm hợp lệ.</p>
            </ul>
        </div>
        <div id="header">
            <br>
            <br>
            <p style="font-size: 30px;">CÁCH ĐĂNG KÝ ĐỂ TRỞ THÀNH KHÁCH HÀNG THÀNH VIÊN CỦA WOLFCINEMA</p>
        </div>
        <br>
        <div id="content">
            <p> Cách 1 :  Đăng ký trực tiếp tại Quầy TICKET </p>
            <ul>
            <li>- Thông tin đăng ký bắt buộc: Họ và tên, Số điện thoại, Số CMND, Ngày sinh </li>
            <li>- 1 SĐT/CMND chỉ đăng ký được duy nhất 1 tài khoản/1 thẻ thành viên với 1 mã số duy nhất</li>
            <li>- Tài khoản được quyền sử dụng ngay</li>
            <li>- Trong trường hợp mất thẻ thành viên cần mang CMND đến quầy để làm lại thẻ</li>
            </ul>
            <br>
            <p>Cách 2: TRUY CẬP ………………………… và điền đầy đủ các thông tin theo hướng dẫn.</p>
        </div>
    </div>
</nav>


<?php
        include("footer.php");
        ?>
</body>

</html>