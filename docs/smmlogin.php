<?php include 'dbconnect.php'; ?>
<?php
  if(isset($_POST['smm_username']) && isset($_POST['smm_password']))
  {
    $userid = $_POST['smm_username'];
    $password = $_POST['smm_password'];

    $query = mysqli_query($connect,"select * from smm_login where userid = '$userid' and password = '$password'");
    if(mysqli_num_rows($query)>0)
    {
      $_SESSION['smm_username'] = $userid;
      header("Location:smmviewposts.php");
    }
    else
    {
      header("Location:index.php?e=1");
    }
  }
?>