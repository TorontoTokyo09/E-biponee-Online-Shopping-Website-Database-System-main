<?php
	session_start();
	include 'connection.php';
	
	$id = $_POST["ids"];
	$type = $_POST["feature_type"];
	$value = $_POST["feature_value"];
	
	$sql = "INSERT INTO product_features VALUES ('$id', '', '$type', '$value')";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
?>