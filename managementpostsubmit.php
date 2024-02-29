<?php
 	include "dbconnect.php";

 	$id = $_POST['id'];
 	$management_comments = $_POST['management_comments'];
    $status = $_POST['status'];


	$query1 = mysqli_query($connect,"UPDATE `smmposts` SET `comments_management` = '$management_comments', `status` = '$status'  WHERE `id` = '$id'");

	if($query1)
	{
		header('location: managementeditpost.php?id='.$id.'&s=1');
	}

?>