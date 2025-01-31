<?php
session_start();


if ($_SESSION["uname"] === "adniraj84") {
  echo $_SESSION['uname'];
} else {
  echo "<script>alert('You are not logged in');</script>";
  echo "<script>location.href = 'login.php';</script>";
  exit; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Jay Bhavani Admin</title>
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



</head>

<body>
  <!-- <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1"> 
                <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                  <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                </div>
             </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div> -->
  <!-- partial:partials/_navbar.html -->
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


      <!-- <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="nav-profile-img">
              <img src="assets/images/faces/face1.jpg" alt="image">
              <span class="availability-status online"></span>
            </div>
            <div class="nav-profile-text">
              <p class="mb-1 text-black"> -->
      <?php
      // include('connect.php');
      // $qry = "SELECT uname FROM users WHERE id=5";
      // $result  = mysqli_query($conn, $qry);
      // if ($result->num_rows > 0) {
      //   $row = $result->fetch_assoc();
      //   echo $row['uname'];
      // }
      ?></p>
      <!-- </div>
          </a> -->


      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="nav-profile-img" onclick="showProfilePic()">
              <img src="assets/images/faces/face1.jpg" alt="image">
              <span class="availability-status online"></span>
            </div>
            <div class="nav-profile-text">
              <p class="mb-1 text-black">
                <?php
                include('connect.php');
                if ($_SESSION["uname"] === "adniraj84") {
                  echo $_SESSION['uname'];
                } 
                // $qry = "SELECT uname FROM users WHERE id=5";
                // $result  = mysqli_query($conn, $qry);
                // if ($result->num_rows > 0) {
                //   $row = $result->fetch_assoc();
                //   echo $row['uname'];
                // }
                ?>
              </p>
            </div>
          </a>
          <!-- </li>
      </ul> -->

          <div id="profileModal" class="modal">
            <div class="modal-content">
              <span class="close" onclick="hideProfilePic()">&times;</span>
              <img src="assets/images/faces/face1.jpg" alt="Profile Picture">
            </div>
          </div>

          <script>
            function showProfilePic() {
              var modal = document.getElementById('profileModal');
              modal.style.display = 'block';
            }

            function hideProfilePic() {
              var modal = document.getElementById('profileModal');
              modal.style.display = 'none';
            }
          </script>

          <style>
            .modal {
              display: none;
              position: fixed;
              z-index: 9999;
              left: 0;
              top: 0;
              width: 100%;
              height: 100%;
              overflow: auto;
              background-color: rgba(0, 0, 0, 0.7);
            }

            .modal-content {
              position: absolute;
              top: 30%;
              left: 50%;
              transform: translate(-50%, -50%);
              background-color: #fff;
              padding: 20px;
              border-radius: 5px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
              max-width: 40%;
              max-height: 40%;
            }

            .close {
              color: #aaa;
              float: right;
              font-size: 28px;
              font-weight: bold;
              cursor: pointer;
            }

            .close:hover,
            .close:focus {
              color: black;
              text-decoration: none;
              cursor: pointer;
            }
          </style>





          <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
            <!-- <a class="dropdown-item" href="#">
              <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
            <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="chadminpass.php">
              <i class="mdi mdi-cached me-2 text-success"></i>change password</a>
            <div class="dropdown-divider"></div>
            <!-- log out -->
            <a class="dropdown-item" href="logout.php">
              <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>

          </div>
        </li>
        <li class="nav-item d-none d-lg-block full-screen-link">
          <a class="nav-link">
            <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
          </a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-email-outline"></i>
            <span class="count-symbol bg-warning"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
            <h6 class="p-3 mb-0">Messages</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                <p class="text-gray mb-0"> 1 Minutes ago </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                <p class="text-gray mb-0"> 15 Minutes ago </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                <p class="text-gray mb-0"> 18 Minutes ago </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <h6 class="p-3 mb-0 text-center">4 new messages</h6>
          </div>
        </li> -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
            <i class="mdi mdi-bell-outline"></i>
            <span class="count-symbol bg-danger"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <h6 class="p-3 mb-0">Notifications</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-success">
                  <i class="mdi mdi-calendar"></i>
                </div>
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-warning">
                  <i class="mdi mdi-settings"></i>
                </div>
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                <p class="text-gray ellipsis mb-0"> Update dashboard </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-info">
                  <i class="mdi mdi-link-variant"></i>
                </div>
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                <p class="text-gray ellipsis mb-0"> New admin wow! </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <h6 class="p-3 mb-0 text-center">See all notifications</h6>
          </div>
        </li>
        <li class="nav-item nav-logout d-none d-lg-block">
          <a class="nav-link" href="#">
            <i class="mdi mdi-power"></i>
          </a>
        </li>
        <li class="nav-item nav-settings d-none d-lg-block">
          <a class="nav-link" href="#">
            <i class="mdi mdi-format-line-spacing"></i>
          </a>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button> -->
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
        margin-top: 10px;
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

      /* Hover effect for suggestion items */
      .suggestion-item:hover {
        background-color: #f5f5f5;
        border-color: #ccc;
        cursor: pointer;
      }
    </style>
  </nav>


  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <a href="#" class="nav-link">
            <div class="nav-profile-image">
              <img src="assets/images/faces/face1.jpg" alt="profile">
              <span class="login-status online"></span>
              <!--change to offline or busy as needed-->
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
        <!-- <li class="nav-item">
              <a class="nav-link" href="pages/icons/mdi.html">
                <span class="menu-title">Icons</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="pages/forms/basic_elements.php">
            <span class="menu-title">Forms</span>
            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="pages/charts/chartjs.php">
            <span class="menu-title">Charts</span>
            <i class="mdi mdi-chart-bar menu-icon"></i>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="basic-table.php">
            <span class="menu-title">Tables</span>
            <i class="mdi mdi-table-large menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
            <span class="menu-title">Sample Pages</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-medical-bag menu-icon"></i>
          </a>
          <div class="collapse" id="general-pages">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            </ul>
          </div>
        </li> -->
        <!-- <li class="nav-item sidebar-actions">
          <span class="nav-link">
            <div class="border-bottom">
              <h6 class="font-weight-normal mb-3">Projects</h6>
            </div>
            <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
            <div class="mt-4">
              <div class="border-bottom">
                <p class="text-secondary">Categories</p>
              </div>
              <ul class="gradient-bullet-list mt-4">
                <li>Free</li>
                <li>Pro</li>
              </ul>
            </div>
          </span>
        </li> -->
      </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-home"></i>
            </span> Dashboard
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <!-- <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i> -->
              </li>
            </ul>
          </nav>
        </div>
        <div class="row">
          <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
              <div class="card-body">
                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Total Sales <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">₹ <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $database = "newproject";

                                    // Create a connection
                                    $conn = new mysqli($servername, $username, $password, $database);

                                    // Check connection
                                    if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                    }

                                    // SQL query to get total sales
                                    $sql = "SELECT SUM(total) AS total_sales FROM orders";

                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                      $row = $result->fetch_assoc();
                                      $totalSales = $row['total_sales'];

                                      // Output the total sales
                                      echo $totalSales;
                                    } else {
                                      echo "No results found";
                                    }

                                    // Close the database connection
                                    $conn->close();
                                    ?>
                </h2>
                <!-- <h6 class="card-text">Increased by 60%</h6> -->
              </div>
            </div>
          </div>
          <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
              <div class="card-body">
                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Total Orders <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5"><?php
                                  $servername = "localhost";
                                  $username = "root";
                                  $password = "";
                                  $database = "newproject";

                                  // Create a connection
                                  $conn = new mysqli($servername, $username, $password, $database);

                                  // Check connection
                                  if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                  }

                                  // SQL query to get the total number of orders
                                  $sql = "SELECT COUNT(*) AS total_orders FROM orders";

                                  $result = $conn->query($sql);

                                  if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                    $totalOrders = $row['total_orders'];

                                    // Output the total number of orders
                                    echo  $totalOrders;
                                  } else {
                                    echo "No results found";
                                  }

                                  // Close the database connection
                                  $conn->close();
                                  ?>
                </h2>
                <!-- <h6 class="card-text">Decreased by 10%</h6> -->
              </div>
            </div>
          </div>
          <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
              <div class="card-body">
                <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Visitors Online <i class="mdi mdi-diamond mdi-24px float-right"></i>
                </h4>
                <?php

                $conn = mysqli_connect("localhost", "root", "", "newproject");

                if ($conn) {
                  // echo "Connection done!";
                } else {
                  die("Not connected" . mysqli_connect_error());
                }

                $query = "SELECT COUNT(*) as user_count FROM users";
                $result = mysqli_query($conn, $query);

                if ($result) {
                  $row = mysqli_fetch_assoc($result);
                  $userCount = $row['user_count'];
                  echo "<h2 class='mb-5'>" . $userCount . "</h2>";
                }

                ?>
                <!-- <h2 class="mb-5">95,5741</h2> -->
                <!-- <h6 class="card-text">Increased by 5%</h6> -->
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Today's Orders</h4>
                <div class="table-responsive">
                  <table class="table" id="myTable">
                    <thead>
                      <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Snack Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include("connect.php");

                      // Get today's date
                      $today = date("Y-m-d");

                      $sql = "SELECT * FROM `orders` WHERE DATE(`date`) = '$today'";
                      $result = mysqli_query($conn, $sql);
                      $cid = 0;

                      while ($row = mysqli_fetch_assoc($result)) {
                        $cid = $cid + 1;
                        echo "<tr>
                                <th scope='row'>" . $cid . "</th>
                                <td>" . $row['snackname'] . "</td>
                                <td>" . $row['date'] . "</td>
                                <td>" . $row['price'] . "</td>
                                <td>" . $row['quantity'] . "</td>
                                <td>" . $row['total'] . "</td>
                            </tr>";
                      }
                      ?>

                      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                      <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
                      <script>
                        $(document).ready(function() {
                          $('#myTable').DataTable();

                        });
                      </script>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Recent Updates</h4>
                <div class="d-flex">
                  <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                    <i class="mdi mdi-account-outline icon-sm me-2"></i>
                    <span><?php
                          // include('connect.php');
                          // $qry = "SELECT uname FROM users WHERE id=5";
                          // $result  = mysqli_query($conn, $qry);
                          // if ($result->num_rows > 0) {
                          //   $row = $result->fetch_assoc();
                          //   echo $row['uname'];
                          // }
                          ?></span>
                  </div>
                  <div class="d-flex align-items-center text-muted font-weight-light">
                    <i class="mdi mdi-clock icon-sm me-2"></i>
                    <span><?php
                          // date_default_timezone_set('Asia/Kolkata'); // Set the time zone to India

                          // $currentDateTime = date('Y-m-d H:i:s'); // Format: Year-Month-Day Hour:Minute:Second

                          // echo $currentDateTime;
                          ?></span>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-6 pe-1">
                    <img src="uploads/butterlocho.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                    <img src="uploads/chutnykhaman.jpg" class="mw-100 w-100 rounded" alt="image">
                  </div>
                  <div class="col-6 ps-1">
                    <img src="uploads/dalsamosa.jpg" class="mb-2 mw-100 w-100 rounded" alt="image">
                    <img src="uploads/cheeselocho.jpg" class="mw-100 w-100 rounded" alt="image">
                  </div>
                </div>
                <div class="d-flex mt-5 align-items-top">
                   <img src="assets/images/faces/face3.jpg" class="img-sm rounded-circle me-3" alt="image"> -->
          <!-- <div class="mb-0 flex-grow"> -->
          <!-- <h5 class="me-2 mb-2">School Website - Authentication Module.</h5>
                    <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted by the readable content of a page.</p> -->
          <!-- </div> -->
          <!-- 
                </div>
              </div>
            </div>
          </div>  -->


          <!-- Include Chart.js library -->
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

          <!-- Chart for Sales -->
          <canvas id="salesChart" width="400" height="200"></canvas>

          <!-- Chart for Most Sold Snacks -->
          <canvas id="snacksChart" width="500" height="500"></canvas>

          <?php
          // PHP code to fetch data from the database
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "newproject";

          $conn = new mysqli($servername, $username, $password, $dbname);

          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          // Fetching data for sales chart
          $salesData = array();
          $sqlSales = "SELECT SUM(quantity) AS total_quantity, MONTH(date) AS month FROM orders GROUP BY MONTH(date)";
          $resultSales = $conn->query($sqlSales);

          if ($resultSales->num_rows > 0) {
            while ($row = $resultSales->fetch_assoc()) {
              $salesData[$row["month"]] = $row["total_quantity"];
            }
          }

          // Fetching data for most sold snacks chart
          $snacksData = array();
          $sqlSnacks = "SELECT snackname, SUM(quantity) AS total_quantity FROM orders GROUP BY snackname";
          $resultSnacks = $conn->query($sqlSnacks);

          if ($resultSnacks->num_rows > 0) {
            while ($row = $resultSnacks->fetch_assoc()) {
              $snacksData[$row["snackname"]] = $row["total_quantity"];
            }
          }

          $conn->close();
          ?>

          <script>
            // JavaScript code to create charts using fetched data
            // Sales Chart
            var salesData = <?php echo json_encode(array_values($salesData)); ?>;
            var ctxSales = document.getElementById('salesChart').getContext('2d');
            var salesChart = new Chart(ctxSales, {
              type: 'bar',
              data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                  label: 'Sales',
                  data: salesData,
                  backgroundColor: 'rgba(54, 162, 235, 0.5)',
                  borderColor: 'rgba(54, 162, 235, 1)',
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              }
            });
            // Most Sold Snacks Chart
            var snacksData = <?php echo json_encode(array_values($snacksData)); ?>;
            var snacksLabels = <?php echo json_encode(array_keys($snacksData)); ?>;
            var snacksColors = [
              'rgba(255, 99, 132, 0.5)',
              'rgba(54, 162, 235, 0.5)',
              'rgba(255, 206, 86, 0.5)',
              'rgba(75, 192, 192, 0.5)',
              'rgba(153, 102, 255, 0.5)',
              'rgba(255, 159, 64, 0.5)',
              // Add more colors as needed
            ];
            var snacksBorderColor = [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)',
              // Add more colors as needed
            ];
            var ctxSnacks = document.getElementById('snacksChart').getContext('2d');
            var snacksChart = new Chart(ctxSnacks, {
              type: 'pie',
              data: {
                labels: snacksLabels,
                datasets: [{
                  data: snacksData,
                  backgroundColor: snacksColors,
                  borderColor: snacksBorderColor,
                  borderWidth: 1
                }]
              },
              options: {
                responsive: false, // Disable responsiveness
                maintainAspectRatio: false, // Disable aspect ratio
                // Add labels and other configurations
                plugins: {
                  legend: {
                    position: 'right', // Change legend position if needed
                  },
                  tooltip: {
                    callbacks: {
                      label: function(context) {
                        var label = context.label || '';
                        if (label) {
                          label += ': ';
                        }
                        if (context.parsed) {
                          label += context.parsed.toFixed(2);
                        }
                        return label;
                      }
                    }
                  }
                }
              }
            });
          </script>
        </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © jaybhavanilocho.com 2020</span>
            <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Shopping in <a href="adminindex.php" target="_blank">Jay Bhavani Locho</a> from jaybhavanilocho.com</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
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