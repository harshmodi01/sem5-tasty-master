<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "newproject";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

if (isset($_POST['categoryId'])) {
    $categoryId = $_POST['categoryId'];

    $sql = "SELECT * FROM subcategory WHERE cid = $categoryId";
    $result = mysqli_query($conn, $sql);

    $options = '<option value="">Select Subcategory</option>';

    while ($row = mysqli_fetch_assoc($result)) {
        $options .= '<option value="' . $row['sid'] . '">' . $row['sname'] . '</option>';
    }

    echo $options;
}
else{
    echo "ds";
}
?>
