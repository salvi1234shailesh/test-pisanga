<?php
session_start();
if(!isset($_SESSION['uid']))
{
  header("location:index.php");
}
 $con=mysqli_connect("localhost","vaishakhpillai1","9096115174","pisanga_ecomm");


$id=$_GET['id'];

$upd="UPDATE ratting SET isapproved='1' WHERE id='$id'";
$con->query($upd);

header("location:ratting.php");

?>