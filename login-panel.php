<?php
session_start();
 $con=mysqli_connect("localhost","vaishakhpillai1","9096115174","pisanga_ecomm");

$user=$_POST['uname'];
 

$sel="SELECT * FROM customer WHERE (email='$user' OR phone='$user')";

$rs=$con->query($sel);

if($rs->num_rows>0){

  while($row=$rs->fetch_assoc()){
    $_SESSION['cid']=$row['id'];
    $_SESSION['name']=$row['name'];

    header("location:shop.php");
  }

}
else{

  ?>
  <script>
  	alert("Invalid login");
  	window.location='shop.php';
  </script>

  <?php
}



?>
