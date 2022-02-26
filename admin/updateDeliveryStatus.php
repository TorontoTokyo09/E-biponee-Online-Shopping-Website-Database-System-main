<?php
	session_start();
	include 'connection.php';
	
	$order_id = $_POST["orderId"];
	$status = $_POST["status_value"];
	
	$sql = "UPDATE product_order set status='$status' where order_id='$order_id'";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
?>