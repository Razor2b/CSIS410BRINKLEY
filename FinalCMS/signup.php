<?php
session_start();
include 'config.php';

if (isset($_POST['add'])) {
    $access_level = $_POST["access_level"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $con->prepare("INSERT INTO `user`(`access_level`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $access_level, $firstname, $lastname, $username, $email, $password);
    if ($stmt->execute()) {
        echo "<script>alert('User created successfully.!!');</script>";
        header("Location: login.php");
    } else {
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

    <!--    
        Rachel Brinkley's Liberty University CSIS410 B01 web project
    -->

    <?php include "header.html"; ?>
    <?php include "menu.php"; ?>
</head>

<body>
    <div style="padding:0 30px">
        <h2>Create Account</h2>
        <form action="signup.php" method="post">
            <label>Access Level: </label>
            <select name="access_level">
                <option value="customer">Customer</option>
                <option value="publisher">Publisher</option>
                <option value="admin">Admin</option>
            </select><br><br>
            <label>First Name: </label>
            <input type="text" name="firstname" placeholder="Enter first name" required><br><br>
            <label>Last Name: </label>
            <input type="text" name="lastname" placeholder="Enter last name" required><br><br>
            <label>Username: </label>
            <input type="text" name="username" placeholder="Enter username" required><br><br>
            <label>Email: </label>
            <input type="email" name="email" placeholder="Enter email" required><br><br>
            <label>Password: </label>
            <input type="text" name="password" placeholder="Enter password" required><br><br>

            <input type="submit" name="add" value="Signup">

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