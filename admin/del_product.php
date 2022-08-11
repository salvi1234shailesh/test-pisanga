 <?php
session_start();
if(!isset($_SESSION['uid']))
{
  header("location:index.php");
}
 $con=mysqli_connect("localhost","vaishakhpillai1","9096115174","pisanga_ecomm");



$id=$_GET['id'];

$del="DELETE FROM product WHERE id='$id'";

 

      	$con->query($del);
      	
      	header("location:products.php");

?>