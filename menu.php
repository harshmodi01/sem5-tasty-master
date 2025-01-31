<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tasty &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="fh5co-loader"></div>

	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<!-- <div class="top-menu"> -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="main.php">Jay Bhavani Locho<span>.</span></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li><a href="main.php">Home</a></li>
							<!-- <li class="active"><a href="menu.php">Menu</a></li>
							<li><a href="gallery.php">Gallery</a></li> -->
							<li class="active"><a href="add_to_user.php">Menu</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php">Contact</a></li>

							<li class="has-dropdown">
								<a href="#"> <?php session_start();
												if (isset($_SESSION['uname'])) {
													$username = $_SESSION['uname'];
													echo $username;
												}
												?>'s Profile</a>
								<ul class="dropdown">

									<?php
									

									if (isset($_SESSION['uname'])) {
										echo '<li><a href="chpass.php">Change Password</a></li>';
										echo '<li><a href="updatepro.php">Update Profile</a></li>';
										echo '<li><a href="prodet.php">Profile Details</a></li>';
										echo '<li><a href="logout.php">Logout</a></li>';
									} else {
										echo '<li><a href="login.php">Login</a></li>';
									}
									?>
								</ul>
							</li>
							<li><a href="add_to_cart.php">Cart</a></li>
						</ul>
					</div>
				</div>


			</div>
			<!-- </div> -->
		</nav>

		<!-- <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="display-t js-fullheight">
							<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
								<h1>The Best Online Food Store <em>&amp;</em><br>
									<p style="color: #f4ff0b;">Jay Bhavani Locho</p> <em>in</em> Surat
								</h1>

							</div>
						</div>
					</div>
				</div>
			</div>
		</header> -->

		<div id="fh5co-featured-menu" class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 fh5co-heading animate-box">
						<h2>Our Delicous Menu</h2>
						<div class="row">
							<div class="col-md-6">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis. Ad magni perspiciatis, voluptatum repellat.</p>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
						<div class="fh5co-item animate-box">
							<img src="uploads/butterlocho.jpg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
							<h3>Butter Locho</h3>
							<span class="fh5co-price">₹60<sup></sup></span>
						</div>
						<div class="fh5co-item animate-box">
							<img src="uploads/sadapatra.jpg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
							<h3>Sada Khaman</h3>
							<span class="fh5co-price">₹100<sup></sup></span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
						<div class="fh5co-item margin_top animate-box">
							<img src="uploads/vagharelaidada.jpg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
							<h3>Vagharela Idada</h3>
							<span class="fh5co-price">₹120<sup></sup></span>
						</div>
						<div class="fh5co-item animate-box">
							<img src="uploads/cheeselocho.jpg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
							<h3>Cheese Locho</h3>
							<span class="fh5co-price">₹100<sup></sup></span>
						</div>
					</div>
					<div class="clearfix visible-sm-block visible-xs-block"></div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
						<div class="fh5co-item animate-box">
							<img src="uploads/khamani.jpg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
							<h3>Khamni</h3>
							<span class="fh5co-price">₹70<sup></sup></span>
						</div>
						<div class="fh5co-item animate-box">
							<img src="uploads/dalsamosa.jpg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
							<h3>Dal Samosa</h3>
							<span class="fh5co-price">₹150<sup></sup></span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
						<div class="fh5co-item margin_top animate-box">
							<img src="uploads/chutnykhaman.jpg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
							<h3>Khaman</h3>
							<span class="fh5co-price">₹80<sup></sup></span>
						</div>
						<div class="fh5co-item animate-box">
							<img src="uploads/khandvi.jpg" class="img-responsive" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
							<h3>Patudi</h3>
							<span class="fh5co-price">₹90<sup></sup></span>
						</div>
					</div>
				</div>
			</div>
		</div>



		<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4 fh5co-widget">
						<h4>Jai Bhavani Locho</h4>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
					</div>
					<div class="col-md-2 col-md-push-1 fh5co-widget">
						<h4>Links</h4>
						<ul class="fh5co-footer-links">
							<li><a href="main.php">Home</a></li>
							<li><a href="menu.php">Menu</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="orders.php">Order</a></li>
							<li><a href="gallery.php">Gallery</a></li>

						</ul>
					</div>

					<div class="col-md-2 col-md-push-1 fh5co-widget">
						<h4>Categories</h4>
						<ul class="fh5co-footer-links">
							<li><a href="#">Landing Page</a></li>
							<li><a href="#">Real Estate</a></li>
							<li><a href="#">Personal</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">e-Commerce</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-md-push-1 fh5co-widget">
						<h4>Contact Information</h4>
						<ul class="fh5co-footer-links">
							<li>4/1318 Rangoonwala ni sheri, <br> Begampura,Surat</li>
							<li><a href="tel://1234567920">+91 80001 29029</a></li>
							<li><a href="mailto:jaibhavanilocho@gmail.com">jaibhavanilocho@gmail.com</a></li>
						</ul>
					</div>

				</div>



			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

</body>

</html>