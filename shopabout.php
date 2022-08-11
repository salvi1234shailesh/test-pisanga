<?php
   session_start();
   error_reporting(0);
  $con=mysqli_connect("localhost","vaishakhpillai1","9096115174","pisanga_ecomm");
    
   
   
 if($_SESSION["cid"] =='') 
 {
      header('location: shop.php');
 }
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



  
 

.contact .php-email-form .error-message{
background: #fff;
}
</style>  
</head>

<body>

  <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center" style="background: rgba(1, 4, 136, 0.9);
">
    <div class="container d-flex align-items-center">
    
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="shop.php"><span><img src="assets\img\Logo\PNG\60 px.png" class="" alt="">&nbsp;<img src="assets\img\Logo\Pisanga FINAL version-09.png" class="" alt=""></span></a></h1>
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
              <li class=""><a href="shop.php">Aluminium Profile & Accessories</a></li>
              <li><a href="shopworkstation.php">Workstation</a></li>
              <li><a href="shopconveyor.php">Conveyor</a></li>  
            </ul>
          </li>
          <li><a href="shopcontact.php">Contact</a></li>
           
              <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
               
              <span class="nav-profile-name"><?php echo $_SESSION["name"] ?> </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
               
              <a class="dropdown-item" href="cart.php" style="color:black;">
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
  

  <!-- ======= Hero Section ======= -->
  	<section id="details" class="details" style="background-color: #f5f5f5; padding-top: 100px;padding-bottom: 15px;">
			<div class="container">
			    <style>
			        ol.breadcrumb {
    float: right;
}
			    </style>
			
				<div class="row content" >
					<div class="col-md-5" data-aos="fade-right">
						<h2>ABOUT US</h2>
					</div>
					<div class="col-md-7 pt-4" data-aos="fade-up">
					<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">About Us</li>
  </ol>
</nav>
				    </div>
				</div>
			</div>
		</section>

 

	<main id="main">
	    
	    
	 
	 
	    
	    
		<section id="details" class="details"  >
			<div class="container">
				 
				<div class="row content">
					<div class="col-md-5" data-aos="fade-right">
						<img src="assets/img/IMG_2227.JPG" class="img-fluid" alt="">
					</div>
					<div class="col-md-7 pt-4" data-aos="fade-up">
						<p style="color:black;  text-align:justify;">Pisanga as an organisation has a luxury that it is run by the energy of youths.
							Their knowledge, creativity, dedication and liberal minds are the building block of our
						company.</p>
						<p style="color:black;  text-align:justify;">We at Pisanga build products of aluminium extrusions that have a good aesthetic design and
						strong manufacturing. Products like Industrial Workstations and Conveyor. Assembly System
						are the primary products. We also supply varied aluminium extrusions and their connecting
						accessories.
						</p>
						<p style="color:black;  text-align:justify;">
						Best client service and good relation are all that we achieve with our clients.
							We are driven by a basic fundamental value, that whatever we create it should be ’Strong and
							Beautiful ’ as it is true for our product it is true with our relations.
						</p>
						<h3><p style="font-size: 22px;">Strong And Beautiful</p></h3>
						<p class="" style="color:black;  text-align:justify;">
							At Pisanga we aspire to develop products of aluminium
							extrusions that have the strength and beauty as their
							essential attributes. 
						</p>
				    </div>
				</div>
			</div>
		</section>
	 
	
	
 

	
 
   

   

  
    
 

   
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <!-- <h2>Contact</h2> -->
          <center><h3>Contact Us</h3></center>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Sr 64, Kalbhor Estate Opp Ador Welding, Chinchwad Pune 411019</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@pisanga.com | sales@pisanga.com </p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91- 9096115174 | +91- 8605266036 </p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="shopsend_mail.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="name" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

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
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about/php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li> -->
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>

          <div class="col-lg-7 col-md-7 footer-links">
            <!-- <h4>Our Services</h4> -->
				<center><i class="fa fa-map-marker" style="font-size:25px;"></i></center>
				<center>Sr No 120/1 2/1, Near Mane School, Rajwade Nagar Colony no 3 Kalewadi Pune 411017</center><br>
				
				<center><i class="fa fa-map-marker" style="font-size:25px;"></i></center>
				<center> Sr 64, Kalbhor Estate Opp Ador Welding, Chinchwad Pune 411019</center><br>
				
				<center><i class="fa fa-phone" style="font-size:25px;"></i></center>
				<center><a href="tel:+91 9096115174">+91 9096115174</a> |
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