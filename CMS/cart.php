<?php
    session_start();

    $total_price = 0;
    $total_item = 0;
    
    $output = '
    <div class="table-responsive cart_details" id="order-table">
        <table class="table table-bordered table-striped">
            <tr>
                <th width="10%">Product ID</th>
                <th width="40%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="20%">Price</th>
                <th width="15%">Total</th>
                <th width="5%">Action</th>
            </tr>

    ';
    if (!empty($_SESSION["shopping_cart"])) {
        foreach ($_SESSION["shopping_cart"] as $key => $value) {
            $product_id = $value["product_id"];
            $output .= '
            <tr>
                <td>'.$value["product_id"].'</td>
                <td>'.$value["product_name"].'</td>
                <td>'.$value["product_quantity"].'</td>
                <td align="right">$'.number_format($value["product_price"], 2).'</td>
                <td align="right">$'.number_format($value["product_quantity"] * $value["product_price"], 2).'</td>
                <td>
                    <form method="post" action="cart.php">
                        <input type="hidden" name="product_id" value="'.$value["product_id"].'"/>
                        <input type="submit" class="btn btn-danger" name="remove" value="Remove">   
                    </form>
                </td>
            </tr>
            ';

            $total_price = $total_price + ($value["product_quantity"] * $value["product_price"]);
            $total_item = $total_item + 1;
            # code...
        }
        $sub_total = $total_price;
        $tax = $sub_total * 0.04;
        $total = $sub_total + $tax;
        $output .= '
        <tr>
            <td colspan="3" align="right">Sub-Total</td>
            <td align="right">$'.number_format($sub_total, 2).'</td>
            
        </tr>
        <tr>
            <td colspan="3" align="right">Tax</td>
            <td align="right">$'.number_format($tax, 2).'</td>
            
        </tr>
        <tr>
            <td colspan="3" align="right">Total</td>
            <td align="right">$'.number_format($total, 2).'</td>
            
        </tr>
        ';
        # code...
    }else{
        $output .= '
        <tr>
            <td colspan="5" align="center">Your cart is empty</td>
        </tr>
        ';

    }
    $output .= '</table></div>';
    if (isset($_POST['remove'])) {
        $product_id = $_POST['product_id'];
        foreach ($_SESSION['shopping_cart'] as $key => $value) {
            if ($value['product_id'] == $product_id) {
                unset($_SESSION['shopping_cart'][$key]);
                
            }
        }
        header("Refresh:0");
    }

    if(isset($_POST['place_order'])){
        
        echo "<script>alert('Order placed successfully!!')</script>";
    }
    


?>
<!DOCTYPE html>
<html>

<head>
    <title>Rachel Brinkley Home Page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Style1.css?version=1">
    <link rel="shortcut icon" href="/images/Ducklogo.jpg" />
    <!--    
        Rachel Brinkley's Liberty University CSIS410 B01 web project
    -->
    <?php include "header.html"; ?>
    <?php include "menu.php"; ?>
    <style>
        
        
    </style>
</head>

<body>
    <div class="cart_details">
        <?php echo $output; ?>
    </div>
    <div class="shipping_info">
        <h4>Billing and Shipping Information</h4>
        <form method="post" action="cart.php">
            <label>First Name: </label>
            <input type="text" name="f_name" placeholder="First Name" required><br>
            <label>Last Name: </label>
            <input type="text" name="l_name" placeholder="Last Name" required><br>
            <label>Country: </label>
            <input type="text" name="country" placeholder="Country" required><br>
            <label>City: </label>
            <input type="text" name="city" placeholder="City" required><br>
            <label>State: </label>
            <input type="text" name="state" placeholder="State" required><br>
            <label>Postal Code: </label>
            <input type="text" name="postal_code" placeholder="Postal Code" required><br>
            <label>Phone Number: </label>
            <input type="text" name="phone" placeholder="Phone Number" required><br>
            <label>Shipping Address: </label>
            <input type="text" name="shipping_address" placeholder="Shipping Address" required><br>

            <center><input style="margin-top: 10px; padding: 10px; background: green;" type="submit" class="btn btn-primary" name="place_order" value="Place Order "></center>
            
        </form>
    </div>
   

</body>

<br>
<br>
<footer>
    <?php include "footer.php"; ?>
</footer>

</html>