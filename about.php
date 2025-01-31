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
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
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
							<li ><a href="main.php">Home</a></li>
							<!-- <li ><a href="menu.php">Menu</a></li>
							<li ><a href="gallery.php">Gallery</a></li> -->
							<li><a href="add_to_user.php">Menu</a></li>
							<li class="active"><a href="about.php">About</a></li>
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
									

									// Check if the user is logged in
									if (isset($_SESSION['uname'])) {
										// User is logged in
										echo '<li><a href="chpass.php">Change Password</a></li>';
										echo '<li><a href="updatepro.php">Update Profile</a></li>';
										echo '<li><a href="prodet.php">Profile Details</a></li>';
										echo '<li><a href="logout.php">Logout</a></li>';
									} else {
										// User is not logged in
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
							<h1 style="color: #f4ff0b;">About <em>our</em> Restaurant</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> -->

	<div id="fh5co-about" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
                <img src="images/hero_1.jpeg" alt="Delicious Snacks - Tasty Delights for Every Craving">
            </div>
            <div class="col-md-5 col-md-push-1 animate-box">
                <div class="section-heading">
                    <h2>Discover Irresistible Snacks</h2>
                    <p>Indulge in a world of delightful flavors and culinary craftsmanship at our snack haven. We bring you a diverse range of handcrafted snacks that are perfect for satisfying every craving.</p>
                    <p>Our commitment to quality and taste sets us apart. Each snack is thoughtfully curated, using the finest ingredients to deliver an exceptional taste experience. Whether you're a fan of savory or sweet, our menu has something to tantalize your taste buds.</p>
                    <p>Explore our snack haven and embark on a journey of taste and innovation. From crispy bites to melt-in-your-mouth treats, we have snacks that cater to every palate.</p>
                    <p><a href="#" class="btn btn-primary btn-outline">Explore Our Snacks</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


	<div id="fh5co-timeline">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <ul class="timeline animate-box">
                    <li class="timeline-heading text-center animate-box">
                        <div>
                            <h3>Our Journey</h3>
                        </div>
                    </li>

                    <!-- Founding -->
                    <li class="animate-box timeline-unverted">
                        <div class="timeline-badge"><i class="icon-genius"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">The Founders Meet</h3>
                            </div>
                            <div class="timeline-body">
                                <p>Our story begins with the serendipitous meeting of our visionary founders. In a world far away, behind the word mountains, they embarked on a journey to create something extraordinary.</p>
                            </div>
                        </div>
                    </li>

                    <!-- Creating a Restaurant -->
                    <li class="timeline-inverted animate-box">
                        <div class="timeline-badge"><i class="icon-genius"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Creating a Restaurant</h3>
                            </div>
                            <div class="timeline-body">
                                <p>They established our first restaurant, setting the stage for a culinary adventure. Nestled in Bookmarksgrove, right at the coast of the Semantics, our journey took root.</p>
                            </div>
                        </div>
                    </li>

                    <!-- Adding 200+ Employees -->
                    <li class="animate-box timeline-unverted">
                        <div class="timeline-badge"><i class="icon-genius"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Adding 200+ Employees</h3>
                            </div>
                            <div class="timeline-body">
                                <p>As we grew, our family expanded. We added over 200 dedicated individuals to our team, each contributing to the unique blend of flavors and experiences we offer.</p>
                            </div>
                        </div>
                    </li>

                    <!-- More Restaurants Outlet -->
                    <li class="timeline-heading text-center animate-box">
                        <div>
                            <h3>Expanding Horizons</h3>
                        </div>
                    </li>

                    <!-- Establishing Restaurant in Europe -->
                    <li class="timeline-inverted animate-box">
                        <div class="timeline-badge"><i class="icon-genius"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Establishing Restaurant in Europe</h3>
                            </div>
                            <div class="timeline-body">
                                <p>Our journey took a leap across continents as we proudly established a restaurant in Europe. Bringing our culinary delights to a new audience, we continued to evolve.</p>
                            </div>
                        </div>
                    </li>

                    <!-- Franchise Restaurants in Brooklyn -->
                    <li class="animate-box timeline-unverted">
                        <div class="timeline-badge"><i class="icon-genius"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Franchise Restaurants in Brooklyn</h3>
                            </div>
                            <div class="timeline-body">
                                <p>Expanding our footprint, we ventured into Brooklyn with franchise restaurants, creating a local haven for culinary enthusiasts. Our commitment to quality remained unwavering.</p>
                            </div>
                        </div>
                    </li>

                    <!-- Adding 100K More Employees -->
                    <li class="timeline-inverted animate-box">
                        <div class="timeline-badge"><i class="icon-genius"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Adding 100K More Employees</h3>
                            </div>
                            <div class="timeline-body">
                                <p>With success came growth, and we proudly welcomed 100,000 more individuals into our family. Each member played a vital role in our journey, contributing to our success story.</p>
                            </div>
                        </div>
                    </li>

                    <!-- Establishing Marketing -->
                    <li class="animate-box timeline-unverted">
                        <div class="timeline-badge"><i class="icon-genius"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Establishing Marketing</h3>
                            </div>
                            <div class="timeline-body">
                                <p>Continuing to innovate, we ventured into marketing, ensuring that our culinary creations reached even more hearts. Our story continues to unfold as we share our passion with the world.</p>
                            </div>
                        </div>
                    </li>
                </ul>
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

