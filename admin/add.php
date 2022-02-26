<?php
	include 'connection.php';
	session_start();
	$user_type = $_SESSION["user_type"];;
	
	$owner = $_SESSION["username"];
	$number = count($_POST["type"]);
	$title = $_POST["title"];
	$desc = $_POST["desc"];
	$video = $_POST["video"];
	$price = $_POST["price"];
	$category = $_POST["category"];
	$id = time().'-'.mt_rand();
	$img = array();
	
	$count = count($_FILES["fileToUpload"]["name"]);
	for($i=0; $i<$count; $i++){
	$img[$i] = basename( $_FILES["fileToUpload"]["name"][$i]);
	
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$i]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"][$i]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		
		// Check file size
		$uploadOk == 1;
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
				echo "The file ". basename( $_FILES["fileToUpload"]["name"][$i]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
	}

	for($j=0; $j<$count; $j++){
		$sql = "INSERT INTO images "."VALUES('', '$id','$img[$j]')";
	
	if ($conn->query($sql) === true) {
			echo "<h1 align=\"center\" class=\"heading\"> adding images </h1>";
			
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$imgs = $img[0];
	
	
	
	$status = 1;
	
	if($user_type != "Administrator"){
		$status = 0;
	}
	
	$sql = "INSERT INTO product "."VALUES('$id','$title','0', '$desc','0','$video','$price','0','$imgs','0','$category','$status','$owner')";
	
	if ($conn->query($sql) === true) {
			echo "<h1 align=\"center\" class=\"heading\"> New Record added </h1>";
			
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	if($number>1){
		
		for($i=0; $i<$number; $i++){
			if(trim($_POST["type"][$i]) != ''){
				$type = $_POST["type"][$i];
				$value = $_POST["value"][$i];
				$sql = "INSERT INTO product_features "."VALUES('$id',null,'$type', '$value')";
				if ($conn->query($sql) === true) {
			echo "<h1 align=\"center\" class=\"heading\"> New Record added </h1>";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
			}
		}
		
	}else{
		echo "enter a nmumber";
	}
	
	header("Location: addproduct.php?st=1");
	echo "<h3>Successfully added</h3>"
	
	
?>