<?php
	session_start();
	include 'connection.php';
	
	$name = $_POST["username"];
	$email = $_POST["email"];
	$role = "Seller";
	$pass = $_POST["password"];
	$sql = "INSERT INTO user VALUES ('', '$name', '$pass', '$role', '$email', '', '', '', '', '', '100000')";
	if ($conn->query($sql) === true) {
		header("Location: register.php?st=1");
		
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	

?>