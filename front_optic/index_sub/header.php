<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.devitems.com/chasmish-v1-tf/chasmish/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Apr 2020 18:31:06 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Chasmish - Glasses  eCommerce Bootstrap4 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="assets/img/icon.png">

	<!-- Plugins -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/plugins.css">

	<!-- Style Css -->
	<link rel="stylesheet" href="assets/style.css">

	<!-- Custom Styles -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>


	<!-- Wrapper -->
	<div id="wrapper" class="wrapper">

		<!-- Header -->
		<header class="header chasmishco_header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-3 col-lg-2 col-md-4">
						<div class="logo">
							<a href="index.php">
								<img src="assets/img/logo/logo1.png" alt="chasmishco Logo">
							</a>
						</div>
					</div>
					<div class="col-xl-9 col-lg-10 col-md-8">
						<div class="header_right_sidebar">
							<div class="login_account">
								<div class="account">
									<ul> <?php if(!isset($_SESSION['id'])) {

									 ?>
										<li>
					 						<a href="login-register.php">Login</a>
										</li>
									<?php } else { ?>
										<li>
											<a href="logout.php">Logout</a>
										</li>
									<?php } ?>
									</ul>
								</div>
								<div class="mini_cat_box">
									<a href="cart.php"><div class="shop_cart_icon  shopping_basket  ">
										<img src="assets/img/icons/icon.png" alt="icons">
										<span class="shop_count" id="total"><?php
											if(isset($_SESSION['total']))
											{
											 echo $_SESSION['total'] ;
											}
											else { ?>0</span>
										<?php } ?></span>
										<span class="cart_text">cart</span></a>
									</div>
								</div>
							</div>
							<div class="glass_toggle_menu">
								<nav class="mainmenu_nav mainmenu__nav">
									<ul class="main_menu">
										<li class="drop">
											<a href="index.php">Home</a>
											
										</li>
										<li class="drop">
											<a href="assets/shop-grid.html">Shop</a>
											<ul class="dropdown">
												<li><a href="shop.php">Shop</a></li>
												<li><a href="bestproduct.php">best products</a></li>
 											</ul>
										</li>
										<li class="drop">
											<a >categories</a>
											<ul class="dropdown">
												<li><a href="homme.php">homme</a></li>
												<li><a href="femme.php">femme</a></li>
												<li><a href="enfant.php">enfant</a></li>
 											</ul>
										</li>
										<li>
											<a href="assets/about.html">About</a>
										</li>
										<!-- <li class="drop">
											<a href="assets/#">pages</a>
											<ul class="dropdown">
												<li><a href="assets/cart.html">Cart Page</a></li>
												<li><a href="assets/compare.html">Compare Page</a></li>
												<li><a href="assets/wishlist.html">Wishlist Page</a></li>
												<li><a href="assets/my-account.html">My Account</a></li>
												<li><a href="assets/checkout.html">Checkout Page</a></li>
												<li><a href="assets/contact.html">Contact</a></li>
											</ul>
										</li>-->
										<li> 
											<a href="my-account.php">my account</a>
										</li>
									</ul>
								</nav>

								<div class="hamburger-box button mobile-toggle">
									<span class="mobile-toggle__icon"></span>
								</div>
							</div>
							<!-- Mobile Menu -->
							<div class="mobile-menu d-block d-lg-none"></div>
							<!-- Mobile Menu -->
						</div>
					</div>
				</div>

				
				
			</div>
		</header>

		 