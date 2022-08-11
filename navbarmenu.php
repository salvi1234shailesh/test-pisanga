<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
 

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  
   <!-- CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<nav class=" navbar navbar-expand-md   navbar-dark fixed-top" style="background-color:rgba(1, 4, 136, 0.9);">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><span><img src="assets\img\Logo\PNG\60 px.png"  width="40px" height="40px" class="" alt="">&nbsp;<img src="assets\img\Logo\Pisanga FINAL version-09.png" width="71px" height="40px" class="" alt=""></span></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item">
        <a class="nav-link" href="shopindex.php">Home</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="shopabout.php">About Us</a>
      </li>
      
       
      
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Product
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="shop.php">Alumin Profile & Accessories</a>
          <a class="dropdown-item" href="shopworkstation.php">Workstation</a>
          <a class="dropdown-item" href="shopconveyor.php">Conveyor</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="shopcontact.php">Contact</a>
      </li>

<?php  if(isset($_SESSION['cid'])){

     $cid=$_SESSION['cid'];
      $sel="SELECT * FROM cart WHERE cid='$cid'";
      $rs=$con->query($sel);
      

  ?>

      <li class="nav-item">
        <div class="dropdown">
        <a class="nav-link" href="#"  data-toggle="dropdown">Cart <span class="badge badge-pill badge-danger"><?php echo $rs->num_rows; ?></span></a>


        <div class="dropdown-menu">
          <table class="table table-striped">
      
    
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
          <?php echo $row['qty']; ?>

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
        <td colspan="5" style="text-align: right;">
          <a href="cart.php" class="btn btn-success">View Cart</a>
          
        </td>
      </tr>
      
    </tbody>
  </table>

       </div>

      </div>
      </li>
    <?php  } ?>

      
 
    </ul>

    <ul class="navbar-nav  ">
      <?php 
      if(!isset($_SESSION['cid']))
       {
  
      ?>

      <li class="nav-item">
        <a class="btn btn-primary gap" href="#" data-toggle="modal" data-target="#logi">Login</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-success" href="#" data-toggle="modal" data-target="#signu">Sign Up</a>
      </li>
    <?php  } else{ ?>
      <li class="nav-item">
        <a class="nav-link" href="#">Welcome <?php echo $_SESSION['name'];?></a>
      </li>
<li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
  </li>

    <?php }  ?>
     
    </ul>
  </div>
</nav>



<style>
li.nav-item {
    display: block;
    position: relative;
 
    transition: 0.3s;
    font-size: 20px;
    font-weight: 500;
    font-family: 'Alegreya Sans';
}</style>