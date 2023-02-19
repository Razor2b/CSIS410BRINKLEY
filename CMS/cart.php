<!DOCTYPE html>
<html>

<head>
    <title>Rachel Brinkley Home Page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Style1.css">
    <link rel="shortcut icon" href="/images/Ducklogo.jpg" />

    <!--    
        Rachel Brinkley's Liberty University CSIS410 B01 web project
    -->

    <?php include "header.html"; ?>
    <?php include "menu.php"; ?>
</head>

<body>
    <div style="padding:0 30px">
        <?php

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Check if the user has submitted an update form
        if (isset($_POST['update'])) {
            foreach ($_SESSION['cart'] as &$item) {
                $new_quantity = $_POST[$item['id']];
                if ($new_quantity == 0) {
                    unset($item); // Remove the item from the cart if the quantity is 0
                } else {
                    $item['quantity'] = $new_quantity;
                }
            }
        }

        // Display the contents of the cart
        echo '<h2>Shopping Cart</h2>';
        if (empty($_SESSION['cart'])) {
            echo '<p>Your shopping cart is empty.</p>';
        } else {
            foreach ($_SESSION['cart'] as $item) {
                echo '<p>' . $item['name'] . ' x ' . $item['quantity'] . ' = $' . number_format($item['price'] * $item['quantity'], 2) . '</p>';
                echo '<form action="cart.php" method="post">';
                echo '<label for="' . $item['id'] . '-quantity">Quantity:</label>';
                echo '<input type="number" id="' . $item['id'] . '-quantity" name="' . $item['id'] . '" min="0" value="' . $item['quantity'] . '">';
                echo '<input type="submit" name="update" value="Update">';
                echo '</form>';
                echo '<form action="cart.php" method="post">';
                echo '<input type="hidden" name="remove" value="' . $item['id'] . '">';
                echo '<input type="submit" value="Remove">';
                echo '</form>';
            }

            // Display the total price
            $total_price = array_sum(array_map(function ($item) {
                return $item['price'] * $item['quantity'];
            }, $_SESSION['cart']));
            $tax_rate = 0.08; // 8% tax rate
            $tax_amount = $total_price * $tax_rate;
            $grand_total = $total_price + $tax_amount;
            echo '<p>Total: $' . number_format($total_price, 2) . '</p>';
            echo '<p>Tax: $' . number_format($tax_amount, 2) . '</p>';
            echo '<p>Grand Total: $' . number_format($grand_total, 2) . '</p>';
        }

        // Check if the user has submitted a remove form
        if (isset($_POST['remove'])) {
            $item_id = $_POST['remove'];
            foreach ($_SESSION['cart'] as $key => $item) {
                if ($item['id'] == $item_id) {
                    unset($_SESSION['cart'][$key]); // Remove the item from the cart
                    break;
                }
            }
        }
        ?>

    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>


</html>