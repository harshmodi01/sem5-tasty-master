
<?php

include ('connect.php');

if (isset($_POST['payment_id']) && isset($_POST['amount']) && isset($_POST['name'])) {
    $payment_id = $_POST['payment_id'];
    $amount = $_POST['amount'];
    $name = $_POST['name'];
    echo "--" . $payment_id;
    echo "--" . $amount;
    echo "--" . $name;
    $query = "INSERT INTO payment (`name`, `amount`, `payment_id`, `status`) VALUES ('$name', '$amount', '$payment_id', 'Success')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Payment record successfully inserted into the database.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Missing POST data" . mysqli_error($conn);
}

echo "------------------------<br>";


?>


<?php

session_start();
if (isset($_POST['payment_id']) && isset($_POST['snackname']) && isset($_POST['price']) && isset($_POST['quantity'])) {
    // // Connect to the database
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "newproject";

    // $conn = mysqli_connect($servername, $username, $password, $database);

    // // Check if the connection was successful
    // if (!$conn) {
    //     die("Sorry we failed to connect: " . mysqli_connect_error());
    // }

    // $payment_id = $_POST['payment_id'];
    $snackname = $_POST['snackname'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    // $date = date("Y-m-d H:i:s"); // You can customize the date format as needed
    $total = $price * $quantity;

    // Insert the data into the "orders" table
    $insert_query = "INSERT INTO orders ( snackname, price, quantity,total) VALUES ( '$snackname', '$price', '$quantity','$total')";
    if (mysqli_query($conn, $insert_query)) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Incomplete data received.";
}
var_dump($_POST);

?>
