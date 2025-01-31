<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="container my-4">
        <form action="adminindex.php">
            <button type="submit" class="btn btn-alert-danger" style="background-color: blue;  margin-left: 1100px;">Back To Form</button>
        </form>
    </div>

    <div class="container my-4">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Gender</th>
                    <th scope="col">City</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");

                $sql = "SELECT * FROM deliveryboyregister";
                $result = mysqli_query($conn, $sql);
                $cid = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $cid = $cid + 1;
                    echo "<tr>
                        <th scope='row'>" . $cid . "</th>
                        <td>" . $row['fname'] . "</td>
                        <td>" . $row['mobileno'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['dateofbirth'] . "</td>
                        <td>" . $row['gender'] . "</td>
                        <td>" . $row['city'] . "</td>
                        <td>" . $row['address'] . "</td>
                        <td><button class='btn btn-danger' onclick='deleteRecord(this)'>Delete</button></td>
                    </tr>";
                }
                ?>
                <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#myTable').DataTable();
                    });

                    function deleteRecord(button) {
                        if (confirm("Are you sure you want to delete this record?")) {
                            var row = $(button).closest('tr');
                            row.remove();
                        }
                    }
                </script>
            </tbody>
        </table>
    </div>
</body>

</html>