<?php

session_start();
	include 'dbconfig.php';
	 $user_id=$_SESSION["cust_id"];
//  echo $user_id;
// 	die;
	
	$sql = "SELECT * FROM cart_info WHERE user_id='$user_id'";
// 	echo $sql;
// 	die;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    
	    $total_price=0;
		while($row = $result->fetch_assoc()) {
		     $total = $total + ($row["item_quantity"] * $row["item_price"]);
 $total2 = ($row["item_quantity"] * $row["item_price"]);
?>	
		<tr>
			<td><?=$row['item_name'];?></td>
			<td><?=$row['item_quantity'];?></td>
			<td><?=$row['item_price'];?></td>
			<td><?= $total2?></td>
			<td><button type="button" class="btn btn-success btn-sm update" data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#update_country"
			data-product_id="<?=$row['product_id'];?>"
			data-item_name="<?=$row['item_name'];?>"
			data-item_quantity="<?=$row['item_quantity'];?>"
			data-item_price="<?=$row['item_price'];?>"
		 
			">Edit</button>&nbsp;
			<a style="color:red" class=" " href="delete_cart.php?product_id=<?php echo $row['product_id'] ?>"><i class="ti-pencil" ></i>Del</a>
			</td>
		</tr>
		 
		
<?php	
	}
	?>
	<tr>
                    <td colspan="2"></td>
                    <td>Total</td>
                    <td>₹<?php echo number_format($total, 2); ?> </td>
                    <td></td>
                </tr>
	
	
	<?php
	}
	else {
		echo "<tr >
		<td colspan='5'>No Result found !</td>
		</tr>";
	}
	mysqli_close($conn);
?>