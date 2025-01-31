<?php
session_start();
include("connect.php");

if (isset($_SESSION['uname'])) {
    $username = $_SESSION['uname'];

    $profileQuery = "SELECT * FROM users WHERE uname = '$username'";
    $profileResult = mysqli_query($conn, $profileQuery);

    if ($profileResult) {
        $profileData = mysqli_fetch_assoc($profileResult);
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jay Bhavani Locho &mdash; Profile Details</title>
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
    <style>
        

        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: black;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color: white;
        }

        th {
            background-color: #7f4caf;
            color: white;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top: 50px;
        }
    </style>
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
                        <!-- <li ><a href="menu.php">Menu</a></li> -->
                        <!-- <li><a href="gallery.php">Gallery</a></li> -->
                        <li><a href="add_to_user.php">Menu</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>

                        <li class="has-dropdown">
                            <a href="#"> <?php 
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
                        
                        <?php
                        if (isset($_SESSION['uname'])) {
                            $username = $_SESSION['uname'];
                            echo '<li><a href="add_to_cart.php">Cart</a></li>'; 
                        } 
                        else {
                            echo '<li><a href="javascript:void(0);" onclick="showAlert()">Cart</a></li>'; 
                        } 
                        ?>
                        <script>
                            function showAlert() {
                                alert("You are not logged in. Please log in to access the cart.");
                            }
                        </script>
                        <!-- <li><a href="add_to_cart.php">Cart</a></li> -->
                    </ul>
                </div>
            </div>


        </div>
        <!-- </div> -->
    </nav>

</div>
        <!-- Your existing navigation code goes here -->
        <!-- ... -->

        <div id="fh5co-reservation-form" class="fh5co-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 fh5co-heading animate-box">
                        <h2>Profile Details</h2>
                    </div>

                    <div class="col-md-12 animate-box">
                        <table>
                            <tr>
                                <th>Field</th>
                                <th>Details</th>
                            </tr>
                            <tr>
                                <td>ID</td>
                                <td><?php echo $profileData['id']; ?></td>
                            </tr>
                            <tr>
                                <td>Full Name</td>
                                <td><?php echo $profileData['fname']; ?></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td><?php echo $profileData['uname']; ?></td>
                            </tr>
                            <tr>
                                <td>Mobile Number</td>
                                <td><?php echo $profileData['mobileno']; ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo $profileData['email']; ?></td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td><?php echo $profileData['dateofbirth']; ?></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><?php echo $profileData['address']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Include your scripts here -->
    <!-- Example: -->
    <script src="js/main.js"></script>

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
    } else {
        echo '<p>Error fetching profile details: ' . mysqli_error($conn) . '</p>';
    }
}
?>