<?php
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'But Books', 'Please buy books from Store', current_timestamp());
$insert = false;
$update = false;
$delete = false;

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "newproject";

// $conn = mysqli_connect($servername, $username, $password, $database);
include('connect.php');
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

if (isset($_GET['delete'])) {
    $sid = $_GET['delete'];
    $delete = true;
    echo "sid ".$sid;
    $sql = "DELETE FROM `subcategory` WHERE `sid` = '$sid'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $delete = true;
    } else {
        echo "Error deleting record: " . mysqli_error($conn) . mysqli_errno($conn);
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['sidEdit'])) {
        $sid = $_POST["sidEdit"];
        $cid = $_POST["cidEdit"];
        $sname = $_POST["snameEdit"];
        $status = $_POST["statusEdit"];
        // echo $_POST["cidEdit"] . " ---";

        $sql = "UPDATE `subcategory` SET `sname` = '$sname' , `status` = '$status' WHERE `subcategory`.`sid` = $sid";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $update = true;
        } else {
            echo "We could not update the record successfully";
        }
    } else {
        $cid = $_POST["cid"];
        $sname = $_POST["sname"];
        $status = $_POST["status"];

        $sql = "INSERT INTO `subcategory` (`cid`,`sname`, `status`) VALUES ('$cid', '$sname', '$status') ";
        $result = mysqli_query($conn, $sql);


        if ($result) {
            $insert = true;
        } else {
            echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn) . mysqli_errno($conn);
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


    <title>Add Sub-Category</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit this Sub-category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="addsubcategory.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="sidEdit" id="sidEdit">
                        <div class="form-group">
                            <label for="cid">Category</label>
                            <select class="form-control" id="cidEdit" name="cidEdit">
                                <option value="">select category</option>
                                <?php
                                $sql = "SELECT * FROM `category`";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['cid'] . "'>" . $row['cname'] . "</option>";
                                }
                                ?>
                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="title">Sub-Category Name</label>
                            <input type="text" class="form-control" id="snameEdit" name="snameEdit" aria-describedby="emailHelp" required>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" id="statusEdit" name="statusEdit">
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer d-block mr-auto">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="/crud/logo.svg" height="28px" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav> -->

    <?php
    if ($insert) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your sub-category has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
    }
    ?>
    <?php
    if ($delete) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your sub-category has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
    }
    ?>
    <?php
    if ($update) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your sub-category has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
    }
    ?>
    <div class="container my-4">
        <form action="adminindex.php">
            <button type="submit" class="btn btn-alert-danger" style="background-color : blue;  margin-left: 1100px;">Back To Form</button>
        </form>
    </div>
    <div class="container my-4">
        <center><h2>Add a Sub - Category</h2></center>
        <form action="addsubcategory.php" method="POST">
            <div class="form-group">
                <label for="cid">Category</label>
                <select class="form-control" id="cid" name="cid" required>
                    <option value="">select category</option>
                    <?php
                    $sql = "SELECT * FROM `category`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['cid'] . "'>" . $row['cname'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="sname">Subcategory Name</label>
                <input type="text" class="form-control" id="sname" name="sname" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Subcategory</button>
        </form>
    </div>


    <div class="container my-4">


        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">cid</th>
                    <th scope="col">sname</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                <?php
                // $sql = "SELECT * FROM `subcategory`";
                // $result = mysqli_query($conn, $sql);
                // $sid = 0;
                // while ($row = mysqli_fetch_assoc($result)) {
                //   $sid = $sid + 1;
                //   echo "<tr>
                //     <th scope='row'>" . $sid . "</th>
                //     <td>" . $row['cid'] . "</td>
                //     <td>" . $row['sname'] . "</td>
                //     <td>" . $row['status'] . "</td>
                //     <td> <button class='edit btn btn-sm btn-primary' id=" . $row['sid'] . ">Edit</button> <button class='delete btn btn-sm btn-primary' id=d" . $row['sid'] . ">Delete</button>  </td>
                //   </tr>";
                // }

                $sql = "SELECT category.*, subcategory.* FROM category
                        LEFT JOIN subcategory ON category.cid = subcategory.cid";
                $result = mysqli_query($conn, $sql);
                $cid = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $cid = $cid + 1;
                    echo "<tr>
                        <th scope='row'>" . $cid . "</th>
                        <td>" . $row['cname'] . "</td>
                        <td>" . $row['sname'] . "</td>
                        <td>" . $row['status'] . "</td>
                        <td>
                        <button class='edit btn btn-sm btn-primary' id=" . $row['sid'] . ">Edit</button>
                        <button class='delete btn btn-sm btn-primary' id=d" . $row['sid'] . ">Delete</button> 
                        </td>
                    </tr>";
                }
                ?>
                <!-- <td> <button class='edit btn btn-sm btn-primary' id=" . $row['cid'] . ">Edit</button> 
            <button class='delete btn btn-sm btn-primary' id=d" . $row['cid'] . ">Delete</button>  </td> -->
                <!-- <button class='delete btn btn-sm btn-primary' id='delete_" . $row['sid'] . "'>Delete</button> -->

            </tbody>
        </table>
    </div>
    <hr>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();

        });
    </script>
    <script>
        // edits = document.getElementsByClassName('edit');
        // Array.from(edits).forEach((element) => {
        //     element.addEventListener("click", (e) => {
        //         console.log("edit ");
        //         tr = e.target.parentNode.parentNode;
        //         cid = tr.getElementsByTagName("td")[0].innerText;
        //         sname = tr.getElementsByTagName("td")[1].innerText;
        //         status = tr.getElementsByTagName("td")[2].innerText;
        //         console.log(cid, sname, status);
        //         cidEdit.value = cid;
        //         snameEdit.value = sname;
        //         statusEdit.value = status;
        //         sidEdit.value = e.target.id;
        //         console.log(e.target.id)
        //         $('#editModal').modal('toggle');
        //     })
        // })
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit ");
                tr = e.target.parentNode.parentNode;
                cid = tr.getAttribute("data-cid");
                sname = tr.getElementsByTagName("td")[1].innerText;
                status = tr.getElementsByTagName("td")[2].innerText;
                console.log(cid, sname, status);

                document.getElementById("cidEdit").value = cid; 
                document.getElementById("snameEdit").value = sname;
                document.getElementById("statusEdit").value = status;
                document.getElementById("sidEdit").value = e.target.id;
                console.log(e.target.id)
                $('#editModal').modal('toggle');
            })
        })

        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit ");
                sid = e.target.id.substr(1);

                if (confirm("Are you sure you want to delete this note!")) {
                    console.log("yes");
                    window.location = `addsubcategory.php?delete=${sid}`;
                } else {
                    console.log("no");
                }
            })
        })
    </script>
</body>

</html>