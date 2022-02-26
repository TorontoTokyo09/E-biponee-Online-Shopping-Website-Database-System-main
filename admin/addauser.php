<?php
	session_start();
	include 'connection.php';
	
	$name = $_POST["uname"];
	$email = $_POST["email"];
	$role = $_POST["role"];
	$pass = $_POST["pass"];
	$sql = "INSERT INTO user VALUES ('', '$name', '$pass', '$role', '$email', '', '', '', '', '', '')";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: administrator.php?st=1");
	

?>