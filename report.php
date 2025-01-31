<!DOCTYPE html>
<html>

<head>
    <title>Bill Report Generator</title>
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <style>
        .btn-back {
            background-color: blue;
            color: white;
            margin-left: 300px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-back:hover {
            background-color: darkblue;
        }
    </style>

    <div class="container my-4">
        <form action="adminindex.php">
            <button type="submit" class="btn btn-back">Back To Form</button>
        </form>
    </div>

    <div class="container">
        <h1>Generate Bill Report</h1>
        <form action="generate_bill.php" method="post">
            <label for="order_id">Select an Order ID:</label>
            <select class="form-control" id="order_id" name="order_id" required>
                <option value="">Select ID</option>
                <?php
                include("connect.php"); // Make sure you have a valid "connect.php" file
                $sql = "SELECT * FROM `orders`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
                }
                ?>
            </select>
            <input type="submit" value="Generate Bill Report">
        </form>
    </div>
</body>

</html>