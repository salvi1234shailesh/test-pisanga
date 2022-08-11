<?php
   session_start();
   error_reporting(0);
   include "function/dbconfig.php";
   
   if($_SESSION["cust_id"] == ''){
     
      header('location: account.php');
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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  
   <!-- CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style>
/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero1 {
  width: 100%;
     height: 80vh;
  background-color: rgba(14, 11, 10, 0.8);
  overflow: hidden;
  position: relative;
  
      padding-top: 82px;
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

@media (max-width: 992px)
#header {
    height: 83px!important;
}

#hero1 .carousel-content {
	 background: rgba(1, 3, 100, 0.8);
	  padding: 10px;
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


#hero1 .btn-get-started #details1 .btn-get-started #details2 .btn-get-started{
  font-family: "Muli", sans-serif;
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
 #details1 .btn-get-started{
  font-family: "Muli", sans-serif;
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
  border: 2px solid #fff;
  background: rgba(1, 3, 100, 0.8);
}

#details1 .btn-get-started:hover {
  background: #f03c02;
  color: #fff;
  text-decoration: none;
}

#details2 .btn-get-started{
    background: rgba(1, 3, 100, 0.8);
  font-family: "Muli", sans-serif;
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
  border: 2px solid #fff;
}

#details2 .btn-get-started:hover {
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
          <li class="active"><a href="shopindex.php">Home</a></li>
          <li><a href="shopabout.php">About Us</a></li>
          <li><a href="shopaccessories.php">Accessories</a></li>
        <!--  <li><a href="Accessories.html"></a></li> -->
          <li class="drop-down"><a href="">Products</a>
            <ul>
              <li><a href="alumin_profile.php">ALUMINIUM PROFILES</a></li>
              <li><a href="shopworkstation.php">WORKSTATION</a></li>
              <li><a href="shopconveyor.php">CONVEYOR</a></li>  
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
           
              <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
               
              <span class="nav-profile-name"><?php echo $_SESSION["cust_name"] ?> </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a href="my_order.php"class="dropdown-item" style="color:black;">
                <i class="fa fa-settings text-primary"></i>
                My Order
              </a>
              <a class="dropdown-item" href="my_cart.php" style="color:black;">
                <i class="fa fa-shopping-cart fa-2x text-denger"></i>
                Logout
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
	<!-- ======= Hero1 Section ======= -->
  <section id="hero1">
		<div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
			<!-- Slide 1 -->
				<div class="carousel-item active" style="background-image: url(assets/img/tku-antrieb.jpg); height:500px;">
					<div class="container">
						<div class="carousel-content animated fadeInUp">
							<img src="assets\img\mechanical-components-500x500.png" class="img-fluid" alt="" style="width:40%;">
							<h2>Aluminium Profile</h2>
							<p>We excel in providing various standard and customised
								aluminium extrusions with utmost quality. We have capability
								of developing various fittings and accessorises as per customer
								requirement. In addition to fencing profiles, we also supply extrusions
								for workstation, conveyor frames and commercial use.</p>
						  <!-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
						</div>
					</div>
				</div>

			<!-- Slide 2 -->
			<div class="carousel-item" style="background-image: url(assets/img/model365.jpg); height:500px;">
			  <div class="container">
				<div class="carousel-content animated fadeInUp">
						<img src="assets\img\mechanical-components-500x500.png" class="img-fluid" alt="" style="width:40%;">
				  <h2>Aluminium Profile</h2>
				  <p>We excel in providing various standard and customised
						aluminium extrusions with utmost quality. We have capability
						of developing various fittings and accessorises as per customer
						requirement. In addition to fencing profiles, we also supply extrusions
						for workstation, conveyor frames and commercial use.</p>
				   <!-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
				</div>
			  </div>
			</div>

			<!-- Slide 3 -->
			<div class="carousel-item" style="background-image: url(assets/img/mode233.jpg);height:500px;">
			  <div class="container">
				<div class="carousel-content animated fadeInUp">
					<img src="assets\img\mechanical-components-500x500.png" class="img-fluid" alt="" style="width:40%;">
				  <h2>Aluminium Profile</h2>
				 <p>We excel in providing various standard and customised
						aluminium extrusions with utmost quality. We have capability
						of developing various fittings and accessorises as per customer
						requirement. In addition to fencing profiles, we also supply extrusions
						for workstation, conveyor frames and commercial use.</p>
				   <!-- <div class="text-center"><a href="" class="btn-get-started">Read More</a></div> -->
				</div>
			  </div>
			</div>

		  </div>
			<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section>




 <!-- ##### Product Area Start ##### -->
    <section class="new-arrivals-products-area bg-gray section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>NEW ARRIVALS</h2>
                        <p>We have the latest products, it must be exciting for you</p>
                    </div>
                </div>
            </div>
            
            
            <style>
                
/* :: 7.0 New Arrivals Products Area */
.single-product-area {
  position: relative;
  z-index: 1;
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms; }
  .single-product-area .product-img {
    position: relative;
    z-index: 1;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms; }
    .single-product-area .product-img a {
      display: block; }
    .single-product-area .product-img img {
      position: relative;
      z-index: 1;
      width: 100%; }
    .single-product-area .product-img .product-tag a {
      background-color: #429edf;
      border-radius: 2px;
      display: inline-block;
      height: 20px;
      padding: 0 10px;
      line-height: 20px;
      text-transform: uppercase;
      color: #ffffff;
      font-weight: 700;
      font-size: 12px;
      position: absolute;
      top: 20px;
      left: 20px;
      z-index: 10; }
    .single-product-area .product-img .product-tag.sale-tag a {
      background-color: #e61d47; }
    .single-product-area .product-img .product-meta {
      position: absolute;
      bottom: 30px;
      left: 15px;
      right: 15px;
      z-index: 100;
      visibility: hidden;
      opacity: 0;
      -webkit-transition-duration: 500ms;
      transition-duration: 500ms; }
      .single-product-area .product-img .product-meta a {
        font-size: 16px;
        color: #ffffff;
        font-weight: 600;
        background-color: #303030;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50px;
        flex: 0 0 50px;
        max-width: 50px;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-transform: uppercase;
        text-align: center; }
        .single-product-area .product-img .product-meta a:hover, .single-product-area .product-img .product-meta a:focus {
          background-color: #70c745; }
        @media only screen and (min-width: 992px) and (max-width: 1199px) {
          .single-product-area .product-img .product-meta a {
            font-size: 11px; } }
        @media only screen and (min-width: 768px) and (max-width: 991px) {
          .single-product-area .product-img .product-meta a {
            font-size: 11px; } }
        @media only screen and (max-width: 767px) {
          .single-product-area .product-img .product-meta a {
            font-size: 14px; } }
      .single-product-area .product-img .product-meta .add-to-cart-btn {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 calc(100% - 100px);
        flex: 0 0 calc(100% - 100px);
        max-width: calc(100% - 100px);
        width: calc(100% - 100px);
        border-left: 1px solid rgba(235, 235, 235, 0.5);
        border-right: 1px solid rgba(235, 235, 235, 0.5); }
  .single-product-area .product-info a p {
    margin-bottom: 0;
    -webkit-transition-duration: 300ms;
    transition-duration: 300ms; }
    .single-product-area .product-info a p:hover, .single-product-area .product-info a p:focus {
      color: #70c745; }
  .single-product-area .product-info h6 {
    margin-bottom: 0;
    font-size: 18px; }
  .single-product-area:hover .product-img {
    box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.15); }
    .single-product-area:hover .product-img .product-meta {
      visibility: visible;
      opacity: 1; }

            </style>

            <div class="row">
                
                
                           <?php 
                                       $sql1="SELECT * FROM profile  ORDER BY id ASC ";

                                  //$sql1="select * from profile where profile_no = 30 MM Series";

                                //   echo $sql1;
                                //   die;
                                  $result1 =mysqli_query($conn, $sql1);

                                   while( $row =mysqli_fetch_array($result1))

                            {     ?>
                              

                               

                

                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="400ms">
                        <!-- Product Image -->
                                  <form method="post" action="alumin_profile.php">

<div class="product">
                        <div class="product-img">
                            <a href="shop-details.html"><img src="<?php echo $row["profile_image"]; ?>" alt=""></a>
                            <!-- Product Tag -->
                            <div class="product-tag sale-tag">
                                <a href="#">Hot</a>
                            </div>
                            <div class="product-meta d-flex">
                              <input type="hidden" name="item_name" value="<?php echo $row["profile_sr_no"]; ?>">
                                <input type="hidden" name="item_price" value="<?php echo $row["profile_cost"]; ?>">
                                <input type="submit" name="submit" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </div>
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">
                             
                                <p><?php echo $row1["profile_no"]; ?></p>
                              <p><?php echo $row["profile_sr_no"]; ?></p>
                                <p>Cost RS/M:₹&nbsp;<?php echo $row["profile_cost"]; ?></p>
                            <h6>$10.99</h6>
                        </div>
                    </div>
                </div>

                 <?php

                            }
                                ?>

            </div>
        </div>
    </section>
    <!-- ##### Product Area End ##### -->

  


  <!-- End Hero -->
  
  <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
		
        <div class="section-title" data-aos="fade-up">
          <!-- <h2>Some of our <strong>recent works</strong></h2> -->
		  <center><h3> ALUMINIUM PROFILES</h3></center>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-30">30 MM PROFILE</li>
              <li data-filter=".filter-40">40 MM PROFILE</li>
              <li data-filter=".filter-45">45 MM PROFILE</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

           
		  
		  <div class="col-lg-3 col-md-4 portfolio-item filter-30">
            <img src="assets/img/aluminprofile/4414.jpg" class="img-fluid" alt="">
             
             
             <center>  <h6>PROFILE NO:4414 </h6>
              <h6>COST RS/M:-RS 242.875</h6> 
              <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>

          </div>
		  
		    
		  
		   
          
           
		  
		  <div class="col-lg-3 col-md-4 portfolio-item filter-30">
            <img src="assets/img/aluminprofile/4445.jpg" class="img-fluid" alt="">
            <center>
              <h6>PROFILE NO:4445 </h6>
              <h6>COST RS/M:-RS 278.05</h6>
                             <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>
          </div>
		  
		    
		  
		   
          
           
		  
		   
		  
		   <div class="col-lg-3 col-md-4 portfolio-item filter-30">
            <img src="assets/img/aluminprofile/4465.jpg" class="img-fluid" alt="">
            <center>
              <h6>PROFILE NO:4465 </h6>
              <h6>COST RS/M:-RS 251.25</h6>
                             <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>
          </div>
		  
		   
          
          <div class="col-lg-3 col-md-4 portfolio-item filter-30">
            <img src="assets/img/aluminprofile/4474.jpg" class="img-fluid" alt="">
            <center>
              <h6>PROFILE NO:4474 </h6>
              <h6>COST RS/M:-RS 1105.5</h6>
                            <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>
          </div>
		  
		   <div class="col-lg-3 col-md-4 portfolio-item filter-30">
            <img src="assets/img/aluminprofile/4439.jpg" class="img-fluid" alt="">
           <center>
              <h6>PROFILE NO:4439 </h6>
              <h6>COST RS/M:-RS 765.475</h6>
                             <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>
          </div>
		  
		  <div class="col-lg-3 col-md-4 portfolio-item filter-45">
              <img src="assets/img/aluminprofile/4416.jpg" class="img-fluid" alt="" style="width:100%;">
            <center>
              <h6>PROFILE NO:4416 </h6>
              <h6>COST RS/M:-RS 628.125</h6>
                            <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>
          </div>

<!--- 30 MM series-->
         
          
		  <div class="col-lg-3 col-md-4 portfolio-item filter-40">
            <img src="assets/img/aluminprofile/4413.jpg" class="img-fluid" alt="" style="">
           <center>
              <h6>PROFILE NO:4413 </h6>
              <h6>COST RS/M:-RS 432.15</h6>
                             <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>
          </div>

		  
          <div class="col-lg-3 col-md-4 portfolio-item filter-40">
            <img src="assets/img/aluminprofile/4412.jpg" class="img-fluid" alt="" style="">
           <center>
             <h6>PROFILE NO:4412 </h6>
              <h6>COST RS/M:-RS 378.55</h6>
                             <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>
          </div>

		   
          
           <div class="col-lg-3 col-md-4 portfolio-item filter-40">
            <img src="assets/img/aluminprofile/4430.jpg" class="img-fluid" alt="">
            <center>
              <h6>PROFILE NO:44130 </h6>
              <h6>COST RS/M:-RS 495.8</h6>
                             <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>
          </div>

		   

		  
          

		  

		  
          <div class="col-lg-3 col-md-4 portfolio-item filter-40">
            <img src="assets/img/aluminprofile/4464.jpg" class="img-fluid" alt="" style="">
           <center>
             <h6>PROFILE NO:4464 </h6>
              <h6>COST RS/M:-RS 479.05</h6>
                            <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>
          </div>

		   
          
          
          
          <!-- <div class="col-lg-3 col-md-4 portfolio-item filter-40">-->
          <!--  <img src="assets/img/aluminprofile/4404.jpg" class="img-fluid" alt="">-->
          <!--  <div class="portfolio-info">-->
          <!--    <h4>PROFILE NO:4404 </h4>-->
          <!--    <p>COST RS/M:-RS 611.375</p>-->
          <!--    <a href="assets/img/aluminprofile/4404.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>-->
          <!--    <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>-->
          <!--  </div>-->
          <!--</div>-->

		  <div class="col-lg-3 col-md-4 portfolio-item filter-40">
            <img src="assets/img/aluminprofile/4469.jpg" class="img-fluid" alt="" style="">
            <center>
              <h6>PROFILE NO:4469 </h6>
              <h6>COST RS/M:-RS 1016.725</h6>
                             <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>
          </div>

		  
          <div class="col-lg-3 col-md-4 portfolio-item filter-45">
            <img src="assets/img/aluminprofile/4468.jpg" class="img-fluid" alt="" style="width:100%;">
           <center>
             <h6>PROFILE NO:4468 </h6>
              <h6>COST RS/M:-RS 572.85</h6>
                            <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>
          </div>

		  <div class="col-lg-3 col-md-4 portfolio-item filter-45">
              <img src="assets/img/aluminprofile/4452.jpg" class="img-fluid" alt="" style="">
           <center>
              <h6>PROFILE NO:4452 </h6>
              <h6>COST RS/M:-RS 1812.35 </h6>
                            <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>
          </div>
          
           <div class="col-lg-3 col-md-4 portfolio-item filter-45">
            <img src="assets/img/aluminprofile/4470.jpg" class="img-fluid" alt="">
           <center>
              <h6>PROFILE NO:4470 </h6>
              <h6>COST RS/M:-RS 1812.725</h6>
                            <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>
          </div>

		   

		  
           

		   
          
           

		  <div class="col-lg-3 col-md-4 portfolio-item filter-40">
            <img src="assets/img/aluminprofile/4404.jpg" class="img-fluid" alt="" >
            <center>
              <h6>PROFILE NO:4404 </h6>
              <h6>COST RS/M:-RS 611.375</h6>
                          <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>
          </div>
          
          
           <div class="col-lg-3 col-md-4 portfolio-item filter-45">
            <img src="assets/img/aluminprofile/4415.jpg" class="img-fluid" alt="" style="width:100%;">
            <center>
              <h6>PROFILE NO:4415 </h6>
              <h6>COST RS/M:-RS 509.2</h6>
                           <a href="cart.php" class="btn btn-success  " title="Add To Cart"><i class="bx bxs-cart"> Go To Cart</i></a></center>
          </div>
          
            

		  
           

		   
           

		 

		   
          

		   
		  
		   <!-- <div class="col-lg-2 col-md-4 portfolio-item filter-45"> -->
            <!-- <img src="assets/img/accessories/IMG_2246.GIF"  class="img-fluid" alt="" style="width:100%;"> -->
            <!-- <div class="portfolio-info"> -->
              <!-- <h5>Foundation Brackets</h5> -->
              <!-- <a href="assets/img/accessories/IMG_2246.GIF" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a> -->
              <!-- <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            <!-- </div> -->
          <!-- </div> -->
		  
		   
		  
		    
		  
        </div>

      </div>
    </section><!-- End Portfolio Section -->

   

  
  
	
	  <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">
		
        <div class="section-title" data-aos="fade-up">
       <!-- <h2>Team</h2> -->
             <center><p>Accessories</p></center>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-2 col-md-4">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets\img\accessories\3DMC10516-PIC2-Hammer-Nut-Slot-8-Type-B-M5-step-1-5.jfif" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>T Nuts</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 mt-5 mt-md-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets\img\accessories\3DMC17096-100-PIC1-t-slot-nut-sliding-block-slot-10-type-b-m6-with-step-heavy-duty-steel.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>T Nuts</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets\img\accessories\51GiNL-rH8L._SX466_.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Spring Nuts</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-4 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets\img\accessories\IMG_2248.JPG" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Square Nuts</h4>
              </div>
            </div>
          </div>
		  
		   <div class="col-lg-2 col-md-4 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets\img\accessories\IMG_2252.JPG" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Daimond Nuts</h4>
              </div>
            </div>
          </div>
			
			<div class="col-lg-2 col-md-4 mt-5">
				<div class="member" data-aos="zoom-in" data-aos-delay="400">
					<div class="pic"><img src="assets\img\accessories\SLDR08OK.jpg" class="img-fluid" alt=""></div>
					<div class="member-info">
						<h4>Bracing Plates</h4>
					</div>
				</div>
			</div>
			
			<!-- <div class="col-lg-2 col-md-4 mt-5"> -->
				<!-- <div class="member" data-aos="zoom-in" data-aos-delay="200"> -->
					<!-- <div class="pic"><img src="assets\img\accessories\IMG_2289.JPG" class="img-fluid" alt=""></div> -->
					<!-- <div class="member-info"> -->
						<!-- <h4>Hidden Bracket Connector</h4> -->
					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->
			
		   <!-- <div class="col-lg-2 col-md-4 mt-5 mt-lg-0"> -->
            <!-- <div class="member" data-aos="zoom-in" data-aos-delay="400"> -->
              <!-- <div class="pic"><img src="assets\img\accessories\61JxeDJFyEL._SL1200_.jpg" class="img-fluid" alt=""></div> -->
              <!-- <div class="member-info"> -->
                <!-- <h4>Flat Nuts</h4> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div>  -->
        </div>
		
		<div class="row" data-aos="fade-left">
			<!-- <div class="col-lg-2 col-md-4"> -->
				<!-- <div class="member" data-aos="zoom-in" data-aos-delay="100"> -->
					<!-- <div class="pic"><img src="assets\img\accessories\IMG_2327.JPG" class="img-fluid" alt=""></div> -->
					<!-- <div class="member-info"> -->
						<!-- <h4>Bolt Connector </h4> -->
					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->

			

			<div class="col-lg-2 col-md-4 mt-5">
				<div class="member" data-aos="zoom-in" data-aos-delay="300">
					<div class="pic"><img src="assets\img\accessories\IMG_2237.JPG" class="img-fluid" alt=""></div>
					<div class="member-info">
						<h4>Plate Connector</h4>
					</div>
				</div>
			</div>
			
			<div class="col-lg-2 col-md-4 mt-5">
				<div class="member" data-aos="zoom-in" data-aos-delay="100">
					<div class="pic"><img src="assets\img\accessories\IMG_2233.JPG" class="img-fluid" alt=""></div>
					<div class="member-info">
						<h4>Bracing Plates</h4>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-4 mt-5">
				<div class="member" data-aos="zoom-in" data-aos-delay="400">
					<div class="pic"><img src="assets\img\accessories\IMG_2246.GIF" class="img-fluid" alt=""></div>
					<div class="member-info">
						<h4>Foundation Brackets</h4>
					</div>
				</div>
			</div>
			
			<div class="col-lg-2 col-md-4 mt-5">
				<div class="member" data-aos="zoom-in" data-aos-delay="100">
					<div class="pic"><img src="assets\img\accessories\IMG_2250.JPG" class="img-fluid" alt=""></div>
					<div class="member-info">
						<h4>Sliding Bar</h4>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-4 mt-5">
				<div class="member" data-aos="zoom-in" data-aos-delay="200">
					<div class="pic"><img src="assets\img\accessories\IMG_2258.JPG" class="img-fluid" alt=""></div>
					<div class="member-info">
						<h4>Pivot Joint</h4>
					</div>
				</div>
			</div>
			
			
		   <div class="col-lg-2 col-md-4 mt-5">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets\img\accessories\IMG_2273.JPG" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Castors Wheels</h4>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-2 col-md-4 mt-5"> -->
            <!-- <div class="member" data-aos="zoom-in" data-aos-delay="400"> -->
              <!-- <div class="pic"><img src="assets\img\accessories\IMG_2236.JPG" class="img-fluid" alt=""></div> -->
              <!-- <div class="member-info"> -->
                <!-- <h4>Plate Connector</h4> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->
		  
		   <!-- <div class="col-lg-2 col-md-4 mt-5"> -->
            <!-- <div class="member" data-aos="zoom-in" data-aos-delay="400"> -->
              <!-- <div class="pic"><img src="assets\img\accessories\IMG_2232.JPG" class="img-fluid" alt=""></div> -->
              <!-- <div class="member-info"> -->
                <!-- <h4>Corner Brackets</h4> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->

			<!-- <div class="col-lg-2 col-md-4 mt-5"> -->
				<!-- <div class="member" data-aos="zoom-in" data-aos-delay="400"> -->
					<!-- <div class="pic"><img src="assets\img\accessories\IMG_2255.PNG" class="img-fluid" alt=""></div> -->
					<!-- <div class="member-info"> -->
						<!-- <h4>Tilt Brackets</h4> -->
					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->
        </div>
		<!-- --------------------row-------------------- -->
		<!-- <div class="row" data-aos="fade-left"> -->
			

			<!-- <div class="col-lg-2 col-md-4 mt-5"> -->
				<!-- <div class="member" data-aos="zoom-in" data-aos-delay="200"> -->
					<!-- <div class="pic"><img src="assets\img\accessories\IMG_2234.JPG" class="img-fluid" alt=""></div> -->
					<!-- <div class="member-info"> -->
						<!-- <h4>Hidden Bracket Connector</h4> -->
					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->

			<!-- <div class="col-lg-2 col-md-4 mt-5"> -->
				<!-- <div class="member" data-aos="zoom-in" data-aos-delay="300"> -->
					<!-- <div class="pic"><img src="assets\img\accessories\IMG_2237.JPG" class="img-fluid" alt=""></div> -->
					<!-- <div class="member-info"> -->
						<!-- <h4>Plate Connector</h4> -->
					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->

          <!-- <div class="col-lg-2 col-md-4 mt-5"> -->
            <!-- <div class="member" data-aos="zoom-in" data-aos-delay="400"> -->
              <!-- <div class="pic"><img src="assets\img\accessories\IMG_2257.JPG" class="img-fluid" alt=""></div> -->
              <!-- <div class="member-info"> -->
                <!-- <h4>Nylon Hinges</h4> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->
		  
		   <!-- <div class="col-lg-2 col-md-4 mt-5"> -->
            <!-- <div class="member" data-aos="zoom-in" data-aos-delay="400"> -->
              <!-- <div class="pic"><img src="assets\img\accessories\IMG_2232.JPG" class="img-fluid" alt=""></div> -->
              <!-- <div class="member-info"> -->
                <!-- <h4>Corner Brackets</h4> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->

			
        <!-- </div> -->
			<!-- --------------------row-------------------- -->
		<div class="row" data-aos="fade-left">
			

			<!-- <div class="col-lg-2 col-md-4 mt-5"> -->
				<!-- <div class="member" data-aos="zoom-in" data-aos-delay="300"> -->
					<!-- <div class="pic"><img src="assets\img\accessories\IMG_2264.JPG" class="img-fluid" alt=""></div> -->
					<!-- <div class="member-info"> -->
						<!-- <h4>Castors Wheels</h4> -->
					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->

		  

			<!-- <div class="col-lg-2 col-md-4 mt-5"> -->
				<!-- <div class="member" data-aos="zoom-in" data-aos-delay="400"> -->
					<!-- <div class="pic"><img src="assets\img\accessories\IMG_2260.JPG" class="img-fluid" alt=""></div> -->
					<!-- <div class="member-info"> -->
						<!-- <h4>Flat Nuts</h4> -->
					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->
			
          <!-- <div class="col-lg-2 col-md-4 mt-5"> -->
            <!-- <div class="member" data-aos="zoom-in" data-aos-delay="400"> -->
              <!-- <div class="pic"><img src="assets\img\accessories\IMG_2263.PNG" class="img-fluid" alt=""></div> -->
              <!-- <div class="member-info"> -->
                <!-- <h4>Castors Wheels</h4> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->
		  
		  <div class="col-lg-2 col-md-4 mt-5">
				<div class="member" data-aos="zoom-in" data-aos-delay="100">
					<div class="pic"><img src="assets\img\accessories\IMG_2278.JPG" class="img-fluid" alt=""></div>
					<div class="member-info">
						<h4>Handles</h4>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-4 mt-5">
				<div class="member" data-aos="zoom-in" data-aos-delay="200">
					<div class="pic"><img src="assets\img\accessories\05573.jpg" class="img-fluid" alt=""></div>
					<div class="member-info">
						<h4>Door Lock</h4>
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-4 mt-5">
				<div class="member" data-aos="zoom-in" data-aos-delay="300">
					<div class="pic"><img src="assets\img\accessories\IMG_2279.JPG" class="img-fluid" alt=""></div>
					<div class="member-info">
						<h4>Handles</h4>
					</div>
				</div>
			</div>
			
			
		  
        </div>
		
		<!-- --------------------row-------------------- -->
		<div class="row" data-aos="fade-left">
			

          <!-- <div class="col-lg-2 col-md-4 mt-5"> -->
            <!-- <div class="member" data-aos="zoom-in" data-aos-delay="400"> -->
              <!-- <div class="pic"><img src="assets\img\accessories\IMG_2256.JPG" class="img-fluid" alt=""></div> -->
              <!-- <div class="member-info"> -->
                <!-- <h4>Castors Wheels</h4> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->
		  
		   <!-- <div class="col-lg-2 col-md-4 mt-5"> -->
            <!-- <div class="member" data-aos="zoom-in" data-aos-delay="400"> -->
              <!-- <div class="pic"><img src="assets\img\accessories\IMG_2265.JPG" class="img-fluid" alt=""></div> -->
              <!-- <div class="member-info"> -->
                <!-- <h4>Castors Wheels</h4> -->
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->

			
        </div>


      </div>
    </section><!-- End Team Section -->
    
    
    
    	
	
	<section id="details1" class="details">
      <div class="container">
          <center><h3>Products Of Aluminium Extrusions    </h3></center>
	
        <div class="row content">
          <!--<div class="col-md-4 col-xm-12 col-sm-12" data-aos="fade-right">-->
          <!--  <img src="assets/img/workstation/workstation3.jpg" class="img-fluid" alt="" style="width:180%">-->
          <!--</div>-->
		  <div class="col-md-6 col-xm-12 col-sm-12" data-aos="fade-right">
			 <!--<img src="assets\img\model 993.jpg" class="img-fluid" alt="" style="width:50%; margin-left:80px; margin-top:20px;">-->
			 <p style="text-align: justify; margin-top:70px; color:black ">
			     
			     	<center><h3>WORKSTATION</h3></center>
				 <big>O</big>ur Workstations are designed and manufactured based largely on the principle of
                  ergonomics and has a positive impact on the overall rate of production. They have
                  promising manufacturing which ensures strong joints, easy reach, comfort and
                  aesthetic appearance. We have customized design options for every type of requirements
                  as no two tasks has the same problem. </p>
                  
                  <a href="workstation.php" class="btn-get-started scrollto btn-success text-center" style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Read More </a>
                  
                   
           </div>
		  <div class="col-md-6 col-xm-12 col-sm-12" data-aos="fade-right">
            <img src="assets\img\Conveyor New Image\Arbeitstisch_Schnaithmann_Maschinenbau_rechts.jpg" class="img-fluid" alt="" style="margin-top:20px;">
          
          </div>
		  </div>
   <!--         <div class="row content">-->
				<!-- <div class="col-md-4" data-aos="fade-right"></div> -->
			<!--	<div class="col-md-12 col-xm-12 col-lg-12 col-sm-12" data-aos="fade-right">-->
					<!--<div class="row content"  style="color:black; padding:10px;" >-->
			<!--	<p style="text-align: justify; ">-->
			<!--	 <big>O</big>ur Workstations are designed and manufactured based largely on the principle of-->
   <!--               ergonomics and has a positive impact on the overall rate of production. They have-->
   <!--               promising manufacturing which ensures strong joints, easy reach, comfort and-->
   <!--               aesthetic appearance. We have customized design options for every type of requirements-->
   <!--               as no two tasks has the same problem. </p>-->
				<!--</div>-->
			<!--	</div>-->
			<!--</div>-->
		   
        
	</div>
	</section>
   <!-- ======= Details Section ======= -->
    <section id="details2" class="details2">
		<div class="container">
			
			<div class="row content">
				<div class="col-md-6">
					<img src="assets\img\Conveyor New Image\Conveyor New Image\Conveyor Image 2.jpg" class="img-fluid" alt="" style="width:100%">
				</div>
				<div class="col-md-6">
						<p style="text-align: justify; margin-top:70px; color:black ">
						    
						    <center><h3>Conveyor system</h3></center>
						  <big>A</big>t Pisanga we develop multi-industrial conveyor systems with
							customisation according to the requirement of our clients. We
							specially design the system to lower the cost of the product and give
							maximum output. We have expertise in creating almost all types of
							conveyors irrespective of the complexity of the system</p>
							 
							 
							 <a href="conveyor.php" class="btn-get-started scrollto btn-success text-center" style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Read More </a>
				</div>
			</div>
			<!--<div class="row content" style="margin-top:0px;">-->
			<!--	<div class="col-md-6">-->
			<!--		<img src="assets\img\Conveyor New Image\Conveyor New Image\Conveyor Image 3.jpg" class="img-fluid" alt="" style="width:100%">-->
			<!--	</div>-->
			<!--	<div class="col-md-6">-->
			<!--			<img src="assets\img\Conveyor New Image\Conveyor New Image\Conveyor New Image 1.png" class="img-fluid" alt="" style="width:100%; margin-top:20px;">-->
			<!--	</div>-->
			<!--</div>-->
		</div>
    </section><!-- End Details Section -->
	
	 <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <!-- <h2>Contact</h2> -->
          <center><p>Contact Us</p></center>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Sr no 120/1 2/1, Near Mane School, Rajwade Nagar Colony no 3 Kalewadi Pune 411017</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@Pisanga.com | sales@pisanga.com </p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p> +91- 9096115174 | +91- 8605266036  </p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
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

	<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-5">
            <div class="footer-info">
				<img src="assets\img\Logo\Pisanga FINAL version-09.png" class="" alt="" style="width:50%;">
              <p class="pb-3"><em>At Pisanga we aspire to develop products of aluminium extrusions that have the strength and beauty as their essential attributes.</em></p>
              <!-- <p> -->
                <!-- A108 Adam Street <br> -->
                <!-- NY 535022, USA<br><br> -->
                <!-- <strong>Phone:</strong> +1 5589 55488 55<br> -->
                <!-- <strong>Email:</strong> info@example.com<br> -->
              <!-- </p> -->
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#details">About us</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li> -->
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li> -->
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>

          <div class="col-lg-7 col-md-7 footer-links">
            <!-- <h4>Our Services</h4> -->
				<center><i class="fa fa-map-marker" style="font-size:25px;"></i></center>
				<center>Sr no 120/1 2/1, Near Mane School, Rajwade Nagar Colony no 3 Kalewadi Pune 411017</center><br>
				
				<center><i class="fa fa-map-marker" style="font-size:25px;"></i></center>
				<center> Sr 64, Kalbhor Estate Opp ADOR WELDEING, Chinchwad Pune 411019</center><br>
				
				<center><i class="fa fa-phone" style="font-size:25px;"></i></center>
				<center><a href="tel:+91 9096115174">+91 9096115174</a> |
|  <a href="tel:+91 8605266036">+91 8605266036</a> </center><br>
				
				
				<center><i class="fa fa-envelope" style="font-size:25px;"></i></center>
				<center><a href="mailto:info@pisanga.com">info@pisanga.com&nbsp;</a>|<a href="mailto:sales@pisanga.com">&nbsp; sales@pisanga.com</a>
				 </center><br>
				
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
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>

</body>

</html>