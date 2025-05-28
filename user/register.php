<?php

include("./xulidangki.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" href="../CSS/style-login.css">
    <link rel="stylesheet" href="../CSS/openerr.css">

</head>

<body>
    <?php
        include("menu.php");
        ?>
    <nav>
        <div class="limiter">
            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                <div class="wrap-login100">
                    <form id="register" class="login100-form validate-form" method="POST"
                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                        <span class="login100-form-logo">
                            <i> <img src="../Image/logo-login.png"></i>
                        </span>
                        <span class="login100-form-title p-b-34 p-t-27">
                            Đăng kí tài khoản
                        </span>
                        <div class="wrap-input100 validate-input" data-validate="Enter Name">
                            <input class="input100" type="text" name="name" placeholder="Full Name">
                            <span class="focus-input100" data-placeholder=""></span>
                            <span style="color:red ; padding-left: 38px; font-family: Poppins-Regular;">
                                <?php
                    echo $nameErr;
            ?>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter Phone">
                            <input class="input100" type="phone" name="phone" placeholder="Phone">
                            <span class="focus-input100" data-placeholder=""></span>
                            <span style="color:red ; padding-left: 38px; font-family: Poppins-Regular;">
                                <?php
                    echo $phoneErr;
                    echo $phoneErr1;
                ?>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter Email">
                            <input class="input100" type="email" name="mail" placeholder="Gmail">
                            <span class="focus-input100" data-placeholder=""></span>
                            <span style="color:red ; padding-left: 38px; font-family: Poppins-Regular;">
                                <?php
                    echo $gmailERR;
                    echo $gmailERR1;
                ?>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter username">

                            <input class="input100" type="text" name="username" placeholder="Username">
                            <span class="focus-input100" data-placeholder=""></span>
                            <span style="color:red ; padding-left: 38px; font-family: Poppins-Regular;">
                                <?php
                    echo $usernameErr;
                    echo $usernameErr1;
                ?>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                    
                            <input class="input100" type="password" name="password" placeholder="Nhập mật khẩu" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
                            <span class="focus-input100" data-placeholder=""></span>
                            <span style="color:red ; padding-left: 38px; font-family: Poppins-Regular;">
                                <?php
                    echo $passwordErr;
                ?>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter Confirm password">
                            <input class="input100" type="password" name="repassword" placeholder="Nhập lại mật khẩu" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
                            <span class="focus-input100" data-placeholder=""></span>
                            <span style="color:red ; padding-left: 38px; font-family: Poppins-Regular;">
                                <?php
                    echo $repasswordErr;
                    echo $passErr1;
                ?>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <input class="login100-form-btn " type="submit" ; value="Đăng Kí">

                        </div>

                        <div class="text-center">
                            <a class="txt1" id="test2" href="./login.php">
                                Đăng Nhập
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- <script>
        $( "#register" ).submit(function( event ) {
  event.preventDefault();
  $.ajax({
  type: "POST",
  url: "xulidangki.php",
  data: data,
  success: success,
});
});
    </script> -->
    <?php
        include("footer.php");
        ?>
        <script src="https://www.google.com/recaptcha/enterprise.js?render=6LdQ5NUiAAAAAPe94X_WM8w9i5RQIiqaQwlMge0Y"></script>
        <script src="https://www.google.com/recaptcha/enterprise.js?render=6LeJJtYiAAAAAGMbJXETELrIpUi349NTRr158fdN"></script>

</body>

</html>