<?php
	session_start();
	include 'connection.php';
	
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
	}
	$pagename = basename($_SERVER['PHP_SELF']);
	$uname = $_SESSION["username"];
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <style type="text/css">
	.services{
	width: 137%;
    height: 168px;
    margin-left: 0%;
    background: #e8e8e8;
    padding: 10px;
    border: 1px solid #d6d6d6;
	display:block;
	}
	.services:last-child{
		
	}
	.cus {
		margin-right: 6%;
	}
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
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
        
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          
          <!-- Tasks Menu -->
		 
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $_SESSION["username_main"]; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
				
                 
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
         
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
		
		<?php
			if($_SESSION["main_user_type"]=="Admininistrator"){
				?>
					<li class="<?php if($pagename=="index.php") {echo "active";} else {echo "";} ?>"><a href="index.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
				<li class="<?php if($pagename=="services.php") {echo "active";} else {echo "";} ?>"><a href="services.php"><i class="fa fa-link"></i> <span>Services</span></a></li>
				<li class="<?php if($pagename=="manageservices.php") {echo "active";} else {echo "";} ?>"><a href="manageservices.php"><i class="fa fa-link"></i> <span>Manage Services</span></a></li>
				<li class="<?php if($pagename=="add_services.php") {echo "active";} else {echo "";} ?>"><a href="add_services.php"><i class="fa fa-link"></i> <span>Add Services</span></a></li>
				
				<li class="<?php if($pagename=="managepackage.php") {echo "active";} else {echo "";} ?>"><a href="managepackage.php"><i class="fa fa-link"></i> <span>Manage Packages</span></a></li>
				
				<li class="<?php if($pagename=="custom_price.php") {echo "active";} else {echo "";} ?>"><a href="custom_price.php"><i class="fa fa-link"></i> <span>Custom Price</span></a></li>
				<li class="<?php if($pagename=="custom_price_list.php") {echo "active";} else {echo "";} ?>"><a href="custom_price_list.php"><i class="fa fa-link"></i> <span>Custom Price List</span></a></li>
				<li class="<?php if($pagename=="product_order.php") {echo "active";} else {echo "";} ?>"><a href="product_order.php"><i class="fa fa-link"></i> <span>Order</span></a></li>
				
				<li class="<?php if($pagename=="myorder.php") {echo "active";} else {echo "";} ?>"><a href="myorder.php"><i class="fa fa-link"></i> <span>My Order</span></a></li>
				
				<li class="<?php if($pagename=="add_fund.php") {echo "active";} else {echo "";} ?>"><a href="add_fund.php"><i class="fa fa-link"></i> <span>Add Fund</span></a></li>
				<li class="<?php if($pagename=="add_admin.php") {echo "active";} else {echo "";} ?>"><a href="add_admin.php"><i class="fa fa-link"></i> <span>Users & Admin</span></a></li>
				<li class="<?php if($pagename=="faq.php") {echo "active";} else {echo "";} ?>"><a href="faq.php"><i class="fa fa-link"></i> <span>FAQ'S</span></a></li>
				<li class="<?php if($pagename=="contact_us.php") {echo "active";} else {echo "";} ?>"><a href="contact_us.php"><i class="fa fa-link"></i> <span>Contact US</span></a></li>
				<li class="<?php if($pagename=="about_us.php") {echo "active";} else {echo "";} ?>"><a href="about_us.php"><i class="fa fa-link"></i> <span>About US</span></a></li>
				
				<?php
				
			}else {
				?>
				<li class="<?php if($pagename=="index.php") {echo "active";} else {echo "";} ?>"><a href="index.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
				
        <li class="<?php if($pagename=="services.php") {echo "active";} else {echo "";} ?>"><a href="services.php"><i class="fa fa-link"></i> <span>Services</span></a></li>
		<li class="<?php if($pagename=="myorder.php") {echo "active";} else {echo "";} ?>"><a href="myorder.php"><i class="fa fa-link"></i> <span>My Order</span></a></li>
		
		<li class="<?php if($pagename=="addfunduser.php") {echo "active";} else {echo "";} ?>"><a href="addfunduser.php"><i class="fa fa-link"></i> <span>Add Fund</span></a></li>
		
        <li class="<?php if($pagename=="faq.php") {echo "active";} else {echo "";} ?>"><a href="faq.php"><i class="fa fa-link"></i> <span>FAQ'S</span></a></li>
        <li class="<?php if($pagename=="contact_us.php") {echo "active";} else {echo "";} ?>"><a href="contact_us.php"><i class="fa fa-link"></i> <span>Contact US</span></a></li>
        <li class="<?php if($pagename=="about_us.php") {echo "active";} else {echo "";} ?>"><a href="about_us.php"><i class="fa fa-link"></i> <span>About US</span></a></li>
				
				
				<?php
				
			}
		?>
        
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>