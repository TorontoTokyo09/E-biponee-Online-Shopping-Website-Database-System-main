<?php
	session_start();
	include 'connection.php';
	
	$id = $_GET["ids"];
	
	$sql = "UPDATE product set status='1' where product_id='$id'";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: pending_list.php?st=1");
?>