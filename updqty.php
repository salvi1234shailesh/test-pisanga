<?php
session_start();
 $con=mysqli_connect("localhost","vaishakhpillai1","9096115174","pisanga_ecomm");


$cartid=$_POST['cart_id'];
$qty=$_POST['qty'];

$upd="UPDATE cart SET qty='$qty' WHERE id='$cartid'";
$con->query($upd);


?>
 <h3 class="text-center">Shopping Cart</h3>
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
        <a href="shop.php" class="btn btn-primary disabled"><i class="fas fa-arrow-left"></i>Continue</a>
        
      </td>
          
        <td colspan="4" style="text-align: right;">
          <a href="checkout.php" class="btn btn-success">Checkout</a>
          
        </td>
      </tr>
      
    </tbody>
  </table>