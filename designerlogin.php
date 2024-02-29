<?php include 'dbconnect.php'; ?>
<?php
  if(isset($_POST['designer_username']) && isset($_POST['designer_password']))
  {
    $userid = $_POST['designer_username'];
    $password = $_POST['designer_password'];

    $query = mysqli_query($connect,"select * from designer_login where userid = '$userid' and password = '$password'");
    if(mysqli_num_rows($query)>0)
    {
      $_SESSION['designer_username'] = $userid;
      header("Location:designerviewposts.php");
    }
    else
    {
      header("Location:index.php?e=2");
    }
  }
?>