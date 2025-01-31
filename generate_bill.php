<?php
require('fpdf/fpdf.php'); 

session_start(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = $_POST['order_id'];

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont('Arial', 'B', 16);

    $pdf->Cell(190, 10, 'Order Bill Report', 0, 1, 'C');
    $pdf->Ln(10); 

    $pdf->SetFont('Arial', '', 12);

    $pdf->SetTextColor(0, 0, 0);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newproject";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM orders WHERE id = '$order_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $pdf->SetFont('Arial', 'U', 12);
        $pdf->Cell(190, 10, 'Order and User Details:', 0, 1);
        $pdf->SetFont('Arial', '', 12);

        $pdf->Cell(40, 10, 'Description', 1);
        $pdf->Cell(50, 10, 'Date', 1); 
        $pdf->Cell(30, 10, 'Quantity', 1);
        $pdf->Cell(30, 10, 'Price', 1);
        $pdf->Cell(30, 10, 'Total', 1);
        $pdf->Ln();

        $pdf->Cell(40, 10, $row['snackname'], 1);
        $pdf->Cell(50, 10, $row['date'], 1); 
        $pdf->Cell(30, 10, $row['quantity'], 1);
        $pdf->Cell(30, 10, $row['price'], 1);
        $pdf->Cell(30, 10, $row['total'], 1);
        $pdf->Ln();

        if (isset($_SESSION['uname'])) {
            $pdf->Cell(190, 10, 'Username: ' . $_SESSION['uname'], 1);
            $pdf->Ln();
        }


        // Output the PDF
        $pdf->Output();
    } else {
        echo "Order not found.";
    }
}
?>
