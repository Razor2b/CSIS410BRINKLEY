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

    $hasFile = false;

    if (filesize($file_tmp) == 0) {
        $hasFile = false;
    } else {
        $hasFile = true;
    }

    if ($hasFile) {
        $stmt = "UPDATE `products` SET `name`='$name',`price`='$price',`description`='$description', `image`='$file_name' WHERE id = '" . $_SESSION["update_id"] . "'";
        if (mysqli_query($con, $stmt)) {
            move_uploaded_file($file_tmp, $target_dir . $file_name);
            echo "<script>alert('Product updated successfully.!!');</script>";
        } else {
            echo "<script>alert('Something went wrong.')</script>";
        }
        $_SESSION['update_name'] = $_POST['name'];
        $_SESSION['update_price'] = $_POST['price'];
        $_SESSION['update_description'] = $_POST['description'];
    } else {
        $stmt = "UPDATE `products` SET `name`='$name',`price`='$price',`description`='$description' WHERE id = '" . $_SESSION["update_id"] . "'";
        if (mysqli_query($con, $stmt)) {
            echo "<script>alert('Product updated successfully.!!');</script>";
        } else {
            echo "<script>alert('Something went wrong.')</script>";
        }
        $_SESSION['update_name'] = $_POST['name'];
        $_SESSION['update_price'] = $_POST['price'];
        $_SESSION['update_description'] = $_POST['description'];
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Product</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Style1.css">
    <link rel="shortcut icon" href="/images/Ducklogo.jpg" />


    <?php include "header.html"; ?>
    <?php include "menu.php"; ?>
</head>

<body>
    <div style="padding:0 30px">
        <h2>Update Product</h2>
        <form action="UpdateProduct.php" method="post" enctype="multipart/form-data">
            <label>Product Name: </label>
            <input type="text" name="name" placeholder="Enter name" value="<?php echo $_SESSION['update_name']; ?>" required><br>
            <label>Product Price: </label>
            <input type="text" name="price" placeholder="Enter price" value="<?php echo $_SESSION['update_price']; ?>" required><br>
            <label>Description: </label>
            <textarea name="description"><?php echo $_SESSION['update_description']; ?></textarea><br>
            <label>Image: </label>
            <input type="file" name="image"><br>
            <input type="submit" name="add" value="UPDATE">

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