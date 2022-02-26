<?php
	session_start();
	include 'connection.php';
	
	$pass_query="";
	$email_query="";
	$education_query="";
	$note_query="";
	$profession_query="";
	$image_query="";
	if(isset($_POST["password"]) && !empty($_POST["password"])){
		$password = $_POST["password"];
		$pass_query = "user_password='$password',";
	}else {
		$pass_query = "";
	}
	
	if(isset($_POST["email"])){
		$email = $_POST["email"];
		$email_query = "email='$email',";
	}else {
		$email_query = "";
	}
	
	if(isset($_POST["education"])){
		$education = $_POST["education"];
		$education_query = "education='$education',";
	}else {
		$education_query = "";
	}
	
	if(isset($_POST["note"]) && !empty($_POST["note"])){
		$note = $_POST["note"];
		$note_query = "Notes='$note',";
	}else {
		$note_query = "";
	}
	
	if(isset($_POST["profession"])){
		$profession = $_POST["profession"];
		$profession_query = "profession='$profession'";
	}else {
		$profession_query = "";
	}
	
	if(isset($_POST["fileToUpload"])){
		$images = basename( $_FILES["fileToUpload"]["name"]);

		$target_dir = "profile_img/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}	
		$image_query = "user_image='$images',";
	}else {
		$image_query = "";
	}
	
	
	
	
	$user_name = $_SESSION["username"];
	
	$sql = "UPDATE user set $pass_query $email_query $education_query $note_query $image_query $profession_query where user_name='$user_name'";
	if ($conn->query($sql) === true) {
		echo $sql;
			echo "successfully added";
			header("Location: user_profile.php?st=1");
	}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	
	
	
	

?>