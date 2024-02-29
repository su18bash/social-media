<?php include 'dbconnect.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Transport | New Bill</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --> 
<script src="jquery.min.js"></script>
 
<script src="bootstrap.min.js"></script>


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Transport</a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Transport</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
<!--       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">BillS</li>
          <li class="nav-item">
            <a href="newbill.php" class="nav-link active">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">New Bill</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="viewbill.php" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>View Bill</p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Single Bill</p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Bill</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Bill</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <?php
              if(isset($_GET['s']))
              {
                echo "<script> alert('Bill Added Successfully'); window.location.href='newbill.php'; </script>";
                //echo "<h3 style='text-align: center; color:red;'> Bill Added Successfully </h3>";
              }
              else if(isset($_GET['e']))
              {
                echo "<script> alert('Error'); window.location.href='newbill.php'; </script>";
              }

            ?>
            
            <!-- Horizontal Form -->
            <div class="card card-info">
              <!-- <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div> --><br>
              <h5 style="text-align: center; color: red"> Please fill the form </h5>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="newbillsubmit.php">
                <div class="card-body">
                  

                  <div class="row">
                    <div class="col-sm-6">

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Bill Date</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" name="bill_date" placeholder="Select Bill Date" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Lorry No</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="lorry_no" placeholder="Enter Lorry Number" required>
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Lorry Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control"  name="lorry_name" placeholder="Enter Lorry Name" required> 
                    </div>
                  </div> -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Transport Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control"  name="transport_name" placeholder="Enter Transport Name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Transport Address</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="transport_address" placeholder="Enter Transport Address" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Driver Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control"  name="driver_name" placeholder="Enter Driver Name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Driver No</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputEmail3" name="driver_no" placeholder="Enter Driver Number" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">License No</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="license_no" placeholder="Enter License No" required>
                    </div>
                  </div>                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Owner Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control"  name="owner_name" placeholder="Enter Owner Name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Owner No</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputEmail3" name="owner_no" placeholder="Enter Owner Number" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">From</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputEmail3" name="from_date" placeholder="Enter From Place" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">To</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputEmail3" name="to_date" placeholder="Enter To Place" required>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Load Material</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="load_material" placeholder="Load Material">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Party Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="party_name" placeholder="Enter Party Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Party Place</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="party_place" placeholder="Enter Party Place">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Total Hire</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="num1" name="total_hire" placeholder="Enter Total Hire">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Balance</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="bal" name="balance" placeholder="Enter Balance" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Advance </label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="adv" name="advance" placeholder="Enter Advance Amount">
                    </div>
                  </div>  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Commission</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="num2" name="commission" placeholder="Enter Commission Amount">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Loading Charge</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="num3" name="loading_charge" placeholder="Enter Loading Charge Amount">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Guide</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="num4" name="guide" placeholder="Enter Guide Amount">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Total Amount</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="total" name="total_amount" placeholder="Total Amount">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Remarks</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="remarks" placeholder="Remarks">
                    </div>
                  </div>
                </div>
              </div>
                  <!-- <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div> -->
                  <!-- <div class="form-group row">
                    <div class="offset-sm-2 col-sm-8">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div> -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-info float-right" name="submit" value="Submit">
                  <!-- <button type="submit" class="btn btn-default float-right">Cancel</button> -->
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
  $(document).ready(function(){
    $('#num1,#num2,#num3,#num4,#bal').on("keydown keyup",total);
    function total()
    {
      $('#adv').val(Number($('#num1').val()) - Number($('#bal').val()));
      $('#total').val(Number($('#adv').val()) - Number($('#num2').val()) - Number($('#num3').val()) - Number($('#num4').val()));
    }
  });    
  </script>

  <footer class="main-footer">
    <!-- <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2
    </div> -->
    <strong>Copyright &copy; <?php echo date("Y"); ?>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
