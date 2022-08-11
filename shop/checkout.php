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

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  <navbar class="col-md-12">
<?php include("navbar.php"); ?>

      	</navbar>


<form action="ins-order.php" method="post">
 <div class="row pw">
 
<div class="col-md-6">
  <h2>Billing Address</h2>
  <p>Please enter correct info</p>
  <p>Name</p>
  <p><input type="text" name="bn" id="bn" class="form-control"></p>
  <p>Email</p>
  <p><input type="email" name="be" id="be" class="form-control"></p>
  <p>Phone</p>
  <p><input type="text" name="bp" id="bp" class="form-control"></p>
  <p>Address</p>
  <p><textarea name="ba" id="ba" class="form-control"></textarea></p>
</div>
<div class="col-md-6">
  <h2>Shopping Address</h2>
  <p><label><input type="checkbox" name="cb" id="cb"> Same as billing address</label></p>
  <p>Name</p>
  <p><input type="text" name="sn" id="sn" class="form-control"></p>
  <p>Email</p>
  <p><input type="email" name="se" id="se" class="form-control"></p>
  <p>Phone</p>
  <p><input type="text" name="sp" id="sp" class="form-control"></p>
  <p>Address</p>
  <p><textarea name="sa" id="sa" class="form-control"></textarea></p>

  <input type="submit" name="morder" value="Confirm Order" class="btn btn-primary">
</div>

 </div>

</form>
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

$(function(){

  $("#cb").click(function(){

if($("#cb").prop("checked")){

  $("#sn").val($("#bn").val());
  $("#se").val($("#be").val());
  $("#sp").val($("#bp").val());
  $("#sa").val($("#ba").val());

}
else{
    $("#sn").val("");
  $("#se").val("");
  $("#sp").val("");
  $("#sa").val("");
}



  });


});


  function vali(){
    var pass=document.getElementById("pass").value;
    var cpass=document.getElementById("cpass").value;
    if(pass!=cpass){
      alert("password mismatch");
      return false;
    }
  }
</script>