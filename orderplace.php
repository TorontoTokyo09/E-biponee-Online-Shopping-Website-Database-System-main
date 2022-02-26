<?php
	session_start();
	include 'connection.php';
	$username = $_SESSION["username"];
	
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$phoneNO = $_POST["phoneNO"];
	$city = $_POST["city"];
	$zipcode = $_POST["zipcode"];
	$payment_option = $_POST["optradio"];
	$total_price =  $_POST["total_price"];
	$seller_username = $_POST["owner"];
	$receipt_id= time()-mt_rand();
	
	$date_today = date("Y-m-d");
	
	$product_id = unserialize($_POST['product_id']);
	$product_title = unserialize($_POST['product_title']);
	$product_quantity = unserialize($_POST['product_quantity']);
	$product_owner = unserialize($_POST['product_owner']);
	$product_price = unserialize($_POST['product_price']);
	
	
	
	$sql = "INSERT INTO product_order values ('$receipt_id','$receipt_id','$username','$email','$total_price','$address','$phoneNO','$zipcode','Processing','$payment_option','$date_today','','')";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	for($i=0; $i<sizeof($product_id); $i++){
		$list_id= time().'-'.mt_rand();
		$pro_id = $product_id[$i];
		$title = $product_title[$i];
		$quantity = $product_quantity[$i];
		$price = $product_price[$i];
		$owner  = $product_owner[$i];
		
		$seller_account_balance = ($price*80)/100;
			$sql5 = "UPDATE user set balance = balance + $seller_account_balance where user_name='$owner'";
			if ($conn->query($sql5) === true) {
			}else{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			
		$sql1 = "INSERT INTO ordered_product_list values ('$list_id', '$receipt_id','$pro_id','$title','$quantity')";
		if ($conn->query($sql1) === true) {
		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$sql3 = "DELETE FROM cart where 1";
	if ($conn->query($sql3) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	//buyer balance
	$sql4 = "UPDATE user set balance = balance-$total_price where user_name='$username'";
	if ($conn->query($sql4) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	//admin account
	$admin_amount = ($total_price*20)/100;
	$sql4 = "UPDATE user set balance = balance +$admin_amount where user_name='admin'";
	if ($conn->query($sql4) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
	
	header("Location: thankyou.php");
	

?>
<h1>not working</h1>