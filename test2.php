<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... Your existing head content ... -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style>
        <!-- ... Your existing styles ... -->
    </style>
</head>

<body>

    <div class="container my-4">
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
            $productName = $_GET["name"];
            $delete = "DELETE FROM cart WHERE snackname = '$productName'";
            mysqli_query($conn, $delete);
        }

        if (isset($_SESSION['uname'])) {
            $username = $_SESSION['uname'];
            echo $username;
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
        <tr>
            <td></td>
            <td>Total</td>
            <td id="totalDisplay"><?php echo number_format($total, 2); ?></td>
            <td></td>
        </tr>
    </table>

    <div class="from-group">
        <input type="hidden" placeholder="Payment ID " id="payment_id_lbl_p" readonly name="payment_id"
            style="cursor: not-allowed;background-color:#efefef;color: #000000;">
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
        <input type="hidden" value='<?php echo $total; ?>' placeholder="Pay Amount.." id="pay
        <input type="hidden" value='<?php echo $total; ?>' placeholder="Pay Amount.." id="pay-value" name="pay-value" disabled style="cursor: not-allowed;background-color:#efefef;color: #000000;">
        <?php } else {
            echo "<script>alert('Not Logged In');  location.href = 'menu.php';</script>";
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
    </div>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // Function to handle quantity button clicks
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

                // Update the total for the item
                var price = parseFloat($('.quantity-btn[data-rowid="' + rowId + '"]').closest('tr').find('td:eq(2)').text());
                var itemTotal = currentQuantity * price;
                itemTotalElement.text(itemTotal.toFixed(2));

                // Update the total for all items
                updateTotal();
            });

            // Function to update the total for all items
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

            // Function to handle Pay Now button click
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

                        // Your AJAX call to the server to update the payment status
                        var payment_id = response.razorpay_payment_id;

                        // Example AJAX call
                        $.ajax({
                            type: 'POST',
                            url: 'payment.php',
                            data: {
                                payment_id: payment_id,
                                amount: amt,
                                name: name,
                                // Add other required parameters
                            },
                            success: function(result) {
                                window.location.href = "main.php";
                            },
                            error: function(xhr, status, error) {
                                console.log('Error:', status, error);
                            }
                        });
                    }
                };

                var rzp1 = new Razorpay(options);
                rzp1.open();
            };
        });
    </script>
</body>

</html>


