<?php
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
    $snackid = $_GET['delete'];
    $delete = true;
    $sql = "DELETE FROM `addsnack` WHERE `snackid` = $snackid";
    $result = mysqli_query($conn, $sql);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['snackidEdit'])) {
        // if (isset($_POST['categoryidEdit']) && isset($_POST['subcategoryidEdit'])){
        $snackid = $_POST["snackidEdit"];
        $categoryid = $_POST["categoryidEdit"];
        $subcategoryid = $_POST["subcategoryidEdit"];
        $snackname = $_POST["snacknameEdit"];
        $description = $_POST["descriptionEdit"];
        // $image = $_POST["imageEdit"];
        $price = $_POST["priceEdit"];
        $status = $_POST["statusEdit"];
        echo $snackid." -- "." - $categoryid"." -- $subcategoryid"."$snackname";



        $image = $_FILES['imageEdit']['name'];
        $targetDirectory = "uploads/"; 
        $targetFile = $targetDirectory . $image;

        $check = getimagesize($_FILES["imageEdit"]["tmp_name"]);
        if ($check !== false) {
            if (move_uploaded_file($_FILES["imageEdit"]["tmp_name"], $targetFile)) {
                // Image uploaded successfully
                // $insertSql = "INSERT INTO `addsnack` (`image`) VALUES ('$targetFile')";
                // mysqli_query($conn,$insertSql);
                // SQL query to be executed for updating
                $sql = "UPDATE `addsnack` SET `categoryid` = '$categoryid', `subcategoryid` = '$subcategoryid', 
                `snackname` = '$snackname', `description` = '$description', `image`='$targetFile', `price` = '$price', 
                `status` = '$status' WHERE `snackid` = $snackid";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $insert = true;
                    echo "Inserted";
                } else {
                    $insert = false;
                    echo "The record was not inserted successfully because of this error: " . mysqli_error($conn);
                }
            } else {
                echo "Image upload failed. Please try again.";
            }
        } else {
            echo "File is not an image.";
        }

        if ($result) {
            $update = true;
        } else {
            echo "We could not update the record successfully";
        }
    } else {
        if (isset($_POST['submit'])) {
            $categoryid = $_POST["categoryid"];
            $subcategoryid = $_POST["subcategoryid"];
            $snackname = $_POST["snackname"];
            $description = $_POST["description"];
            // $image = $_POST['image'];
            $price = $_POST["price"];
            $status = $_POST["status"];


            $image = $_FILES['image']['name'];
            $targetDirectory = "uploads/"; // Folder where you want to store the image
            $targetFile = $targetDirectory . $image;

            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                    $sql = "INSERT INTO `addsnack` (`categoryid`, `subcategoryid`, `snackname`, `description`, `image`, `price`, `status`)
                        VALUES ('$categoryid', '$subcategoryid', '$snackname', '$description', '$targetFile', '$price', '$status')";

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        $insert = true;
                        echo "Inserted";
                    } else {
                        $insert = false;
                        echo "The record was not inserted successfully because of this error: " . mysqli_error($conn);
                    }
                } else {
                    echo "Image upload failed. Please try again.";
                }
            } else {
                echo "File is not an image.";
            }
        }
    }
}


//             // SQL query to be executed for inserting
//             $sql = "INSERT INTO `addsnack` (`categoryid`, `subcategoryid`, `snackname`, `description`,`image`, `price`, `status`)
//                 VALUES ('$categoryid', '$subcategoryid', '$snackname', '$description','$image' , '$price', '$status')";
//             $result = mysqli_query($conn, $sql);
//             echo mysqli_error($conn);


//             if ($result) {
//                 $insert = true;
//                 echo "Inserted";
//             } else {
//                 $insert = false;
//                 echo "The record was not inserted successfully because of this error: " . mysqli_error($conn);
//             }
//         }
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
   

    <title>Add Snack</title>
    <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>  
     <script src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script> -->

</head>

<body>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit this Snack</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="addsnack.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="snackidEdit" id="snackidEdit">


                        <!-- <div class="form-group">
                            <label for="title">Category Name</label>
                            <select class="form-control" id="categoryidEdit" name="categoryidEdit">
                                <option value="">Select category</option>
                                <?php
                                $sql = "SELECT * FROM `category`";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['cname'] . "'>" . $row['cname'] . "</option>";
                                }
                                ?>
                            </select>
                        </div> -->

                        <div class="form-group">
                            <label for="title">Category Name</label>
                            <select class="form-control" id="categoryidEdit" name="categoryidEdit">
                                <option value="">Select category</option>
                                <?php
                                $sql = "SELECT * FROM `category`";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $categoryId = $row['cid'];
                                    $categoryName = $row['cname'];
                                    $selected = ($_POST['categoryidEdit'] == $categoryId) ? 'selected' : '';

                                    echo "<option value='$categoryId' $selected>$categoryName</option>";
                                }
                                ?>
                            </select>
                        </div>





                        <div class="form-group">
                            <label for="title">Subcategory Name</label>
                            <!-- <input type="text" class="form-control" id="subcategoryidEdit" name="subcategoryidEdit" aria-describedby="emailHelp"> -->
                            <select class="form-control" id="subcategoryidEdit" name="subcategoryidEdit">
                                <option value="">select subcategory</option>
                                <?php


                                $sql = "SELECT * FROM `subcategory` ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['sid'] . "'>" . $row['sname'] . "</option>";
                                }

                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Snack Name</label>
                            <input type="text" class="form-control" id="snacknameEdit" name="snacknameEdit" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="title">Description</label>
                            <input type="text" class="form-control" id="descriptionEdit" name="descriptionEdit" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="title">Image</label>
                            <input type="file" class="form-control" id="imageEdit" name="imageEdit" aria-describedby="emailHelp">
                        </div>
                        <!-- <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                        </div> -->

                        <div class="form-group">
                            <label for="title">Price</label>
                            <input type="text" class="form-control" id="priceEdit" name="priceEdit" aria-describedby="emailHelp">
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

    <?php
    if ($insert) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your Snack has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
    }
    ?>
    <?php
    if ($delete) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your Snack has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
    }
    ?>
    <?php
    if ($update) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your Snack has been updated successfully
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
        <center>
            <h2>Add a Snack</h2>
        </center>
        <form action="addsnack.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="categoryid">Category</label>
                <select class="form-control" id="categoryid" name="categoryid">
                    <option value="">Select Category</option>
                    <?php
                    $categoryQuery = "SELECT * FROM category";
                    $categoryResult = mysqli_query($conn, $categoryQuery);

                    while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
                        echo '<option value="' . $categoryRow['cid'] . '">' . $categoryRow['cname'] . '</option>';
                    }
                    ?>
                </select>
            </div>


            <div class="form-group">
                <label for="subcategoryid">Subcategory</label>
                <select class="form-control" id="subcategoryid" name="subcategoryid">
                    <option value="">Select Subcategory</option>

                </select>

            </div>
            



            <div class="form-group">
                <label for="snackname">Snack Name</label>
                <input type="text" class="form-control" id="snackname" name="snackname" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="Active">Active</option>
                    <option value="Deactive">Deactive</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add Snack</button>
        </form>
    </div>

    


    <div class="container mt-4">
        <center>
            <h2>Snacks List</h2>
        </center>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>Snack ID</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Snack Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $snackQuery = "SELECT a.snackid, c.cname, s.sname, a.snackname, a.description, a.image, a.price, a.status FROM addsnack a
                               INNER JOIN category c ON a.categoryid = c.cid
                               INNER JOIN subcategory s ON a.subcategoryid = s.sid";
                $snackResult = mysqli_query($conn, $snackQuery);
                $snackid = 0;



                while ($snackRow = mysqli_fetch_assoc($snackResult)) {
                    $snackid = $snackid + 1;
                    echo "<tr>";
                    echo "<td>{$snackid}</td>";
                    echo "<td>{$snackRow['cname']}</td>";
                    echo "<td>{$snackRow['sname']}</td>";
                    echo "<td>{$snackRow['snackname']}</td>";
                    echo "<td>{$snackRow['description']}</td>";
                    echo "<td>{$snackRow['image']}</td>";
                    echo "<td>{$snackRow['price']}</td>";
                    echo "<td>{$snackRow['status']}</td>";
                    // echo '<td><a href="addsnack.php?delete=' . $snackRow['snackid'] . '" class="btn btn-danger btn-sm">Delete</a></td>';
                    // echo '<td><button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editModal' . $snackRow['snackid'] . '">Edit</button></td>';
                    echo "<td>
                    <button class='edit btn btn-sm btn-primary' id=" . $snackRow['snackid'] . ">Edit</button>
                    <button class='delete btn btn-sm btn-primary' id=d" . $snackRow['snackid'] . ">Delete</button>  </td>
                    </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>



    <hr>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <!-- <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    <script>
        jQuery(document).ready(function() {
            // $('#myTable').DataTable();

            $('#categoryid').change(function() {
                        var categoryId = $(this).val();
                        console.log(categoryId);
                        $.ajax({
                            url: 'get_subcategories.php',
                            method: 'POST',
                            data: {
                                categoryId: categoryId
                            },
                            success: function(response) {
                                $('#subcategoryid').html(response);
                            }
                        });
                    });
        });

    </script>

    
    <script>
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit ");
                tr = e.target.parentNode.parentNode;
                categoryid = tr.getElementsByTagName("td")[1].innerText;
                subcategoryid = tr.getElementsByTagName("td")[2].innerText;
                snackname = tr.getElementsByTagName("td")[3].innerText;
                description = tr.getElementsByTagName("td")[4].innerText;
                image = tr.getElementsByTagName("td")[5].innerText;
                price = tr.getElementsByTagName("td")[6].innerText;
                status = tr.getElementsByTagName("td")[7].innerText;


                console.log(categoryid, subcategoryid, snackname, description, image, price, status);
                categoryidEdit.value = categoryid;
                subcategoryidEdit.value = subcategoryid;
                snacknameEdit.value = snackname;
                descriptionEdit.value = description;
                // imageEdit.value = image;
                document.getElementById("imageEdit").src = image;
                priceEdit.value = price;
                statusEdit.value = status;
                snackidEdit.value = e.target.id;
                console.log(e.target.id);

                $('#editModal').modal('toggle');
            })
        })

        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit ");
                snackid = e.target.id.substr(1);

                if (confirm("Are you sure you want to delete this note!")) {
                    console.log("yes");
                    window.location = `addsnack.php?delete=${snackid}`;
                } else {
                    console.log("no");
                }
            })
        })
    </script>


</body>

</html>