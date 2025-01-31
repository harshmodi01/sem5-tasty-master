<?php
session_start();

// echo $_SESSION["uname"] ;

// $conn = mysqli_connect("localhost", "root", "", "newproject");
include('connect.php');

if ($conn) {
    echo "Connection done!";
} else {
    die("Not connected" . mysqli_connect_error());
}


if (isset($_POST['submit'])) { 
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    echo $password;
    echo $rpassword;

    if ($_POST['password'] == $_POST['rpassword']) {
        if ((strlen($password) >= 5 && preg_match('/[0-9]/', $password) && preg_match('/[a-zA-Z]/', $password))) {

            $uname = $_SESSION["uname"];

            $updateQuery = "UPDATE users SET password='$password' WHERE uname='$uname'";
            $updateResult = mysqli_query($conn, $updateQuery);

            if ($updateResult) {
                session_unset();
                session_destroy();
                echo "<script>
                        swal('Password Changed!', 'Now, login with new password.', 'success').then(function() {
                        window.location.href='main.php';
                        });
                    </script>";
                echo "<script>alert('password changes successfully !')</script>";
                echo "<script> window.location.href='main.php' </script>";

            } else {
                echo "Password update failed: " . mysqli_error($conn);
            }
        } else {
            echo "<script>
            swal('Error!', 'Password length atleast 5 & Must contain Number and Alphabets.', 'error').then(function() {
                window.location.href='changepass.php';
            });
            </script>";
        }
    } else {
        echo "<script>
swal('Error!', 'Passwords are not same', 'error').then(function() {
    window.location.href='changepass.php';
});
</script>";
    }
    // echo $_SESSION["uname"];

    // if (isset($_SESSION["uname"])) {
    //     $uname = $_SESSION["uname"];
    //     // echo $_SESSION["uname"];

    //     $updateQuery = "UPDATE `users` SET `password`='$password' WHERE `uname`= '$uname' ";
    //     $updateResult = mysqli_query($conn, $updateQuery);

    //     if ($updateResult) {
    //         echo "Password updated successfully!";
    //         // You can redirect the user to another page after the password update if needed
    //         // header("Location: index.php");
    //         // exit;
    //     } else {
    //         echo "Password update failed: " . mysqli_error($conn);
    //     }
    // } else {
    //     echo "Session variable 'uname' is not set.";
    // }



    //     $updateQuery = "UPDATE `users` SET `password`='$password' WHERE `email`='$uname'";
    //     $updateResult = mysqli_query($conn, $updateQuery);

    //     if ($updateResult) {
    //         echo '<script>alert("Password updated successfully!");</script>';
    //         // echo "<script> window.location.href='login.php' </script>";
    //     } else {
    //         echo "Password update failed: " . mysqli_error($conn);
    //         echo '<script>alert("Password update failed!"); </script>';
    //     }
    // }
    // else {
    //         echo "Session variable 'uname' is not set.";
    // }
}

?>

<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div id="page1">
        <div id="divvid">
           
        </div>
        <div id="divlg">
            <div class="login-container">
                <h2>Change Password </h2>
                <form action="" method="post">
                    
                    <input type="password" name=" password" placeholder="New Password">
                    <input type="password" name="rpassword" placeholder="Re-enter Password">
                    <br>
                    <button type="submit" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html> -->







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
                        <h2>Change The Password</h2>
                        
                    </div>

                    <div class="col-lg-6 col-lg-push-6 col-lg-6 col-lg-push-6" style="margin-left: -280px;">

                        <form action="#" id="form-wrap" method="POST">

                            <!-- <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="uname">Username</label>
                                    <input type="text" class="form-control" id="uname" name="uname" required>
                                </div>
                            </div> -->

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="password">New Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="password">Confirm Password</label>
                                    <input type="password" class="form-control" id="rpassword" name="rpassword" required>
                                </div>
                            </div>

                            <!-- <div style="text-align:right">
							    <a href="forgot.php" class="txt1">
								    Forgot Password?
							    </a>
						    </div> -->

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" id="submit" name="submit" class="btn btn-primary btn-outline btn-lg" value="UPDATE">
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