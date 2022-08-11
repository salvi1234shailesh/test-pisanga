<?php

session_start();
    include "function/dbconfig.php";
    error_reporting(0);


	$id=$_POST['product_id'];
	$item_name=$_POST['item_name'];
	  $user_id=$_SESSION["cust_id"];
	$item_price=$_POST['item_price'];
	$item_quantity=$_POST['item_quantity'];
	$sql = "UPDATE `cart_info` 
	SET `item_name`='$item_name',`user_id`='$user_id',
	`item_quantity`='$item_quantity',
	`item_price`='$item_price'  WHERE product_id=$id";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>