<?php
    session_start();
    include 'config.php';

    if(isset($_POST['place_order'])){
        $f_name = $_POST["f_name"];
        $l_name = $_POST["l_name"];
        $country = $_POST["country"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $postal_code = $_POST["postal_code"];
        $phone = $_POST["phone"];
        $shipping_address = $_POST["shipping_address"];

        $user_id = $_SESSION['user_id'];
        $items = serialize($_SESSION["shopping_cart"]);

        $stmt = $con->prepare("INSERT INTO `cart`(`user_id`, `items`, `firstname`, `lastname`, `country`, `state`, `city`, `postalcode`, `phonenumber`, `shipping_address`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssss", $user_id, $items, $f_name, $l_name, $country, $state, $city, $postal_code, $phone, $shipping_address);
        if ($stmt->execute()) {
            echo "<script>alert('Order placed successfully.!!');</script>";

        }else{
            echo "<script>alert('Error occurred. Try again later!!');</script>";

        }
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
    <div class="shipping_info">
        <h4>Billing and Shipping Information</h4>
        <form method="post" action="checkout.php">
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