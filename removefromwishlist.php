<?php
	include 'connection.php';
	
	$id = $_GET["ids"];

	$sql = "DELETE from wishlist WHERE product_id='$id'";
        if ($conn->query($sql) === true) {
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }else {
            echo "cannot delete";
        }
	
	
?>