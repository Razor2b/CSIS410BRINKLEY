<?php
// Start the session
session_start();
?>
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
    <style>
        .div-links{
            display: flex;
        }
        .div-links a{
            margin-left: 20px;
            color: blue;
            background: white;
            padding: 10px;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div style="padding:0 30px">
        <h3>WELCOME, <?php echo htmlspecialchars($_SESSION['username']); ?>! Click on a link bellow to edit your employee profile!</h3>
        <div>
            <div class="div-links">
                <a href="LogoutQuestion.php">Log out</a>
                <a href="AddEmployeeForm.php">Add Employee</a>
                <a href="AddProduct.php">Add Product</a>
                <a href="AllProducts.php">All Product</a>
                <a href="AddAbout.php">Add About Us</a>
                <a href="AboutContent.php">About Us Content</a>
            </div>
            <div>
                <br>
                <h2 style="color: blue;">User Details</h2>
                <h4>Username: <span style="color: green;"><?php echo $_SESSION['username'] ?></span></h4>
                <h4>Access Level: <span style="color: green;"><?php echo $_SESSION['access_level'] ?></span></h4>
                <h4>First Name: <span style="color: green;"><?php echo $_SESSION['firstname'] ?></span></h4>
                <h4>Last Name: <span style="color: green;"><?php echo $_SESSION['lastname'] ?></span></h4>
                <h4>Email Address: <span style="color: green;"><?php echo $_SESSION['email'] ?></span></h4>

            </div>

            
        </div>
            


    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>


</html>