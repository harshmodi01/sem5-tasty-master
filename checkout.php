<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>
</head>
<body>
    <div class="container">
        <h2>Checkout</h2>
        <div class="cart">
            <h3>Your Shopping Cart</h3>
            <ul>
                <?php
                session_start();
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $item) {
                        echo '<li>' . $item['name'] . ' - $' . $item['price'] . '</li>';
                    }
                } else {
                    echo '<li>Your cart is empty</li>';
                }
                ?>
            </ul>
        </div>
        
        <div class="order-summary">
            <h3>Order Summary</h3>
            <p>Total Items: 
                <?php
                $totalItems = count($_SESSION['cart']);
                echo $totalItems;
                ?>
            </p>
            <p>Total Price: $
                <?php
                $totalPrice = 0;
                foreach ($_SESSION['cart'] as $item) {
                    $totalPrice += $item['price'];
                }
                echo $totalPrice;
                ?>
            </p>
        </div>
        
        <div class="checkout-form">
            <h3>Shipping Information</h3>
            <form method="post" action="process_order.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <input type="submit" value="Place Order">
            </form>
        </div>
    </div>
</body>
</html>
