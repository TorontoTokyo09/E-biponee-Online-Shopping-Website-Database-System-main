<?php
	include 'connection.php';
	
	$id = $_GET["ids"];

	$sql = "DELETE from cart WHERE product_id='$id'";
        if ($conn->query($sql) === true) {
            header("Location: cart.php");
        }else {
            echo "cannot delete";
        }
	
	
?>