<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>

<body>
    <div class="container my-4">


        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Payment Id</th>
                    <th scope="col">Snack Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");
                
                while ($row = mysqli_fetch_assoc($result)) {
                    $query = "INSERT INTO orders(payment_id) VALUES('".$row['payment_id']."')";
                    $result = mysqli_query($conn, $query);
                }
                ?>


            </tbody>
        </table>
    </div>
</body>

</html>