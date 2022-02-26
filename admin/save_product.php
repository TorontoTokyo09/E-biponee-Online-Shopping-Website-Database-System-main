<?php

	include 'connection.php';
	
	if($_REQUEST['sub']){
	$ids = $_REQUEST['ids1'];
	
	$data = array();
	
	$title = $_REQUEST['name1'];
	$price = $_REQUEST['price1'];
	$category = $_REQUEST['category'];
	$disc= $_REQUEST['disc'];
	$video = $_REQUEST['video'];
	
	$sql = "UPDATE product set product_name='$title', product_price='$price', product_category='$category', product_description='$disc', product_video='$video' where product_id='$ids'";
	if ($conn->query($sql) === true) {
		echo "succssfully added";
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: all_product.php");
	}else if(isset($_POST["save"])){
		$id = $_POST["ids"];
		$type = $_POST["feature_type"];
		$value = $_POST["feature_value"];
		
		$sql = "INSERT INTO product_features VALUES ('$id', '', '$type', '$value')";
		if ($conn->query($sql) === true) {
		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		header("Location: edit_product.php?ids=".$id);
	}else if(isset($_POST["imgsave"])){
		
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$file_name = basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["imgsave"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
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
		$id = $_POST["ids"];
		
		$sql = "INSERT INTO images values('','$id','$file_name')";
		if ($conn->query($sql) === true) {
			echo $sql;
		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		header("Location: all_product.php?st=1");
	}
	
	
	
	
	
	
?>