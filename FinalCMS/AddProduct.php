<?php
    session_start();
    include 'config.php';

    if (isset($_POST['add'])) {
        $name = $_POST["name"];
        $price = $_POST["price"];
        $description = $_POST["description"];

        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $target_dir = "images/";

        $stmt = $con->prepare("INSERT INTO `products`(`name`, `price`, `description`, `image`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $price, $description, $file_name);
        if ($stmt->execute()) {
            move_uploaded_file($file_tmp, $target_dir.$file_name);
            echo "<script>alert('Product added successfully.!!');</script>";

        }else{
            echo "<script>alert('Error occurred. Try again later!!');</script>";

        }
        
    }

?>

<!DOCTYPE html>
<html>

<head>
    <title>Employee Directory</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Style1.css">
    <link rel="shortcut icon" href="/images/Ducklogo.jpg" />


    <?php include "header.html"; ?>
    <?php include "menu.php"; ?>
    <style>
        form{
            border: 1px solid grey;
            padding: 10px;
            width: 30%;
        }
        form input, textarea{
            padding: 8px;
            margin-top: 2px;
        }
    </style>
</head>

<body>
    <div style="padding:0 30px">
        <h2>Add Product</h2>
        <form action="AddProduct.php" method="post" enctype="multipart/form-data">
            <label>Product Name: </label>
            <input type="text" name="name" placeholder="Enter name" required><br>
            <label>Product Price: </label>
            <input type="text" name="price" placeholder="Enter price" required><br>  
            <label>Description: </label>
            <textarea name="description" placeholder="Enter description"></textarea><br>  
            <label>Image: </label>
            <input type="file" name="image"><br>
            <input type="submit" name="add" value="ADD">
            
        </form>

    </div>
    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>

<html>