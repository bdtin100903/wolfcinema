<?php
include("./connectDB/connectDB.php");

include("./login-xldn.php");

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
          <a class="nav-link active text-primary" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login"
             aria-selected="true">Login</a>
        </li>

        <li class="nav-item">
          <a href="./reg.php" class="nav-link text-primary" 
             aria-selected="true">Register</a>
        </li>
      </ul>
    </div>

    <div class="card-body pb-4">
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
          <form action="" method="post">
            <div class="form-group">
              <input type="text" name="lg-username" class="form-control" id="user" placeholder="Username"  autofocus>
            </div>

            <div class="form-group">
              <input type="password" name="lg-password" class="form-control" id="password" id="password" placeholder="Password" >
            </div>

            <div class="custom-control custom-checkbox">
              <input class="custom-control-input" id="customCheck1" checked="" type="checkbox">
              <label class="custom-control-label" for="customCheck1">Check me out</label>
            </div>

            <div class="text-center pt-4">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>

            <div class="text-center pt-3">
              <a class="btn btn-link text-primary" href="#">Forgot Your Password?</a>
            </div>
            <?php
         
            ?>
          </form>
        </div>


      </div>
    </div>
  </div>
</div>
</body>
</html>