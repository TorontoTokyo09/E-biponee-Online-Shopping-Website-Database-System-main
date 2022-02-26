<?php
	session_start();
	include 'connection.php';
	
	$id = $_GET["cupon_id"];
	
	$sql = "DELETE FROM cupon where cupon_id='$id'";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
?>