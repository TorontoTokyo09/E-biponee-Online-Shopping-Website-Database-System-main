<?php
	session_start();
	include 'connection.php';
	
	$name = $_POST["uname123"];
	$email = $_POST["email"];
	$role = $_POST["role"];
	
	$sql = "UPDATE user set email='$email', user_type='$role' where user_name='$name'";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: administrator.php");
	

?>