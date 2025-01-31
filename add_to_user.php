<?php
session_start();


error_reporting(E_ALL);
ini_set('display_errors', 1);


// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "newproject";

// $conn = mysqli_connect($servername, $username, $password, $database);
include('connect.php');

if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

$snackQuery = "SELECT a.snackid, c.cname, s.sname, a.snackname, a.description,image, a.price, a.status FROM addsnack a
               INNER JOIN category c ON a.categoryid = c.cid
               INNER JOIN subcategory s ON a.subcategoryid = s.sid";
$snackResult = mysqli_query($conn, $snackQuery);


if (isset($_POST['submit'])) {
    // $id = $_GET['id'];
    $snackid = $_POST['snack_id'];
    $snackimage = $_POST['snack_image'];
    $snackname = $_POST['snack_name'];
    $snackprice = $_POST['snack_price'];
    $quantity = $_POST['quantity'];
    // echo "Submitted";

    // $sql = "INSERT INTO cart(snackid,snackname,price,quantity,image) VALUES ('$snackid','$snackname','$snackprice','$quantity','$snackimage')";
    // mysqli_query($conn, $sql);

    // Check if the user is logged in
    if (isset($_SESSION['uname'])) {
        $username = $_SESSION['uname'];

        // You should perform additional validation and checks as needed.

        $sql = "INSERT INTO cart (snackid, snackname, price, quantity, image,uname) VALUES ('$snackid', '$snackname', '$snackprice', '$quantity', '$snackimage','$username')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Item added to the cart successfully.');</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('User is not logged in. Please log in to add items to your cart.');</script>";
    }
} 
// else {
//     echo "Not Submitted";
// }
?>



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
							<li ><a href="main.php">Home</a></li>
							<!-- <li ><a href="menu.php">Menu</a></li>
							<li ><a href="gallery.php">Gallery</a></li> -->
							<li class="active"><a href="add_to_user.php">Menu</a></li>
							<li ><a href="about.php">About</a></li>
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
       


        <section>
            <style>
                body {
                    background-color: #000;
                    color: #fff;
                }

                h5 {
                    font-size: 25px;
                    color: #007bff;
                }

                .card {
                    background-color: #3632318a;
                    border: none;
                    margin-top: 50px;
                    border-radius: 12px;
                    font-size: 20px;
                }

                .card-title,
                .card-text {
                    color: #fff;
                }

                p {
                    margin-left: 20px;
                }

                img {
                    margin-top: 18px;
                }

                .btn-primary {
                    background-color: #007bff;
                    border: none;
                }

                .btn-primary:hover {
                    background-color: #0056b3;
                }

                .card .logo {
                    display: block;
                    margin: 0 auto;
                    margin-top: 15px;
                    border-radius: 6px;
                    margin: 20px auto;
                }



                input[type="number"] {
                    width: 100px;
                    padding: 5px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    background-color: #fff;
                    color: #333;
                    font-size: 16px;
                    margin-bottom: 8px;
                }

                input[type="submit"] {
                    background-color: #007bff;
                    border: none;
                    color: #fff;
                    padding: 5px 10px;
                    border-radius: 5px;
                    cursor: pointer;
                    font-size: 16px;
                }

                input[type="submit"]:hover {
                    background-color: #0056b3;
                }
            </style>
            <div class="container">
                <center>
                    <h2 style="color: #ccc; margin-top: 150px;">Snacks</h2>
                </center>
                <div class="row">

                    <?php while ($snackRow = mysqli_fetch_assoc($snackResult)) { ?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <img src="https://source.unsplash.com/100x100/?Gujarati-food" alt="LOGO" class="logo"> -->
                                    <!-- image fetch thase khali folder ma levani che -->
                                    <img src="<?php echo $snackRow['image'];  ?>" alt="images" class="logo" style="height:130px; width:130px; ">
                                    <center>
                                        <h5 class="card-title" style="margin-top: 10px; color: #f4ff0b;"><?php echo $snackRow['snackname']; ?></h5>
                                    </center>
                                    <p class="card-text">Category: <?php echo $snackRow['cname']; ?></p>
                                    <p class="card-text">Subcategory: <?php echo $snackRow['sname']; ?></p>
                                    <p class="card-text">Description: <?php echo $snackRow['description']; ?></p>
                                    <p class="card-text">Price: ₹<?php echo $snackRow['price']; ?></p>
                                    <!-- <p class="card-text">Status: <?php echo $snackRow['status']; ?></p> -->

                                    <form action="add_to_user.php" method="post">
                                        <input type="hidden" name="snack_id" value="<?php echo $snackRow['snackid']; ?>">
                                        <input type="hidden" name="snack_name" value="<?php echo $snackRow['snackname']; ?>">
                                        <input type="hidden" name="snack_price" value="<?php echo $snackRow['price']; ?>">
                                        <input type="hidden" name="snack_image" value="<?php echo $snackRow['image']; ?>">
                                        <!-- <input type="hidden" name="action" value="add_to_cart"> This line is crucial -->
                                        <center>
                                            <input type="number" name="quantity" id="quantity" value="1" min="1" required>
                                            <input type="submit" name="submit" value="Add to Cart" class="btn btn-primary">
                                        </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>


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