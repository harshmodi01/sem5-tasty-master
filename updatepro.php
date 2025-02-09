<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jay Bhavani Locho &mdash; Online Food Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

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
    <!-- Date Time -->
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

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
                        <div id="fh5co-logo"><a href="index.html">Jay Bhavani Locho<span>.</span></a></div>
                    </div>
                    <div class="col-xs-12 text-center menu-1 menu-wrap">
                        <ul>
                            <li><a href="main.php">Home</a></li>
                            <li><a href="add_to_user.php">Menu</a></li>
                            <!-- <li class=""><a href="registration.php">Registration</a></li> -->
                            <li class="active"><a href="updatepro.php">Update Profile</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
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
							<h1>Reserved a Table Today!</h1>
							<h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> -->


        <div id="fh5co-reservation-form" class="fh5co-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 fh5co-heading animate-box">
                        <center><h2>Change Password</h2></center>
                        
                    </div>

                    <div class="col-lg-6 col-lg-push-6 col-lg-6 col-lg-push-6" style="margin-left: -280px;">
                    
                        <form action="updatepro.php" id="form-wrap" method="POST">

                        <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="name">Enter Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" required value="<?php if(isset($_POST['fname'])) echo $_POST['fname'];?>">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="email">Enter New Email Id</label>
                                    <input type="email" class="form-control" id="email" name="email" required value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="mobileno">Enter New Mobile Number</label>
                                    <input type="mobileno" class="form-control" id="mobileno" name="mobileno" required value="<?php if(isset($_POST['mobileno'])) echo $_POST['mobileno'];?>">
                                </div>
                            </div>

                            <!-- <div style="text-align:right">
							    <a href="forgot.php" class="txt1">
								    Forgot Password?
							    </a>
						    </div> -->

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" id="submit"  name = "submit" class="btn btn-primary btn-outline btn-lg" value="Update">
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
                        <h4>Tasty</h4>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                    </div>
                    <div class="col-md-2 col-md-push-1 fh5co-widget">
                        <h4>Links</h4>
                        <ul class="fh5co-footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Menu</a></li>
                            <li><a href="#">Gallery</a></li>
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
                            <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
                            <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                            <li><a href="http://https://freehtml5.co">freehtml5.co</a></li>
                        </ul>
                    </div>

                </div>

                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                            <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
                        </p>
                        <p>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-twitter2"></i></a></li>
                            <li><a href="#"><i class="icon-facebook2"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble2"></i></a></li>
                        </ul>
                        </p>
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

    <!-- Date Time -->
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>


    <!-- Main -->
    <script src="js/main.js"></script>

</body>

</html>

<?php
session_start();

// Include the connection file
include("connect.php");

if (isset($_POST['submit'])) {
    // Check if the form fields are set and not empty
    if (empty($_POST['fname']) || empty($_POST['email']) || empty($_POST['mobileno'])) {
        echo '<script>alert("Error: All fields are required. Please fill out the form completely.");</script>';
    } else {
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobileno = mysqli_real_escape_string($conn, $_POST['mobileno']);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script>alert("Error: Invalid email format. Please enter a valid email address.");</script>';
        } elseif (!preg_match('/^[6-9][0-9]{9}$/', $mobileno)) {
            echo '<script>alert("Error: Invalid mobile number format. Please enter a 10-digit number.");</script>';
        } else {
            $user = $_SESSION["uname"];
            $updateQuery = "UPDATE users SET fname='$fname', email='$email', mobileno='$mobileno' WHERE uname='$user'";
            $updateResult = mysqli_query($conn, $updateQuery);

            if ($updateResult) {
                echo '<script>alert("Profile updated successfully!");</script>';
                
            } else {
                echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
            }
        }
    }
}
?>

