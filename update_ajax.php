<?php


session_start();
    include "function/dbconfig.php";
    error_reporting(0);



   
   if($_SESSION["cust_id"] == ''){
     
      header('location: index.php');
   }
   
  

 $user_id=$_SESSION["cust_id"];
//echo $user_id; 


$product_id =  $_GET['product_id'];


$item_quantity = $_POST['item_quantity'];

$item_price = $_POST['item_price'];

 
 
$user_id=$_SESSION['cust_id'];
 
	  $sql2="UPDATE `cart_info` SET `user_id`='$user_id',`item_quantity`='$item_quantity',`item_name`='$item_name',`item_price`='$item_price' WHERE `product_id`='$product_id'";

	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>