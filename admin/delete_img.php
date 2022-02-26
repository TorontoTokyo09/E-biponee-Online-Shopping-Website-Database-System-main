<?php
	session_start();
	include 'connection.php';
	
	$imgId = $_GET["imageId"];
	
	$sql = "DELETE FROM images where image_id='$imgId'";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>