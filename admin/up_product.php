<?php
session_start();
if(!isset($_SESSION['uid']))
{
  header("location:index.php");
}
 $con=mysqli_connect("localhost","vaishakhpillai1","9096115174","pisanga_ecomm");


$id=$_GET['id'];


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add Product</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php  include("admin_inc/menu.php");?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <?php  include("admin_inc/top.php"); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Update Product</h1>
          <form action="update_product.php" method="post" enctype="multipart/form-data">
              
            <?php  $sel="SELECT * FROM product";
 
$rs=$con->query($sel);
while($row=$rs->fetch_assoc()){

    $id=$row['id'];
    
    $pname=$row['pname'];
    $pprice=$row['pprice'];
     
    $cat=$row['cat'];
    $pimg=$row['pimg'];
    
  
    
     
}
 ?>     
 
 
 <p><input type="hidden" name="id" class="form-control" value="<?php  echo $id;?>"></p>

              
              
              
              
              
              
              
            <p>Product Category</p>
            <p><select name="cat" class="form-control">
              <option value="">-Select-</option>
              
               <option value="3" <?php  if($cat=='3'){ echo  "selected";} ?>>30 MM Series</option>
                            <option value="4" <?php if($cat=='4'){ echo "selected";} ?>>40 MM Series</option>
                            <option value="5" <?php if($cat=='5'){ echo "selected";} ?>>45 MM Series</option>
                            <option value="6" <?php if($cat=='6'){ echo "selected";} ?>>Nut</option>
              
              
            </select></p>
            <p>Product Name</p>
            <p><input type="text" name="pname" class="form-control" value="<?php  echo $pname;?>"></p>
            <p>Product price</p>
            <p><input type="text" name="pprice" class="form-control" value="<?php  echo $pprice;?>"></p>
            
            
            <p>Product image</p>
            
             
            <p><input type="file" name="pimg" class="form-control" ></p>
             <p><input type="hidden" name="pimg_old" class="form-control"  value="../product_img/<?php echo $pimg; ?>"></p>
             
             <p
             
             
             
            <p><input type="submit" name="save" value="Save" class="btn btn-primary"></p>
          </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Pisanga.com 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  
  
  <script type="text/javascript">
   $(document).ready(function(){


$('#cat').on('change',function(){

  var selectedText = $(this).children(':selected').text();
      $('#cat2').val(selectedText);

});



});
</script>
  
  
  

</body>

</html>
