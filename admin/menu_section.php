<?php
	session_start();
	include 'connection.php';
	
	if(!isset($_SESSION["username"])){
		header("Location: login.php?st=2");
	}else {
		$type = $_SESSION["user_type"];
	}
	
	$pagename = basename($_SERVER['PHP_SELF']);
	
	
?>
<script type="text/javascript">
	function op(){
		var dd = document.getElementById("dash");
		dd.className = "active";
	}
</script>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <?php
		if($type=="Administrator"){
			?>
			<span class="logo-lg"><b>Admin</b> panel</span>
			<?php
		}else {
			?>
			<span class="logo-lg"><b>User</b> panel</span>
			<?php
			
		}
	  ?>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
						
						<?php
							$user_name = $_SESSION["username"];
				  $user_data = array();
                $sql = "SELECT * FROM user where user_name='$user_name'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
						$user_data["image"] = $row["user_image"];
					}
				}
						?>
                        <img src="../admin/profile_img/<?php echo $user_data["image"]; ?>" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../admin/profile_img/<?php echo $user_data["image"]; ?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php 
					echo $_SESSION["username"];
				?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../admin/profile_img/<?php echo $user_data["image"]; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php 
						echo "<p>".$_SESSION["username"]."</p>"
					?>
                  
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="user_profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
           
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../admin/profile_img/<?php echo $user_data["image"]; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <?php 
			echo "<p>".$_SESSION["username"]."</p>"
		  ?>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
		
		<li id="dash" class="<?php if($pagename=="../ecommerce/index.php") {echo "active";} else {echo "";} ?>" ><a href="../index.php"><i class="fa fa-dashboard"></i> <span>HOME</span></a></li>
		
        <li id="dash" class="<?php if($pagename=="index.php") {echo "active";} else {echo "";} ?>" ><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
		
		<li <?php if($type!="Administrator"){echo "hidden";}else {echo "";} ?> id="addpro" class="<?php if($pagename=="administrator.php") {echo "active";} else {echo "";} ?>"><a href="administrator.php"><i class="fa fa-user"></i> <span>User and Admin</span></a></li>
		
        <li id="addpro" class="<?php if($pagename=="addproduct.php") {echo "active";} else {echo "";} ?>"><a href="addproduct.php"><i class="fa fa-heart"></i> <span>ADD Product</span></a></li>
		
        <li class="<?php if($pagename=="pending_list.php") {echo "active";} else {echo "";} ?>" <?php if($type!="Administrator"){echo "hidden";}else {echo "";} ?>><a href="pending_list.php"><i class="fa fa-hourglass-half"></i> <span>PENDING Product</span></a></li>
		
		
		<li class="<?php if($pagename=="all_product.php") {echo "active";} else {echo "";} ?>"><a href="all_product.php"><i class="fa fa-heart"></i> <span>All Product</span></a></li>
		
		
		<li class="<?php if($pagename=="order_product.php") {echo "active";} else {echo "";} ?>" <?php if($type!="Administrator"){echo "hidden";}else {echo "";} ?>><a href="order_product.php"><i class="fa fa-suitcase"></i> <span>Orders</span></a></li>
		
		<li class="<?php if($pagename=="cupons.php") {echo "active";} else {echo "";} ?>" <?php if($type!="Administrator"){echo "hidden";}else {echo "";} ?>><a href="cupons.php"><i class="fa fa-money"></i> <span>Cupon</span></a></li>
		
		<li class="<?php if($pagename=="addfund.php") {echo "active";} else {echo "";} ?>" <?php if($type!="Administrator"){echo "hidden";}else {echo "";} ?>><a href="addfund.php"><i class="fa fa-money"></i> <span>Add Fund</span></a></li>
		
		<li class="<?php if($pagename=="myOrder.php") {echo "active";} else {echo "";} ?>" <?php if($type=="Administrator"){echo "hidden";}else {echo "";} ?>><a href="myOrder.php"><i class="fa fa-money"></i> <span>My Order</span></a></li>
		
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  </aside>