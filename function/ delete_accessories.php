<?php
session_start();
include 'dbconfig.php';

$id =  $_GET['id'];

$sql = "DELETE FROM `accessories` WHERE id = '$id'";

if(mysqli_query($conn,$sql)){
  echo "1";
}
else{
  echo "0";
}
 ?>