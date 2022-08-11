<?php


$servername = "localhost";
$username = "vaishakhpillai1";
$password = "9096115174";
$dbname = "pisanga_ecomm";

// Create connection

// $servername = "localhost";
// $username = "food";
// $password = "kTyYMm7F87B5JnYE";
// $dbname = "food";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>