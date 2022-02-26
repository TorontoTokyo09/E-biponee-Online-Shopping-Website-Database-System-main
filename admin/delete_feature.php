<?php
	session_start();
	include 'connection.php';
	
	$id = $_GET["feature_id"];
	
	$sql = "DELETE FROM product_features where feature_id='$id'";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
?>