<?php
session_start();
error_reporting(0);
include "dbconfig.php";
$username = $_POST["username"];
 
  $sql = "SELECT * FROM custregisteration WHERE email='$username'";
$result = mysqli_query($conn, $sql);




if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION["cust_id"] = $row["cust_id"];
        $_SESSION["cust_name"] = $row["name"];
  
        $_SESSION["cust_email"] = $row["email"];
        echo $row["cust_id"];
    }
} else {
    echo "0";
}
?>  