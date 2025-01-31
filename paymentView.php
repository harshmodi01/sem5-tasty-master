<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
</head>

<body>
    <div class="container my-4">
        <form action="adminindex.php">
            <button type="submit" class="btn btn-alert-danger" style="background-color : blue;  margin-left: 970px;">Back To Form</button>
        </form>
    </div>
    <div class="container my-4">

    <div class="header">
            <h2>Payments</h2>
        </div>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }

            .header {
                text-align: center;
                background-color: #f0f0f0;
                padding: 20px 0;
                margin-bottom: 20px;
                font-weight: bold;
            }

            h2 {
                margin: 0;
                color: #333;
            }
        </style>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <!-- <th scope="col">Payment Id</th> -->
                    <th scope="col">Snack Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");
                $sql = "SELECT * FROM `orders`";
                $result = mysqli_query($conn, $sql);
                $cid = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $cid = $cid + 1;
                    echo "<tr>
                <th scope='row'>" . $cid . "</th>
                
                <td>" . $row['snackname'] . "</td>
                <td>" . $row['price'] . "</td>
                <td>" . $row['quantity'] . "</td>
                <td>" . $row['total'] . "</td>
                <td>" . $row['date'] . "</td>
                
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