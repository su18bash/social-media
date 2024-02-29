<?php
 	include "dbconnect.php";

 	$id = $_POST['id'];
 	$raw_post = $_POST['raw_post'];
 	$smm_comments = $_POST['smm_comments'];

	$query1 = mysqli_query($connect,"UPDATE `smmposts` SET `comments_smm` = '$smm_comments', `raw_post` = '$raw_post'  WHERE `id` = '$id'");
	if($query1)
	{
		header('location: smmeditpost.php?id='.$id.'&s=1');
	}

?>