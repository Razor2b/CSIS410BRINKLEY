<?php
session_start();
include 'config.php';

$query  = "SELECT * FROM products";

$output = '';
$statement = $db->prepare($query);
header('Content-Type: text/html; charset=utf-8');
if ($statement->execute()) {
    $result = $statement->fetchAll();
    foreach ($result as $value) {
        $output .= '
                <div class="product_div">
                    <div class="productimage"><img class="productimage" src="images/' . $value["image"] . '" alt="' . $value["name"] . '"></div>
                    <h4>' . $value["name"] . ' is priced at $' . number_format($value["price"], 2) . ' per unit.</h4>
                    <p>' . $value["description"] . '</p>
                    <form action="Products.php" method="post">
                        <label>Quantity:</label>
                        <input type="number" class="quantity" name="quantity" min="1" value="1">
                        <input type="hidden" name="id" value="' . $value["id"] . '">
                        <input type="hidden" name="name" value="' . $value["name"] . '">
                        <input type="hidden" name="price" value="' . $value["price"] . '">
                        <input type="submit" class="add_to_cart" name="add_to_cart" value="Add to Cart">
                    </form>
                    
                </div>
            ';
    }
}

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    // $quantity = 1;
    if (isset($_SESSION["shopping_cart"])) {
        $is_available = 0;
        foreach ($_SESSION['shopping_cart'] as $key => $value) {
            if ($_SESSION['shopping_cart'][$key]['product_id'] == $product_id) {
                $is_available++;
                $_SESSION['shopping_cart'][$key]['product_quantity'] = $_SESSION['shopping_cart'][$key]['product_quantity'] + $quantity;


                echo "<script>alert('Quantity updated to cart.')</script>";
            }


            # code...
        }
        if ($is_available == 0) {
            $item_array = array(
                'product_id' => $product_id,
                'product_quantity' => $quantity,
                'product_name' => $name,
                'product_price' => $price
            );
            $_SESSION["shopping_cart"][] = $item_array;
            echo "<script>alert('Product added to cart.')</script>";
            # code...
        }
        # code...
    } else {
        $item_array = array(
            'product_id' => $product_id,
            'product_quantity' => $quantity,
            'product_name' => $name,
            'product_price' => $price
        );
        $_SESSION["shopping_cart"][] = $item_array;
        echo "<script>alert('Product added to cart.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Style1.css?version=1">
    <link rel="shortcut icon" href="/images/Ducklogo.jpg" />
    <!--    
        Rachel Brinkley's Liberty University CSIS410 B01 web project
    -->
    <?php include "header.html"; ?>
    <?php include "menu.php"; ?>
</head>

<body>
    <div style="padding:0 30px" class="main_div">
        <?php echo $output; ?>

        <br>
        <br>
        <h4>For more information about the quantitly or shipping for large orders ask one of our sales rep.</h4>
        <h4>They can answer all your questions.</h4>
    </div>

</body>

<br>
<br>
<a href="#header" style="text-align: center;">Back to the top</a>
<footer>
    <?php include "footer.php"; ?>
</footer>

</html>