<?php
    session_start();
    include 'config.php';
    $VitalSignsMonitorBrand = "";
    $VitalSignsMonitorTouch = "";
    $VitalSignsMonitorMobile = "";
    $VitalSignsMonitorPrinter = "";
    $VitalSignsMonitorQuantity = "";

    $IVinfusionBrand = "";
    $IVinfusionTouch = "";
    $IVinfusionMobile = "";
    $IVinfusionPrinter = "";
    $IVinfusionQuantity = "";

    $DefibrillatorBrand = "";
    $DefibrillatorTouch = "";
    $DefibrillatorMobile = "";
    $DefibrillatorPrinter = "";
    $DefibrillatorQuantity = "";

    $comments = "";

    if (isset($_GET['VitalSignsMonitorBrand'])) {
        $VitalSignsMonitorBrand = $_GET['VitalSignsMonitorBrand'];
    }
    if (isset($_GET['VitalSignsMonitorTouch'])) {
        $VitalSignsMonitorTouch = $_GET['VitalSignsMonitorTouch'];
    }
    if (isset($_GET['VitalSignsMonitorMobile'])) {
        $VitalSignsMonitorMobile = $_GET['VitalSignsMonitorMobile'];
    }
    if (isset($_GET['VitalSignsMonitorPrinter'])) {
        $VitalSignsMonitorPrinter = $_GET['VitalSignsMonitorPrinter'];
    }
    if (isset($_GET['VitalSignsMonitorQuantity'])) {
        $VitalSignsMonitorQuantity = $_GET['VitalSignsMonitorQuantity'];
    }

    if (isset($_GET['IVinfusionBrand'])) {
        $IVinfusionBrand = $_GET['IVinfusionBrand'];
    }
    if (isset($_GET['IVinfusionTouch'])) {
        $IVinfusionTouch = $_GET['IVinfusionTouch'];
    }
    if (isset($_GET['IVinfusionMobile'])) {
        $IVinfusionMobile = $_GET['IVinfusionMobile'];
    }
    if (isset($_GET['IVinfusionPrinter'])) {
        $IVinfusionPrinter = $_GET['IVinfusionPrinter'];
    }
    if (isset($_GET['IVinfusionQuantity'])) {
        $IVinfusionQuantity = $_GET['IVinfusionQuantity'];
    }

    if (isset($_GET['DefibrillatorBrand'])) {
        $DefibrillatorBrand = $_GET['DefibrillatorBrand'];
    }
    if (isset($_GET['DefibrillatorTouch'])) {
        $DefibrillatorTouch = $_GET['DefibrillatorTouch'];
    }
    if (isset($_GET['DefibrillatorMobile'])) {
        $DefibrillatorMobile = $_GET['DefibrillatorMobile'];
    }
    if (isset($_GET['DefibrillatorPrinter'])) {
        $DefibrillatorPrinter = $_GET['DefibrillatorPrinter'];
    }
    if (isset($_GET['DefibrillatorQuantity'])) {
        $DefibrillatorQuantity = $_GET['DefibrillatorQuantity'];
    }
    if (isset($_GET['comments'])) {
        $comments = $_GET['comments'];
    }

    $stmt = $con->prepare("INSERT INTO `product_survey`(`VitalSignsMonitorBrand`, `VitalSignsMonitorTouch`, `VitalSignsMonitorMobile`, `VitalSignsMonitorPrinter`, `VitalSignsMonitorQuantity`, `IVinfusionBrand`, `IVinfusionTouch`, `IVinfusionMobile`, `IVinfusionPrinter`, `IVinfusionQuantity`, `DefibrillatorBrand`, `DefibrillatorTouch`, `DefibrillatorMobile`, `DefibrillatorPrinter`, `DefibrillatorQuantity`, `comments`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssssss", $VitalSignsMonitorBrand, $VitalSignsMonitorTouch, $VitalSignsMonitorMobile, $VitalSignsMonitorPrinter, $VitalSignsMonitorQuantity, $IVinfusionBrand, $IVinfusionTouch, $IVinfusionMobile, $IVinfusionPrinter, $IVinfusionQuantity, $DefibrillatorBrand, $DefibrillatorTouch, $DefibrillatorMobile, $DefibrillatorPrinter, $DefibrillatorQuantity, $comments);
    if ($stmt->execute()) {
        echo "<script>alert('Product survey submitted successfully.!!');</script>";

    }else{
        echo "<script>alert('Error occurred. Try again later!!');</script>";

    }

?>
<!DOCTYPE html>
<html>

<head>
    <title>Product Survey - GET Answers</title>
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
    <div style="padding:0 30px; text-align: center;">
        <h3>Thank your for leaving your feedback.</h3>
        <h4> We always listen to our customer's opinions as we strive to always making our company better.</h4>
        <p>If you like to talk to a representative about issues you are having with your equipement please fill out this <a href="ContactUs.php">form</a>
            <br> and a sales rep will be in contact with in 24hrs. Thank you!
        </p>


    </div>


</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>


</html>