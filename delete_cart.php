

<?php
  
     error_reporting(0);
include "function/dbconfig.php";

   
    
 

if (isset($_GET['product_id'])) {
        
        $id=$_GET['product_id'];
       $sql = "DELETE FROM cart_info WHERE product_id='$id'";

if (mysqli_query($conn, $sql)) {
   echo '<script>alert("This Item is Deleting Successfull !");
    window.location.href="my_cart.php";</script>';
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
} else {
            header('Location: Add_cart.php?msg=Someting Went wrong');
}

 
 


?>