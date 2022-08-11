       <div class="row pw" style="padding:60px 0px">
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
   <form action="insert-cart.php" method="post">
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