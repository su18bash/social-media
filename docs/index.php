<?php include "dbconnect.php"; ?>
<?php
if(isset($_SESSION['admin_username']))
{
  header("Location:adminviewbill.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Social Media Application </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background: url(pngtree-blue-background-hd-images-browse-stock-photos-vectors-picture-image_2443074.jpg);background-repeat: no-repeat;background-size: cover;" class="hold-transition login-page">
  <div class="row">
    <div class="col-sm-12"> <h2 style="text-align: center;"> 
    <img src="softlogicsys_logo-removebg-preview.png" width="100px" height="100px">
     <i><b>CONTENT MANAGEMENT PLATFORM </b></i></h2><br><br></div>


    <div class="col-sm-4">

<div class="login-box">
<div class="card ml-3">
    <div class="card-body login-card-body bg-white rounded border border-dark">
      <h2 style="text-align: center;">SMM Login </h2><br>

      <form action="smmlogin.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="smm_username" placeholder="Enter SMM username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="smm_password" placeholder="Enter SMM password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div><br>
        <div class="row">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
      </form>

      <?php
      if(isset($_GET['e']) && $_GET['e'] == '1')
      {
        ?><span style="color: red;">Incorrect Username & Password</span><?php
      }
      ?>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>


    <div class="col-sm-4">

<div class="login-box">
<div class="card">
    <div class="card-body login-card-body bg-white rounded border border-dark">
      <h2 style="text-align: center;">Designer Login</h2><br>
      <!-- <p class="login-box-msg">Sign in to start your session</p> -->

      <form action="designerlogin.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="designer_username" placeholder="Enter username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="designer_password" placeholder="Enter password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div><br>
        <div class="row">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
      </form>

      <?php
      if(isset($_GET['e']) && $_GET['e'] == '2')
      {
        ?><span style="color: red;">Incorrect Username & Password</span><?php
      }
      ?>


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>


    <div class="col-sm-4">

<div class="login-box">
  <div class="card">
  <div class="card-body login-card-body bg-white rounded border border-dark">
      <h2 style="text-align: center;">Management</h2><br>

      <form action="managementlogin.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="management_username" placeholder="Enter username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="management_password" placeholder="Enter password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div><br>
        <div class="row">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
      </form>

      <?php
      if(isset($_GET['e']) && $_GET['e']=='3')
      {
        ?><span style="color: red;">Incorrect Username & Password</span><?php
      }
      ?>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>

</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
