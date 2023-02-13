<?php

// START SESSION
session_start();

// DELETE SESSION VARIABLE
unset($_SESSION);

// RESET SESSION ARRAY
$_SESSION = array();

// DESTROY SESSION
session_destroy();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Logged Out</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="shortcut icon" href="images/Ducklogo.jpg" />

    <!--    
        Rachel Brinkley's Liberty University CSIS410 B01 web project
    -->

    <?php include "header.html"; ?>
</head>

<body>
    <div style="padding:0 30px">
        <br>
        <h2>You are now logged out.</h2>

        <p>Back to <a href="login.php">login</a> screen or back to the <a href="index.php">home</a> page.</p>

    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>


</html>