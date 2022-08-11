<?php
session_start();
include("dbconfig.php");
?>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=softaweb"></script>
<script >
  function softaweb(){
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

    <title>Pisanga Aluminium Extrusions Shopping Cart</title>
  </head>
  <body>
      
      
      <navbar class="col-md-12">
<?php include("navbar.php"); ?>

      	</navbar>
  <div class="container">
  


          <div class="row pw">

<div class="col-md-12" id="crt_table">
  <table class="table table-striped">
    <thead>
      <th>Product Name</th>
      <th>Image</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Total</th>
    </thead>
  
  <tbody>
    <?php
    $st=0;
    $cid=$_SESSION['cid'];
    $sel="SELECT * FROM cart WHERE cid='$cid'";
    $rs=$con->query($sel);
    while($row=$rs->fetch_assoc()){

      $pid=$row['pid'];
       $selp="SELECT * FROM product WHERE id='$pid'";
    $rsp=$con->query($selp);
    while($rowp=$rsp->fetch_assoc()){

      $st=$st+($row['qty']*$row['price']);

    ?>
    <tr>
       <td><?php echo $rowp['pname']; ?></td>
      
        <td><img src="product_img/<?php echo $rowp['pimg']; ?>" style="width: 40px;"></td>
     


      <td>
        <form id="frm<?php echo $row['id'] ?>">
          <input type="hidden" name="cart_id" value="<?php  echo $row['id'];?>">
          <input type="number" name="qty" value="<?php echo $row['qty']; ?>" onchange="updcart(<?php echo $row['id'];  ?>)" onkeyup="updcart(<?php echo $row['id'];  ?>)" style="width: 60px;">
          
        </form>

       
          

        </td>
      <td><?php echo $row['price']; ?></td>
      <td><?php echo $row['qty']*$row['price']; ?></td>
    </tr>
    <?php
  }
     }
    ?>
    <tr>
      <th colspan="4" style="text-align: right;">Sub Total</th>
      <th><?php  echo $st;?> </th>
    </tr>
    <tr>
        <td  style="text-align: left;">
        <a href="shop.php" class="btn btn-primary"><i class="fas fa-arrow-left"></i>Continue</a>
        
      </td>
        
      <td colspan="4" style="text-align: right;">
        <a href="checkout.php" class="btn btn-success">Checkout</a>
        
      </td>
    </tr>
    
  </tbody>
</table>
</div>

   
</div>

<footer class="row">
 	<div class="col-md-12">
 		<p class="ft">&copy; @ All Right Resarved 2020</p>
 		
 	</div>
 	
 </footer>


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
          <p>Email</p>
          <p><input type="email" name="email" class="form-control"></p>
          <p>Phone</p>
          <p><input type="text" name="phone" class="form-control"></p>
          <p>Password</p>
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

  function updcart(id){

  $.ajax({
    url:'updqty.php',
    type:'POST',
    data:$("#frm"+id).serialize(),
    success:function(res){

      $("#crt_table").html(res);

    }


  });

  }


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