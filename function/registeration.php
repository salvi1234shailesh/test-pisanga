<?php
error_reporting(0);
session_start();

include "dbconfig.php";



$name = $_POST["name"];
$org_name  = $_POST["org_name"];
$phone = $_POST["phone"];
// $password = $_POST["password"];
$email = $_POST["email"];



 

    $sql1 = "SELECT * FROM custregisteration WHERE email = '$email'";
 
    $result1 = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result1) > 0) {
        // output data of each row
   
        
        while($row = mysqli_fetch_assoc($result1)) {
            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
             $userstatus = $row["cust_id"];
         
        }
    } else {
            $userstatus = "0";
    }

if($userstatus == 0 ){
    // VALUES ('$companyname','','','','','','','','','','$telephone','','','','','','$email','','','','','','','','','','','','','','','','','','','','',$password)";



$sql ="INSERT INTO `custregisteration`(`name`, `org_name`, `email`, `phone`, `cr_date`) VALUES ('$name','$org_name','$email','$phone',now())";


  // $sql = "INSERT INTO `custregisteration`( `companyname`, `contactperson`, `postaladd1`, `postaladd2`, `postaladd3`, `city`, `pincode`, `state`, `country`, `stdcode`, `telephone`, `whatsappnumber`, `website`, `socialmedia`, `restel`, `other`, `email`, `customertype`, `statutorytavation`, `gstno`, `iecode`, `panno`, `adharcard`, `deliverydetail`, `transportname`, `transportaddress`, `transportcontactname`, `transportphone`, `paymentname`, `paymentaddress`, `paymentaddress1`, `paymentphone`, `bankdetail`, `bankname`, `bankbranch`, `bankifc`, `bankaccountno`,`password`) VALUES ('$companyname','','','','','','','','','','$telephone','','','','','','$email','','','','','','','','','','','','','','','','','','','','','$password')";



if (mysqli_query($conn, $sql)) {


 
        $_SESSION["cust_id"] =$conn -> insert_id;
        $_SESSION["cust_name"] = $name;
        $_SESSION["cust_phone"] = $phone;
  
        $_SESSION["cust_email"] = $email;
  
        echo  $conn -> insert_id;

 }else {
    echo "0";
}
}else{

	echo "present";
}




?>