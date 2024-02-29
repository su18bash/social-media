<?php
session_start();
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "social_media";

	$connect = mysqli_connect($hostname,$username,$password,$dbname);

	if($connect)
	{
		//echo "Connected";
	}
	else
	{
		//echo "not connected";
	}
?>