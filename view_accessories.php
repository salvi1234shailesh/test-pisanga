<?php


error_reporting(0);
$servername = "localhost";
$username = "vaishakhpillai1";
$password = "9096115174";
$dbname = "pisanga_ecomm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}




if ( isset( $_POST['submit'] ) ) {



$target_dir = "Accessories/";
  $imageFileType = strtolower(pathinfo(basename($_FILES["profile_image"]["name"]),PATHINFO_EXTENSION));
$target_file = $target_dir . time() . "." . $imageFileType;


  move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file);


$profile_no = $_POST['profile_no'];

 $profile_sr_no = $_POST['profile_sr_no'];

$profile_cost = $_POST['profile_cost'];

$discounts = $_POST['discounts'];

$profile_image =$target_file ;


 // echo  $profile_image;
 //  die;




 
 
 $mysql1= mysqli_query($conn, "SELECT * FROM profile WHERE profile_sr_no = '$profile_sr_no'" );
 
 
  

 
 if (mysqli_num_rows($mysql1)>0) {
      
    echo '<script>alert("This User Already Exist Category !");
  window.location.href="profile.php";</script>';

} 
else{


$sql = "INSERT INTO `profile`(`profile_no`, `profile_sr_no`, `profile_image`, `profile_cost`, `discounts`, `cr_date`) 

VALUES ('$profile_no','$profile_sr_no','$profile_image','$profile_cost','$discounts', now())";

//    echo $sql;
// die;

if (mysqli_query($conn, $sql)) {
  echo '<script>alert("Successful! Submitted Profile Category .");
  window.location.href="dashboard.php";</script>';
    

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
};




?>






<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Pisanga</title>
<meta content="" name="descriptison">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets\img\Logo\PNG\Favicon 32 px coloured.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Alegreya Sans'
<link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Marcellus SC' rel='stylesheet'>

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">


 <!-- CSS -->
  <link href="assets/css/custom.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <script type="text/javascript" src="http://wowslider.com/images/effects/rotate.js"></script>  
  <script type="text/javascript" src="http://wowslider.com/images/demo/jquery.js"></script>
<script type="text/javascript" src="http://wowslider.com/styles/a.js"></script>
<link rel="stylesheet" type="text/css" href="http://wowslider.com/sliders/demo-57/engine1/style.css" />





<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

   <header id="header" class="fixed-top d-flex align-items-center" style="background: rgba(1, 4, 136, 0.9);
">
      <div class="container d-flex align-items-center">
      
          <div class="logo mr-auto">
              <h1 class="text-light"><a href="index.php"><span><img src="assets\img\Logo\PNG\60 px.png" class="" alt="">&nbsp;<img src="assets\img\Logo\Pisanga FINAL version-09.png" class="" alt=""></span></a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>

       
      </div>
  </header> 

 

  <main id="main">


  

  
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <!-- <h2>Contact</h2> -->
       
      </div>

      <div class="row">

        <div class="col-lg-3 mt-5 mt-lg-0" data-aos="fade-right" data-aos-delay="100">
           <div class="card">
<div class="card-body">
  <div class="list-group">
<a href="dashboard.php" class="list-group-item list-group-item-action " aria-current="true">
  Dashboard
</a>
<a href="view_customer.php" class="list-group-item list-group-item-action">View Customer</a>
<a href="view_product.php" class="list-group-item list-group-item-action active">View Product Profile</a>
 <a href="view_myorder.php" class="list-group-item list-group-item-action">View Order</a>
<a href="view_category.php" class="list-group-item list-group-item-action">View Category</a>
<a href="logout.php" class="list-group-item list-group-item-action">Log Out</a>
<!--<a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>-->
</div>
</div>
</div>
        </div>

        <div class="col-lg-9 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

          <div class="card border-dark mb-3">
<div class="card-header">Dashboard</div>
<div class="card-body text-dark">
  <h5 class="card-title" style="color:red;">Welcome to Pisanga</h5>
       <div class="table-responsive">

 <table class="table table-hover table-striped table-bordered" id="table_id">
                                                      <thead>
                                                          <tr>
                                                              <th>#</th>
                                                              <th>Accessories Category</th>
                                                              <th>Accessories SR NO</th>
                                                               <th>Accessories Image</th>
                                                              
                                                              <th>Accessories Cost</th>
                                                              <th>Accessories Cost Discount</th>

                                                              <th>Action</th>
                                                               
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                      <?php 






$servername = "localhost";
$username = "vaishakhpillai1";
$password = "9096115174";
$dbname = "pisanga_ecomm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `accessories` WHERE 1";

// echo $sql;
// die;

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) { 



while($row = mysqli_fetch_assoc($result)) {  



?> 
                    <tr> 
                      <td> <?php echo $row['id'] ?> </td>
                
                      <td><?php echo $row['access_category'] ?></td>

                      <td> <?php echo $row['access_name'] ?> </td>
                       <td> <a href='<?php echo $row['access_image'] ?> ' target='_blank' class='btn btn-primary'>View Photo</a>  </td>

                
                       <td> <?php echo $row['access_cost'] ?> </td>
                
                      <td><?php echo $row['access_discount'] ?></td>

                    <td> <a href="update_accessories.php?id=<?php echo $row['id'] ?>"> <i class="fa fa-pencil" style="font-size:25px;"></i> </a>&nbsp; &nbsp;
                        <a href="delete_accessories.php?id=<?php echo $row['id'] ?>"> <i class="fa fa-trash" style="font-size:25px; color:red;"></i> </a>
                         </td>
                    
                       
                       
                   
                     

                         </tr>



<?php }}  ?> 
                                                      </tbody>
                                                  </table>
                                                  </div>
                                              </div>




   
  
</div>
</div>

        </div>
         

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-5">
          <div class="footer-info">
              <img src="assets\img\Logo\Pisanga FINAL version-09.png" class="" alt="" style="width:50%;">
            <!-- <h3 style="color:white;">PISANGA</h3> -->
            <p class="pb-3"><em>At Pisanga we aspire to develop products of aluminium extrusions that have the strength and beauty as their essential attributes.</em></p>
             
            <div class="social-links mt-3">
              <a href="https://twitter.com/pisangaindia" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/pisangaindia" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/pisangaindia/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
             <!-- <a href="#" class="google-plus" target="_blank"><i class="bx bxl-skype"></i></a>-->
              <a href="https://www.linkedin.com/in/pisangaindia/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#details">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li> -->
            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
          </ul>
        </div>

        <div class="col-lg-7 col-md-7 footer-links">
          <!-- <h4>Our Services</h4> -->
              <center><i class="fa fa-map-marker" style="font-size:25px;"></i></center>
              <center>Sr no 120/1 2/1, Near Mane School, Rajwade Nagar Colony no 3 Kalewadi Pune 411017</center><br>
              
              <center><i class="fa fa-map-marker" style="font-size:25px;"></i></center>
              <center> Sr 64, Kalbhor Estate Opp Ador Welding, Chinchwad Pune 411019</center><br>
              
              <center><i class="fa fa-phone" style="font-size:25px;"></i></center>
              <center> <a href="tel:+91 9096115174">+91 9096115174</a> |
|  <a href="tel:+91 8605266036">+91 8605266036</a> </center><br>
              
              
              <center><i class="fa fa-envelope" style="font-size:25px;"></i></center>
              <center><a href="mailto:info@pisanga.com">info@pisanga.com&nbsp;</a>|<a href="mailto:sales@pisanga.com">&nbsp; sales@pisanga.com</a></center><br>
              
        </div>

        <!-- <div class="col-lg-4 col-md-6 footer-newsletter"> -->
          <!-- <h4>Our Newsletter</h4> -->
          <!-- <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p> -->
          <!-- <form action="" method="post"> -->
            <!-- <input type="email" name="email"><input type="submit" value="Subscribe"> -->
          <!-- </form> -->

        <!-- </div> -->

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>PISANGA</span></span></strong>. All Rights Reserved
    </div>
    <div class="credits">
       
     Designed by <a href="https://www.magicnlogic.com/" target="_blank">Magic & Logic Advertising Media </a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<div id="preloader"></div>

  <!-- Include jQuery -->
  <script src="assets/js/jquery-2.2.4.min.js"></script>

  


<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/TweenMax/TweenMax.min.js"></script>
<script src="assets/vendor/wavify/wavify.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/main1.js"></script>
<script src="numberverify.js"></script>

<script type="text/javascript" src="http://wowslider.com/images/demo/wowslider.js"></script>
<script type="text/javascript" src="http://wowslider.com/sliders/demo-57/engine1/script.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

 



<script type="text/javascript" >
$(document).ready( function () {
  $('#table_id').DataTable();
} );


$('.delete').click(function(){

 var answer = confirm('Are you sure that you want to do this?');
        if (!answer) {
            e.preventDefault();
        }

var user_id = this.id;




 $.ajax('function/delete_accessories.php', {
                   type: 'POST',  // http method
                   data: { 'user_id': user_id},  // data to submit
                   success: function (data, status, xhr) {

      
                   
if(data > 0){

  alert("Users Deleted sucessfully");
  $(location).attr('href', 'view_accessories.php')
}
else{
   
 alert("Values are not Deleted to User table properly");
}
},
error: function (jqXhr, textStatus, errorMessage) {
    alert('Error' + errorMessage);
}
                });



});



  </script> 




</body>

</html>
