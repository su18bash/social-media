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
        <a href="" class="nav-link"> Designer </a>
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
      <img src="download.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">S L A</span>
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
            <a href="designerviewposts.php" class="nav-link active">
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Posts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body" style="width: 100%; overflow-x:scroll;">

<br><br>



              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No </th>
                  <th>Date </th>
                  <th>Post Name </th>
                  <th>Post Category</th>
                  <th>Post Description </th>
                  <th>Post Content </th>
                  <!-- <th>Image</th> -->
                  <th>SMM Comments </th>
                  <th>Designer Comments </th>
                  <th>Management Comments </th>
                  <th>Status</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $query1 = mysqli_query($connect,"select * from smmposts");
                    if(mysqli_num_rows($query1)>0)
                    {
                      $i=1;
                      while($row1 = mysqli_fetch_array($query1))
                      {
                        $count = $i++;
                        ?>
                        <tr>
                          <td><?php echo $count; ?></td>
                          <td><?php echo date('d-m-Y', strtotime($row1['post_date'])); ?></td>
                          <td><?php echo $row1['post_name']; ?></td>
                          <td><?php echo $row1['post_category']; ?></td>
                          <td><?php echo $row1['post_description']; ?></td>
                          <td><a href="uploads/<?php echo $row1['post_content']; ?>" target="_blank"><?php echo $row1['post_content']; ?></a></td>
                          <!-- <td><img src="uploads/<?php echo $row1['post_content']; ?>" style="width:50px; height: 50px;"></td> -->
                          <td><?php echo $row1['comments_smm']; ?></td>
                          <td><?php echo $row1['comments_designer']; ?></td>
                          <td><?php echo $row1['comments_management']; ?></td>                                                  
                          <td><?php echo $row1['status']; ?></td>
                          <td><a href="designereditpost.php?id=<?php echo $row1['id']; ?>"><i class="fas fa-pen"></a></td>
                          <!-- <form method="POST" action="admineditbill1.php">
                          <input type="hidden" name="bill_no" value="<?php echo $row1['bill_no']; ?>">
                          <td><?php echo $count; ?></td>
                          <td><input type="date" name="bill_date" value="<?php echo $row1['post_date']; ?>"></td>
                          <td><input type="text" name="lorry_no" value="<?php echo $row1['post_name']; ?>"></td>
                          <td><input type="text" name="party_name" value="<?php echo $row1['post_category']; ?>"></td>
                          <td><input type="text" name="load_material" value="<?php echo $row1['post_description']; ?>"></td>
                          <td><input type="text" name="balance" value="<?php echo $row1['post_content']; ?>"></td>
                          <td><input type="submit" value="Update" class="btn btn-primary"></form></td>
                          <td><a href='admineditbill.php?id=<?php echo $row1['bill_no']; ?>' target='_BLANK'>Edit</a></td>
                          <td><a href="admindeletebill.php?delete=<?php echo $row1['bill_no']; ?>">Delete</a></td> -->
                        </tr>
                        <?php
                      }
                    }
                    else
                    {
                      ?>
                      <tr>
                        <td colspan="12">No Records Found</td>
                      </tr>
                      <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <!-- <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2
    </div> -->
    <strong>Copyright &copy; <?php echo date('Y'); ?>. </strong> All rights reserved.
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
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
