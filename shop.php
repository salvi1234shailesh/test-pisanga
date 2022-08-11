<?php
session_start();
 $con=mysqli_connect("localhost","vaishakhpillai1","9096115174","pisanga_ecomm");

?>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=pisangaweb"></script>
<script >
  function pisangaweb(){
    new google.translate.TranslateElement({PageLanguage:'en'},'xyz')
  }
</script>



<!doctype html>
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
   <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    
    
    


    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >

<link rel="stylesheet" href="style.css">

    <title>Pisanga Aluminium Extrusions</title>
  </head>
  <body>
      <navbar class="navbar-fixed-top">
<?php include("navbarmenu.php"); ?>

      	</navbar>
      	
      	
      	
      		<main id="main">
 <section  style="padding:70px 0px!important;">
 <img src="assets\img\t-slut-aluminum-erd-metal-extrusion.jpeg" class="img-fluid" alt="Trulli" width="100%"  style="height: 330px";>

  </section>
  <div class="container" >
      
      <div class="row">
         <div class="col-md-2">
        
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="">
  <a style="color:#000;" class="nav-link btn active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">30 Profile</a>
  <a style="color:#000;" class="nav-link btn" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">40 Profile</a>
  <a style="color:#000;" class="nav-link btn" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">45 Profile</a>
  <a style="color:#000;" class="nav-link btn" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Accessories
</a>
</div>
<style>
  .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff!important;
    background-color: #01036f!important;
}
</style>
</div>
<div class="col-md-10">
<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
  		<div class="row">

 			<?php
      $sel="SELECT * FROM product  where cat='3'";
      $rs=$con->query($sel);
      while($row=$rs->fetch_assoc()){
      ?>
 			<article class="col-md-4" style="padding:20px 10px;">
 				<div class="card">
          <a href="details.php?id=<?php  echo $row['id'];?>">
  <img class="card-img-top img-fluid" src="product_img/<?php echo $row['pimg']; ?>" style="height: 200px;" class="" alt="Responsive image"></a>
  <div class="card-body">
    <h4 class="card-title"><?php echo $row['pname']; ?></h4>
    <?php 
      if(isset($_SESSION['cid']))
       {
  
      ?>
    <p class="card-text">Rs: <?php echo $row['pprice']; ?> As Per Meter</p>
    
   <form action="insert-cart.php" method="post">
     <p><input type="number" name="qty" value="1" min="1" style="width: 60px;">Meter</p>
     <input type="hidden" name="pid" value="<?php echo $row['id']; ?>">
     <input type="hidden" name="price" value="<?php echo $row['pprice']; ?>">
     <input type="submit" name="act" value="Add to Cart" class="btn" style="background-color:#01036f; color:white">
   </form>
 <?php  } else {?>
 <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#logi">Login to Buy</a>
  <?php
 }
  ?>


  </div>
</div>
 				
 			</article>
 			 <?php
       }
      ?>
 		</div>
  
  
  
  
  
  
  
  
  </div>
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      		<div class="row">

 			<?php
      $sel="SELECT * FROM product  where cat='4'";
      $rs=$con->query($sel);
      while($row=$rs->fetch_assoc()){
      ?>
 			<article class="col-md-4"  style="padding:20px 10px;">
 				<div class="card"   >
          <a href="details.php?id=<?php  echo $row['id'];?>">
  <img class="card-img-top img-fluid" src="product_img/<?php echo $row['pimg']; ?>" style="height: 200px;" class="" alt="Responsive image"></a>
  <div class="card-body">
    <h4 class="card-title"><?php echo $row['pname']; ?></h4>
    
    <?php 
      if(isset($_SESSION['cid']))
       {
  
      ?>
      <p class="card-text">Rs: <?php echo $row['pprice']; ?>As Per Meter</p>
   <form action="insert-cart.php" method="post">
     <p><input type="number" name="qty" value="1" min="1" style="width: 60px;">Meter</p>
     <input type="hidden" name="pid" value="<?php echo $row['id']; ?>">
     <input type="hidden" name="price" value="<?php echo $row['pprice']; ?>">
     <input type="submit" name="act" value="Add to Cart"  class="btn" style="background-color:#01036f; color:white">
   </form>
 <?php  } else {?>
 <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#logi">Login to Buy</a>
  <?php
 }
  ?>


  </div>
</div>
 				
 			</article>
 			 <?php
       }
      ?>
 		</div>
  </div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">	
   <div class="row">

 			<?php
      $sel="SELECT * FROM product where cat='5'";
      $rs=$con->query($sel);
      while($row=$rs->fetch_assoc()){
      ?>
 			<article class="col-md-4"  style="padding:20px 10px;">
 				<div class="card" style="padding:10px;" >
          <a href="details.php?id=<?php  echo $row['id'];?>">
  <img class="card-img-top img-fluid" src="product_img/<?php echo $row['pimg']; ?>" style="height: 200px;" class="" alt="Responsive image"></a>
  <div class="card-body">
    <h4 class="card-title"><?php echo $row['pname']; ?></h4>
    
    <?php 
      if(isset($_SESSION['cid']))
       {
  
      ?>
      <p class="card-text">Rs: <?php echo $row['pprice']; ?>As Per Meter</p>
   <form action="insert-cart.php" method="post">
     <p><input type="number" name="qty" value="1" min="1" style="width: 60px;"> Meter</p>
     <input type="hidden" name="pid" value="<?php echo $row['id']; ?>">
     <input type="hidden" name="price" value="<?php echo $row['pprice']; ?>">
     <input type="submit" name="act" value="Add to Cart"  class="btn" style="background-color:#01036f; color:white;">
   </form>
 <?php  } else {?>
 <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#logi">Login to Buy</a>
  <?php
 }
  ?>


  </div>
</div>
 				
 			</article>
 			 <?php
       }
      ?>
 		</div></div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">	
  <div class="row">

 			<?php
      $sel="SELECT * FROM product where cat='6'";
      $rs=$con->query($sel);
      while($row=$rs->fetch_assoc()){
      ?>
 			<article class="col-md-4"  style="padding:20px 10px;">
 				<div class="card" style="padding:10px;" >
          <a href="details.php?id=<?php  echo $row['id'];?>">
  <img class="card-img-top img-fluid" src="product_img/<?php echo $row['pimg']; ?>" style="height: 200px;" class="" alt="Responsive image"></a>
  <div class="card-body">
    <h4 class="card-title"><?php echo $row['pname']; ?></h4>
     
    <?php 
      if(isset($_SESSION['cid']))
       {
  
      ?>  <p class="card-text">Rs: <?php echo $row['pprice']; ?> As Per Meter</p>
   <form action="insert-cart.php" method="post">
     <p><input type="number" name="qty" value="1" min="1" style="width: 60px;"> Meter</p>
     <input type="hidden" name="pid" value="<?php echo $row['id']; ?>">
     <input type="hidden" name="price" value="<?php echo $row['pprice']; ?>">
     <input type="submit" name="act" value="Add to Cart" class="btn" style="background-color:#01036f; color:white;">
   </form>
 <?php  } else {?>
 <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#logi">Login to Buy</a>
  <?php
 }
  ?>


  </div>
</div>
 				
 			</article>
 			 <?php
       }
      ?>
 		</div></div>
</div>
</div>
  
</div>

   

	</div>
		
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
 
<?php include("footer.php"); ?>
 	
 </div>




<div class="modal" id="logi">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form action="login-panel.php" method="post">
        
          
          <p>Phone or Email</p>
          <p><input type="text" name="uname" class="form-control"></p>
         
          <p><input type="submit" name="save" value="Sign In" class="btn btn-primary"></p>
       </form>
      </div>

      
    </div>
  </div>
</div>

<div class="modal" id="signu">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sign UP</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form action="signup.php" method="post">
         <p>Name<p>
          <p><input type="text" name="name" class="form-control"></p>
          <p>Email:</p>
          <p><input type="email" name="email" class="form-control"></p>
           <p>company Name:</p>
          <p><input type="text" name="company" class="form-control"></p>
          
          <p>Phone:</p>
          <p><input type="text" name="phone" class="form-control"></p>
          
          <p><input type="submit" name="save" value="Sign Up" class="btn btn-success"></p>
       </form>
      </div>

      
    </div>
  </div>
</div>
<script >
  function vali(){
    var pass=document.getElementById("pass").value;
    var cpass=document.getElementById("cpass").value;
    if(pass!=cpass){
      alert("password mismatch");
      return false;
    }
  }
</script>
  </body>
</html>