<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>AllStore - MultiConcept eCommerce Template</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700ii%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">

</head>
<body>
<?php 
	include 'menu_top.php';
?>

<!-- Main Content - start -->
<main>
    <section class="container">


        <!-- Slider -->
        <div class="fr-slider-wrap">
            <div class="fr-slider">
                <ul class="slides">
				<?php
					$sqlsli = "SELECT * FROM slider";
                $resultsli = $conn->query($sqlsli);
                if ($resultsli->num_rows > 0){
					while($rowssli = $resultsli->fetch_assoc()) {
				?>
                    <li>
                        <img src="<?php echo "../ecommerce/admin/slider/".$rowssli["image_url"] ?>" alt="">
                        
                    </li>
					<?php
					}
				}
					?>                    
                </ul>
            </div>
        </div>


        <!-- Popular Products -->
        <div class="fr-pop-wrap">

            <h3 class="component-ttl"><span>Popular products</span></h3>

            <ul class="fr-pop-tabs sections-show">
                <li><a data-frpoptab-num="1" data-frpoptab="#frpoptab-tab-1" href="#" class="active">All Categories</a></li>
                
                <li><a data-frpoptab-num="3" data-frpoptab="#frpoptab-tab-3" href="#">Women</a></li>
            </ul>

            <div class="fr-pop-tab-cont">

                <p data-frpoptab-num="1" class="fr-pop-tab-mob active" data-frpoptab="#frpoptab-tab-1">All Categories</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-1">

                    <ul class="slides">

					<?php
                $sql = "SELECT * FROM product where status='1' LIMIT 10";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
						$id = $row["product_id"];
                        $img = $row["product_primary_image"];
                        $title = $row["product_name"];
                        $price = "$".$row["product_price"];
						
				?>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.php?ids=<?php echo $id; ?>" class="prod-i-img"><!-- NO SPACE --><img src="<?php echo "../ecommerce/admin/uploads/".$img ?>" width="300" height="311" alt="Aspernatur excepturi rem"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="<?php echo "addtowishlist.php?ids=$id" ?>" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="product.php?ids=<?php echo $id ?>" class="prod-i-add">Go to detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.php?ids=<?php echo $id; ?>"><?php echo $title ?></a>
                            </h3>
                            <p class="prod-i-price">
                                <b><?php echo $price ?></b>
                            </p>
                            <div class="prod-i-skuwrapcolor">
                                <ul class="prod-i-skucolor">
                                    <li class="bx_active"><img src="img/color/red.jpg" alt="Red"></li>
                                    <li><img src="img/color/blue.jpg" alt="Blue"></li>
                                </ul>
                            </div>
                        </li>
						
					<?php
					}
				}
					?>

                    </ul>
                </div>

                <p data-frpoptab-num="3" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-3">WoWomen</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-3">

                    <ul class="slides">

					
					<?php
                $sql = "SELECT * FROM product where product_category='Dresses' && status='1'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
						$id = $row["product_id"];
                        $img = $row["product_primary_image"];
                        $title = $row["product_name"];
                        $price = "$".$row["product_price"];
						
				?>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.php?ids=<?php echo $id; ?>" class="prod-i-img"><!-- NO SPACE --><img src="<?php echo "../ecommerce/admin/uploads/".$img ?>" alt="Amet tempore unde"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="<?php echo "addtowishlist.php?ids=$id" ?>" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Go to detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.php?ids=<?php echo $id; ?>"><?php echo $title ?></a>
                            </h3>
                            <p class="prod-i-price">
                                <b><?php echo $price ?></b>
                            </p>
                        </li>
						<?php
					}
				}
						?>
                    </ul>
                </div>

                <p data-frpoptab-num="4" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-4">Women</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-4">

                    <ul class="slides">

                        <?php
                $sql = "SELECT * FROM product where product_category='Dresses' && status='1' LIMIT 10";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
						$id = $row["product_id"];
                        $img = $row["product_primary_image"];
                        $title = $row["product_name"];
                        $price = "$".$row["product_price"];
						
				?>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.php?ids=<?php echo $id; ?>" class="prod-i-img"><!-- NO SPACE --><img src="<?php echo "../ecommerce/admin/uploads/".$img ?>" alt="Amet tempore unde"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="<?php echo "addtowishlist.php?ids=$id" ?>" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Go to detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.php?ids=<?php echo $id; ?>"><?php echo $title ?></a>
                            </h3>
                            <p class="prod-i-price">
                                <b><?php echo $price ?></b>
                            </p>
                        </li>
						<?php
					}
				}
						?>

                    </ul>

                </div>


                <p data-frpoptab-num="5" class="fr-pop-tab-mob" data-frpoptab="#frpoptab-tab-5">Shoes</p>
                <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-5">

                    <ul class="slides">
					<?php
                $sql = "SELECT * FROM product where product_category='shoes' && status='1' LIMIT 10";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
						$id = $row["product_id"];
                        $img = $row["product_primary_image"];
                        $title = $row["product_name"];
                        $price = "$".$row["product_price"];
						
				?>
                        <li class="prod-i">
                            <div class="prod-i-top">
                                <a href="product.php?ids=<?php echo $id; ?>" class="prod-i-img"><!-- NO SPACE --><img src="<?php echo "../ecommerce/admin/uploads/".$img ?>" alt="Amet tempore unde"><!-- NO SPACE --></a>
                                <p class="prod-i-info">
                                    <a href="<?php echo "addtowishlist.php?ids=$id" ?>" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
                                    <a href="#" class="prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
                                    
                                </p>
                                <p class="prod-i-addwrap">
                                    <a href="#" class="prod-i-add">Go to detail</a>
                                </p>
                            </div>
                            <h3>
                                <a href="product.php?ids=<?php echo $id; ?>"><?php echo $title ?></a>
                            </h3>
                            <p class="prod-i-price">
                                <b><?php echo $price ?></b>
                            </p>
                        </li>
						<?php
					}
				}
						?>

                    </ul>

                </div>


            </div><!-- .fr-pop-tab-cont -->


        </div><!-- .fr-pop-wrap -->


        <!-- Banners -->
        <!-- Banners -->
        <div class="banners-wrap">
            <div class="banners-list">
                <div class="banner-i style_11">
                    <span class="banner-i-bg" style="background: url(../ecommerce/uploads/1.jpg);"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">NEW COLLECTION</p>
                        <h3 class="banner-i-ttl">Women'S<br>CLOTHING</h3>
                        <p class="banner-i-link"><a href="catagory_data.php?cat=Tshirt">View More</a></p>
                    </div>
                </div>
                <div class="banner-i style_22">
                    <span class="banner-i-bg" style="background: url(../ecommerce/uploads/222.jpg);"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">GREAT COLLECTION</p>
                        <h3 class="banner-i-ttl">CLOTHING<br>ACCESSORIES</h3>
                        <p class="banner-i-link"><a href="catagory_data.php?cat=Bags">Show more</a></p>
                    </div>
                </div>
                <div class="banner-i style_21">
                    <span class="banner-i-bg" style="background: url(../ecommerce/uploads/3.jpg);"></span>
                    <div class="banner-i-cont">
                        <h3 class="banner-i-ttl">SPORT<br>CLOTHES</h3>
                        <p class="banner-i-link"><a href="catagory_data.php?cat=Jacket">Go to catalog</a></p>
                    </div>
                </div>
                <div class="banner-i style_21">
                    <span class="banner-i-bg" style="background: url(../ecommerce/uploads/4.jpg);"></span>
                    <div class="banner-i-cont">
                        <h3 class="banner-i-ttl">Women AND <br>WOWomen SHOES</h3>
                        <p class="banner-i-link"><a href="catagory_data.php?cat=Sunglasses">View More</a></p>
                    </div>
                </div>
                <div class="banner-i style_22">
                    <span class="banner-i-bg" style="background: url(../ecommerce/uploads/555.jpg);"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">DISCOUNT -20%</p>
                        <h3 class="banner-i-ttl">HATS<br>COLLECTION</h3>
                        <p class="banner-i-link"><a href="catagory_data.php?cat=Sunglasses">Shop now</a></p>
                    </div>
                </div>
                <div class="banner-i style_12">
                    <span class="banner-i-bg" style="background: url(../ecommerce/uploads/6.jpg);"></span>
                    <div class="banner-i-cont">
                        <p class="banner-i-subttl">STYLISH CLOTHES</p>
                        <h3 class="banner-i-ttl">WOWomen'S COLLECTION</h3>
                        <p>A great selection of dresses, <br>blouses and woWomen's suits</p>
                        <p class="banner-i-link"><a href="catagory_data.php?cat=Dresses">View More</a></p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Special offer -->
        <div class="discounts-wrap">
            <h3 class="component-ttl"><span>Special offer</span></h3>
            <div class="flexslider discounts-list">
                <ul class="slides">
				
				<?php
                $sql = "SELECT * FROM product where status='1' && product_discount>0 LIMIT 5";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
						$id = $row["product_id"];
                        $img = $row["product_primary_image"];
                        $title = $row["product_name"];
                        $price = "$".$row["product_price"];
						$pri = $row["product_price"];
						$discount = $row["product_discount"];
						
				?>
                    <li class="discounts-i">
                        <a href="product.php?ids=<?php echo $id; ?>" class="discounts-i-img">
                            <img src="<?php echo "../ecommerce/admin/uploads/".$img ?>" alt="Dicta doloremque">
                        </a>
                        <h3 class="discounts-i-ttl">
                            <a href="product.php?ids=<?php echo $id; ?>"><?php echo $title; ?></a>
                        </h3>
                        <p class="discounts-i-price">
                            <b><?php 
							$fprice = $pri-($pri*$discount)/100;
							echo $fprice; 
							
							?></b> <del><?php echo $price ?></del>
                        </p>
                    </li>
					<?php
					}
				}
					?>
                </ul>
            </div>
            <div class="discounts-info">
                <p>Special offer!<br>Limited time only</p>
                <a href="catalog-list.php">Shop now</a>
            </div>
        </div>


        <!-- Latest news -->
        


        <!-- Testimonials -->
        <div class="reviews-wrap">
            <div class="reviewscar-wrap">
                <div class="swiper-container reviewscar">
                    <div class="swiper-wrapper">
					<?php
						$sql = "SELECT * FROM product_review order by review_date";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
						$review = $row["review"];
						$user = $row["user_id"];
						
				?>
                        <div class="swiper-slide">
                            <p><?php echo $review ?></p>
                        </div>
						<?php
					}
				}
						?>
                    </div>
                </div>
                <div class="swiper-container reviewscar-thumbs">
                    <div class="swiper-wrapper">
					<?php
						$sql2 = "SELECT * FROM product_review order by review_date";
                $result2 = $conn->query($sql2);
                if ($result2->num_rows > 0){
                    while($row2= $result2->fetch_assoc()) {
						$review = $row2["review"];
						$user1 = $row2["user_id"];
						
						$sql1 = "SELECT * FROM user where user_name='$user1'";
					$result1 = $conn->query($sql1);
					if ($result1->num_rows > 0){
                    while($row1 = $result1->fetch_assoc()) {
						$img = $row1["user_image"];
						$user_name = $row1["user_name"];
						
				?>
                        <div class="swiper-slide">
                            <img src="<?php echo "../ecommerce/admin/profile_img/".$img ?>" alt="Aureole Jayde">
                            <h3 class="reviewscar-ttl"><a href="reviews.html"><?php echo $user_name?></a></h3>
                            <p class="reviewscar-post">User</p>
                        </div>
						<?php
					}
					}
					}
				}
						?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subscribe Form -->
        <div class="newsletter">
            <h3>Subscribe to us</h3>
            <p>Enter your email if you want to receive our news</p>
            <form action="#">
                <input placeholder="Your e-mail" type="text">
                <input name="OK" value="Subscribe" type="submit">
            </form>
        </div>

        <!-- Quick View Product - start -->
        
        <!-- Quick View Product - end -->
    </section>
</main>
<!-- Main Content - end -->


<!-- Footer - start -->

<?php
	include 'footer.php';
?>