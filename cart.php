<?php 
	include 'cart_header.php';
	include 'connection.php';
	
	
?>
<!-- Header - end -->


<!-- Main Content - start -->
<main>
    <section class="container stylization maincont">


        
        <h1 class="main-ttl"><span>Cart</span></h1>
        <!-- Cart Items - start -->
        <form action="pay.php" method="POST">
<?php
	if(isset($_SESSION["username"])){
?>
            <div class="cart-items-wrap">
                <table class="cart-items">
                    <thead>
                    <tr>
                        <td class="cart-image">Photo</td>
                        <td class="cart-ttl">Products</td>
                        <td class="cart-price">Price</td>
                        <td class="cart-quantity">Quantity</td>
                        <td class="cart-summ">Summ</td>
                        <td class="cart-del">&nbsp;</td>
                    </tr>
                    </thead>
                    <tbody>
					
					<?php
	}
					$total=0;
					$username_1="";
					if(isset($_SESSION["username"])){
						$username_1=$_SESSION["username"];
					
						$sql = "SELECT * FROM cart where user_id='$username_1'";
						$result = $conn->query($sql);
						$quantity = "";
						if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $user_id = $row["product_id"];
                                $quantity = $row["quantity"];
								
                                ?>
                                <tr>
                                    

                                    <?php
                                    $sql1 = "SELECT * FROM product where product_id='$user_id'";
                                    $result1 = $conn->query($sql1);
                                    $price = "";
                                    if ($result1->num_rows > 0) {
                                        while ($row1 = $result1->fetch_assoc()) {
                                            $price = $row1["product_price"];
                                            $name = $row1["product_name"];
											$image = $row1["product_primary_image"];
                                        }
                                    }
                                    ?>
									<td class="cart-image">
                                        <a href="product.html">
										<?php 
											echo "<img src='../ecommerce/admin/uploads/".$image."' width=\"69\" height=\"80\">";
										?>
                                        </a>
                                    </td>
									<td class="cart-ttl">
											<a href="product.html"><?php echo $name; ?></a>
									</td>
                                    <td class="cart-price">
                                        <b><?php echo $price; ?></b>
                                    </td>
                                    <td class="cart-quantity">
                                        <p class="cart-qnt">
                                            <input value="<?php echo $quantity; ?>" type="text">
                                            <a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>
                                            <a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>
                                        </p>
                                    </td>
									<td class="cart-summ">
										<b><?php 
										$sum = $price*$quantity;
										echo  $sum;
										$total = $total+ $sum;
										?></b>
										<p class="cart-forone">unit price <b>$220</b></p>
									</td>
                                    <td class="cart-del">
										<a href="deletecart.php?ids=<?php echo $user_id ?>" class="cart-remove"></a>
									</td>
									
                                </tr>
                                <?php
                            }
                        }
						}else {
							?>
								<a href="../ecommerce/admin/login.php"><span class="label label-danger" style="    font-size: 28px;
    margin-left: 36%;">You need to Login</span></a>
							<?php
							
						}
					?>
                    </tbody>
                </table>
            </div>
			<?php
				if(isset($_SESSION["username"])){
			?>
            <ul class="cart-total">
                <li class="cart-summ">TOTAL: <b><?php echo $total ?></b></li>
				<input type="hidden" name="total" value="<?php echo $total ?>" />
            </ul>
            <div class="cart-submit">
                <div class="cart-coupon">
					<span style="    font-size: 15px;" class = "label label-danger">You Can use your coupon here</span>
                    <input placeholder="your coupon" type="text" name="cupon_name">
				</form>
                </div>
                <button type="submit" class="btn btn-info" style="    float: right;
    margin-left: 29px;">Checkout</button>
               
            </div>
			<?php
				}
			?>
        </form>
        <!-- Cart Items - end -->

    </section>
</main>
<!-- Main Content - end -->


<!-- Footer - start --><?php
	include 'footer.php';
?>