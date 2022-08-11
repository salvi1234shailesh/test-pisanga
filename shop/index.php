<?php
session_start();
include("dbconfig.php");
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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
   <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<link rel="stylesheet" href="css/style.css">

    <title>Pisanga Aluminium Extrusions</title>
  </head>
  <body>
      <navbar class="col-md-12">
<?php include("navbar.php"); ?>

      	</navbar>
  <div class="container">
  


          <div class="row pw">
 	<aside class="col-md-3">
  <div class="tc">
    <p>Select Language</p>
    <div id="xyz"></div>
    
  </div>

 		<ul class="list-group">
  <li class="list-group-item active">Product Category</li>

  <?php
              $sel="SELECT * FROM category WHERE parent_id='0'";
              $rs=$con->query($sel);
              while($row=$rs->fetch_assoc()){
              ?>
  <li class="list-group-item" data-toggle="collapse" data-target="#sc<?php echo $row['id'];?>"><?php echo $row['name'] ?></li>

  <div class="collapse" id="sc<?php echo $row['id'];?>">

  <?php
                $pid=$row['id'];
                $selc="SELECT * FROM category WHERE parent_id='$pid'";
              $rsc=$con->query($selc);
              while($rowc=$rsc->fetch_assoc()){

                ?>
<li class="list-group-item " ><?php echo $rowc['name']; ?></li>

            <?php }  ?>
        </div>

<?php  } ?>

</ul>
 	</aside>
     <section class="col-md-9">
 		<div class="row">

 			<?php
      $sel="SELECT * FROM product";
      $rs=$con->query($sel);
      while($row=$rs->fetch_assoc()){
      ?>
 			<article class="col-md-4">
 				<div class="card" style="padding:10px;" >
          <a href="details.php?id=<?php  echo $row['id'];?>">
  <img class="card-img-top" src="product_img/<?php echo $row['pimg']; ?>" style="height: 200px;" alt="Card image"></a>
  <div class="card-body">
    <h4 class="card-title"><?php echo $row['pname']; ?></h4>
    <p class="card-text">Rs: <?php echo $row['pprice']; ?></p>
    <?php 
      if(isset($_SESSION['cid']))
       {
  
      ?>
   <form action="ins-cart.php" method="post">
     <p><input type="number" name="qty" value="1" min="1" style="width: 60px;"></p>
     <input type="hidden" name="pid" value="<?php echo $row['id']; ?>">
     <input type="hidden" name="price" value="<?php echo $row['pprice']; ?>">
     <input type="submit" name="act" value="Add to Cart" class="btn btn-primary">
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
 		
 	</section>
</div>

	</div>
<footer class="container-fluid">
<div class="row">
 	<div class="col-md-12 text-center" style="background-color:#010351; color:white;">
 	    
 	   <div class="copyright" >
        &copy; Copyright <strong ><span>PISANGA</span></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <a href="https://www.magicnlogic.com/" target="_blank">Magic & Logic Advertising Media </a>
      </div>
 		
 	</div>
 	</div>
 	
 </footer>




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
       <form action="lc.php" method="post">
        
          
          <p>Phone or Email</p>
          <p><input type="text" name="uname" class="form-control"></p>
          <p>Password</p>
          <p><input type="password" name="pass" class="form-control"></p>
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
       <form action="reg.php" method="post" onsubmit="return vali();">
         <p>Name<p>
          <p><input type="text" name="name" class="form-control"></p>
          <p>Email:</p>
          <p><input type="email" name="email" class="form-control"></p>
           <p>company Name:</p>
          <p><input type="text" name="company" class="form-control"></p>
          
          <p>Phone:</p>
          <p><input type="text" name="phone" class="form-control"></p>
          <p>Password:</p>
          <p><input type="password" name="pass" id="pass" class="form-control"></p>
          <p>Confirm Password</p>
          <p><input type="password" name="cpass" id="cpass" class="form-control"></p>
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