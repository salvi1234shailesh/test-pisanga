<?php
   session_start();
   error_reporting(0);
   include "function/dbconfig.php";
   
   if($_SESSION["cust_id"] == ''){
     
      header('location: account.php');
   }



     if ( isset( $_POST['submit'] ) ) {
  
// print_r($_POST);
//  die;

    $item_quantity=$_POST['item_quantity'];
$item_name=$_POST['item_name'];
$item_price=$_POST['item_price'];
 
 
$user_id=$_SESSION['cust_id'];



// $w="SELECT * FROM cart_info WHERE item_name = '$item_name' AND user_id='$user_id'";
// echo $w;
// die();

 $result1 = mysqli_query($conn, "SELECT * FROM cart_info WHERE item_name = '$item_name' AND user_id='$user_id'");


 
if(mysqli_num_rows($result1)>0)
{
     
     echo '<script>alert("This Item Already Added !...");
    window.location.href="alumin_profile.php";</script>';
}



 
else{


 

         
        $addsql="INSERT INTO `cart_info`(`user_id`, `item_quantity`, `item_name`, `item_price`, `cr_date`) VALUES ('$user_id','$item_quantity','$item_name','$item_price',now())";

        // echo $addsql;
        // die;

  if (mysqli_query($conn, $addsql)) {

    echo '<script>alert("Successfull Item Product Add..");
    window.location.href="alumin_profile.php";</script>';
}
 else {
  echo "Error: " . $addsql . "<br>" . mysqli_error($conn);
}
}

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
              <li class="active"><a href="alumin_profile.php">Aluminium Profile & Accessories</a></li>
              <li><a href="shopworkstation.php">Workstation</a></li>
              <li><a href="shopconveyor.php">Conveyor</a></li>  
            </ul>
          </li>
          <li><a href="shopcontact.php">Contact</a></li>
           
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
 <section>
 <img src="assets\img\t-slut-aluminum-erd-metal-extrusion.jpeg" class="" alt="Trulli" width="100%"  style="height: 330px";>

  </section>

  


  <!-- End Hero -->
  
  <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
		
        <div class="section-title" data-aos="fade-up">
          <!-- <h2>Some of our <strong>recent works</strong></h2> -->
		  <center><h3> ALUMINIUM PROFILES</h3>

        <span> <a href="my_cart.php" class="btn-get-started scrollto  " style="background: #010246;border: 0; padding: 10px 30px;color: #fff; border-radius:50px; ">View Your  Cart </a></span></center>
        </div>


        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
               <li data-filter="* .filter-33" class="filter-active">All</li> 
              <li data-filter=".filter-30">30 MM PROFILE</li>
              <li data-filter=".filter-40">40 MM PROFILE</li>
              <li data-filter=".filter-45">45 MM PROFILE</li>
              <li data-filter=".filter-acc">Accessories</li>
            </ul>
          </div>
        </div>
        <style>
       
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #fff;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }

         
        table th{
            background-color: #efefef;
        }
    </style>

        <div class="row portfolio-container" data-aos="fade-up">

           

                                   <?php 
                                       $sql1="SELECT * FROM profile  ORDER BY id ASC ";

                                  //$sql1="select * from profile where profile_no = 30 MM Series";

                                //   echo $sql1;
                                //   die;
                                  $result1 =mysqli_query($conn, $sql1);

                                   while( $row =mysqli_fetch_array($result1))

                            {     ?>
                                <div class ="col-lg-4 col-md-4 portfolio-item filter-33">

                                <form method="post" action="alumin_profile.php">

<div class="product">
    <img src="<?php echo $row["profile_image"]; ?>" class="responsive" width="100%" height="200px">
     <h5  style="color: rgba(1, 4, 136, 0.9);"><?php echo $row["profile_no"]; ?></h6>
                                <h5 class=""><?php echo $row["profile_sr_no"]; ?></h5>
                                <h6 class="text-danger">Cost RS/M:₹&nbsp;<?php echo $row["profile_cost"]; ?>Per Unit</h6>
                                
                                <div class="form-row">
                <div class="col-md-8 form-group text-center">
                    <input type="text" name="item_quantity" class="form-control" value="1">
                </div>
                <div class="col-md-4 form-group">
                   <label>/Meter</label>
                </div>
              </div>
                                
                                
                                
                                
                               
                                <input type="hidden" name="item_name" value="<?php echo $row["profile_sr_no"]; ?>">
                                <input type="hidden" name="item_price" value="<?php echo $row["profile_cost"]; ?>">
                                <input type="submit" name="submit" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
</div>
</form>
                                </div>

                                <?php

                            }
                                ?>



                                  

 
  
		  
		   
		  
		    
		  
		   
          
           
		  
		   
		   

           <?php 
                                      // $sql1="SELECT * FROM profile ORDER BY id ASC ";

                                  $sql3="select * from profile where profile_no = '45 MM Series'";

                                //   echo $sql1;
                                //   die;
                                  $result3 =mysqli_query($conn, $sql3);

                                   while( $row1 =mysqli_fetch_array($result3))

                            {     ?>
		  
		  <div class="col-lg-4 col-md-4 portfolio-item filter-45">
             <form method="post" action="alumin_profile.php">

<div class="product">
    <img src="<?php echo $row1["profile_image"]; ?>" class="responsive" width="100%" height="200px">
    <h5 class="" style="color: rgba(1, 4, 136, 0.9);"><?php echo $row1["profile_no"]; ?></h6>
                                <h5 class=""><?php echo $row1["profile_sr_no"]; ?></h6>
                                
                                <h6 class="text-danger">Cost RS/M:₹&nbsp;<?php echo $row1["profile_cost"]; ?>Per Unit</h5>
                                    <div class="form-row">
                <div class="col-md-8 form-group text-center">
                    <input type="text" name="item_quantity" class="form-control" value="1">
                </div>
                <div class="col-md-4 form-group">
                   <label>/Meter</label>
                </div>
              </div>
                                <input type="hidden" name="item_name" value="<?php echo $row1["profile_sr_no"]; ?>">
                                <input type="hidden" name="item_price" value="<?php echo $row1["profile_cost"]; ?>">
                                <input type="submit" name="submit" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
</div>
</form>
                                </div>

                                <?php

                            }
                                ?>
          

<!--- 30 MM series-->
         
          
		 

		  

      <?php 
                                      // $sql1="SELECT * FROM profile ORDER BY id ASC ";

                                  $sql4="select * from profile where profile_no = '40 MM Series'";

                                //   echo $sql1;
                                //   die;
                                  $result4 =mysqli_query($conn, $sql4);

                                   while( $row2 =mysqli_fetch_array($result4))

                            {     ?>
          <div class="col-lg-4 col-md-4 portfolio-item filter-40">
            <form method="post" action="alumin_profile.php">

<div class="product">
    <img src="<?php echo $row2["profile_image"]; ?>" class="responsive" width="100%" height="200px">
     <h5 class="" style="color: rgba(1, 4, 136, 0.9);"><?php echo $row2["profile_no"]; ?></h6>
                                <h5 class=""><?php echo $row2["profile_sr_no"]; ?></h5>
                                <h6 class="text-danger">Cost RS/M:₹&nbsp; <?php echo $row2["profile_cost"]; ?>Per Unit</h6>
                                     <div class="form-row">
                <div class="col-md-8 form-group text-center">
                    <input type="text" name="item_quantity" class="form-control" value="1">
                </div>
                <div class="col-md-4 form-group">
                   <label>/Meter</label>
                </div>
              </div>
                                <input type="hidden" name="item_name" value="<?php echo $row2["profile_sr_no"]; ?>">
                                <input type="hidden" name="item_price" value="<?php echo $row2["profile_cost"]; ?>">
                                <input type="submit" name="submit" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
</div>
</form>
                                </div>

                                <?php

                            }
                                ?>

		   
          
           


		   

		  
          

		  

		  
           

		   
           <?php 
                                      // $sql1="SELECT * FROM profile ORDER BY id ASC ";

                                  $sql5="select * from profile where profile_no = '30 MM Series'";

                                //   echo $sql1;
                                //   die;
                                  $result5 =mysqli_query($conn, $sql5);

                                   while( $row3 =mysqli_fetch_array($result5))

                            {     ?>
          
          <div class="col-lg-4 col-md-4 portfolio-item filter-30">
           <form method="post" action="alumin_profile.php">

<div class="product">
    <img src="<?php echo $row3["profile_image"]; ?>" class="responsive" width="100%" height="200px">
     <h5 class="" style="color: rgba(1, 4, 136, 0.9);"><?php echo $row3["profile_no"]; ?></h6>
                                <h5 class=""><?php echo $row3["profile_sr_no"]; ?></h5>
                                <h6 class="text-danger">Cost RS/M:₹&nbsp; <?php echo $row3["profile_cost"]; ?>Per Unit</h6>
                                    <div class="form-row">
                <div class="col-md-8 form-group text-center">
                    <input type="text" name="item_quantity" class="form-control" value="1">
                </div>
                <div class="col-md-4 form-group">
                   <label>/Meter</label>
                </div>
              </div>
                                <input type="hidden" name="item_name" value="<?php echo $row3["profile_sr_no"]; ?>">
                                <input type="hidden" name="item_price" value="<?php echo $row3["profile_cost"]; ?>">
                                <input type="submit" name="submit" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
</div>
</form>
                                </div>

                                <?php

                            }
                                ?>

		   

		  
           

		   
          
            

		   

		  
           

      <?php 
                                      // $sql1="SELECT * FROM profile ORDER BY id ASC ";

                                  $sql5="select * from profile where profile_no = 'Accessories'";

                                //   echo $sql1;
                                //   die;
                                  $result5 =mysqli_query($conn, $sql5);

                                   while( $row5 =mysqli_fetch_array($result5))

                            {     ?>
          <div class="col-lg-4 col-md-4 portfolio-item filter-acc">
            <form method="post" action="alumin_profile.php">

<div class="product">
    <img src="<?php echo $row5["profile_image"]; ?>" class="responsive" width="100%" height="200px">
     <h5 class="" style="color: rgba(1, 4, 136, 0.9);"><?php echo $row5["profile_no"]; ?></h6>
                                <h5 class="text-info"><?php echo $row5["profile_sr_no"]; ?></h5>
                                <h6 class="text-danger">Cost RS/M:₹&nbsp; <?php echo $row5["profile_cost"]; ?></h6>
                                     <div class="form-row">
                <div class="col-md-8 form-group text-center">
                    <input type="text" name="item_quantity" class="form-control" value="1">
                </div>
                <div class="col-md-4 form-group">
                   <label>/Meter</label>
                </div>
              </div>
                                <input type="hidden" name="item_name" value="<?php echo $row5["profile_sr_no"]; ?>">
                                <input type="hidden" name="item_price" value="<?php echo $row5["profile_cost"]; ?>">
                                <input type="submit" name="submit" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
</div>
</form>
                                </div>

                                <?php

                            }
                                ?>

		   
          
           

		   
          
          
            
          
            

		  
           

		   
           

		 

		   
          

		   
		  
		 
		  
		   
		  
		    
		  
        </div>
        
        <section class="ftco-section ftco-no-pb ftco-room px-4" >
            <div class="container-fluid px-2">
            	
  <center style="padding: 15px;"><a href="assets/FENCING_PROFILE_WITH_COST.pdf" target="_blank" download> <button style="background-color: rgba(1, 4, 136, 0.9);border-color:#1296B9 ;font-size:x-large;padding: 5px 30px;" type="button" class="btn btn-primary"><b>Profile Brochure  &nbsp <i class="fa fa-download" aria-hidden="true"></i></b></button> </a></center>           	
            	
                 <!--<a onClick="openTab(this)" href="images/pdf/corporate-brochure-1-merged.pdf" name="corporate-brochure-1-merged.pdf">Download Pdf</a>-->
                 
            
      
       </div>
            </div>

        </section>

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
</body>

</html>