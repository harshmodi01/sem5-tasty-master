<?php
session_start();
?>
<!DOCTYPE HTML>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jay Bhavani Locho - Online Food Website</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="uploads/jay bhavani locho.jpg" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <!--  -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        section {
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
            background-color: #f5f5f5;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        section h2 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h1><?php $user = $_SESSION["uname"];
            // echo $user; 
            ?></h1>

    </header>

    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="adminindex.php"><img src="uploads/jay bhavani locho.jpg" alt="logo" style="height: 70px;" /></a>
            <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a> -->
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <div class="search-field d-none d-md-block">

                <div class="search-field d-none d-md-block">
                    <input type="text" id="autocomplete-input" placeholder="Search Users">
                    <div id="suggestions" class="slick-container"></div>
                </div>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

                <script>
                    $(document).ready(function() {
                        const currentPage = window.location.pathname.split('/').pop();

                        $(document).on('click', function(event) {
                            const searchField = $('.search-field');
                            const suggestionsContainer = $('#suggestions');

                            
                            if (!searchField.is(event.target) && searchField.has(event.target).length === 0) {
                                suggestionsContainer.hide(); 
                            }
                        });

                        $('#autocomplete-input').on('click', function(event) {
                            const suggestionsContainer = $('#suggestions');

                            suggestionsContainer.show();

                        });

                        $('#autocomplete-input').on('input', function() {
                            const query = $(this).val();

                            $.ajax({
                                type: 'POST',
                                url: 'search.php', 
                                data: {
                                    query: query
                                },
                                success: function(data) {
                                    const suggestionsContainer = $('#suggestions');
                                    suggestionsContainer.html(data);

                                    suggestionsContainer.slick({
                                        slidesToShow: 3,
                                        slidesToScroll: 1,
                                        vertical: true, 
                                        verticalSwiping: true, 
                                        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                                        nextArrow: '<button type="button" class="slick-next">Next</button>',
                                        responsive: [{
                                                breakpoint: 768,
                                                settings: {
                                                    slidesToShow: 2
                                                }
                                            },
                                            {
                                                breakpoint: 480,
                                                settings: {
                                                    slidesToShow: 1
                                                }
                                            }
                                        ]
                                    });

                                }
                            });
                        });
                        $(document).on('click', '.suggestion-item', function() {
                            const uname = $(this).text().trim();
                            // window.location.href = 'paymentView.php?uname=' + encodeURIComponent(uname);
                            const pageURL = 'feedback.php?uname=' + encodeURIComponent(uname) + '&from=' + currentPage;
                            window.location.href = pageURL;
                        });
                    });
                </script>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="nav-profile-img">
                            <img src="assets/images/faces/face1.jpg" alt="image">
                            <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black"><?php
                                                        include('connect.php');
                                                        $qry = "SELECT uname FROM users WHERE id=5";
                                                        $result  = mysqli_query($conn, $qry);
                                                        if ($result->num_rows > 0) {
                                                            $row = $result->fetch_assoc();
                                                            echo $row['uname'];
                                                        }
                                                        ?></p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="adminindex.php">
                            <i class="mdi mdi-cached me-2 text-success"></i> Admin </a>
                        <div class="dropdown-divider"></div>
                        <!-- <a class="dropdown-item" href="chadminpass.php">
                            <i class="mdi mdi-cached me-2 text-success"></i>change password</a>
                        <div class="dropdown-divider"></div> -->
                        <!-- log out -->
                        <a class="dropdown-item" href="index.php">
                            <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>

                    </div>

                </li>   

                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>

        </div>
        <style>
            .search-field {
                margin-top: 7px;
                margin-bottom: 20px;
            }

            #autocomplete-input {
                width: 300px;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
            }

            .slick-container {
                margin-top: 80px;
            }

            .slick-prev,
            .slick-next {
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 4px;
                padding: 5px 10px;
                cursor: pointer;
            }

            .slick-prev:hover,
            .slick-next:hover {
                background-color: #0056b3;
            }

            .slick-prev {
                position: absolute;
                left: -40px;
                top: 50%;
                transform: translateY(-50%);
            }

            .slick-next {
                position: absolute;
                right: -40px;
                top: 50%;
                transform: translateY(-50%);
            }

            .suggestion-item {
                background-color: #fff;
                border: 1px solid #ddd;
                padding: 10px;
                margin-bottom: 8px;
                border-radius: 4px;
                transition: background-color 0.3s ease;

            }

            .suggestion-item:hover {
                background-color: #f5f5f5;
                border-color: #ccc;
                cursor: pointer;
            }
        </style>
    </nav>
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="" class="nav-link">
                        <div class="nav-profile-image">
                            <img src="assets/images/faces/face1.jpg" alt="profile">
                            <span class="login-status online"></span>
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2"><?php
                                                                include('connect.php');
                                                                $qry = "SELECT uname FROM users WHERE id=5";
                                                                $result  = mysqli_query($conn, $qry);
                                                                if ($result->num_rows > 0) {
                                                                    $row = $result->fetch_assoc();
                                                                    echo $row['uname'];
                                                                }
                                                                ?></p></span>
                            <span class="text-secondary text-small">Project Manager</span>
                        </div>
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminindex.php">
                        <span class="menu-title">Dashboard</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-title">Forms</span>
                        <i class="menu-arrow"></i>
                        <!-- <i class="mdi mdi-crosshairs-gps menu-icon"></i> -->
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="addcategory.php">Add Category</a></li>
                            <li class="nav-item"> <a class="nav-link" href="addsubcategory.php">Add Sub-Catagorry</a></li>
                            <li class="nav-item"> <a class="nav-link" href="addsnack.php">Add Snack</a></li>
                            <li class="nav-item"> <a class="nav-link" href="deliveryboy.php">Add Delivery Boy</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="feedback.php">
                        <span class="menu-title">FeedBacks</span>
                        <!-- <i class="mdi mdi-table-large menu-icon"></i> -->
                        <i class="mdi mdi-message-text menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orderView.php">
                        <span class="menu-title">Orders</span>
                        <!-- <i class="mdi mdi-table-large menu-icon"></i> -->
                        <i class="mdi mdi-package-variant-closed menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="paymentView.php">
                        <span class="menu-title">Payments</span>
                        <!-- <i class="mdi mdi-table-large menu-icon"></i> -->
                        <i class="mdi mdi-credit-card menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="deliboy.php">
                        <span class="menu-title">Delivery Boys</span>
                        <!-- <i class="mdi mdi-table-large menu-icon"></i> -->
                        <i class="mdi mdi-human-male menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="report.php">
                        <span class="menu-title">Generate Report</span>
                        <!-- <i class="mdi mdi-medical-bag menu-icon"></i> -->
                        <i class="mdi mdi-file-document menu-icon"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <section>
            <center>
                <h2>Change Password</h2>
            </center>
            <form action="chadminpass.php" method="POST">
                <label for="oldpassword">Old Password</label>
                <input type="password" id="oldpassword" name="oldpassword" required value="<?php if(isset($_POST['oldpassword'])) echo $_POST['oldpassword'];?>">

                <label for="password">Enter New Password</label>
                <input type="password" id="password" name="password" required value="<?php if(isset($_POST['password'])) echo $_POST['password'];?>">

                <label for="rpassword">Re-enter Password</label>
                <input type="password" id="rpassword" name="rpassword" required value="<?php if(isset($_POST['rpassword'])) echo $_POST['rpassword'];?>">

                <input type="submit" id="submit" name="submit" value="Change Password">
            </form>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
</body>

</html>


<?php
//session_start();
//echo $_SESSION["uname"];
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
                    echo "<script> window.location.href='login.php' </script>";
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

?>