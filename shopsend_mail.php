<!DOCTYPE html>
<html>
<head>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.js"></script>     
  <title></title>
  <style>
   .swal2-confirm {
    font-family: "Times New Roman", Times, serif !important;
    font-size: 30px !important;
        }

   </style>
</head>
<body>


<?php


error_reporting(0);
include "function/dbconfig.php";

if ( isset( $_POST['submit'] ) ) {
//   print_r($_POST);
//   die;

$name = $_POST['name'];
  $message = $_POST['message'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
   $mobile = $_POST['mobile'];
 


$sql = "INSERT INTO `contact_us`(`name`, `email`, `mobile`, `subject`,`message`) VALUES ('$name','$email', '$mobile','$subject','$message')";



//  echo $sql;
//  die;




if (mysqli_query($conn, $sql)) {
echo '<script>alert("Thank you for contact us, our team will contact with you very soon !");</script>';
    
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}












$email = $_POST["email"];
//echo $email;
$message = "Name : ".$_POST["name"] . "\r\n";
$message .= "Phone : ".$_POST["mobile"] . "\r\n";
$message .= "Subject : ".$_POST["subject"] . "\r\n";

$message .= "Message : ".$_POST["message"];

//$email_body = "<lable>Name : ".$fname."</lable><br><lable> Phone Number : ".$phone."</lable><br><lable> Message : ".$message."</lable>" info@pisanga.com;

$to = "info@pisanga.com";  
$subject = "pisanga.com: Contact form Mail";
$txt = $message;

//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers = 'From:'.$email; 


$retval = mail($to,$subject,$txt,$headers);

if( $retval == true ) { 
	          echo '<script language="javascript">
                setTimeout(function() {
            swal({
            title: "success",
            text: "Message sent successfully...",
            type: "success",
            confirmButtonColor: "#dc683b"
             }) 
		   .then(function (result) {
                if (true) {
                    window.location = "shopindex.php";
                 }
               });
            }, 1000);
          </script>';
	         
         }else {
            echo "Message could not be sent...";
         }

?>
</body>
</html>