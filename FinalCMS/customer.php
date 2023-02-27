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
</head>

<body>
    <div style="padding:0 30px">
        <h3>WELCOME, <?php echo htmlspecialchars($_SESSION['username']); ?>! Click on a link bellow to go shopping!</h3>
        <p><br>
            <a href="LogoutQuestion.php">Log out</a>
            <br>
            <a href="Products.php">My Account</a>
        </p>


    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>


</html>