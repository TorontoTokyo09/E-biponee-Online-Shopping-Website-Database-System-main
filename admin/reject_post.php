<?php
	session_start();
	include 'connection.php';
	
	$id = $_GET["ids"];
	
	$sql = "DELETE FROM product where product_id='$id'";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>