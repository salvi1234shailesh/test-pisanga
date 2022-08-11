<?php
   session_start();
   error_reporting(0);
   include "function/dbconfig.php";
   
   if($_SESSION["cid"] == ''){
     
      header('location: shop.php');
   }
   
   
   include "header.php";
   
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
 

<!-- get button-->
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "110312837909054", // Facebook page ID
            facebook_chat: true, // Facebook customer chat
            whatsapp: "+91 90961 15174", // WhatsApp number
            call_to_action: "Message us", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->





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
    ol.breadcrumb {
    float: left;
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
   
   

  <!-- ======= Hero Section ======= -->
	<section id="hero">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
					<div data-aos="zoom-out">
						<span><img src="assets\img\Logo\Pisanga FINAL version-09.png" class="" alt="" width="200" height="110"></span>
						<h1 style="font-size:15px;"><B></b> <a href="alumin_profile.php" style="color:white;" >ALUMINIUM EXTRUSIONS</a>  |  <a href="workstation.php" style="color:white;" >INDUSTRIAL WORSTATIONS</a>  | 
						<a href="conveyor.php"  style="color:white;">CONVEYOR SYSTEM</a> </B></h1>
						<div class="text-center text-lg-left">
						  <a href="#details" class="btn-get-started scrollto">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
				  <img src="assets/img/Logo/500px.png" class="img-fluid animated" alt="">
				</div>
			</div>
		</div>

		<div class="hero-waves">
			<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">
				<defs></defs>
				<path id="wave1" d=""/>
			</svg>
			<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">
				<defs></defs>
				<path id="wave2" d="" />
			</svg>
		</div>
	</section><!-- End Hero -->

	<main id="main">
		<section id="details" class="details">
			<div class="container">
				<center><h3>ABOUT US</h3></center>
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
		<br>
		<br>
		<br>
	<!-- ======= Hero1 Section ======= -->
					<center><h3>Aluminium Profile</h3></center>
  
  <section id="alumin">
         <span>
            <div class="owl-carousel owl-theme">         
                <div class="item">
                    <img src="assets/aluminprofile/extrusion_aluminium.jpg" alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line animated bounceInLeft"></div>
                                <!--<h2>Reimagine Digital Experience with</h2>-->
                                <h1>Aluminium Profile</h1>
                                <h4>We excel in providing various standard and customised
                                aluminium extrusions with utmost quality. We have capability
                                of developing various fittings and accessorises as per customer
                                requirement. In addition to fencing profiles, we also supply extrusions for industrial, commercial, workstation and conveyor frames.</h4>
                             
                            </div>
                        </div>
                     </div>
                </div>                
                <div class="item">
                    <img src="assets/img/profileDisplay.png" alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line animated bounceInLeft"></div>
                                <!--<h2>Peimagine Digital Experience with</h2>-->
                                <h1>Aluminium Profile</h1>
                                <h4>We excel in providing various standard and customised
                                aluminium extrusions with utmost quality. We have capability
                                of developing various fittings and accessorises as per customer
                                requirement. In addition to fencing profiles, we also supply extrusions
                                for workstation, conveyor frames and commercial use.</h4>
                                 
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </span>
  	<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">-->
    <!-- Indicators -->
   <!--  <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>-->

    <!-- Wrapper for slides -->
   <!--  <div class="carousel-inner">

      <div class="item active">
        <img src="assets/img/aluminum_profiles_product.jpg" alt="Los Angeles" style="width:100%;height:500px;">
        <div class="carousel-caption">
        	<div class="row">
        		<div class="col-lg-6">
        			<div class="card-deck">
			  <div class="card" style="background-color: #1a1d94">
			    <div class="card-body text-center">
			      <p class="card-text">
			      	<div class="row">
			      		<div class="col-lg-6">
			      			<img src="assets/img/Right Side Image.png" class="img-fluid" alt="" style="height:400px; width: 1000px;">
			      		</div>
			      		<div class="col-lg-6">
			      			<h2><p>Aluminium Profile</p></h2>
			      			<p>We excel in providing various standard and customised
                                aluminium extrusions with utmost quality. We have capability
                                of developing various fittings and accessorises as per customer
                                requirement. In addition to fencing profiles, we also supply extrusions
                                for workstation, conveyor frames and commercial use.</p>
			      			</div>
			      	</div>
			      	</p>
			    </div>
			  </div>
		  </div>
        		</div>
        	</div>
        
        </div>
      </div>

      <div class="item">
        <img src="assets/img/extrusion_aluminium.jpg" alt="Chicago" style="width:100%;height:500px;">
        <div class="carousel-caption">
        	<div class="row">
        		<div class="col-lg-6">
        			<div class="card-deck">
			  <div class="card" style="background-color: #1a1d94">
			    <div class="card-body text-center">
			      <p class="card-text">
			      	<div class="row">
			      		<div class="col-lg-6">
			      			<img src="assets/img/Right Side Image.png" class="img-fluid" alt="" style="height:400px; width: 1000px;">
			      		</div>
			      		<div class="col-lg-6">
			      			<h2><p>Aluminium Profile</p></h2>
			      			<p>We excel in providing various standard and customised
                                aluminium extrusions with utmost quality. We have capability
                                of developing various fittings and accessorises as per customer
                                requirement. In addition to fencing profiles, we also supply extrusions
                                for workstation, conveyor frames and commercial use.</p>
			      			</div>
			      	</div>
			      	</p>
			    </div>
			  </div>
		  </div>
        		</div>
        	</div>
        
        </div>
      </div>
    
      <div class="item">
        <img src="assets/img/profileDisplay.png" alt="New York" style="width:100%;height:500px;">
        <div class="carousel-caption">
        	<div class="row">
        		<div class="col-lg-6">
        			<div class="card-deck">
			  <div class="card" style="background-color: #1a1d94">
			    <div class="card-body text-center">
			      <p class="card-text">
			      	<div class="row">
			      		<div class="col-lg-6">
			      			<img src="assets/img/Right Side Image.png" class="img-fluid" alt="" style="height:400px; width: 1000px;">
			      		</div>
			      		<div class="col-lg-6">
			      			<h2><p>Aluminium Profile</p></h2>
			      			<p>We excel in providing various standard and customised
                                aluminium extrusions with utmost quality. We have capability
                                of developing various fittings and accessorises as per customer
                                requirement. In addition to fencing profiles, we also supply extrusions
                                for workstation, conveyor frames and commercial use.</p>
			      			</div>
			      	</div>
			      	</p>
			    </div>
			  </div>
		  </div>
        		</div>
        	</div>
        
        </div>
      </div>
  
    </div>-->

    <!-- Left and right controls -->
    <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>-->
 
  </section>
  
  
   <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <!--<div class="section-title" data-aos="fade-up">-->
        <!--  <h2>Team</h2>-->
        <!--  <p>Our Great Team</p>f-->
        <!--</div>-->
        
        <div id="demo" class="carousel slide" data-ride="carousel" data-interval="3000">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                   
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                       <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/aluminprofile/4414.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Profile No 4414</h4>
 <span> <a href="alumin_profile.php" class="btn-get-started scrollto  " style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Add Cart </a></span>
                 
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/aluminprofile/4445.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Profile No 4445</h4>
                <span> <a href="alumin_profile.php" class="btn-get-started scrollto  " style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Add Cart </a></span>
                 
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/aluminprofile/4465.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Profile No 4465</h4>
                 <span> <a href="alumin_profile.php" class="btn-get-started scrollto  " style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Add Cart </a></span>
                 
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/aluminprofile/4474.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Profile No 4474</h4>
                 <span> <a href="alumin_profile.php" class="btn-get-started scrollto  " style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Add Cart </a></span>
                 
              </div>
            </div>
          </div>

        </div>
                    </div>
                    <div class="carousel-item">
                     <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
             <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/aluminprofile/4412.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Profile No 4412</h4>
                 <span> <a href="alumin_profile.php" class="btn-get-started scrollto  " style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Add Cart </a></span>
                 
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/aluminprofile/4413.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Profile No 4413</h4>
                <span> <a href="alumin_profile.php" class="btn-get-started scrollto  " style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Add Cart </a></span>
                 
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/aluminprofile/4430.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Profile No 4430</h4>
                 <span> <a href="alumin_profile.php" class="btn-get-started scrollto  " style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Add Cart </a></span>
                 
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/aluminprofile/4464.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Profile No 4464</h4>
                 <span> <a href="alumin_profile.php" class="btn-get-started scrollto  " style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Add Cart </a></span>
                 
              </div>
            </div>
          </div>

        </div>
                    </div>
                    <div class="carousel-item">
<div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/aluminprofile/4416.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Profile No 4416</h4>
                 <span> <a href="alumin_profile.php" class="btn-get-started scrollto  " style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Add Cart </a></span>
                 
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
             <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/aluminprofile/4415.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Profile No 4415</h4>
                 <span> <a href="alumin_profile.php" class="btn-get-started scrollto  " style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Add Cart </a></span>
                 
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/aluminprofile/4468.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Profile No 4468</h4>
                 <span> <a href="alumin_profile.php" class="btn-get-started scrollto  " style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Add Cart </a></span>
                 
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/aluminprofile/4470.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Profile No 4470</h4>
                <span> <a href="alumin_profile.php" class="btn-get-started scrollto  " style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Add Cart </a></span>
                 
              </div>
            </div>
          </div>

        </div>
                    </div>
               
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        
        
        
        
        <style>
            
            a.carousel-control-prev {
    display: none;
}
a.carousel-control-next {
    display: none;
}
            
        </style>
        

        

      </div>
    </section><!-- End Team Section -->
  
  
  
  
  
  
  <section id="gallery" class="gallery">
      <div class="container">

        <!--<div class="section-title" data-aos="fade-up">-->
        <!--  <h2>Gallery</h2>-->
        <!--  <p>Check our Gallery</p>-->
        <!--</div>-->
        
         
        

        <div class="row no-gutters" data-aos="fade-left">

          <div class="col-lg-12 col-md-4 text-center">
             <a href="alumin_profile.php" class="btn-get-started scrollto  " style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">See For More Product </a>
  
          </div>
 

           

          

        </div>
        <br>
        <br>
        
         
      </div>
      
      
    </section><!-- End Gallery Section -->
  
  
	
	
	<section id="details1" class="details">
      <div class="container">
		<center><h3>WORKSTATION</h3></center>
        <div class="row content">
          <div class="col-md-4 col-xm-12 col-sm-12" data-aos="fade-right">
            <img src="workstation3-min.jpg" class="img-fluid" alt="" style="width:180%">
          </div>
		  <div class="col-md-4 col-xm-12 col-sm-12" data-aos="fade-right">
			 <img src="assets/workstation/model 993-min.jpg" class="img-fluid" alt="" style="width:50%; margin-left:80px; margin-top:20px;">
           </div>
		  <div class="col-md-4 col-xm-12 col-sm-12" data-aos="fade-right">
            <img src="assets/workstation/Arbeitstisch_Schnaithmann_Maschinenbau_rechts-min.jpg" class="img-fluid" alt="" style="margin-top:20px;">
          
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
   <!-- ======= Details Section ======= -->
    <section id="details2" class="details2">
		<div class="container">
			<center><h3>Conveyor system</h3></center>
			<div class="row content">
				<div class="col-md-6">
					<img src="assets/convey/Conveyor_Image_2.jpg" class="img-fluid" alt="" style="width:100%">
				</div>
				<div class="col-md-6">
						<p style="text-align: justify; margin-top:70px; color:black ">
						  <big>A</big>t Pisanga we develop multi-industrial conveyor systems with
							customisation according to the requirement of our clients. We
							specially design the system to lower the cost of the product and give
							maximum output. We have expertise in creating almost all types of
							conveyors irrespective of the complexity of the system</p>
				</div>
			</div>
			<div class="row content" style="margin-top:0px;">
				<div class="col-md-6">
					<img src="assets/convey/Conveyor_Image_3.jpg" class="img-fluid" alt="" style="width:100%">
				</div>
				<div class="col-md-6">
						<img src="assets/convey/Conveyor_New_Image_1.png" class="img-fluid" alt="" style="width:100%; margin-top:20px;">
				</div>
			</div>
		</div>
    </section><!-- End Details Section -->

	
	
	
	
	

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">41</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">78</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

	
	
	<!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
		
        <div class="section-title" data-aos="fade-up">
          <!-- <h2>Some of our <strong>recent works</strong></h2> -->
		  <center><h3>Accessories</h3></center>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
             <!-- <li data-filter=".filter-app">Workstation</li> -->
              <!-- <li data-filter=".filter-card">Conveyor System</li> -->
              <li data-filter=".filter-web">Alluminum Extrusion</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

           <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/img/accessories/IMG_2327.JPG" class="img-fluid" alt="" style="width:100%;" >
            <div class="portfolio-info" style="width: 90%; text-align:center;">
              <h5>Bolt Connector</h5>
              <a href="assets/img/accessories/IMG_2327.JPG" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><!--<i class="bx bx-plus"></i>--></a>
              <!--<a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

          
          <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/img/accessories/IMG_2289.JPG" class="img-fluid" alt="">
            <div class="portfolio-info" id="pf1" style="text-align:center;">
              <h5>Bracket Connector</h5>
              <a href="assets/img/accessories/IMG_2289.JPG" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"> <!--<i class="bx bx-plus"></i>--></a>
              <!--<a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>

         
          <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/img/accessories/IMG_2236.JPG"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info" style="text-align:center;">
              <h5>Plate Connector</h5>
              <a href="assets/img/accessories/IMG_2236.JPG" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"> <!--<i class="bx bx-plus"></i>--></a>
               <!--<a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>
		  
		  
          <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/img/accessories/IMG_2232.JPG"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info" style="text-align:center;">
              <h5>Corner Brackets</h5>
              <a href="assets/img/accessories/IMG_2232.JPG" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"> <!--<i class="bx bx-plus"></i>--></a>
               <!--<a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>
		  
		  
          <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/accessories/IMG_2238.jpg"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info" style="text-align:center;">
              <h5>Aluminium Angle</h5>
              <a href="assets/img/accessories/IMG_2238.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"> <!--<i class="bx bx-plus"></i>--></a>
               <!--<a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>
		  
		  
          <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/accessories/IMG_2234.jpg"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info" style="text-align:center;">
              <h5>Bracing Plates</h5>
              <a href="assets/accessories/IMG_2234.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"> <!--<i class="bx bx-plus"></i>--></a>
              <!-- <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>
		  
		  
          <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/img/accessories/IMG_2255.PNG"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info" style="text-align:center;">
              <h5>Tilt Brackets</h5>
              <a href="assets/img/accessories/IMG_2255.PNG" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"> <!--<i class="bx bx-plus"></i>--></a>
               <!--<a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>
		  
		  
          <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/accessories/IMG_2256.jpg"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info" style="text-align:center;">
              <h5>Square Washer</h5>
              <a href="assets/accessories/IMG_2256.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"> <!--<i class="bx bx-plus"></i>--></a>
               <!--<a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>
		  
		   <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/accessories/IMG_2257_p.jpg"  class="img-fluid" alt="" >
            <div class="portfolio-info" style="text-align:center;">
              <h5>Nylon Hinges</h5>
              <a href="assets/accessories/IMG_2257_p.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"> <!--<i class="bx bx-plus"></i>--></a>
              <!-- <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>
		  
		   <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/img/accessories/IMG_2246.GIF"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info" style="text-align:center;">
              <h5>Foundation Brackets</h5>
              <a href="assets/img/accessories/IMG_2246.GIF" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"> <!--<i class="bx bx-plus"></i>--></a>
               <!--<a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>
		  
		   <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/img/accessories/IMG_2265.JPG"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info" style="text-align:center;">
              <h5>Castors Wheels</h5>
              <a href="assets/img/accessories/IMG_2265.JPG" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"> <!--<i class="bx bx-plus"></i>--></a>
               <!--<a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>
		  
		   <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/img/accessories/IMG_2260.JPG"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info" style="text-align:center;">
              <h5>Leveling Pad</h5>
              <a href="assets/img/accessories/IMG_2260.JPG" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"> <!--<i class="bx bx-plus">--></i></a>
               <!--<a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
            </div>
          </div>
		  
        </div>

      </div>
    </section><!-- End Portfolio Section -->

   

  
    
	<!-- Client Section -->
<center><h3>Our Clients</h3></center>
     <section id="testimonials1" class="testimonials1">
		<div class="container">
			
			<div class="row">
				
				<div class="col-md-4" id="client_r">
					<img src="aassets/client/download (1).jpg" class="img-fluid" alt="" id="client_media">
				</div>
				<div class="col-md-4" id="client_r1">
					<img src="assets/client/download.png" class="img-fluid" alt="" id="client_media1">
				</div>
				<div class="col-md-4" id="client_r2">
					<img src="assets/client/schindler.png" class="img-fluid" alt="" id="client_media2">
				</div>
			</div>
		</div>
    </section><!-- End Client Section -->

   
    
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
                <p>+91- 9322742624 | +91- 9096115174 <br> +91- 8484046948 </p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="shopsend_mail.php" method="post"  >
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
                <input type="text" class="form-control" name="mobile" id="subject" placeholder="Phone Number" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
               
              <div class="text-center"><input type="submit" name="submit" style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px;"> </div>
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

<script src="numberverify.js"></script>


 <script>
    $(document).ready(function(){
        $("#loginbtn").click(function(){
            var username = $("#username").val();
            
            $.ajax('function/userlogin.php', {
                type: 'POST',  // http method
                data: { 'username': username },  // data to submit
               
                success: function (data, status, xhr) {
      
                    if(data > 0){
                
                      alert("Login Successful");
                $(location).attr('href', 'alumin_profile.php')
                    }
                    else{
                     alert("Username or Password is incorrect");
                    }
                },
                error: function (jqXhr, textStatus, errorMessage) {
                        alert('Error' + errorMessage);
                }
            });
        });
    });
  </script>
  
 
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