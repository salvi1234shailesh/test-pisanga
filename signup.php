<?php
session_start();

 $con=mysqli_connect("localhost","vaishakhpillai1","9096115174","pisanga_ecomm");

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
 
$company=$_POST['company'];

$sel="SELECT * FROM `customer` WHERE name='$name' AND email='$email' AND company='$company' AND phone='$phone' ";

$result = $con->query($sel);
 
 

if ($result->num_rows > 0)
{
    
    
echo '<script>alert("This User Already Exist ! Please Sign in ");
    window.location.href="index.php";</script>';
}
else
{
$ins="INSERT INTO customer SET name='$name',email='$email',company='$company',phone='$phone' ";
$resul2 =$con->query($ins);

echo '<script>alert("Registration successfully done");
    window.location.href="shop.php";</script>';

}

?>

 



   