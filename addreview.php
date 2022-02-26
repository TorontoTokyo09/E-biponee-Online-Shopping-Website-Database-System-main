<?php
	session_start();
	include 'connection.php';
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$review = $_POST["review"];
		$id= $_POST["ids"];
		$username = $_SESSION["username"];
		$date_now = date("Y-m-d");
		
		$sql = "INSERT INTO product_review "."VALUES(NULL,'$id','$review','$username', '$date_now')";
		
		if ($conn->query($sql) === true) {
			header("Location: ".$_SERVER['HTTP_REFERER']);
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
	}
?>