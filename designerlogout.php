<?php include "dbconnect.php"; ?>

<?php
 unset($_SESSION['desogner_username']);
 session_destroy();
 header("Location:index.php");
?>