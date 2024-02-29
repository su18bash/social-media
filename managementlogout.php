<?php include "dbconnect.php"; ?>

<?php
 unset($_SESSION['management_username']);
 session_destroy();
 header("Location:index.php");
?>