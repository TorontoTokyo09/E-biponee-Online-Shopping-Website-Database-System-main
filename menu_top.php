<?php 
	include 'connection.php';
	session_start();
	$pagename = basename($_SERVER['PHP_SELF']);
?>
<header class="header">

    <!-- Topbar - start -->
    <div class="header_top">
        <div class="container">
            <ul class="contactinfo nav nav-pills">
                <li>
                    <i class='fa fa-phone'></i> +7 777 123 1575
                </li>
                <li>
                    <i class="fa fa-envelope"></i> admin@biponee.com
                </li>
            </ul>
            <!-- Social links -->
            <ul class="social-icons nav navbar-nav">
                <li>
                    <a href="http://facebook.com" rel="nofollow" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="http://google.com" rel="nofollow" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="http://twitter.com" rel="nofollow" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="http://vk.com" rel="nofollow" target="_blank">
                        <i class="fa fa-vk"></i>
                    </a>
                </li>
                <li>
                    <a href="http://instagram.com" rel="nofollow" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>		</div>
    </div>
    <!-- Topbar - end -->

    <!-- Logo, Shop-menu - start -->
    <div class="header-middle">
        <div class="container header-middle-cont">
            <div class="toplogo">
                <a href="index.php">
                    <img style="width:160px" src="img/logo.png" alt="AllStore - MultiConcept eCommerce Template">
                </a>
            </div>
            <div class="shop-menu">
                <ul>

                    <li>
                        <a href="wishlist.php">
                            <i class="fa fa-heart"></i>
                            <span class="shop-menu-ttl">Wishlist</span>
                            <span id="topbar-favorites">
							(<?php
							if(isset($_SESSION["username"])){
								$count=0;
								$nn = $_SESSION["username"];
									$sql = "SELECT * FROM wishlist where username='$nn'";
										$result = $conn->query($sql);
										if ($result->num_rows > 0){
										while($row = $result->fetch_assoc()) {
												$count++;
										}}
										echo $count;
							}else {
								echo 0;
							}
							?>)
							</span>
                        </a>
                    </li>

                    

                    <?php
						if(isset($_SESSION["username"])){
							echo "<li class=\"topauth\">\n";
echo "                            <i class=\"fa fa-lock\"></i>\n";
?>
<a href="../ecommerce/admin">
<?php
echo "                            <span class=\"shop-menu-ttl\">".$_SESSION["username"]."</span>\n";
?>
</a>
<?php
echo "                    </li>";
						}else {
							echo "<li class=\"topauth\">\n";
							?>
					<a href="../ecommerce/admin/register.php">
                           <i class="fa fa-lock"></i>
                            <span class="shop-menu-ttl">Registration</span>
                       </a>
                       <a href="../ecommerce/admin/login.php">
                            <span class="shop-menu-ttl">Login</span>
                        </a>

							<?php
echo "                    </li>";

						
						}
					?>

                    <li>
                        <div class="h-cart">
                            <a href="cart.php">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="shop-menu-ttl">Cart</span>
                                (<?php
								if(isset($_SESSION["username"])){
								$count=0;
									$sql = "SELECT * FROM cart where user_id='$nn'";
										$result = $conn->query($sql);
										if ($result->num_rows > 0){
										while($row = $result->fetch_assoc()) {
												$count++;
										}}
										echo $count;
								}else {
									echo 0;
								}
								?>)
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Logo, Shop-menu - end -->

    <!-- Topmenu - start -->
    <div class="header-bottom">
        <div class="container">
            <nav class="topmenu">

                <!-- Catalog menu - start -->
                <div class="topcatalog">
                    <a class="topcatalog-btn" href="#"><span>All</span> catalog</a>
                    <ul class="topcatalog-list">
                        <li>
                            <a href="#">
                                Women
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                
                                <li>
                                    <a href="<?php echo "catagory_data.php?cat=Dresses" ?>">
                                        Dresses
                                    </a>
                                </li>
								<li>
                                    <a href="<?php echo "catagory_data.php?cat=Bags" ?>">
                                        Bags
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Accessories
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        
                                        
                                        <li>
                                            <a href="<?php echo "catagory_data.php?cat=Jewelry" ?>">
                                                Jewelry
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Men
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li>
                                    <a href="<?php echo "catagory_data.php?cat=Jacket" ?>">
                                        Jackets
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo "catagory_data.php?cat=Pants" ?>">
                                        Pants
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Accessories
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="<?php echo "catagory_data.php?cat=Bags" ?>">
                                                Bags
                                            </a>
                                        </li>
                                        
                                       
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo "catagory_data.php?cat=Tshirt" ?>">
                                        Shirts
                                    </a>
                                </li>
                            </ul>
                        </li>
						<li>
                            <a href="#">
                                Electronics
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                
                                <li>
                                    <a href="<?php echo "catagory_data.php?cat=Electronic" ?>">
                                        All Electronics
                                    </a>
                                </li>
								
                                
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Catalog menu - end -->

                <!-- Main menu - start -->
                <button type="button" class="mainmenu-btn">Menu</button>

                <ul class="mainmenu">
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    
                    <li class="menu-item-has-children">
                        <a href="#">
                            Product <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="catalog-list.php">
                                    All Product
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mainmenu-more">
                        <span>...</span>
                        <ul class="mainmenu-sub"></ul>
                    </li>
                </ul>
                <!-- Main menu - end -->

                <!-- Search - start -->
                <div class="topsearch">
                    <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                    <form class="topsearch-form" action="search.php" method="POST">
                        <input type="text" name="keyword" placeholder="Search products">
                        <button type="submit" name="search"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- Search - end -->

            </nav>		</div>
    </div>
    <!-- Topmenu - end -->

</header>