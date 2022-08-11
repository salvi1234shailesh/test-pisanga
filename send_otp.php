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
 




 


$email = $_POST["bill_email"];

 
$message = "Name : ".$_POST["bill_name"] . " \r\n Phone : ".$_POST["bill_phone"] . "\r\n Company ".$_POST["bill_company"] . "\r\n";
$message .= "Address : ".$_POST["org_address"] . " ".$_POST["city"] . " ".$_POST["pincode"] . "\r\n";
 

 echo $email,$message;
 die;

//$email_body = "<lable>Name : ".$fname."</lable><br><lable> Phone Number : ".$phone."</lable><br><lable> Message : ".$message."</lable>" info@pisanga.com;

$to = "spsalvi93@gmail.com";  
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
                    window.location = "thankyou.php";
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