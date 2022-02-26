<?php
    include 'catalog_header.php';
    include 'connection.php';
	
	$cata = $_GET["cat"];
	$type = $_GET["soryby"];
?>
<!-- Main Content - start -->
<main>
	<section class="container">
		
		<h1 class="main-ttl"><span><?php echo $cata; ?></span></h1>
		<!-- Catalog Sidebar - start -->
		<?php include 'sidebar.php'; ?>
			<!-- Filter - end -->

		
		<!-- Catalog Sidebar - end -->
		<!-- Catalog Items | List V1 - start -->
		<div class="section-cont">

			<!-- Catalog Topbar - start -->
			<div class="section-top">

				<!-- View Mode -->
				<ul class="section-mode">
					
					<li class="section-mode-list active"><a title="View mode: List" href="catalog-list.php"></a></li>
					
				</ul>

				<!-- Sorting -->
				<div class="section-sortby">
					<p>default sorting</p>
					<ul>
						<li>
							<a href="catagory_data-sort.php?cat=<?php echo $cata; ?>&soryby=plh">low price to high</a>
						</li>
						<li>
							<a href="catagory_data-sort.php?cat=<?php echo $cata; ?>&soryby=phl">high price to low</a>
						</li>
						<li>
							<a href="catagory_data-sort.php?cat=<?php echo $cata; ?>&soryby=az">by title A <i class="fa fa-angle-right"></i> Z</a>
						</li>
						<li>
							<a href="catagory_data-sort.php?cat=<?php echo $cata; ?>&soryby=za">by title Z <i class="fa fa-angle-right"></i> A</a>
						</li>
						<li>
							<a href="catagory_data.php?cat=<?php echo $cata; ?>">default sorting</a>
						</li>
					</ul>
				</div>

				<!-- Count per page -->
				

			</div>
			<!-- Catalog Topbar - end -->
			<div class="prod-items section-items">
				<?php
				
				if($type=="phl"){
					$sql = "SELECT * FROM product where product_category='$cata' && status='1' order by product_price DESC";
				}else if($type=="plh"){
					$sql = "SELECT * FROM product where product_category='$cata' && status='1' order by product_price ASC";
				}else if($type=="az"){
					$sql = "SELECT * FROM product where product_category='$cata' && status='1' order by product_name ASC";
				}else if($type=="za"){
					$sql = "SELECT * FROM product where product_category='$cata' && status='1' order by product_name DESC";
				}
				
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo "<div class=\"prodlist-i\">";
                        $id = $row["product_id"];
                        $img = $row["product_primary_image"];
                        $title = $row["product_name"];
                        $price = "$".$row["product_price"];
                        echo "<a class=\"prodlist-i-img\" href=\"#\">";
						?>
						<img src="<?php echo "../ecommerce/admin/uploads/".$img ?>" alt="" />
						<?php
                        echo "</a>";
                        echo "<div class=\"prodlist-i-cont\">";
                        echo "<h3><a href=\"product.php?ids=$id\">$title</a></h3>";
                        echo "<div class=\"prodlist-i-txt\">";
                        echo $row["product_description"];
                        echo "</div>";
                        echo "<div class=\"prodlist-i-action\">\n";
                        echo "<p class=\"prodlist-i-qnt form-group\">\n";
						
						?>
						
						<form action="addtocart.php" method="POST">
						<input type="hidden" name="ids" value="<?php echo $id ?>" />
						<?php
                        echo "<input class=\"quantity\" name=\"quantity\" value=\"1\" type=\"text\" style=\"width: 33px;
    text-align: center;
    float: left;
    margin-top: 4px;
    height: 33px;
    margin-left: 5px;
    border: 1px solid #aba8a8;
    background-color: #e6e6e6;\">\n";
                        echo "<a href=\"#\" class=\"prodlist-i-plus\"><i class=\"fa fa-angle-up\"></i></a>\n";
                        echo "<a href=\"#\" class=\"prodlist-i-minus\"><i class=\"fa fa-angle-down\"></i></a>\n";
                        echo "</p>";
                        echo "<p class=\"prodlist-i-addwrap\">\n";
                        ?>
							<input <?php if(!isset($_SESSION["username"])){echo "disabled";}?> type="submit" id="addchart" class="prodlist-i-add" value="Add to cart"/>
							
						<?php
                        echo "</p>\n";
						?>
						</form>
						<?php
                        echo "<span class=\"prodlist-i-price\">\n";
                        echo "<b>$price</b>\n";
                        echo "</span>\n";
                        echo "</div>\n";
                        echo "<p class=\"prodlist-i-info\">\n";
                        ?>
						<?php
							if(isset($_SESSION["username"])){
								?>
								<a href="addtowishlist.php?ids=<?php echo $id ?>" class="prodlist-i-favorites"><i class="fa fa-heart"></i> Add to wishlist</a>
								<?php
							}
						?>
						
						<?php
                        echo "</p>\n";
                        echo "</div>";

                        echo "<div class=\"prodlist-i-props-wrap\">\n";
                        echo "<ul class=\"prodlist-i-props\">\n";

                        $sql_product = "SELECT * FROM product_features WHERE product_id='$id'";
                        $result1 = $conn->query($sql_product);


                        while($row1 = $result1->fetch_assoc()) {
                            $feature_type = $row1["feature_type"];
                            $feature_value = $row1["feature_value"];
                            echo "<li><b>$feature_type</b> $feature_value</li>\n";
                        }

                        echo "</ul>\n";
                        echo "</div>\n";
                        echo "</div>";

                    }
                }
                ?>
			</div>

			<!-- Pagination - start -->
			
			<!-- Pagination - end -->
		</div>

		<!-- Quick View Product - start -->
		<div class="qview-modal">
			<div class="prod-wrap">
				<a href="product.html">
					<h1 class="main-ttl">
						<span>Reprehenderit adipisci</span>
					</h1>
				</a>
				<div class="prod-slider-wrap">
					<div class="prod-slider">
						<ul class="prod-slider-car">
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
									<img src="http://placehold.it/500x525" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x591">
									<img src="http://placehold.it/500x591" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
									<img src="http://placehold.it/500x525" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
						</ul>
					</div>
					<div class="prod-thumbs">
						<ul class="prod-thumbs-car">
							<li>
								<a data-slide-index="0" href="#">
									<img src="http://placehold.it/500x525" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="1" href="#">
									<img src="http://placehold.it/500x591" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="2" href="#">
									<img src="http://placehold.it/500x525" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="3" href="#">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="4" href="#">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="5" href="#">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="6" href="#">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="prod-cont">
					<p class="prod-actions">
						<a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Add to Wishlist</a>
						<a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a>
					</p>
					<div class="prod-skuwrap">
						<p class="prod-skuttl">Color</p>
						<ul class="prod-skucolor">
							<li class="active">
								<img src="img/color/blue.jpg" alt="">
							</li>
							<li>
								<img src="img/color/red.jpg" alt="">
							</li>
							<li>
								<img src="img/color/green.jpg" alt="">
							</li>
							<li>
								<img src="img/color/yellow.jpg" alt="">
							</li>
							<li>
								<img src="img/color/purple.jpg" alt="">
							</li>
						</ul>
						<p class="prod-skuttl">Sizes</p>
						<div class="offer-props-select">
							<p>XL</p>
							<ul>
								<li><a href="#">XS</a></li>
								<li><a href="#">S</a></li>
								<li><a href="#">M</a></li>
								<li class="active"><a href="#">XL</a></li>
								<li><a href="#">L</a></li>
								<li><a href="#">4XL</a></li>
								<li><a href="#">XXL</a></li>
							</ul>
						</div>
					</div>
					<div class="prod-info">
						<p class="prod-price">
							<b class="item_current_price">$238</b>
						</p>
						<p class="prod-qnt">
							<input type="text" value="1">
							<a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
							<a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
						</p>
						<p class="prod-addwrap">
							<a href="#" class="prod-add">Add to cart</a>
						</p>
					</div>
					<ul class="prod-i-props">
						<li>
							<b>SKU</b> 05464207
						</li>
						<li>
							<b>Manufacturer</b> Mayoral
						</li>
						<li>
							<b>Material</b> Cotton
						</li>
						<li>
							<b>Pattern Type</b> Print
						</li>
						<li>
							<b>Wash</b> Colored
						</li>
						<li>
							<b>Style</b> Cute
						</li>
						<li>
							<b>Color</b> Blue, Red
						</li>
						<li><a href="#" class="prod-showprops">All Features</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Quick View Product - end -->
	</section>
</main>
<!-- Main Content - end -->


<!-- Footer - start --><?php
	include 'footer.php';
?>