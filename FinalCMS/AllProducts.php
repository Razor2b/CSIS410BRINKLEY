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
            $delete_form = '';
            if ($_SESSION['access_level'] == "admin") {
                $delete_form = '<form action="AllProducts.php" method="post">
                        <input type="hidden" name="id" value="'.$value["id"].'">
                        <input type="submit" class="delete" name="delete" value="Delete">
                    </form>';
            }
            $output .= '
                <div class="product_div">
                    <div class="productimage"><img class="productimage" src="images/'.$value["image"].'" alt="'.$value["name"].'"></div>
                    <h4>'.$value["name"].' is priced at $'.number_format($value["price"], 2).' per unit.</h4>
                    <p>'.$value["description"].'</p>
                    <form action="AllProducts.php" method="post">
                        <input type="hidden" name="id" value="'.$value["id"].'">
                        <input type="hidden" name="name" value="'.$value["name"].'">
                        <input type="hidden" name="price" value="'.$value["price"].'">
                        <input type="hidden" name="description" value="'.$value["description"].'">
                        <input type="submit" class="add_to_cart" name="update" value="Update">
                    </form>
                    '.$delete_form.'
                    
                </div>
            ';
                    
        }
    }

if (isset($_POST['update'])) {
    $_SESSION['update_id'] = $_POST['id'];
    $_SESSION['update_name'] = $_POST['name'];
    $_SESSION['update_price'] = $_POST['price'];
    $_SESSION['update_description'] = $_POST['description'];
    header("Location: UpdateProduct.php");
   
}
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $query  = "
    DELETE FROM products WHERE id = ".$id."
    ";

    $delete_stmt = $con->prepare($query);

    if ($delete_stmt->execute()) {
        echo "<script>alert('Product deleted successfully')</script>";
        echo "<meta http-equiv='refresh' content='0'>";   
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
    <style>
        .delete{
            background: red;
            margin-top: 10px;
            color: white;
            padding: 10px;
        }
        
    </style>
</head>

<body>
    <div style="padding:0 30px" class="main_div">
        <?php echo $output; ?>
    </div>

</body>

<br>
<br>
<h4 style="text-align: center;">For more information about the quantitly or shipping for large orders ask one of our sales rep.
    <br>They can answer all your questions.
    <br><a href="#header">Back to the top</a>
</h4>
<footer>
    <?php include "footer.php"; ?>
</footer>

</html>