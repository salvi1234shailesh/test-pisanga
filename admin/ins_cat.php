<?php
session_start();
if(!isset($_SESSION['uid']))
{
  header("location:index.php");
}
 $con=mysqli_connect("localhost","vaishakhpillai1","9096115174","pisanga_ecomm");


$p=$_POST['parent'];
$c=$_POST['cat'];
$ins="INSERT INTO category SET name='$c',parent_id='$p'";
$con->query($ins);

header("location:categories.php");

?>