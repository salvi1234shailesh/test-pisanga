<?php

session_start();
    include "function/dbconfig.php";
    error_reporting(0);



   
   if($_SESSION["cust_id"] == ''){
     
      header('location: index.php');
   }
   
  

 $user_id=$_SESSION["cust_id"];
// echo $user_id; 


 $sql = "SELECT * FROM `cart_info` WHERE user_id='$user_id'";

 

$result = mysqli_query($conn, $sql);

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
<style>



h3 {
     font-family: 'Marcellus SC';
}
 
</style>  
</head>

<body>

<header id="header" class="fixed-top d-flex align-items-center" style="background: rgba(1, 4, 136, 0.9);
">
    <div class="container d-flex align-items-center">
    
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="shopindex.php"><span><img src="assets\img\Logo\PNG\60 px.png" class="" alt="">&nbsp;<img src="assets\img\Logo\Pisanga FINAL version-09.png" class="" alt=""></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="shopindex.php">Home</a></li>
          <li><a href="shopabout.php">About Us</a></li>
          <!--<li><a href="shopaccessories.php">Accessories</a></li>-->
        <!--  <li><a href="Accessories.html"></a></li> -->
          <li class="drop-down"><a href="">Products</a>
            <ul>
              <li class=""><a href="alumin_profile.php">Aluminium Profile & Accessories</a></li>
              <li><a href="shopworkstation.php">Workstation</a></li>
              <li><a href="shopconveyor.php">Conveyor</a></li>  
            </ul>
          </li>
          <li><a href="shopcontact.php">Contact</a></li>
           
              <li class="nav-item nav-profile dropdown active">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
               
              <span class="nav-profile-name"><?php echo $_SESSION["cust_name"] ?> </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a href="my_order.php"class="dropdown-item" style="color:black;">
                <i class="fa fa-settings text-primary"></i>
                My Order
              </a>
              <a class="dropdown-item" href="my_cart.php" style="color:black;">
                <i class="fa fa-shopping-cart  text-danger"></i>
                My Cart
              </a>
              <a class="dropdown-item" href="logout.php" style="color:black;">
                <i class="fa fa-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
                
            </ul>
          </li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
    
    
        
   

    <main id="main">
 
  
    <style>
        /*@import url('https://fonts.googleapis.com/css?family=Titillium+Web');*/

        /**{*/
        /*    font-family: 'Titillium Web', sans-serif;*/
        /*}*/
         
        table, th, tr{
            text-align: center;
       
       font-size: 16px; }
         
        h2{
            text-align: center;
            color: #66afe9;
             
            padding: 2%;
        }
        
    </style>
 
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <!-- <h2>Contact</h2> -->
         
        </div>

        <div class="row">


          <div class="col-lg-12" data-aos="fade-right" data-aos-delay="100">
            <h2> Shopping Cart Details </h2>

            <div class="table-responsive">
              <table class="table">
  <thead class="thead-dark" >
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price Details </th>
      <th scope="col">Total Price   </th>
       <th scope="col">Total Remove Item
   </th>
    </tr>
  </thead>
  <tbody>
                                                           <?php 
 



if (mysqli_num_rows($result) > 0) { 


$total_price=0;

 while($row = mysqli_fetch_assoc($result)) {  

 $total = $total + ($row["item_quantity"] * $row["item_price"]);

?> 
                 
                                       <tr>
                         
                           
                            
                            <td>
                              <input type="hidden" name="item_name" value="<?php echo $row['item_name']; ?>"><?php echo $row['item_name']; ?></td>
                            <td><input type="text" style="width:30%;" name="item_quantity" value="<?php echo $row['item_quantity']; ?>"> <a   href="update_quantity.php?product_id=<?php echo $row['product_id'] ?>" >Update </a> </td>
                            <td><input type="hidden" name="item_name" value="<?php echo $row['item_price']; ?>">₹<?php echo $row['item_price']; ?>
                          </td>
                            
                           
                             
                            <td>₹<?php echo $row["item_quantity"] * $row["item_price"]; ?></td>
                             <td><a class="" href="delete_cart.php?product_id=<?php echo $row['product_id'] ?>"><i class="ti-pencil" ></i><span style="color:red!important;">Delete Item</span></a></td>
                             
                             
</tr>
                         
                        <?php
                    }}
                ?>

                <tr>
                    <td colspan="2"></td>
                    <td>Total</td>
                    <td>₹<?php echo number_format($total, 2); ?> </td>
                    <td></td>
                </tr>
  </tbody>
</table>
</div>
 
 

          </div>
           
          <div class="col-lg-2" data-aos="fade-right" data-aos-delay="100">
            <a class="btn btn-primary" href="alumin_profile.php" role="button"><i class="fa fa-angle-left" style=""></i>&nbsp;&nbsp;Continue Shopping</a>
          </div>
          <div class="col-lg-8" data-aos="fade-right" data-aos-delay="100">
          </div>
          <div class="col-lg-2" data-aos="fade-left" data-aos-delay="200">
            <a class="btn btn-danger" href="checkout.php" role="button">Checkout</a></right>

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
              <!-- <p> -->
                <!-- A108 Adam Street <br> -->
                <!-- NY 535022, USA<br><br> -->
                <!-- <strong>Phone:</strong> +1 5589 55488 55<br> -->
                <!-- <strong>Email:</strong> info@example.com<br> -->
              <!-- </p> -->
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
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
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

<script type="text/javascript" src="http://wowslider.com/images/demo/wowslider.js"></script>
<script type="text/javascript" src="http://wowslider.com/sliders/demo-57/engine1/script.js"></script>
 
</body>

</html>

<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    mouseDrag:false,
    autoplay:true,
    animateOut: 'slideOutUp',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
</script>