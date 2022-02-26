
<?php
	include 'connection.php';
	include 'wishlist_header.php';
	

?>
<!-- Main Content - start -->
<main>
    <section class="container">


        
        <h1 class="main-ttl"><span>Wishlist</span></h1>
        <!-- Catalog Items | Full - start -->
        <div class="section-cont section-full">

            <div class="prod-items section-items">
			
			<?php
			
				
				$username_1="";
				if(isset($_SESSION["username"])){
				$username_1=$_SESSION["username"];
                $sql = "SELECT * FROM wishlist where username='$username_1'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
						$id= $row["product_id"];
						
				
				$sql1 = "SELECT * FROM product where product_id='$id'";
                $result1 = $conn->query($sql1);
                if ($result1->num_rows > 0){
                    while($row1 = $result1->fetch_assoc()) {
						$user_id = $row["product_id"];
								$product_name = $row1["product_name"];
								$rating = $row1["product_rating"];
								$disc = $row1["product_description"];
								$video = $row1["product_video"];
								$price = $row1["product_price"];
								$image = $row1["product_primary_image"];
								$category = $row1["product_category"];
						
			?>
						
                <div class="prod-i">
                    <div class="prod-i-top">
                        <a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="<?php echo "../ecommerce/admin/uploads/".$image ?>" alt="Sunt temporibus velit"><!-- NO SPACE --></a>
                        <p class="prod-i-info">
                            <a href="<?php echo "removefromwishlist.php?ids=".$id; ?>" class="prod-i-favorites"><span>Remove from Wishlist</span><i class="fa fa-remove"></i></a>
                            
                        </p>
                        <a href="<?php echo "addtocartGET.php?ids=".$id ?>" class="prod-i-buy">Add to cart</a>
                        <p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

                        <div class="prod-i-properties">
                            <dl>
							<?php
								$sql_product = "SELECT * FROM product_features WHERE product_id='$id'";
								$result2 = $conn->query($sql_product);


                        while($row2 = $result2->fetch_assoc()) {
                            $feature_type = $row2["feature_type"];
                            $feature_value = $row2["feature_value"];
							echo "<dt>".$feature_type."</dt>";
							echo "<dd>".$feature_value."</dd>";
						}
							?>
                            </dl>
                        </div>
                    </div>
                    <h3>
                        <a href="product.html"><?php echo $product_name ?></a>
                    </h3>
                    <p class="prod-i-price">
                        <b><?php echo $price; ?></b>
                    </p>
                </div>
				
				<?php
				}
				}
				}
				}
				}else {
					?>
						<a href="../ecommerce/admin/login.php"><span class="label label-danger" style="    font-size: 28px;
    margin-left: 36%;">You need to Login</span></a>
					<?php
				}
				?>
            </div>

        </div>
        <!-- Catalog Items | Full - end -->

        <!-- Quick View Product - start -->
        
        <!-- Quick View Product - end -->
    </section>
</main>
<!-- Main Content - end -->


<!-- Footer - start --><?php
	include 'footer.php';
?>