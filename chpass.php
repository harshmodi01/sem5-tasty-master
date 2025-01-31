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
                        <center>
                            <h2>Change Password</h2>
                        </center>

                    </div>

                    <div class="col-lg-6 col-lg-push-6 col-lg-6 col-lg-push-6" style="margin-left: -280px;">

                        <form action="chpass.php" id="form-wrap" method="POST">


                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="password">Old Password</label>
                                    <input type="password" class="form-control" id="oldpassword" name="oldpassword" required value="<?php if (isset($_POST['oldpassword'])) echo $_POST['oldpassword']; ?>">
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="password">Enter New Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="password">Re-enter Password</label>
                                    <input type="password" class="form-control" id="rpassword" name="rpassword" required value="<?php if (isset($_POST['rpassword'])) echo $_POST['rpassword']; ?>">
                                </div>
                            </div>

                            <!-- <div style="text-align:right">
							    <a href="forgot.php" class="txt1">
								    Forgot Password?
							    </a>
						    </div> -->

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" id="submit" name="submit" class="btn btn-primary btn-outline btn-lg" value="Change">
                                </div>
                            </div>

                        </form>
                    </div>


                </div>
            </div>
        </div>





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
//session_start();
echo $_SESSION["uname"];
include("connect.php");

if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    $user = $_SESSION["uname"];
    $oldPassword = $_POST['oldpassword'];
    $reenteredPassword = $_POST['rpassword'];

    $checkQuery = "SELECT password FROM users WHERE uname='$user'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if ($checkResult) {
        $row = mysqli_fetch_assoc($checkResult);
        $storedPassword = $row['password'];

        if ($oldPassword == $storedPassword) {
            if ($password == $reenteredPassword) {
                $updateQuery = "UPDATE users SET password='$password' WHERE uname='$user'";
                $updateResult = mysqli_query($conn, $updateQuery);

                if ($updateResult) {
                    echo '<script>alert("Password updated successfully!");</script>';
                    echo "<script> window.location.href='main.php' </script>";
                } else {
                    echo '<script>alert("Password update failed: ' . mysqli_error($conn) . '");</script>';
                }
            } else {
                echo '<script>alert("New password and reentered password do not match.");</script>';
            }
        } else {
            echo '<script>alert("Old Password is wrong.");</script>';
        }
    }
}

$user = $_SESSION["uname"];
?>