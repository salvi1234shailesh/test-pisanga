
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



h3 {
     font-family: 'Marcellus SC';
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero1 {
  width: 100%;
     height: 80vh;
  background-color: rgba(14, 11, 10, 0.8);
  overflow: hidden;
  position: relative;
  padding: 0;
}

#hero1 .carousel-item {
  width: 100%;
  height: 80vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}

#hero1 .container {
  display: flex;
  align-items: flex-end;
  justify-content: center;
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero1 .carousel-content {
	 background: rgba(1, 3, 100, 0.8);
	  padding: 20px;
	  color: #fff;
	  -webkit-animation-duration: .5s;
	  animation-duration: .3s;
	  border-top: 5px solid rgba(1, 3, 111, 0.8);  /* border */
		  width: 60%;
    
   margin-bottom: 76px;
    margin-left: 441px;

}

#hero1 .carousel-content h2 {
  color: #fff;
  margin-bottom: 10px;
  font-size: 20px;
  font-weight: 700;
}

#hero1 .btn-get-started {
  
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 4px;
  transition: 0.5s;
  line-height: 1;
  margin: 10px;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  border: 2px solid #f03c02;
}

#hero1 .btn-get-started:hover {
  background: #f03c02;
  color: #fff;
  text-decoration: none;
}

#hero1 .carousel-inner .carousel-item {
  transition-property: opacity;
}

#hero1 .carousel-inner .carousel-item,
#hero1 .carousel-inner .active.carousel-item-left,
#hero1 .carousel-inner .active.carousel-item-right {
  opacity: 0;
}

#hero1 .carousel-inner .active,
#hero1 .carousel-inner .carousel-item-next.carousel-item-left,
#hero1 .carousel-inner .carousel-item-prev.carousel-item-right {
  opacity: 1;
  transition: 0.5s;
}

#hero1 .carousel-inner .carousel-item-next,
#hero1 .carousel-inner .carousel-item-prev,
#hero1 .carousel-inner .active.carousel-item-left,
#hero1 .carousel-inner .active.carousel-item-right {
  left: 0;
  transform: translate3d(0, 0, 0);
}

#hero1 .carousel-control-prev, #hero1 .carousel-control-next {
  width: 10%;
}

#hero1 .carousel-control-next-icon, #hero1 .carousel-control-prev-icon {
  background: none;
  font-size: 48px;
  line-height: 1;
  width: auto;
  height: auto;
}

#hero1 .carousel-indicators li {
  cursor: pointer;
}

@media (min-width: 1024px) {
<!-- #hero1 { -->
    <!-- height: calc(55vh - 72px); -->
<!-- } -->
  #hero1 .carousel-content {
    width: 60%;
  }
  #hero1 .carousel-control-prev, #hero .carousel-control-next {
    width: 5%;
  }
}

@media (max-width: 992px) {
  #hero1 {
    height: calc(100vh - 72px);
  }
  #hero1 .carousel-item {
    height: calc(100vh - 72px);
  }
}

@media (max-width: 768px) {
#hero1 {
    height: calc(55vh - 72px);
}
  #hero1 .carousel-content {
    margin: 0 40px 60px 40px;
  }
  #hero1 .carousel-content h2 {
    margin-bottom: 15px;
    font-size: 22px;
  }
  #hero1 .carousel-content p {
    font-size: 15px;
  }
}
@media (max-width: 414px){
#hero1 {
    height: calc(70vh - 72px);
}
#hero1 .carousel-content {
    margin: 0 40px 60px 40px;
    width: 100%;
}
}
@media (max-width: 411px){
#hero1 {
    height: calc(69vh - 72px);
}
#hero1 .carousel-content {
    margin: 0 40px 60px 40px;
    width: 100%;
    margin-bottom: 87px;
}
}
@media (max-width: 375px){
#hero1 {
    height: calc(70vh - 72px);
}
}

@media (max-width: 320px){
#hero1 .carousel-content {
    margin: 0 40px 60px 40px;
    width: 100%;
    margin-bottom: 177px;
}

#hero1 .carousel-content p {
    font-size: 10px;
}
#hero1 .carousel-control-next-icon, #hero1 .carousel-control-prev-icon {
    background: none;
    font-size: 48px;
    line-height: 1;
    width: auto;
    height: auto;
    margin-bottom: 151px;
}
}



span .item {
  height: 80vh;
  position: relative;
}
span .item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
span .item .cover {
  padding: 75px 0;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(1, 3, 111, 0.8);
  display: flex;
  align-items: center;
}
span .item .cover .header-content {
  position: relative;
  padding: 56px;
  overflow: hidden;
}
span .item .cover .header-content .line {
  content: "";
  display: inline-block;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  position: absolute;
  border: 9px solid #fff;
  -webkit-clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
  clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
}
span .item .cover .header-content h2 {
  font-weight: 300;
  font-size: 35px;
  color: #fff;
}
span .item .cover .header-content h1 {
  font-size: 56px;
  font-weight: 600;
  margin: 5px 0 20px;
  word-spacing: 3px;
  color: #fff;
}
span .item .cover .header-content h4 {
  font-size: 24px;
  font-weight: 300;
  text-align: justify;
  line-height: 36px;
  color: #fff;
}
span .owl-item.active h1 {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInDown;
  animation-delay: 0.3s;
}
span .owl-item.active h2 {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInDown;
  animation-delay: 0.3s;
}
span .owl-item.active h4 {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInUp;
  animation-delay: 0.3s;
}
span .owl-item.active .line {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInLeft;
  animation-delay: 0.3s;
}
span .owl-nav .owl-prev {
  position: absolute;
  left: 15px;
  top: 43%;
  opacity: 0;
  -webkit-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
  background: rgba(1, 3, 111, 0.8) !important;
  width: 40px;
  cursor: pointer;
  height: 40px;
  position: absolute;
  display: block;
  z-index: 1000;
  border-radius: 0;
}
span .owl-nav .owl-prev span {
  font-size: 1.6875rem;
  color: #fff;
}
span .owl-nav .owl-prev:focus {
  outline: 0;
}
span .owl-nav .owl-prev:hover {
  background: #000 !important;
}
span .owl-nav .owl-next {
  position: absolute;
  right: 15px;
  top: 43%;
  opacity: 0;
  -webkit-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
  background: rgba(1, 3, 111, 0.8) !important;
  width: 40px;
  cursor: pointer;
  height: 40px;
  position: absolute;
  display: block;
  z-index: 1000;
  border-radius: 0;
}
span .owl-nav .owl-next span {
  font-size: 1.6875rem;
  color: #fff;
}
span .owl-nav .owl-next:focus {
  outline: 0;
}
span .owl-nav .owl-next:hover {
  background: #000 !important;
}
span:hover .owl-prev {
  left: 0px;
  opacity: 1;
}
span:hover .owl-next {
  right: 0px;
  opacity: 1;
}

@media only screen and (max-width: 600px){
span .item .cover .header-content h1 {
  font-size: 22px;
  font-weight: 600;
  word-spacing: 3px;
  color: #fff;
}
span .item .cover .header-content h4 {
  font-size: 17px;
  line-height: 25px;

}

span .item .cover .header-content {
  padding: 50px;
}
}
@media only screen and (min-width: 600px){
span .item {
  height: 80vh;
}
}

@media screen and (min-width: 767px){
span .item {
  height: 60vh;
}
span .item .cover .header-content {
  padding: 56px;
}
}

@media screen and (min-width: 900px){
span .item {
  height: 80vh;
}
span .item .cover .header-content {
  padding: 56px;
}
}

@media screen and (min-width: 1024px){
span .item {
  height: 50vh;
}
}
@media screen and (min-width: 1281px){
span .item {
  height: 80vh;
}
}



 #client_r{
 text-align: left;
 }
 #client_media1{
    height : 200px;
 }
 #client_r1{
 text-align: center;
 }
 #client_media2{
    height : 200px;
 }
  #client_r2{
 text-align: right;
 }
@media only screen and (max-width: 600px){
 #client_media{
    height : 170px;
	padding-bottom:40px;
 }
 #client_media1{
    height : 170px;
	padding-bottom:40px;
 }
 #client_media2{
    height : 170px;
	text-align: center;
 }
 #client_r{
 text-align: center;
 }
 #client_r1{
 text-align: center;
 }
 #client_r2{
 text-align: center;
 }
 
}

.contact .php-email-form .error-message{
background: #fff;
}
</style>  
</head>

<body>

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
               
              <span class="nav-profile-name">Welcome &nbsp;<?php echo $_SESSION["name"] ?> </span>
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
	
	<section id="details" class="details" style="background-color: #f5f5f5; padding-top: 100px;padding-bottom: 15px;">
			<div class="container">
			    <style>
			        ol.breadcrumb {
    float: right;
}
			    </style>
			
				<div class="row content" >
					<div class="col-md-5" data-aos="fade-right">
						<h2>WORKSTATION</h2>
					</div>
					<div class="col-md-7 pt-4" data-aos="fade-up">
		 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Product</a></li>
    <li class="breadcrumb-item active" aria-current="page">Workstation</li>
  </ol>
</nav>
				    </div>
				</div>
			</div>
		</section>

	<main id="main">
	 
	 
  
  
	
	
	<section id="details1" class="details">
      <div class="container">
		 
        <div class="row content">
          <div class="col-md-4 col-xm-12 col-sm-12" data-aos="fade-right">
            <img src="assets/img/workstation/workstation3.jpg" class="img-fluid" alt="" style="width:180%">
          </div>
		  <div class="col-md-4 col-xm-12 col-sm-12" data-aos="fade-right">
			 <img src="assets\img\model 993.jpg" class="img-fluid" alt="" style="width:50%; margin-left:80px; margin-top:20px;">
           </div>
		  <div class="col-md-4 col-xm-12 col-sm-12" data-aos="fade-right">
            <img src="assets\img\Conveyor New Image\Arbeitstisch_Schnaithmann_Maschinenbau_rechts.jpg" class="img-fluid" alt="" style="margin-top:20px;">
          
          </div>
		  </div>
            <div class="row content">
				<!-- <div class="col-md-4" data-aos="fade-right"></div> -->
				<div class="col-md-12 col-xm-12 col-lg-12 col-sm-12" data-aos="fade-right">
					<!--<div class="row content"  style="color:black; padding:10px;" >-->
				<p style="text-align: justify; ">
				 <big>O</big>ur Workstations are designed and manufactured based largely on the principle of
                  ergonomics and has a positive impact on the overall rate of production. They have
                  promising manufacturing which ensures strong joints, easy reach, comfort and
                  aesthetic appearance. We have customized design options for every type of requirements
                  as no two tasks has the same problem. </p>
				<!--</div>-->
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
|  <a href="tel:+91 8605266036">+91 8605266036</a></center><br>
				
				
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