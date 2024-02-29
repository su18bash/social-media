<?php include 'dbconnect.php'; ?>
<?php
  if(!isset($_SESSION['designer_username']))
    {
      header("Location:index.php");
    }
      ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Social Media | Designer </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<script src="jquery.min.js"></script>
 
<script src="bootstrap.min.js"></script>


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php
?>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Designer</a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <?php
    if(isset($_SESSION['designer_username']))
    {
      ?>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="designerlogout.php"> Logout </a>
        </li>
      </ul>
      <?php
    }
    ?>
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
      <span class="brand-text font-weight-light">Social Media</span>
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
          <li class="nav-header">Designer</li>



          <li class="nav-item">
            <a href="smmviewposts.php" class="nav-link active">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p class="text">View Posts</p>
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
    <?php
      $id = $_GET['id'];
      $query = mysqli_query($connect,"select * from smmposts where id = '$id'");
      while($row = mysqli_fetch_array($query))
      {
        $post_date = $row['post_date'];
        $post_name = $row['post_name'];
        $post_category = $row['post_category'];
        $post_description = $row['post_description'];
        $post_content = $row['post_content'];

      }
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Post - <?php echo $post_name; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Post</li>
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
              if(isset($_GET['s']) && $_GET['s']=='1')
              {
                echo "<script> alert('Post content is updated Successfully'); window.location.href='designerviewposts.php'; </script>";
                //echo "<h3 style='text-align: center; color:red;'> Bill Added Successfully </h3>";
              }
              else if(isset($_GET['e']) && $_GET['e']=='1')
              {
                echo "<script> alert('Error'); window.location.href='newbill.php'; </script>";
              }

            ?>
            
            <!-- Horizontal Form -->
            <div class="card card-info">
              <!-- <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div> --><br>

              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post"  enctype="multipart/form-data" action="designerpostsubmit.php">
                <div class="card-body">
                  

                  <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-6">
                      <h4 style="text-align: center; color: red"> <b>Fill the Form</b> </h4><br><br>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Post Date</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" name="post_date" value="<?php echo $post_date; ?>" placeholder="Select Post Date" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Post Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="post_name" value="<?php echo $post_name; ?>" placeholder="Enter Post Name" required>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Post Category</label>
                    <div class="col-sm-8">
                      <select name="post_category" class="form-control">
                        <option>Select Post Category</option>
                        <option value="static"> Static Post </option>
                        <option value="video"> Video Post </option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Post Description</label>
                    <div class="col-sm-8">
                      <textarea name="post_description" class="form-control" placeholder="Enter text here..."></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Post Content</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control"  name="file" required>
                      <!-- <img src="uploads/<?php echo $post_content; ?>" style="width:500px; height: 250px;"> -->
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Designer Comments </label>
                    <div class="col-sm-8">
                      <textarea name="designer_comments" class="form-control" placeholder="Enter Designer Comments here..."></textarea>
                    </div>
                  </div>

                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <br>


                  <input type="submit" class="btn btn-info float-right" name="submit" value="Submit">
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
    $('#num1,#num2,#num3,#num4,#num5,#num6,#bal').on("keydown keyup",total);
    function total()
    {
      $('#adv').val(Number($('#num1').val()) - Number($('#bal').val()));
      $('#total').val(Number($('#adv').val()) - Number($('#num2').val()) - Number($('#num3').val()) - Number($('#num4').val()) - Number($('#num5').val()) - Number($('#num6').val()) );
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
