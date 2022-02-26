<?php 
	include 'cart_header.php';
	include 'connection.php';
?>
<!-- Header - end -->


<!-- Main Content - start -->
<main>
    <section class="container stylization maincont">


        <ul class="b-crumbs">
            <li>
                <a href="index.php">
                    Home
                </a>
            </li>
            <li>
                <span>Payment</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Payment</span></h1>
        <!-- payment Items - start -->
		<form action="orderplace.php" method="POST">
	<table style="width:360px; float:left;">
    <thead>
      <tr>
        <th>Billing Address</th>
      </tr>
    </thead>
    <tbody>
      <tr>
		<td><div class="form-group">
				<label for="usr">First Name:</label>
				<input required name="fname" type="text" class="form-control" id="usr">
			</div>
		</td>
      </tr>
      <tr>
		<td><div class="form-group">
				<label for="usr">Last Name:</label>
				<input required name="lname" type="text" class="form-control" id="usr">
			</div>
		</td>
      </tr>
	  <tr>
		<td><div class="form-group">
				<label for="usr">Phone NO</label>
				<input required name="phoneNO" type="text" class="form-control" id="usr">
			</div>
		</td>
      </tr>
      <tr>
		<td><div class="form-group">
				<label for="usr">Email:</label>
				<input required name="email" type="text" class="form-control" id="usr">
			</div>
		</td>
      </tr>
	  <tr>
		<td><div class="form-group">
				<label for="usr">Address:</label>
				<input required name="address" type="text" class="form-control" id="usr">
			</div>
		</td>
      </tr>
	  <tr>
		<td><div class="form-group">
				<label for="usr">City:</label>
				<input required name="city" type="text" class="form-control" id="usr">
			</div>
		</td>
      </tr>
	  <tr>
		<td><div class="form-group">
				<label for="usr">Zipcode:</label>
				<input required name="zipcode" type="text" class="form-control" id="usr">
			</div>
		</td>
      </tr>
    </tbody>
  </table>
  
  
  <table style="width:360px; float:right; margin:0px 36% 0 0">
    <thead>
      <tr>
        <th>Shipping Method</th>
      </tr>
    </thead>
    <tbody>
      <tr>
		<td><div class="radio">
			  <label><input type="radio" value="Cash on delivery" name="optradio">Cash On delivery</label>
			</div>
		</td>
      </tr>
      <tr>
		<td><div class="radio">
			  <label><input type="radio" name="optradio" value="Bkash">Bkash</label>
			</div>
		</td>
      </tr>
      <tr>
		<td><div class="radio">
			  <label><input type="radio" name="optradio" value="Paypal">Paypal</label>
			</div>
		</td>
      </tr>
	  <tr>
		<td><div class="radio">
			  <label><input type="radio" name="optradio" value="Credit Card">Credit Card</label>
			</div>
		</td>
      </tr>
	  
    </tbody>
  </table>
  
  <table class="table table-striped" style="float:left">
    <thead>
      <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Subtotal</th>
      </tr>
    </thead>
    <tbody>
	
	<?php
	$product_id = Array();
	$title = Array();
	$product_quantity = Array();
	$product_price = Array();
	$product_owner = Array();
	$data = Array();
	$cupon_name = "";
	if(isset($_POST["cupon_name"])){
		$cupon_name = $_POST["cupon_name"];
	}
					$total=$_POST["total"];
					$username_1=$_SESSION["username"];
					$overall_price =0;
						$sql = "SELECT * FROM cart where user_id='$username_1'";
						$result = $conn->query($sql);
						$quantity = "";
						if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $user_id = $row["product_id"];
                                $data["quantity"] = $row["quantity"];
								array_push($product_id, $user_id);
								$sql1 = "SELECT * FROM product where product_id='$user_id'";
                                    $result1 = $conn->query($sql1);
                                    $price = "";
                                    if ($result1->num_rows > 0) {
                                        while ($row1 = $result1->fetch_assoc()) {
                                            $data["price"] = $row1["product_price"];
                                            $data["name"] = $row1["product_name"];
											array_push($title, $data["name"]);
											$data["image"] = $row1["product_primary_image"];
											$data["owner"] = $row1["owner"];
											array_push($product_owner, $data["owner"]);
                                        }
                                    }
                                ?>
      <tr>
		<td>
		<?php echo $data["name"]; ?>
		</td>
		<td>
			<?php  echo $data["quantity"]; 
				array_push($product_quantity, $data["quantity"]);
			?>
		</td>
		<td>
			<?php  echo $data["price"];
					array_push($product_price, $data["price"]);
					$overall_price +=  ($data["price"] * $data["quantity"]); 
			?>
		</td>
		<td>
			<?php  echo $data["price"]*$data["quantity"]; ?>
		</td>
      </tr>
	  <?php
							}
						}
	  ?>
      <tr>
      	<td></td>
      	<td></td>
      	<td>Discount</td>
      	<td><del><?php  echo $overall_price; ?></del></td>
      </tr>
	  <tr>
      	<td></td>
      	<td></td>
      	<td>Subtotal</td>
      	<td><?php 
		if(isset($_POST["cupon_name"])){
		$sql = "SELECT * FROM cupon where cupon_code='$cupon_name'";
		$cupon_discount = 0;
		$result = $conn->query($sql);
			if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
					$cupon_discount = $row["cupon_value"];
				}
			}
		
		
			$total = $total - ($total*$cupon_discount)/100; 
		}
		echo $total;
		?></td>
      </tr>
    </tbody>
	
	
  </table>
  <input type="hidden" name="total_price" value="<?php echo $total; ?>" />
  <input type="hidden" name="product_id" value="<?php echo htmlentities(serialize($product_id)); ?>" />
  <input type="hidden" name="product_title" value="<?php echo htmlentities(serialize($title)); ?>" />
  <input type="hidden" name="product_quantity" value="<?php echo htmlentities(serialize($product_quantity)); ?>" />
  
  <input type="hidden" name="product_owner" value="<?php echo htmlentities(serialize($product_owner)); ?>" />
  
  <input type="hidden" name="product_price" value="<?php echo htmlentities(serialize($product_price)); ?>" />
  <input type="hidden" name="owner" value="<?php echo $data["owner"] ?>" />
  <button type="submit" style="float:right" class="btn btn-info">Place Order</button>
  </form>
        <!-- payment Items - end -->

    </section>
</main>
<!-- Main Content - end -->


<!-- Footer - start --><?php
	include 'footer.php';
?>