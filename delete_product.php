

<?php
  
   error_reporting(0);
   include "function/dbconfig.php";
   
   


  $id =  $_GET['id'];

$sql="DELETE FROM `profile` WHERE id='$id'";
    // $sql = "SELECT * FROM category WHERE cate_id = $cate_id";

// echo $sql;
// die;

$result = mysqli_query($conn, $sql);

$row =mysqli_fetch_assoc($result);

if (mysqli_query($conn, $sql)) {
    echo '<script>alert("delete  successful ! You Are Profile Series .");
    window.location.href="view_product.php";</script>';
      
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



 
 

?>