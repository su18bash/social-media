<?php
 	include "dbconnect.php";

 	$id = $_POST['id'];
 	$designer_comments = $_POST['designer_comments'];

 	 	// File upload directory 
$targetDir = "uploads/"; 

    if(!empty($_FILES["file"]["name"])){ 
        $post_content_file = basename($_FILES["file"]["name"]); 
        $targetFilePath = $targetDir . $post_content_file; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
     
            // Upload file to server 
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                // Insert image file name into database 
                // $insert = $db->query("INSERT INTO images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); 
                // if($insert){ 
                //     $statusMsg = "The file ".$fileName. " has been uploaded successfully."; 
                // }else{ 
                //     $statusMsg = "File upload failed, please try again."; 
                // }  
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            }
    }else{ 
    	$post_content_file = 0;
        $statusMsg = 'Please select a file to upload.'; 
    } 
// } 




   // $maxsize = 5242880; // 5MB
   // if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
   //     $name = $_FILES['file']['name'];
   //     $target_dir = "videos/";
   //     $target_file = $target_dir . $_FILES["file"]["name"];

   //     // Select file type
   //     $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   //     // Valid file extensions
   //     $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

   //     // Check extension
   //     if( in_array($extension,$extensions_arr) ){
 
   //         // Check file size
   //         if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
   //              $_SESSION['message'] = "File too large. File must be less than 5MB.";
   //         }else{
   //              // Upload
   //              if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
   //                  // Insert record
   //                  $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";

   //                  mysqli_query($con,$query);
   //                  $_SESSION['message'] = "Upload successfully.";
   //              }
   //         }

   //     }else{
   //         $_SESSION['message'] = "Invalid file extension.";
   //     }
   // }else{
   //     $_SESSION['message'] = "Please select a file.";
   // }
   // header('location: index.php');
   // exit;

	$query1 = mysqli_query($connect,"UPDATE `smmposts` SET `post_content` = '$post_content_file', `comments_designer` = '$designer_comments'  WHERE `id` = '$id'");
	// echo "UPDATE `smmposts` SET `post_content` = '$post_content_file', `comments_designer` = '$designer_comments'  WHERE `id` = '$id'"; die;
	//echo "UPDATE `smmposts` SET `post_content` = $post_content_file, `comments_designer` = $designer_comments  WHERE `id` = $id'"; die;
	if(isset($query1))
	{
		header('location: designereditpost.php?id='.$id.'&s=1');
	} else{
        header('location: designereditpost.php?id='.$id.'&e=1');
    }

?>