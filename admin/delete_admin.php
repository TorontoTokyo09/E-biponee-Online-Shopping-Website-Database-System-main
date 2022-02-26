<?php
	session_start();
	include 'connection.php';
	
	$name = $_GET["admin"];
	
	$sql = "DELETE FROM user where 	user_name='$name'";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
?>