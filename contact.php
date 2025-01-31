<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jay Bhavani Locho</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

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
							<li><a href="about.php">About</a></li>
							<li class="active"><a href="contact.php">Contact</a></li>
							
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
							<h1 style="color: #f4ff0b;">Get <em>in</em> Touch</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> -->

	
<div id="fh5co-contact" class="fh5co-section animate-box">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Get in Touch</h2>
                <p>Have a question, suggestion, or just want to say hello? We'd love to hear from you! Your feedback is important to us as we strive to provide the best experience for our valued visitors.</p>
                <p>Feel free to drop us a message using the form below, or simply reach out to us via email. We are here to assist you and ensure your experience with us is nothing short of exceptional.</p>
                <p><a href="mailto:jaybhavanilocho@gmail.com" class="btn btn-primary btn-outline">Send Us an Email</a></p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 mx-auto">
                <form action="contact.php" method="POST" id="form-wrap">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" name="name" required value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="email">Your Email</label>
                            <input type="text" class="form-control" name="email" required value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="message">Your Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" value="<?php if(isset($_POST['message'])) echo $_POST['message'];?>"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" name="submit" class="btn btn-primary btn-outline btn-lg" value="Submit Feedback">
                        </div>
                    </div>
                </form>
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

<?php
include('connect.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "insert into contact(name,email,message) values ('$name','$email','$message')";
    if(mysqli_query($conn,$sql))
    {
		echo '<script>alert("Thanks for submitting feedback");</script>';
        //header("location:login.php");
    }
    else
    {
        echo"error".mysqli_error($conn);
    }
}

?>
