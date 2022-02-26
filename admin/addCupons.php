<?php
	session_start();
	include 'connection.php';
	
	$cuponcode = $_POST["cuponcode"];
	$discount = $_POST["discount"];
	$max = $_POST["max"];
	$sql = "INSERT INTO cupon values ('', '$cuponcode','$discount', '1', '0','$max')";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: cupons.php");
	

?>