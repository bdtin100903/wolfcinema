<?php
include("./connectDB/connectDB.php");


include("./login-xldk.php");
?>
<?php

?>
<html>
<link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
<script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./css/login.css">

<body>
    <div class="container mt-5 pt-5">
        <div class="card mx-auto border-0">
            <div class="card-header border-bottom-0 bg-transparent">
                <ul class="nav nav-tabs justify-content-center pt-4" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a href="./index.php"  class="nav-link text-primary " id="pills-login-tab" 
                        aria-controls="pills-login" aria-selected="true">Login</a>
                    </li>

                    <li class="nav-item">
                        <a href="./reg.php" class="nav-link active text-primary " aria-selected="true">Register</a>
                    </li>
                </ul>
            </div>

            <div class="card-body pb-4">
                <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
    <form method="post">
       
        <div class="form-group">
            <input type="text" name="reg-username" id="name" class="form-control" placeholder="Username" autofocus>
        </div>

        <div class="form-group">
            <input type="email" name="reg-email" id="email" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
            <input type="password" name="reg-password" id="password" class="form-control" placeholder="Set a password">
        </div>

        <div class="form-group">
            <input type="password" name="reg-repassword" id="repassword" class="form-control"
                placeholder="Confirm password">
            <?php echo $warnErr; ?>
        </div>

        <div class="text-center pt-2 pb-1">
            <button type="submit" class="btn btn-primary" name="">Register</button>
        </div>

    </form>
</div>
        </div>
    </div>
</body>

</html>
