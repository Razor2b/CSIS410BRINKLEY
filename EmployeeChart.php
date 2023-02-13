<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Employee Directory</title>
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
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></p>
        <h3>Employee Directory</h3>
        <p>Meet the amazing employees at Razor's Medical Equipment.</p>
        <br>
        <h3>Please select a team member from the list to view information.</h3>

        <!-- display info for Rachel Brinkley-->
        <p>Rachel Brinkley - CEO</p>
        <a href="CEO.php">More Information</a>
        <br>
        <br>

        <!--display info for Charles Brinkley-->
        <p>Charles Brinkley - CFO</p>
        <a href="CFO.php">More Information</a>
        <br>
        <br>

        <!--display info for Christopher Kelly-->
        <p>Christopher Kelly - IT Manager</p>
        <a href="ITManager.php">More Information</a>
        <br>
        <br>

        <!--display info for Sharon Brinkley-->
        <p>Sharon Brinkley - Head Sales Rep.</p>
        <a href="HeadRep.php">More Information</a>
        <br>
        <br>

        <!--display info for Collin Miller-->
        <p>Collin Miller - Sales Rep.</p>
        <a href="SalesRep.php">More Information</a>
        <br>
        <br>

        <!--display info for Carol Martin-->
        <p>Carol Martin - Machine Mechanic Manager</p>
        <a href="Mechanic.php">More Information</a>
        <br>
        <br>

    </div>
    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>