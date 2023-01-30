<!DOCTYPE html>
<html>

<head>
    <title>Product Survey - GET Answers</title>
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
        <h3>Thank your for leaving your feedback. Take a look at what you had to say.</h3>
        <h5>This is using the GET method in PHP.</h5>

        <?php
        include("GETmethod.php");

        echo "<table align='center'>   
            <tr>
                <th>Questions</th>
                <th>Vital Signs VS5 Patient Monitor |</th>
                <th>Alaris PCU 8015LS unit with Alaris 8100 Infusion Pump |</th>
                <th>Encore Series Physio-Control LIFEPAK 15 defibrillator</th>
            </tr>
            
            <tr>
                <td>Do you like this brand or would you prefer another one?</td>
                <td>$VitalSignsMonitorBrand</td>
                <td>$IVinfusionBrand</td>
                <td>$DefibrillatorBrand</td>
            </tr>
            
            <tr>
                <td>Would you like this device to be touch screen?</td>
                <td>$VitalSignsMonitorTouch</td>
                <td>$IVinfusionTouch</td>
                <td>$DefibrillatorTouch</td>
            </tr>
            
            <tr>
                <td>Would you be more inclinded to buy this device if it included a pole with wheels to make it mobile?  </td>
                <td>$VitalSignsMonitorMobile</td>
                <td>$IVinfusionMobile</td>
                <td>$DefibrillatorMobile</td>
            </tr>
            
            <tr>
                <td>Would you like this device to have its own printer to print patient information when needed?</td>
                <td>$VitalSignsMonitorPrinter</td>
                <td>$IVinfusionPrinter</td>
                <td>$DefibrillatorPrinter</td>
            </tr>
            
            <tr>
                <td>If you were to purchase this device, how many would you be looking to purchase?</td>
                <td>$VitalSignsMonitorQuantity</td>
                <td>$IVinfusionQuantity</td>
                <td>$DefibrillatorQuantity</td>
            </tr>
        </table>";
        echo nl2br("\r\n");
        echo nl2br("\r\n");

        echo "<table align='center'>
        <tr>
            <th>Comments</th>
        </tr>
        <tr>
            <td>$comments</td>
        </tr>
    </table>";
        ?>

    </div>


</body>

<br>
<br>

<footer>
    <?php include "footer.html"; ?>
</footer>


</html>