<!DOCTYPE html>
<html>

<head>
    <title>Feedbacks</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }

        h2 {
            background-color: #3498db;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        table,
        th,
        td {
            border: 1px solid #dddddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #e6e6e6;
        }
    </style> -->
</head>

<body>
    <div class="container my-4">
        <form action="adminindex.php">
            <button type="submit" class="btn btn-alert-danger" style="background-color : blue;  margin-left:980px;">Back To Form</button>
        </form>
    </div>
    <center><h2>Feedbacks</h2></center>
    <div class="container my-4">


        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name </th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");
                $sql = "SELECT name, email, message FROM contact";
                $result = mysqli_query($conn, $sql);
                $cid = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $cid = $cid + 1;
                    echo "<tr>
                <th scope='row'>" . $cid . "</th>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['message'] . "</td>
                
                
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
</body>

</html>












<?php
// Step 1: Create the database connection
// $db_host = 'localhost';
// $db_user = 'root';
// $db_password = '';
// $db_name = 'newproject';

// $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Step 2: Retrieve data from the database
// $sql = "SELECT name, email, message FROM contact";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // Step 3: Display the data in an HTML table
//     echo "<table>";
//     echo "<tr><th>Name</th><th>Email</th><th>Message</th></tr>";

//     while ($row = $result->fetch_assoc()) {
//         echo "<tr>";
//         //echo "<td>" . $row["id"] . "</td>";
//         echo "<td>" . $row["name"] . "</td>";
//         echo "<td>" . $row["email"] . "</td>";
//         echo "<td>" . $row["message"] . "</td>";
//         echo "</tr>";
//     }

//     echo "</table>";
// } else {
//     echo "No records found in the database.";
// }

// // Close the database connection
// $conn->close();
?>
</body>

</html>