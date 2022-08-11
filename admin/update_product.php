 <?php
session_start();
if(!isset($_SESSION['uid']))
{
  header("location:index.php");
}
 $con=mysqli_connect("localhost","vaishakhpillai1","9096115174","pisanga_ecomm");



 




$id=$_POST['id'];
$cat= $_POST['cat'];
$pname= $_POST['pname'];
$pprice= $_POST['pprice'];
$c_image= $_FILES['pimg']['name'];
$c_image_temp=$_FILES['pimg']['tmp_name'];

if($c_image_temp != "")
{
    move_uploaded_file($c_image_temp , "../product_img/$c_image");
    $c_update="update product set cat='$cat', pname='$pname', pprice='$pprice',  pimg= '$c_image'
     where  id='$id'";   
}else
{
    $c_update="update product set cat='$cat', pname='$pname', pprice='$pprice'
     where id='$id'";
}

$run_update=mysqli_query($con, $c_update);

header('Location: products.php');





 

 

 
 

?>