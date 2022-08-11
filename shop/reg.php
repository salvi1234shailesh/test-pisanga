<?php
session_start();

include("dbconfig.php");

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];
$company=$_POST['company'];
 
$ins="INSERT INTO customer SET name='$name',email='$email',company='$company',phone='$phone',password='$pass'";
$con->query($ins);



?>

<script >
	alert("Registration successfully done");
	window.location='index.php';
</script>