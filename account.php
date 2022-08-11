 <?php
 
 
 error_reporting(0);
//   include "function/dbconfig.php";

$servername = "localhost";
$username = "vaishakhpillai1";
$password = "9096115174";
$dbname = "pisanga_ecomm";

 

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ( isset( $_POST['submit'] ) ) {
//   print_r($_POST);
//   die;



  $name = $_POST['name'];
  $org_name = $_POST['org_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
 
  
 
  
  $sql1 = "SELECT * FROM custregisteration WHERE email = '$email' AND name='$name' AND mob='$mob'";
//   echo $sql1;
//   die;
    $result1 = mysqli_query($conn, $sql1);
    
 
   if (mysqli_num_rows($result1) > 0) {
        
      echo '<script>alert("This User Already Exist !");
    window.location.href="account.php";</script>';
  
} 
else{


  $sql = "INSERT INTO `custregisteration`(`name`, `org_name`, `phone`, `email`, `cr_date`)
  
  VALUES ('$name','$org_name','$phone','$email',now())";
  
//      echo $sql;
//   die;

if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Success ! You Are Registration.");
    window.location.href="account.php";</script>';
      
  
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
	</header><!-- End Header -->
	
	
<!--	 	<section id="details" class="details" style="background-color: #f5f5f5; padding-bottom: 15px; padding-top:100px;" >-->
<!--			<div class="container">-->
<!--			    <style>-->
<!--			        ol.breadcrumb {-->
<!--    float: right;-->
<!--}-->

 

<!--			    </style>-->
			
<!--				<div class="row content" >-->
<!--					<div class="col-md-5" data-aos="fade-right">-->
					 
<!--					</div>-->
<!--					<div class="col-md-7 pt-4" data-aos="fade-up">-->
<!--					<nav aria-label="breadcrumb">-->
<!--  <ol class="breadcrumb">-->
<!--    <li class="breadcrumb-item"><a href="index.php">Home</a></li>-->
<!--    <li class="breadcrumb-item active" aria-current="page">Sign Up </li>-->
<!--  </ol>-->
<!--</nav>-->
<!--				    </div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</section>-->

   

	<main id="main">
 
  
    
 
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <!-- <h2>Contact</h2> -->
         
        </div>

        <div class="row">

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-right" data-aos-delay="100">
             <div class="card border-primary mb-3">
  <div class="card-header">I am already a customer</div>
  <div class="card-body text-primary">
    <h5 class="card-title">Log in with your email address and password</h5>
    
    
    
    <form action="" method="post" role="form" class="php-email-form">
               
                 
              
              <div class="form-group">
                   <input type="email" class="form-control" name="username" id="username" placeholder="Your Email"  required />
               
                <div class="validate"></div>
              </div>
               
                 
              
            
              
              
               
              <input type="submit" class="btn btn-success btn-round" style="border: 0; padding: 10px 30px;color: #fff; border-radius:50px;" value="Login" id="login">
              
              
                                <a href="account.php" class="btn-get-started scrollto btn-success text-center" style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Sign up </a>

            </form>
  </div>
</div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <div class="card border-dark mb-3">
  <div class="card-header">I am a new customer</div>
  <div class="card-body text-dark">
    <h5 class="card-title" style="color:red;">* this is a mandatory field</h5>
    
    
     <form action="" method="post"  >
               
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="first_name" placeholder="Please Enter Name"   />
                  <div class="validate"></div>
                </div>
                
              
               <div class="form-group">
                   <input type="text" class="form-control" name="org_name" id="org_name" placeholder="Please enter a valid Name Company *"  >
               
                <div class="validate"></div>
              </div>
              
              <div class="form-group">
                   <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*" data-rule="email" data-msg="Please enter a valid email *" />
               
                <div class="validate"></div>
              </div>
              
              <div class="form-group">
                  <input type="text" class="form-control" name="phone" id="phone" pattern="[6-9]{1}[0-9]{9}" placeholder="Contact No*" data-rule="minlen:4" data-msg="Please enter at least 10 digits of subject" onkeypress="return validInput(event);" />
                  <div class="validate"></div>
                </div>
                 
              
               
              
               
              <input type="submit" class="btn btn-success btn-round"  name="submit" value="Register " style=" border: 0; padding: 10px 30px;color:#fff; border-radius:50px;">
            </form>
    
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
<script src="numberverify.js"></script>

<script type="text/javascript" src="http://wowslider.com/images/demo/wowslider.js"></script>
<script type="text/javascript" src="http://wowslider.com/sliders/demo-57/engine1/script.js"></script>


 <script>
            $(document).ready(function(){


            $("#login").click(function(){


              var username = $("#username").val();

               if(username == ""){
                $("#username").focus();
                return;
              }
 



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