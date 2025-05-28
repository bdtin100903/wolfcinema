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
    <link rel="stylesheet" href="../CSS/lienhe.css">
    
</head>

<body>
        <?php
        include("menu.php");
        ?>
<nav>
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.6529387040937!2d108.24788271466248!3d15.979490646081487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108f83b52585%3A0xc9a7131f13798df!2zMTcyIEh14buzbmggVsSDbiBOZ2jhu4csIEhvw6AgSOG6o2ksIE5nxakgSMOgbmggU8ahbiwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1653301703525!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div id="noidung-lienhe">
        <div class="row" style="margin-left: 0; margin-right: 0;">
            <h4 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">HÃY CHO CHÚNG TÔI BIẾT </h4>
            <h4 class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> CẢM NHẬN CỦA BẠN KHI TRẢI NGHIỆM WEB</h4>

            <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3"></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="col-md-offset-2 col-lg-8 col-md-8 col-sm-8 col-xs-12" style="text-align:center;">
                    <div class="alert alert-danger" style=" display:none; background-color:#DC3D24">
                        <strong>Thông báo ! </strong><span class="notifi">Bạn vui lòng điền đầy đủ thông tin!</span>
                    </div>
                </div>
                <input type="text" id="title" placeholder="Tiêu đề"><br><br>
                <input type="email" id="emailC" placeholder="Email"><br><br>
                <input type="text" id="yourname" placeholder="Họ tên"><br><br>
                <input type="text" id="addressC" placeholder="Địa chỉ"><br><br>
                <input type="tel" id="phonenumer" placeholder="Sô điện thoại"><br><br>
                <textarea placeholder="Nội dung" id="content"></textarea>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-3 col-md-3"></div>
        </div><br>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="text-align:center;">
                <input type="submit" id="send" onclick="SubmitContact()">GỬI
            </div>
        </div>
    </div>
    <script>


    function SubmitContact() {
        $('.main-loader').css('display', 'block');
        var model = {};
        var Title = model.Title = $("#title").val();
        var Email = model.Email = $("#emailC").val();
        var Yourname = model.Name = $("#yourname").val();
        var Address = model.Address = $("#addressC").val();
        var Phonenumer = model.Phone = $("#phonenumer").val();
        var Content = model.Content = $("#content").val();
        if (Title == "" || Email == "" || Yourname == "" || Address == "" || Phonenumer == "" || Content == "") {
            $(".alert-danger").fadeTo(4000, 500).slideUp(500, function () {
                $(".alert-danger").slideUp(500);
            });
            $('.main-loader').css('display', 'none');
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: 'Contact/AddContactJson',
                dataType: "json",
                data: model,
                success: function (data) {
                    if (data == "true" || data == true) {
                        $(".alert-danger").fadeTo(2000, 500).slideUp(500, function () {
                            $(".alert-danger").slideUp(500);
                        });
                        $(".alert-danger").css("background-color","green");
                        $(".notifi").text("Chúng tôi sẽ liên hệ lại với bạn. ");
                        $('.main-loader').css('display', 'none');
                        return false;
                    } else {
                        $(".alert-danger").fadeTo(4000, 500).slideUp(500, function () {
                            $(".alert-danger").slideUp(500);
                        });
                        $(".notifi").text("Thất bại. Vui lòng thử lại");
                        $('.main-loader').css('display', 'none');
                        return false;

                        }
                },
                error: function () {
                    $(".alert-danger").fadeTo(2000, 500).slideUp(500, function () {
                        $(".alert-danger").slideUp(500);
                    });
                    $(".notifi").text("Lỗi trong quá trình thao tác. Bạn vui lòng thử lại");
                }
            });
        }
    }
    function ResetContact() {
        var FullName = $("#yourname").val('');
        var Email = $("#emailC").val('');
        var Phone = $("#phonenumer").val('');
        var Address = $("#addressC").val('');
        var Title = $("#title").val('');
        var Content = $("#content").val('');
    }

    </script>
    
</div>
<?php
        include("footer.php");
        ?>
    
</body>

</html>