<!DOCTYPE html>
<html>

<head>
    <title>Product Survey - GET</title>
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
        <h3>Give Us Your Opinion For Our Top 3 Products</h3>
        <h5>This is using the GET method in PHP.</h5>

        <p>We would love you opinion on the following 3 products we sell. Please answer the questions hoenstly and leave any extra thoughts in the
            comments box at the end. When you submit your answers you will see other people's answers. Thank you!</p>

        <br>
        <h3>Survey</h3>

        <form action="GETmethod.php" method="get">
            <hr width="350px" size="2" noshade="noshade" color="black" align="left">

            <!--Vital Signs VS5 Patient Monitor-->
            <div>
                <div class="productimage"><img src="images/VitalSignsMonitor.png" alt="Vital Signs VS5 Patient Monitor"></div>
                <h4>Vital Signs VS5 Patient Monitor</h4>

                <p>Do you like this brand or would you prefer another one?<br />
                    <input type="radio" name="VitalSignsMonitorBrand" value="Like"> I like this brand.<br />
                    <input type="radio" name="VitalSignsMonitorBrand" value="Dislike">I would prefer a different brand.<br />
                </p>

                <p>Would you like this device to be touch screen?<br />
                    <input type="radio" name="VitalSignsMonitorTouch" value="Yes">Yes<br />
                    <input type="radio" name="VitalSignsMonitorTouch" value="No">No<br />
                </p>

                <p>Would you be more inclinded to buy this device if it included a pole with wheels to make it mobile?<br />
                    <input type="radio" name="VitalSignsMonitorMobile" value="Yes">Yes<br />
                    <input type="radio" name="VitalSignsMonitorMobile" value="No">No<br />
                </p>

                <p>Would you like this device to have its own printer to print patient information when needed?<br />
                    <input type="radio" name="VitalSignsMonitorPrinter" value="Yes">Yes<br />
                    <input type="radio" name="VitalSignsMonitorPrinter" value="No">Not necessary<br />
                </p>

                <p>If you were to purchase this device, how many would you be looking to purchase?<br />
                    <input type="radio" name="VitalSignsMonitorQuantity" value="0-100">0-100<br />
                    <input type="radio" name="VitalSignsMonitorQuantity" value="101-500">101-500<br />
                    <input type="radio" name="VitalSignsMonitorQuantity" value="500+">500+<br />
                    <input type="radio" name="VitalSignsMonitorQuantity" value="NA">NA<br />
                </p>

            </div>

            <br>
            <br>
            <hr width="350px" size="2" noshade="noshade" color="black" align="left">

            <!--Alaris PCU 8015LS unit with Alaris 8100 Infusion Pump Module-->
            <div>
                <div class="productimage"><img src="images/IVinfusion.jpg" alt="Alaris PCU 8015LS unit with Alaris 8100 Infusion Pump Module"></div>
                <h4>Alaris PCU 8015LS unit with Alaris 8100 Infusion Pump Module</h4>

                <p>Do you like this brand or would you prefer another one?<br />
                    <input type="radio" name="IVinfusionBrand" value="Like"> I like this brand.<br />
                    <input type="radio" name="IVinfusionBrand" value="Dislike">I would prefer a different brand.<br />
                </p>

                <p>Would you like this device to be touch screen?<br />
                    <input type="radio" name="IVinfusionTouch" value="Yes">Yes<br />
                    <input type="radio" name="IVinfusionTouch" value="No">No<br />
                </p>

                <p>Would you be more inclinded to buy this device if it included a pole with wheels to make it mobile?<br />
                    <input type="radio" name="IVinfusionMobile" value="Yes">Yes<br />
                    <input type="radio" name="IVinfusionMobile" value="No">No<br />
                </p>

                <p>Would you like this device to have its own printer to print patient information when needed?<br />
                    <input type="radio" name="IVinfusionPrinter" value="Yes">Yes<br />
                    <input type="radio" name="IVinfusionPrinter" value="No">Not necessary<br />
                </p>

                <p>If you were to purchase this device, how many would you be looking to purchase?<br />
                    <input type="radio" name="IVinfusionQuantity" value="0-100">0-100<br />
                    <input type="radio" name="IVinfusionQuantity" value="101-500">101-500<br />
                    <input type="radio" name="IVinfusionQuantity" value="500+">500+<br />
                    <input type="radio" name="IVinfusionQuantity" value="NA">NA<br />
                </p>
            </div>

            <br>
            <br>
            <hr width="350px" size="2" noshade="noshade" color="black" align="left">

            <!--Encore Series Physio-Control LIFEPAK 15 defibrillator-->
            <div>
                <div class="productimage"><img src="images/Defibrillator.jpg" alt="Encore Series Physio-Control LIFEPAK 15 defibrillator"></div>
                <h4>Encore Series Physio-Control LIFEPAK 15 defibrillator</h4>
                <p>Do you like this brand or would you prefer another one?<br />
                    <input type="radio" name="DefibrillatorBrand" value="Like"> I like this brand.<br />
                    <input type="radio" name="DefibrillatorBrand" value="Dislike">I would prefer a different brand.<br />
                </p>

                <p>Would you like this device to be touch screen?<br />
                    <input type="radio" name="DefibrillatorTouch" value="Yes">Yes<br />
                    <input type="radio" name="DefibrillatorTouch" value="No">No<br />
                </p>

                <p>Would you be more inclinded to buy this device if it included a pole with wheels to make it mobile?<br />
                    <input type="radio" name="DefibrillatorMobile" value="Yes">Yes<br />
                    <input type="radio" name="DefibrillatorMobile" value="No">No<br />
                </p>

                <p>Would you like this device to have its own printer to print patient information when needed?<br />
                    <input type="radio" name="DefibrillatorPrinter" value="Yes">Yes<br />
                    <input type="radio" name="DefibrillatorPrinter" value="No">Not necessary<br />
                </p>

                <p>If you were to purchase this device, how many would you be looking to purchase?<br />
                    <input type="radio" name="DefibrillatorQuantity" value="0-100">0-100<br />
                    <input type="radio" name="DefibrillatorQuantity" value="101-500">101-500<br />
                    <input type="radio" name="DefibrillatorQuantity" value="500+">500+<br />
                    <input type="radio" name="DefibrillatorQuantity" value="NA">NA<br />
                </p>
            </div>

            <br>
            <br>
            <hr width="350px" size="2" noshade="noshade" color="black" align="left">

            
            <br>
            <p>Please enter any additional comments: *required <br><textarea name="comments" rows="7" columns="150"></textarea></p>

            <input type="submit" formaction="ShowGETmethod.php">

        </form>

    </div>


</body>

<br>
<br>
<a href="#header">Back to the top</a>
<footer>
    <?php include "footer.php"; ?>
</footer>


</html>