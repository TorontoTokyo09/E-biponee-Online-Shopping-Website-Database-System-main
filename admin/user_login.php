<?php 
	session_start();
	$_SESSION["cart_id"] = array();
	$_SESSION["cart_quantity"] = array();
	include 'connection.php';
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST["uname"];
		$pass = $_POST["pass"];
	}
	
	$sql = "SELECT * from user where user_name='$name'";
	$result = $conn->query($sql);
    if(!empty($result)){
		header("Location: login.php?st=1");
	}

    while($row = $result->fetch_assoc()) {
		if($pass == $row["user_password"]){
			echo "welcome you have successfully logeed in";
			$type = $row["user_type"];
			$_SESSION["username"] = $name;
			$_SESSION["user_type"] = $type;
			header("Location: ../index.php");
			
		}else {
			header("Location: login.php?st=1");
			echo "username and password doesn't match";
		}
    }
?>