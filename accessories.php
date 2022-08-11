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
				<h1 class="text-light"><a href="index.php"><span><img src="assets\img\Logo\PNG\60 px.png" class="" alt="">&nbsp;<img src="assets\img\Logo\Pisanga FINAL version-09.png" class="" alt=""></span></a></h1>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			</div>

			<nav class="nav-menu d-none d-lg-block">
				<ul>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="accessories.php">Accessories</a></li>
				<!--	<li><a href="Accessories.html"></a></li> -->
					<li class="drop-down"><a href="">Products</a>
						<ul>
						  <li><a href="alumin_profile.php">ALUMINIUM PROFILES</a></li>
						  <li><a href="workstation.php">WORKSTATION</a></li>
						  <li><a href="conveyor.php">CONVEYOR</a></li>  
						</ul>
					</li>
				  <li><a href="contact.php">Contact</a></li>
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
							<img src="assets\img\accessories\IMG_2284.JPG" class="img-fluid" alt="" style="width:40%;">
							<h2>Accessories</h2>
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
						<img src="assets\img\maxresdefault.jpg" class="img-fluid" alt="" style="width:40%;">
				  <h2>Accessories</h2>
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
				  <h2>Accessories </h2>
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
  </section><!-- End Hero -->
  
  <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
		
        <div class="section-title" data-aos="fade-up">
          <!-- <h2>Some of our <strong>recent works</strong></h2> -->
		  <center><h3> Accessories</h3></center>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Bin Holder</li>
              <li data-filter=".filter-card">Card Holder</li>
              <li data-filter=".filter-web">Accessories</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-3 col-md-4 portfolio-item filter-app">
            <img src="assets/accessories/IMG_2299.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/accessories/IMG_2299.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		  
		  <div class="col-lg-3 col-md-4 portfolio-item filter-app">
            <img src="assets/accessories/IMG_2300.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/accessories/IMG_2300.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		  
		   <div class="col-lg-3 col-md-4 portfolio-item filter-app">
            <img src="assets/accessories/IMG_2301.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/accessories/IMG_2301.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		  
		  <div class="col-lg-3 col-md-4 portfolio-item filter-app">
              <img src="assets/accessories/IMG_2302.jpg" class="img-fluid" alt="" style="width:82%;">
            <div class="portfolio-info">
              <h4>App 4</h4>
              <p>App</p>
              <a href="assets/accessories/IMG_2302.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>


         
          <div class="col-lg-3 col-md-4 portfolio-item filter-card">
            <img src="assets/accessories/IMG_2322.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/accessories/IMG_2322.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

		  <div class="col-lg-3 col-md-4 portfolio-item filter-card">
            <img src="assets/img/IMG_2304.PNG" class="img-fluid" alt="" style="width:70%;">
            <div class="portfolio-info" style="width: 61%;">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/IMG_2304.PNG" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

		  
          <div class="col-lg-3 col-md-4 portfolio-item filter-card">
            <img src="assets/img/IMG_2305.PNG" class="img-fluid" alt="" style="width:62%;">
            <div class="portfolio-info" style="width: 69%;">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/IMG_2305.PNG" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

		  <div class="col-lg-3 col-md-4 portfolio-item filter-app">
              <img src="assets/accessories/ddb.jpg" class="img-fluid" alt="" style="">
            <div class="portfolio-info">
              <h4>App 5</h4>
              <p>App</p>
              <a href="assets/accessories/ddb.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

		  
		   <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/accessories/IMG_2327.jpg" class="img-fluid" alt="" style="width:100%;" >
            <div class="portfolio-info" style="width: 90%;">
              <h5>Bolt Connector</h5>
              <a href="assets/accessories/IMG_2327.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          
          <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/accessories/IMG_2289.jpg" class="img-fluid" alt="">
            <div class="portfolio-info" id="pf1">
              <h5>Bracket Connector</h5>
              <a href="assets/accessories/IMG_2289.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

         
          <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/img/accessories/IMG_2236.JPG"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info">
              <h5>Plate Connector</h5>
              <a href="assets/img/accessories/IMG_2236.JPG" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		  
		  
          <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/img/accessories/IMG_2232.JPG"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info">
              <h5>Corner Brackets</h5>
              <a href="assets/img/accessories/IMG_2232.JPG" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		  
		  
          <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/accessories/IMG_2238.jpg"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info">
              <h5>Aluminium Angle</h5>
              <a href="assets/accessories/IMG_2238.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		  
		  
          <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/accessories/IMG_2234.jpg"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info">
              <h5>Bracing Plates</h5>
              <a href="assets/accessories/IMG_2234.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		  
		  
          <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/img/accessories/IMG_2255.PNG"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info">
              <h5>Tilt Brackets</h5>
              <a href="assets/img/accessories/IMG_2255.PNG" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		  
		  
          <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/accessories/IMG_2256.jpg"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info">
              <h5>Square Washer</h5>
              <a href="assets/accessories/IMG_2256.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		  
		   <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/accessories/IMG_2257_p.jpg"  class="img-fluid" alt="" >
            <div class="portfolio-info">
              <h5>Nylon Hinges</h5>
              <a href="assets/accessories/IMG_2257_p.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		  
		   <!-- <div class="col-lg-2 col-md-4 portfolio-item filter-web"> -->
            <!-- <img src="assets/img/accessories/IMG_2246.GIF"  class="img-fluid" alt="" style="width:100%;"> -->
            <!-- <div class="portfolio-info"> -->
              <!-- <h5>Foundation Brackets</h5> -->
              <!-- <a href="assets/img/accessories/IMG_2246.GIF" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a> -->
              <!-- <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            <!-- </div> -->
          <!-- </div> -->
		  
		   <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/img/accessories/IMG_2265.JPG"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info">
              <h5>Castors Wheels</h5>
              <a href="assets/img/accessories/IMG_2265.JPG" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		  
		   <div class="col-lg-2 col-md-4 portfolio-item filter-web">
            <img src="assets/accessories/IMG_2260.jpg"  class="img-fluid" alt="" style="width:100%;">
            <div class="portfolio-info">
              <h5>Leveling Pad</h5>
              <a href="assets/accessories/IMG_2260.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		  
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
              <div class="pic"><img src="assets/accessories/IMG_2248.jpg" class="img-fluid" alt=""></div>
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
                <p> +91- 9096115174 | +91- 8605266036</p>
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
</body>

</html>