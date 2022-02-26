<?php
	session_start();
	include 'connection.php';
	
	$id = $_POST["ids"];
	$quantity = $_POST["quantity"];
	
	$username = $_SESSION["username"];
	
	$sql = "INSERT INTO cart "."VALUES('','$id','$quantity', '$username')";
	if ($conn->query($sql) === true) {
			
	}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	
	
	
	
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>