<?php
	session_start();
	include 'connection.php';
	
	$id = $_GET["ids"];
	
	$username = $_SESSION["username"];
	
	$sql = "INSERT INTO cart "."VALUES('','$id','1', '$username')";
	if ($conn->query($sql) === true) {
			
	}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	
	
	
	
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>