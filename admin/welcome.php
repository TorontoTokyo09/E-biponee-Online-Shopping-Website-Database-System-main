<?php

include 'connection.php';


	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$fname = $_POST["fname"];
		$username = $_POST["username"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
	}
	$id = md5(uniqid(rand(), true));
	$sql = "INSERT INTO user "."VALUES('$id','$username','$pass', 'user')";
	
	
	if ($conn->query($sql) === true) {
		echo "<h1 align=\"center\" class=\"heading\"> New Record added </h1>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}



?>