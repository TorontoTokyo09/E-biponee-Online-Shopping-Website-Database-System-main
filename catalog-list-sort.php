<?php
    include 'catalog_header.php';
    include 'connection.php';
	$type = $_GET["soryby"];
?>
<!-- Main Content - start -->
<main>
	<section class="container">
		
		<h1 class="main-ttl"><span>All Products</span></h1>
		<!-- Catalog Sidebar - start -->
		<?php include 'sidebar.php'; ?>
			<!-- Filter - end -->

		</div>
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
							<a href="catalog-list-sort.php?soryby=plh">low price to high</a>
						</li>
						<li>
							<a href="catalog-list-sort.php?soryby=phl">high price to low</a>
						</li>
						<li>
							<a href="catalog-list-sort.php?soryby=az">by title A <i class="fa fa-angle-right"></i> Z</a>
						</li>
						<li>
							<a href="catalog-list-sort.php?soryby=za">by title Z <i class="fa fa-angle-right"></i> A</a>
						</li>
						<li>
							<a href="catalog-list.php">default sorting</a>
						</li>
					</ul>
				</div>

				<!-- Count per page -->
				

			</div>
			<!-- Catalog Topbar - end -->
			<div class="prod-items section-items">
				<?php
				
				if($type=="phl"){
					$sql = "SELECT * FROM product where status='1' order by product_price DESC";
				}else if($type=="plh"){
					$sql = "SELECT * FROM product where status='1' order by product_price ASC";
				}else if($type=="az"){
					$sql = "SELECT * FROM product where status='1' order by product_name ASC";
				}else if($type=="za"){
					$sql = "SELECT * FROM product where status='1' order by product_name DESC";
				}
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo "<div class=\"prodlist-i\">";
                        $id = $row["product_id"];
                        $img = $row["product_primary_image"];
                        $title = $row["product_name"];
                        $price = "$".$row["product_price"];
						?>
						<a class="prodlist-i-img" href="product.php?ids=<?php echo $id; ?>"><img src="<?php echo "../ecommerce/admin/uploads/".$img ?>" alt="" /></a>
						<?php
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
	
		<!-- Quick View Product - end -->
	</section>
</main>
<!-- Main Content - end -->


<!-- Footer - start --><?php
	include 'footer.php';
?>