<?php
session_start();
 $con=mysqli_connect("localhost","vaishakhpillai1","9096115174","pisanga_ecomm");
 
//  print_r($_POST);
//  die;
$bn=$_POST['bn'];
$be=$_POST['be'];
$bp=$_POST['bp'];
$ba=$_POST['ba'];
$sn=$_POST['sn'];
$se=$_POST['se'];
$sp=$_POST['sp'];
$sa=$_POST['sa'];
$pn=$_POST['productname'];
 $item_count1=implode('|',$pn);

$cq=$_POST['cart_qty'];
$item_count2=implode('|',$cq);

$cp=$_POST['cart_price'];
$item_count3=implode('|',$cp);

$ct=$_POST['cart_total'];
$item_count4=implode('|',$ct);

$sub=$_POST['subtotal'];

$odate=time();
$cid=$_SESSION['cid'];

$ins="INSERT INTO morder SET bn='$bn',be='$be',bp='$bp',ba='$ba',sn='$sn',se='$se',sp='$sp',sa='$sa',odate='$odate',cid='$cid' ,pn='$item_count1',cq='$item_count2',cp='$item_count3',ct='$item_count4',sub='$sub' ";
// echo $ins;
// die;
$con->query($ins);
 $moid = $con->insert_id;

$_SESSION['moid']=$moid;

$sel="SELECT * FROM cart WHERE cid='$cid'";
      $rs=$con->query($sel);
      while($row=$rs->fetch_assoc()){

      	$pid=$row['pid'];
      	$qty=$row['qty'];
      	$price=$row['price'];
      	$total=$total+($row['price']*$row['qty']);


     $icart="INSERT INTO sorder SET moid='$moid',pid='$pid',qty='$qty',price='$price'";
     $con->query($icart);
     
     



      }
      
           $email = $_POST["be"];
// echo $email;
// die;
$message = "Thank You For Purchase. We will Contact you Soon.Your List of Order as follows Us:- \r\n";
$message .= "Name : ".$_POST["bn"] . "\r\n Phone : ".$_POST["bp"] . "\r\n  Address: ".$_POST["ba"] . " \r\n";
//$message .= "Delivery  Name : ".$_POST["sn"] . "\r\n phone : ".$_POST["bp"] . "\r\n Address: ".$_POST["ba"]."\r\n";
$message .= "Product Details \r\n Product Name  : '$item_count1' \r\n Quantity : '$item_count2'\r\n  Price: '$item_count3'\r\n Total :'$item_count4'\r\n";

$message .= "Sub Total : ".$_POST["subtotal"] . "\r\n " ;


// echo $email,$message;
// die;

//$email_body = "<lable>Name : ".$fname."</lable><br><lable> Phone Number : ".$phone."</lable><br><lable> Message : ".$message."</lable>" info@pisanga.com;

$to = "info@pisanga.com ,$email";  
$subject = "Pisanga Sales Team |Thank You For Purchase ";
$txt = $message;

//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers = 'From:'.$email;

 

$retval = mail($to,$subject,$txt,$headers);

         if( $retval == true ) { 
	           
           echo "Message  sent...";
           	echo '<script>alert("Thank you for contact us, our team will contact with you very soon !");
      	window.location.href="thankyou.php";</script>';
	         
         }
         else {
            echo "Message could not be sent...";
         }

      

      	$del="DELETE FROM cart WHERE cid='$cid'";
      	$con->query($del);
      	echo '<script> 
      	window.location.href="account.php";</script>';
      	 
      	
     

?>