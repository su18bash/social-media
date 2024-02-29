<?php include "dbconnect.php"; ?>

<?php
 unset($_SESSION['smm_username']);
 session_destroy();
 header("Location:index.php");
?>