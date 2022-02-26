<?php
	session_start();
	include 'connection.php';
	
	$order_id = $_GET["order_id"];
	$status = $_POST["status_value"];
	
	$sql = "DELETE FROM product_order where order_id='$order_id'";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
	$sql4 = "DELETE FROM ordered_product_list where order_id='$order_id'";
	if ($conn->query($sql4) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
?>