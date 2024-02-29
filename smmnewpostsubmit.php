<?php
 	include "dbconnect.php";

 	// $query = mysqli_query($connect,"select id from billing order by id desc limit 1");
 	// if(mysqli_num_rows($query)>0)
 	// {
 	// 	$fetch = mysqli_fetch_array($query);
 	// 	$id=$fetch[0]+1;
 	// 	$bill_no = "bill_".$id;
 	// }
 	// else
 	// {
 	// 	$bill_no = "bill_1";
 	// }

 	$post_date = $_POST['post_date'];
 	$post_name = $_POST['post_name'];
 	$post_category = $_POST['post_category'];
 	$post_description = $_POST['post_description'];
 	$raw_post = $_POST['raw_post'];


//  	// File upload directory 
// $targetDir = "uploads/"; 

//     if(!empty($_FILES["file"]["name"])){ 
//         $post_content_file = basename($_FILES["file"]["name"]); 
//         $targetFilePath = $targetDir . $post_content_file; 
//         $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
     
//             // Upload file to server 
//             if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
//                 // Insert image file name into database 
//                 // $insert = $db->query("INSERT INTO images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); 
//                 // if($insert){ 
//                 //     $statusMsg = "The file ".$fileName. " has been uploaded successfully."; 
//                 // }else{ 
//                 //     $statusMsg = "File upload failed, please try again."; 
//                 // }  
//             }else{ 
//                 $statusMsg = "Sorry, there was an error uploading your file."; 
//             }
//     }else{ 
//     	$post_content_file = 0;
//         $statusMsg = 'Please select a file to upload.'; 
//     } 



	$query1 = mysqli_query($connect,"INSERT INTO `smmposts`(`post_date`, `post_name`, `post_category`, `post_description`, `raw_post`) VALUES ('$post_date', '$post_name', '$post_category', '$post_description', '$raw_post')");
	if($query1)
	{
		header('location: smmnewpost.php?s=1');
	}

?>