<?php
session_start();
if(!isset($_SESSION['uid']))
{
  header("location:index.php");
}
 $con=mysqli_connect("localhost","vaishakhpillai1","9096115174","pisanga_ecomm");


$cat=$_POST['cat'];
$pname=$_POST['pname'];
$price=$_POST['price'];

$fn=$_FILES['pimg']['name'];
$buf=$_FILES['pimg']['tmp_name'];
move_uploaded_file($buf, "../product_img/".$fn);


$ins="INSERT INTO product SET pname='$pname',pprice='$price',cat='$cat',pimg='$fn'";
$con->query($ins);

header("location:products.php");

?>