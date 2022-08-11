 <?php



session_start();


 include "function/dbconfig.php";


if ( isset( $_POST['submit'] ) ) {
  // print_r($_POST);
  // die;

 
  $email = $_POST['email'];
  $password = $_POST['password'];
 
 
  
 
  
  
   
   
    


  $sql = "SELECT * FROM `adminlogin` WHERE email='$email' AND password='$password'";
  
  //    echo $sql;
  // die;

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
  $_SESSION['email']= $email;
 
    echo '<script>alert("Success ! You Are Registration.");
    window.location.href="dashboard.php";</script>';
      
  
} else {
   echo '<script>alert("something iswrong");
    window.location.href="adminlogin.php";</script>';
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

  
  
   

   

  <main id="main">
 
  
    
 
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <!-- <h2>Contact</h2> -->
         
        </div>

        <div class="row">



          <div class="col-lg-12 col-md-12 col-sm-12 head pt-3 pb-3">
                
                             
                            

                <h1 style="color:#808A8A;text-align:center; margin-top:20px;">Welcome to Pisanaga</h1>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 login">
                <h1 style="text-align:center;margin-top:20px; color:#808A8A"> Login</h1>
            </div>

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
             

          </div>

          <div class="col-lg-4 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200 "  style="border:1px solid #C2BCBC; border-radius:5px; margin-top:20px; padding-bottom:20px;">

            <form action="" method="post" >
               
                 
              
              <div class="form-group">
                  <label for="exampleInputEmail1">Email Address</label>
                   <input style="margin-top:25px; border-radius:5px " type="email" class="form-control" style="height:40px;" type="email" class="form-control" name="username" id="username" placeholder="Your Email"  required  autofocus/>
                
              </div>
               
                 
             
              
              <input type="submit" class="btn btn-success btn-round mx-auto" style="border: 0; padding: 10px 30px;color: #fff; border-radius:50px;" value="Login" id="login">
              
              
                                <a href="account.php" class="btn-get-started scrollto btn-success text-center" style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">Sign up </a>
              
              
                
              
                               

            </form>

          </div>
          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
             

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  
 

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

 