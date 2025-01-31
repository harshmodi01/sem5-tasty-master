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
                            <li><a href="updatepro.php">Update Profile</a></li>
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
                            <h2>Register</h2>
                        </center>


                    </div>

                    <div class="col-lg-6 col-lg-push-6 col-lg-6 col-lg-push-6" style="margin-left: -280px;">
                        <form action="registration.php" id="form-wrap" method="POST">
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="fname">Your Full Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" required value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="uname">Username</label>
                                    <input type="text" class="form-control" id="uname" name="uname" required value="<?php if (isset($_POST['uname'])) echo $_POST['uname']; ?>">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="mobileno">Mobile No</label>
                                    <input type="number" class="form-control" id="mobileno" name="mobileno" required value="<?php if (isset($_POST['mobileno'])) echo $_POST['mobileno']; ?>">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="dateofbirth">Date of birth</label>
                                    <input type="date" name="dateofbirth" id="dateofbirth" class="form-control" value="<?php if (isset($_POST['dateofbirth'])) echo $_POST['dateofbirth']; ?>">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="many">Gender</label>
                                    <select name="gender" id="gender" class="form-control custom_select" value="<?php if (isset($_POST['gender'])) echo $_POST['gender']; ?>">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>

                            <style>
                                .row.form-group {
                                    margin-bottom: 20px;
                                }

                                select#gender {
                                    width: 100%;
                                    padding: 10px;
                                    border: 1px solid #ccc;
                                    border-radius: 5px;
                                    background-color: #f9f9f9;
                                    color: #333;
                                }

                                label[for="many"] {
                                    display: block;
                                    margin-bottom: 5px;
                                    font-weight: bold;
                                }

                                .alert.alert-danger {
                                    margin-bottom: 0;
                                }
                            </style>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="many">City</label>
                                    <select name="city" id="city" class="form-control custom_select" value="<?php if (isset($_POST['city'])) echo $_POST['city']; ?>">
                                        <option value="surat">Surat</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="many">pincode</label>
                                    <select name="pincode" id="pincode" class="form-control custom_select" value="<?php if (isset($_POST['pincode'])) echo $_POST['pincode']; ?>">
                                        <option value="">Select pincode</option>
                                        <option value="395010">BOMBAY MARKET - 395010</option>
                                        <option value="395001">GOPIPURA - 395001</option>
                                        <option value="395003">NAWABWADI - 395003</option>
                                        <option value="395009">RAMNAGAR SURAT - 395009</option>
                                        <option value="395008">A K ROAD - 395008</option>
                                        <option value="395009">NAVYUG COLLEGE - 395009</option>
                                        <option value="394221">PANDESARA - 394221</option>
                                        <option value="395006">VARACHHA ROAD - 395006</option>
                                        <option value="395003">VARIAVI BHAGAL - 395003</option>
                                        <option value="395017">ALTHAN - 395017</option>
                                        <option value="395003">JHAMPA - 395003</option>
                                        <option value="395004">MOTIVED - 395004</option>
                                        <option value="395009">PALANPUR ND - 395009</option>
                                        <option value="395007">SVR COLLEGE - 395007</option>
                                        <option value="395004">VASTA DEVDI ROAD - 395004</option>
                                        <option value="395002">INDERPURA - 395002</option>
                                        <option value="395002">SAGRAMPURA PUTLI - 395002</option>
                                        <option value="394210">UDHNA - 394210</option>
                                        <option value="395001">ATHWALINES - 395001</option>
                                        <option value="395007">BHARTHANA - 395007</option>
                                        <option value="395004">DABHOLI - 395004</option>
                                        <option value="395001">GOVT MEDICAL COLLEGE - 395001</option>
                                        <option value="395002">KHATODARA - 395002</option>
                                        <option value="395003">SURAT - 395003</option>
                                        <option value="394210">UDHNAGAM - 394210</option>
                                        <option value="395003">BHAGAL - 395003</option>
                                        <option value="395008">FULPADA - 395008</option>
                                        <option value="395012">GODADARA - 395012</option>
                                        <option value="395004">KATARGAM - 395004</option>
                                        <option value="395003">MAHIDHARPURA - 395003</option>
                                        <option value="395002">RUSTAMPURA SURAT - 395002</option>
                                        <option value="395003">SURAT RS - 395003</option>
                                        <option value="395009">ADAJAN DN - 395009</option>
                                        <option value="395004">SINGANPORE - 395004</option>
                                        <option value="395002">SURAT TEXTILE MARKET - 395002</option>
                                        <option value="395003">BHAVANIVAD - 395003</option>
                                        <option value="395004">GOTALAWADI - 395004</option>
                                        <option value="395012">LIMBAYAT - 395012</option>
                                        <option value="395003">SURAT CITY - 395003</option>
                                    </select>
                                </div>
                            </div>
                            <style>
                                .row.form-group {
                                    margin-bottom: 20px;
                                }

                                select#pincode {
                                    width: 100%;
                                    padding: 10px;
                                    border: 1px solid #ccc;
                                    border-radius: 5px;
                                    background-color: #f9f9f9;
                                    color: #333;
                                }

                                label[for="pincode"] {
                                    display: block;
                                    margin-bottom: 5px;
                                    font-weight: bold;
                                }

                                .alert.alert-danger {
                                    margin-bottom: 0;
                                }
                            </style>


                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" required value="<?php if (isset($_POST['address'])) echo $_POST['address']; ?>">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
                                </div>
                            </div>

                            <div style="text-align:right">
                                <a href="login.php" class="txt1">
                                    Already Registered?<br>
                                     click here to Login
                                </a>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" name="submit" class="btn btn-primary btn-outline btn-lg" value="Submit Form">
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];
    $dateofbirth = $_POST['dateofbirth'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $pincode = $_POST['pincode'];
    $city = $_POST['city'];

    // Simple form validation
    if (empty($fname) || empty($uname) || empty($mobileno) || empty($email) || empty($dateofbirth) || empty($password)) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> All fields are required. Please fill out the form completely.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Invalid email format. Please enter a valid email address.");</script>';
    } elseif (strlen($uname) < 5) {
        echo '<script>alert("Username must contain at least 5 characters.");</script>';
    } elseif (preg_match('/[A-Z]/', $uname)) {
        echo '<script>alert("Username cannot contain capital letters.");</script>';
    } elseif (empty($mobileno)) {
        echo '<script>alert("Mobile number is required. Please enter your mobile number.");</script>';
    } elseif (!preg_match('/^[6-9][0-9]{9}$/', $mobileno)) {
        echo '<script>alert("Invalid mobile number format. Please enter a 10-digit number.");</script>';
    } elseif (empty($password)) {
        echo '<script>alert("Password is required");</script>';
    } elseif (!preg_match('/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*()\-_=+{}[\]|;:,.<>?]).{6,15}$/', $password)) {
        echo '<script>alert("Password must be 6 to 15 characters and contain at least one capital letter, one digit, and one special character.");</script>';
    } elseif (!validateFullName($fname)) {
        echo '<script>alert("Invalid full name. Please enter only letters and spaces.");</script>';
        // } elseif (strtotime($dateofbirth) > time()) {
        //     echo '<script>alert("Invalid date of birth format or date is today or a future date. Please enter a valid past date in MM/DD/YYYY format.");</script>';
        // }
    } else {
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'newproject');
        if ($conn->connect_error) {
            die('Connection is failed please check the database' . $conn->connect_error);
        } else {
            // Prepare and execute the SELECT query
            $check_stmt = $conn->prepare("SELECT uname FROM users WHERE uname = ?");
            $check_stmt->bind_param("s", $uname);
            $check_stmt->execute();
            $check_result = $check_stmt->get_result();

            if ($check_result->num_rows > 0) {
                echo '<script>alert("This Username is already exist. Please try again with a different Username.");</script>';
            } else {
                // Prepare and execute the INSERT query with the plain text password
                $stmt = $conn->prepare("INSERT INTO users (fname, uname, mobileno, email, dateofbirth, address, password, city, pincode, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssisssssis", $fname, $uname, $mobileno, $email, $dateofbirth, $address, $password, $city, $pincode, $gender);
                $stmt->execute();

                echo '<script>alert("Your account is now created and you can Login!");</script>';

                echo '<script>
                    alert("Register successful!");
                    window.location.replace("login.php");
                </script>';

                $stmt->close();
            }

            $check_stmt->close();
            $conn->close();
        }
    }
}

function validateFullName($name)
{
    // Check if the full name contains only letters and spaces
    return preg_match("/^[a-zA-Z ]+$/", $name);
}


?>
<script>
    function validateDateOfBirth() {
        var dateOfBirth = document.getElementById("dateofbirth").value;
        var inputDate = new Date(dateOfBirth);
        var today = new Date();
        var maxDate = new Date();
        maxDate.setFullYear(today.getFullYear() - 10); 
        if (inputDate > today) {
            alert("Please enter a date in the past.");
            document.getElementById("dateofbirth").value = ""; 
            return false;
        } else if (inputDate > maxDate) {
            alert("You must be at least 10 years old.");
            document.getElementById("dateofbirth").value = ""; 
            return false;
        }
        return true;
    }

    document.getElementById("form-wrap").onsubmit = function() {
        return validateDateOfBirth();
    };
</script>