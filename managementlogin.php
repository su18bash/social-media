<?php include 'dbconnect.php'; ?>
<?php
  if(isset($_POST['management_username']) && isset($_POST['management_password']))
  {
    $userid = $_POST['management_username'];
    $password = $_POST['management_password'];

    $query = mysqli_query($connect,"select * from management_login where userid = '$userid' and password = '$password'");
    if(mysqli_num_rows($query)>0)
    {
      $_SESSION['management_username'] = $userid;
      header("Location:managementviewposts.php");
    }
    else
    {
      header("Location:index.php?e=3");
    }
  }
?>