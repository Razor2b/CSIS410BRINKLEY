<?php
    session_start();

    $total_price = 0;
    $total_item = 0;
    
    $output = '
    <div class="table-responsive cart_details" id="order-table">
        <table class="table table-bordered table-striped">
            <tr>
                <th width="35%">Product Name</th>
                <th width="20%">Quantity</th>
                <th width="20%">Price</th>
                <th width="15%">Total</th>
                <th width="10%">Action</th>
            </tr>

    ';
    if (!empty($_SESSION["shopping_cart"])) {
        foreach ($_SESSION["shopping_cart"] as $key => $value) {
            $product_id = $value["product_id"];
            $output .= '
            <tr>
                <td>'.$value["product_name"].'</td>
                <td>
                <div class="cart_quantity">
                    <form method="post" action="cart.php">
                        <input type="hidden" name="product_id" value="'.$value["product_id"].'"/>
                        <input type="submit" class="reduce" name="reduce" value="-">   
                    </form>
                    <label>'.$value["product_quantity"].'</label>
                
                    <form method="post" action="cart.php">
                        <input type="hidden" name="product_id" value="'.$value["product_id"].'"/>
                        <input type="submit" class="add" name="add" value="+">   
                    </form>
                </div>
                </td>
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

    if(isset($_POST['reduce'])){
        
        $product_id = $_POST['product_id'];
        foreach ($_SESSION['shopping_cart'] as $key => $value) {
            if ($_SESSION['shopping_cart'][$key]['product_id'] == $product_id) {
                if ($_SESSION['shopping_cart'][$key]['product_quantity'] > 1) {
                    $_SESSION['shopping_cart'][$key]['product_quantity'] = $_SESSION['shopping_cart'][$key]['product_quantity'] - 1;
                }   
            }  
        }
        header("Refresh:0");
    }
    if(isset($_POST['add'])){
        
        $product_id = $_POST['product_id'];
        foreach ($_SESSION['shopping_cart'] as $key => $value) {
            if ($_SESSION['shopping_cart'][$key]['product_id'] == $product_id) {
                $_SESSION['shopping_cart'][$key]['product_quantity'] = $_SESSION['shopping_cart'][$key]['product_quantity'] + 1; 
            }  
        }
        header("Refresh:0");
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
        
        #checkout-btn{
            background: green;
            text-decoration: none;
            color: white;
            padding: 10px;
            margin-top: 30px;
            margin-left: 30%;
        }
        .cart_quantity{
            display: flex;
        }
        .reduce{
            background: orange;
            border: none;
            width: 20px;
            font-size: 16px;
            margin-right: 10px;
        }
        .add{
            background: orange;
            border: none;
            width: 20px;
            font-size: 16px;
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="cart_details">
        <?php echo $output; ?>
        <h4><a id="checkout-btn" href="checkout.php">Checkout</a></h4>
    </div>
    
   

</body>

<br>
<br>
<footer>
    <?php include "footer.php"; ?>
</footer>

</html>