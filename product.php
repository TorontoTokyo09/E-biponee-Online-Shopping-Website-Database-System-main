
<?php 
	include 'product_header.php';
	include 'connection.php';
?>

<!-- Main Content - start -->
<main>
	<section class="container">


		
		
		<?php
		$pro_id = $_GET["ids"];
		$video="";
			$sql = "SELECT * FROM product where product_id='$pro_id'";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $user_id = $row["product_id"];
								$product_name = $row["product_name"];
								$rating = $row["product_rating"];
								$disc = $row["product_description"];
								$video = $row["product_video"];
								$price = $row["product_price"];
								$image = $row["product_primary_image"];
								$category = $row["product_category"];
								$discount = $row["product_discount"];
								
		?>
		<h1 class="main-ttl"><span><?php echo $product_name ?></span></h1>
		<!-- Single Product - start -->
		<div class="prod-wrap">

			<!-- Product Images -->
			<div class="prod-slider-wrap">
				<div class="prod-slider">
					<ul class="prod-slider-car">
					<?php
						$sqls = "SELECT * FROM images where product_id='$pro_id'";
						$results = $conn->query($sqls);
						if ($results->num_rows > 0) {
                            while ($rows = $results->fetch_assoc()) {
								
					?>
						<li>
							<a data-fancybox-group="product" class="fancy-img" href="<?php echo "../ecommerce/admin/uploads/".$rows["image_url"] ?>">
								<img src="<?php echo "../ecommerce/admin/uploads/".$rows["image_url"] ?>" alt="">
							</a>
						</li>
						
						<?php
							}
						?>
					</ul>
				</div>
				<div class="prod-thumbs">
					<ul class="prod-thumbs-car">
						<?php
							$sqlw = "SELECT * FROM images where product_id='$pro_id'";
						$resultw = $conn->query($sqlw);
						if ($results->num_rows > 0) {
							$cc=0;
                            while ($roww = $resultw->fetch_assoc()) {
						?>
						<li>
							<a data-slide-index="<?php echo $cc ?>" href="#">
								<img src="<?php echo "../ecommerce/admin/uploads/".$roww["image_url"] ?>" alt="">
							</a>
							<?php 
								$cc++;
							?>
						</li>
						
						<?php
							}
						}
						?>
					</ul>
				</div>
			</div>

			<!-- Product Description/Info -->
			<div class="prod-cont">
				<div class="prod-cont-txt">
					<?php echo $disc ?>
				</div>
				<p class="prod-actions">
				
				<?php
					if(isset($_SESSION["username"])){
				?>
				
					<a href="addtowishlist.php?ids=<?php echo $pro_id ?>" class="prod-favorites"><i class="fa fa-heart"></i> Wishlist</a>
					<?php
					}
					?>
				</p>
				
				<div class="prod-info">
					<p class="prod-price">
						<b class="item_current_price"><?php if($discount=="0") { echo $price; }else {
							echo $price-($price*$discount)/100;
						} ?></b>
					</p>
					<form action="addtocart.php" method="POST">
					<p class="prod-qnt">
					<input type="hidden" name="ids" value="<?php echo $pro_id ?>" />
						<input value="1" type="text" name="quantity">
						<a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
						<a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
					</p>
					<p class="prod-addwrap">
					<?php
						if(isset($_SESSION["username"])){
					?>
						<input type="submit" id="addchart" class="prodlist-i-add prod-add" value="Add to cart"/>
						<?php
						}
						?>
					</p>
					</form>
				</div>
				<ul class="prod-i-props">
				<?php
					$sql1 = "SELECT * from product_features where product_id='$pro_id'";
					$result1 = $conn->query($sql1);
						if ($result1->num_rows > 0) {
                            while ($row1 = $result1->fetch_assoc()) {
								$type = $row1["feature_type"];
								$value = $row1["feature_value"];
					
				?>
					<li>
						<b><?php echo $type; ?></b> <?php echo $value ?>
					</li>
					<?php 
							}
						}
					?>
				</ul>
			</div>

			<!-- Product Tabs -->
			<div class="prod-tabs-wrap">
				<ul class="prod-tabs">
					<li><a data-prodtab-num="1" class="active" href="#" data-prodtab="#prod-tab-1">Description</a></li>
					<li><a data-prodtab-num="2" id="prod-props" href="#" data-prodtab="#prod-tab-2">Features</a></li>
					<li><a data-prodtab-num="3" href="#" data-prodtab="#prod-tab-3">Video</a></li>
					<li><a data-prodtab-num="5" href="#" data-prodtab="#prod-tab-5">Reviews (
					<?php
					$ccccc=0;
						$sqlb = "SELECT * from product_review where product_id='$pro_id'";
						$resultb = $conn->query($sqlb);
						if ($resultb->num_rows > 0) {
                            while ($rowb = $resultb->fetch_assoc()) {
								$ccccc++;
							}
						}
						echo $ccccc;
					?>
					)</a></li>
				</ul>
				<div class="prod-tab-cont">

					<p data-prodtab-num="1" class="prod-tab-mob active" data-prodtab="#prod-tab-1">Description</p>
					<div class="prod-tab stylization" id="prod-tab-1">
						<p><?php echo $disc; ?></p>
					</div>
					<p data-prodtab-num="2" class="prod-tab-mob" data-prodtab="#prod-tab-2">Features</p>
					<div class="prod-tab prod-props" id="prod-tab-2">
						<table>
							<tbody>
							<?php
								$sql0 = "SELECT * from product_features where product_id='$pro_id'";
								$result0 = $conn->query($sql0);
								if ($result1->num_rows > 0) {
								while ($row0 = $result0->fetch_assoc()) {
								$type = $row0["feature_type"];
								$value = $row0["feature_value"];
							?>
							<tr>
								<td><?php echo $type; ?></td>
								<td><?php echo $value; ?></td>
							</tr>
							
							<?php
								}
								}
							?>
							</tbody>
						</table>
					</div>
					<p data-prodtab-num="3" class="prod-tab-mob" data-prodtab="#prod-tab-3">Video</p>
					<div class="prod-tab prod-tab-video" id="prod-tab-3">
					
						<iframe src="<?php echo $video; ?>"
						width="560" height="501" frameborder="0" allowfullscreen></iframe>
					</div>
					<p data-prodtab-num="4" class="prod-tab-mob" data-prodtab="#prod-tab-4">Articles (6)</p>
					<div class="prod-tab prod-tab-articles" id="prod-tab-4">
						<div class="flexslider post-rel-wrap" id="post-rel-car">
							<ul class="slides">
								<li class="posts-i">
									<a class="posts-i-img" href="post.html"><span style="background: url(http://placehold.it/354x236)"></span></a>
									<time class="posts-i-date" datetime="2017-01-01 08:18"><span>09</span> Feb</time>
									<div class="posts-i-info">
										<a class="posts-i-ctg" href="blog.html">Articles</a>
										<h3 class="posts-i-ttl"><a href="post.html">Adipisci corporis velit</a></h3>
									</div>
								</li>
								<li class="posts-i">
									<a class="posts-i-img" href="post.html"><span style="background: url(http://placehold.it/360x203)"></span></a>
									<time class="posts-i-date" datetime="2017-01-01 08:18"><span>05</span> Jan</time>
									<div class="posts-i-info">
										<a class="posts-i-ctg" href="blog.html">Reviews</a>
										<h3 class="posts-i-ttl"><a href="post.html">Excepturi ducimus recusandae</a></h3>
									</div>
								</li>
								<li class="posts-i">
									<a class="posts-i-img" href="post.html"><span style="background: url(http://placehold.it/360x224)"></span></a>
									<time class="posts-i-date" datetime="2017-01-01 08:18"><span>17</span> Apr</time>
									<div class="posts-i-info">
										<a class="posts-i-ctg" href="blog.html">Reviews</a>
										<h3 class="posts-i-ttl"><a href="post.html">Consequuntur minus numquam</a></h3>
									</div>
								</li>
								<li class="posts-i">
									<a class="posts-i-img" href="post.html"><span style="background: url(http://placehold.it/314x236)"></span></a>
									<time class="posts-i-date" datetime="2017-01-01 08:18"><span>21</span> May</time>
									<div class="posts-i-info">
										<a class="posts-i-ctg" href="blog.html">Articles</a>
										<h3 class="posts-i-ttl"><a href="post.html">Non ex sapiente excepturi</a></h3>
									</div>
								</li>
								<li class="posts-i">
									<a class="posts-i-img" href="post.html"><span style="background: url(http://placehold.it/318x236)"></span></a>
									<time class="posts-i-date" datetime="2017-01-01 08:18"><span>24</span> Jan</time>
									<div class="posts-i-info">
										<a class="posts-i-ctg" href="blog.html">Articles</a>
										<h3 class="posts-i-ttl"><a href="post.html">Veritatis officiis</a></h3>
									</div>
								</li>
								<li class="posts-i">
									<a class="posts-i-img" href="post.html"><span style="background: url(http://placehold.it/354x236)"></span></a>
									<time class="posts-i-date" datetime="2017-01-01 08:18"><span>08</span> Sep</time>
									<div class="posts-i-info">
										<a class="posts-i-ctg" href="blog.html">Reviews</a>
										<h3 class="posts-i-ttl"><a href="post.html">Ratione magni laudantium</a></h3>
									</div>
								</li>
							</ul>
						</div>
					</div>
					
					
					
					
					
					
					<p data-prodtab-num="5" class="prod-tab-mob" data-prodtab="#prod-tab-5">Reviews (3)</p>
					<div class="prod-tab" id="prod-tab-5">
						<ul class="reviews-list">
						<?php
					$sql2 = "SELECT * from product_review where product_id='$pro_id'";
					$result2 = $conn->query($sql2);
						if ($result2->num_rows > 0) {
                            while ($row2 = $result2->fetch_assoc()) {
								$review= $row2["review"];
								$username=$row2["user_id"];
								$review_date=$row2["review_date"];
					
					?>
						
							<li class="reviews-i existimg">
								<div class="reviews-i-img">
									<img src="http://placehold.it/120x120" alt="Averill Sidony">
									<div class="reviews-i-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<time datetime="2017-12-21 12:19:46" class="reviews-i-date"><?php echo $review_date ?></time>
								</div>
								<div class="reviews-i-cont">
									<p><?php echo $review ?></p>
									<span class="reviews-i-margin"></span>
									<h3 class="reviews-i-ttl"><?php echo $username ?></h3>
								</div>
							</li>
							
							<?php
							}
						}
							?>
						</ul>
						<div class="prod-comment-form">
							<h3>Add your review</h3>
							
							<?php
								if(isset($_SESSION["username"])){
							?>
							<form method="POST" action="addreview.php">
								<input type="text" name="name" placeholder="Name">
								<input type="text" name="email" placeholder="E-mail">
								<textarea name="review" placeholder="Your review"></textarea>
								<input type="hidden" name="ids" value="<?php echo $pro_id ?>" />
								<div class="prod-comment-submit">
									<input type="submit" value="Submit">
									<div class="prod-rating">
										<i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
									</div>
								</div>
							</form>
							<?php
								}else {
									?>
									<a href="../ecommerce/admin/login.php"><span class="label label-danger" style="font-size: 20px;
    margin-left: 92px;">Please Login to write a review</span></a>
									
									<?php
								}
							?>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<?php
						}
							}
						}
						
		?>
		<!-- Single Product - end -->

		<!-- Related Products - start -->
		<div class="prod-related">
			<h2><span>Related products</span></h2>
			<div class="prod-related-car" id="prod-related-car">
				<ul class="slides">
					<li class="prod-rel-wrap">
					
					<?php
						$sqla = "SELECT * from product LIMIT 3";
						$resulta = $conn->query($sqla);
						if ($resulta->num_rows > 0) {
                            while ($rowa = $resulta->fetch_assoc()) {
								$pro_id = $rowa["product_id"];
								$title = $rowa["product_name"];
								$price = $rowa["product_price"];
								$image = $rowa["product_primary_image"];
								
					?>
						<div class="prod-rel">
							<a href="product.php?ids=<?php echo $pro_id; ?>" class="prod-rel-img">
								<img src="<?php echo "../ecommerce/admin/uploads/".$image ?>" alt="Adipisci aperiam commodi">
							</a>
							<div class="prod-rel-cont">
								<h3><a href="product.php?ids=<?php echo $pro_id; ?>"><?php echo $title; ?></a></h3>
								<p class="prod-rel-price">
									<b><?php echo $price; ?></b>
								</p>
								
							</div>
						</div>
						
						<?php
							}
						}
						?>

					</li>
					
				</ul>
			</div>
		</div>
		<!-- Related Products - end -->

	</section>
	</section>
</main>
<!-- Main Content - end -->


<!-- Footer - start --><?php
	include 'footer.php';
?>