<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$database = "newproject";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

if (isset($_GET["action"]) && $_GET["action"] == "delete") {
    $procudName = $_GET["name"];

    $delete = "DELETE FROM cart WHERE snackname = '$procudName'";
    mysqli_query($conn, $delete);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add To Cart</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            color: #fff;
            border: 1px solid #333;
        }

        th {
            background-color: #333;
        }

        tr:nth-child(even) {
            background-color: #222;
        }

        tr:nth-child(odd) {
            background-color: #111;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }

        .button1 {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

</head>

<body>
    <style>
        .btn-back-to-form {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-left: 1300px;
            margin-top: 20px;
            
        }

        .btn-back-to-form:hover {
            background-color: #007bff;
        }
    </style>
    <div class="container my-4">
        <?php if (isset($_SESSION['uname'])) {
            $username = $_SESSION['uname'];
            // echo $username;
        }
        ?>
        <form action="main.php">
            <button type="submit" class="btn btn-back-to-form">Back To Form</button>
        </form>
    </div>

    <table id="myTable">
        <tr>
            <th>Snack Image</th>
            <th>Snack Name</th>
            <th>Snack Price</th>
            <th>Snack Quantity</th>
            <th>Total Price</th>
            <th>Remove Item</th>
        </tr>
        <?php
        if (isset($_SESSION['uname'])) {
            $username = $_SESSION['uname'];
            $query = "SELECT * FROM cart WHERE uname = '$username' ORDER BY id ASC";
            $result = mysqli_query($conn, $query);
            $total = 0;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
        ?>
                    <tr data-rowid="<?php echo $row['id']; ?>">
                        <td><img src="<?php echo $row['image']; ?>" alt="image" class="logo" style="height:100px; weight:150px;"></td>
                        <td><?php echo $row['snackname']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td>
                            <button class="quantity-btn" data-action="decrease" data-rowid="<?php echo $row['id']; ?>">-</button>
                            <span class="quantity" data-rowid="<?php echo $row['id']; ?>"><?php echo $row['quantity']; ?></span>
                            <button class="quantity-btn" data-action="increase" data-rowid="<?php echo $row['id']; ?>">+</button>
                        </td>
                        <td class="item-total" data-rowid="<?php echo $row['id']; ?>"><?php echo number_format($row['quantity'] * $row['price'], 2); ?></td>
                        <td><a href="add_to_cart.php?action=delete&name=<?php echo $row['snackname']; ?>"><span>Remove Item</span></a></td>
            <?php
                    $total = $total + ($row['quantity'] * $row['price']);
                }
            }
        }
            ?>


                    </tr>
                    <tr>
                        <td></td>
                        <!-- <td></td> -->
                        <!-- <td></td> -->
                        <td>Total</td>
                        <td>
                            <!-- <?php echo number_format($total, 2); ?> -->
                        <td id="totalDisplay"><?php echo number_format($total, 2); ?></td>

                        </td>
                        <!-- <td> -->
                        <!-- <div class="button1" onclick="pay_now()">Pay Now</div> -->
                        <!-- </td> -->
                    </tr>
    </table>

    <div class="from-group">

        <!-- <form action="#" method="post"> -->
        <input type="hidden" placeholder="Payment ID " id="payment_id_lbl_p" readonly name="payment_id" style="cursor: not-allowed;background-color:#efefef;color: #000000;">
        <?php
        include('connect.php');

        if (isset($_SESSION['uname'])) {
            $username = $_SESSION['uname'];

            $name = ''; 
            $qry = "SELECT uname FROM users WHERE uname = '" . $_SESSION['uname'] . "'";
            $result = mysqli_query($conn, $qry);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $name = $row['uname'];
            }

            echo '<input type="hidden" placeholder="' . $name . '" id="name"  name="username" value="' . $name . '" readonly style="cursor: not-allowed;background-color:#efefef;color: #000000;">';

        ?>

            <!-- <button class="btn-pmt" type="submit" id="paymentButton_p">Submit and Proceed </button> -->

            <input type="hidden" value='<?php echo $total; ?>' placeholder="Pay Amount.." id="pay-value" name="pay-value" disabled style="cursor: not-allowed;background-color:#efefef;color: #000000;">
        <?php } else {
            echo "<script>alert('Not Logged In');  location.href = 'main.php';</script>";
        } ?>
        <style>
            .button1 {
                background-color: #007BFF;
                color: #fff;
                padding: 10px 20px;
                font-size: 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            .button1:hover {
                background-color: #0056b3;
            }
        </style>
        <center>
            <div class="button1" onclick="pay_now()">Pay Now</div>
        </center>



        <!-- </form> -->


    </div>




    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>




    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->


    <script>
        $(document).ready(function() {
            $('.quantity-btn').on('click', function() {
                var action = $(this).data('action');
                var rowId = $(this).data('rowid');
                var quantityElement = $('.quantity[data-rowid="' + rowId + '"]');
                var itemTotalElement = $('.item-total[data-rowid="' + rowId + '"]');

                var currentQuantity = parseInt(quantityElement.text());

                if (action === 'increase') {
                    currentQuantity++;
                } else if (action === 'decrease' && currentQuantity > 1) {
                    currentQuantity--;
                }

                quantityElement.text(currentQuantity);

                var price = parseFloat($('.quantity-btn[data-rowid="' + rowId + '"]').closest('tr').find('td:eq(2)').text());
                var itemTotal = currentQuantity * price;
                itemTotalElement.text(itemTotal.toFixed(2));

                updateTotal();
            });

            function updateTotal() {
                var total = 0;

                $('#myTable tbody tr').each(function() {
                    var rowId = $(this).data('rowid');
                    var quantity = parseInt($('.quantity[data-rowid="' + rowId + '"]').text());
                    var price = parseFloat($('.quantity-btn[data-rowid="' + rowId + '"]').closest('tr').find('td:eq(2)').text());

                    if (!isNaN(quantity) && !isNaN(price)) {
                        total += quantity * price;
                    }
                });

                $('#totalDisplay').text(total.toFixed(2));
                $('#pay-value').val(total.toFixed(2));
            }

            window.pay_now = function() {
                var amtWithSuffix = $('#pay-value').val();
                var amt = parseFloat(amtWithSuffix.replace(/[^0-9.]/g, ''));

                var name = $("#name").val();
                var options = {
                    "key": "rzp_test_Mh332dFAGXtlgm",
                    "amount": amt * 100,
                    "currency": "INR",
                    "name": name,
                    "description": "LOCHO Payment",
                    "image": "jbl.jpg",
                    "prefill": {
                        "email": "gaurav.kumar@example.com",
                        "contact": "+919900000000",
                    },
                    "handler": function(response) {
                        console.log(response.razorpay_payment_id);
                        alert('Payment successful');

                        var payment_id = response.razorpay_payment_id;

                        // var snackname = $("#myTable").find("td:eq(1)").text(); // Assuming the table has the id "myTable"
                        // var price = $("#myTable").find("td:eq(2)").text(); // Assuming the table has the id "myTable"
                        // var quantity = $("#myTable").find("td:eq(3)").text(); // Assuming the table has the id "myTable"
                        $('#myTable tbody tr').each(function() {
                            var rowId = $(this).data('rowid');
                            var quantity = parseInt($(this).find('td:eq(3) .quantity').text()); // Assuming quantity is in the fourth cell (index 3)

                            if (quantity > 0) {
                                var snackname = $(this).find('td:eq(1)').text(); // Assuming snackname is in the second cell (index 1)
                                var price = parseFloat($(this).find('td:eq(2)').text()); // Assuming price is in the third cell (index 2)

                                jQuery.ajax({
                                    type: 'POST',
                                    url: 'payment.php',
                                    data: {
                                        payment_id: response.razorpay_payment_id,
                                        amount: amt,
                                        name: name,
                                        snackname: snackname,
                                        price: price,
                                        quantity: quantity
                                    },
                                    success: function(result) {
                                        window.location.href = "main.php";
                                    },
                                    error: function(xhr, status, error) {
                                        console.log('Error:', status, error);
                                    }
                                });
                            }
                        });
                    }

                };

                var rzp1 = new Razorpay(options);
                rzp1.open();
            };
        });
    </script>



    <!-- <script>
        $(document).ready(function() {
            // Function to handle quantity button clicks
            $('.quantity-btn').on('click', function() {
                // Get the current quantity
                var currentQuantity = parseInt($(this).siblings('.quantity').text());

                // Get the action (increase or decrease)
                var action = $(this).data('action');

                // Update the quantity based on the action
                if (action === 'increase') {
                    currentQuantity++;
                } else if (action === 'decrease' && currentQuantity > 1) {
                    currentQuantity--;
                }

                // Update the displayed quantity
                $(this).siblings('.quantity').text(currentQuantity);

                // Update the total
                updateTotal();
            });

            // Function to update the total
            function updateTotal() {
                var total = 0;

                // Iterate through each row in the table
                $('#myTable tbody tr').each(function() {
                    var quantity = parseInt($(this).find('td:eq(3) .quantity').text()); // Correct index for quantity
                    var price = parseFloat($(this).find('td:eq(2)').text()); // Correct index for price
                    console.log(price);
                    console.log(quantity);

                    if (!isNaN(quantity) && !isNaN(price)) {
                        total += quantity * price;
                    }
                    console.log(total);
                });

                // Update the total in the last row
                $('#totalDisplay').text(total.toFixed(2));
            }

            $('#payNowButton').on('click', function() {
                // Trigger the total update before processing the payment
                updateTotal();

                // Your existing code for payment logic
                window.pay_now();
            });
        });
    </script> -->
    <!-- <script>
        $(document).ready(function() {
            window.pay_now = function() {
                // alert(1111);
                // Get the text content of the element with ID "total"
                var amtWithSuffix = $('#pay-value').val();
                var amt = parseFloat(amtWithSuffix.replace(/[^0-9.]/g, '')); // Extract the numeric value
                console.log(amt);

                var name = $("#name").val();
                var options = {
                    "key": "rzp_test_Mh332dFAGXtlgm",
                    "amount": amt * 100, // Convert the amount to the smallest currency unit
                    "currency": "INR",
                    "name": name,
                    "description": "LOCHO Payment",
                    "image": "jbl.jpg",
                    "prefill": {
                        "email": "gaurav.kumar@example.com",
                        "contact": "+919900000000", // Make sure to include the plus sign for the contact number
                    },
                    "handler": function(response) {
                        console.log(response.razorpay_payment_id);
                        alert('Payment successful');
                        // $('#payment_id_lbl_p').val(response.razorpay_payment_id);
                        // window.location.href = 'payment.php';

                        // if (response.razorpay_payment_id) {

                        //     $('#paynow_p').hide();
                        //     $('#payment_id_lbl_p').val(response.razorpay_payment_id);
                        //     $('#paymentButton_p').show();

                        // }

                        // var clickedRow = $(this).closest("tr");

                        // var snackname = clickedRow.find("td:eq(2)").text(); // Assuming snackname is in the second cell (index 1)
                        // var price = parseFloat(clickedRow.find("td:eq(4)").text()); // Assuming price is in the third cell (index 2)
                        // var quantity = parseInt(clickedRow.find("td:eq(5)").text()); // Assuming quantity is in the fourth cell (index 3)


                        var snackname = $("#myTable").find("td:eq(1)").text(); // Assuming the table has the id "myTable"
                        var price = $("#myTable").find("td:eq(2)").text(); // Assuming the table has the id "myTable"
                        var quantity = $("#myTable").find("td:eq(3)").text(); // Assuming the table has the id "myTable"


                        // Send the payment ID to the server using AJAX
                        jQuery.ajax({
                            type: 'POST',
                            url: 'payment.php',
                            data: {
                                payment_id: response.razorpay_payment_id,
                                amount: amt,
                                name: name,
                                snackname: snackname,
                                price: price,
                                quantity: quantity
                            },

                            success: function(result) {
                                window.location.href = "main.php";
                            },
                            // success: function(data) {
                            //     console.log('Success:', data);
                            // }
                            // error: function(xhr, status, error) {
                            //     console.log('Error:', status, error);
                            // }
                        });
                        console.log(payment_id);
                        console.log(snackname);
                        console.log(price);
                        console.log(quantity);


                    }
                };

                var rzp1 = new Razorpay(options);
                rzp1.open();
            };
        });
    </script> -->
    <input type="hidden" name="snackname" value="<?php echo $_POST['snackname']; ?>">
    <input type="hidden" name="price" value="<?php echo $_POST['price']; ?>">
    <input type="hidden" name="quantity" value="<?php echo $_POST['quantity']; ?>">

</body>

</html>