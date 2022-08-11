  <?php


  error_reporting(0);
include "function/dbconfig.php";



 

  
 

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
              <div class="card-body">
    <div class="list-group">
  <a href="dashboard.php" class="list-group-item list-group-item-action" aria-current="true">
    Dashboard
  </a>
  <a href="view_customer.php" class="list-group-item list-group-item-action">View Customer</a>
  <a href="view_product.php" class="list-group-item list-group-item-action">View Product Profile</a>
   <a href="view_myorder.php" class="list-group-item list-group-item-action">View Order</a>
 <a href="view_category.php" class="list-group-item list-group-item-action">View Category</a>
  <a href="logout.php" class="list-group-item list-group-item-action">Log Out</a>
  <!--<a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>-->
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
                                                               <th>View Order</th>
                                                                <th>Sr No</th>
                                                                <th>Customer Name</th>
                                                                <th>Customer Email</th>
                                                                 <th>Customer Phone</th>
                                                                <th>Customer Company</th>
                                                                <th>Customer Address</th>
                                                                <th>Amount</th>

                                                               
                                                                 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 






   

 $sql = "SELECT * FROM `order_info` ORDER by bill_id desc";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) { 



 while($row = mysqli_fetch_assoc($result)) {  



?> 
                      <tr>


                         <td><a class="btn btn-success" href="view_my_orderdetails.php?user_id=<?php echo $row['user_id'] ?>"><i class="ti-pencil" style="color:blue;"></i>View Order</a></td>
                      
                         
                        <td> <?php echo $row['bill_id'] ?> </td>
                  
                        <td><?php echo $row['bill_name'] ?></td>
                         <!-- <td> <a href='<?php echo $row['profile_image'] ?> ' target='_blank' class='btn btn-primary'>View Photo</a>  </td> -->

                         <td> <?php echo $row['bill_email'] ?> </td>
                  
                         <td> <?php echo $row['bill_phone'] ?> </td>
                  
                        <td><?php echo $row['bill_company'] ?></td>

                         <td> <?php echo $row['org_address'] ?>,<?php echo $row['city'] ?>,<?php echo $row['pincode'] ?> </td>
                  
                         <td> <?php echo $row['total'] ?> </td>
                   

                        <!-- <td><a href="profile_update.php?id=<?php echo $row['id'] ?>"><i class="ti-pencil" style="color:blue;"></i></a></td>
                        <td><a href="delete_product.php?id=<?php echo $row['id'] ?>" class="delete" > <i class="ti-trash f3" style="color:red;"></i>Delete</a></td> -->
                         
                         
                         
                     
                       

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
  </script>

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
 