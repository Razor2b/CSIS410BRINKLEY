<?php
session_start();

// Check if the shopping cart already exists in the session
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Add the selected item to the cart
$item = array(
    'id' => $_POST['VitalSignsMonitor-id'],
    'name' => 'VitalSignsMonitor',
    'quantity' => $_POST['VitalSignsMonitor-quantity'],
    'price' => 2995.00
);
array_push($_SESSION['cart'], $item);

$item = array(
    'id' => $_POST['IVinfusion-id'],
    'name' => 'IVinfusion',
    'quantity' => $_POST['IVinfusion-quantity'],
    'price' => 1795.00
);
array_push($_SESSION['cart'], $item);

$item = array(
    'id' => $_POST['Defibrillator-id'],
    'name' => 'Defibrillator',
    'quantity' => $_POST['Defibrillator-quantity'],
    'price' => 5995.00
);
array_push($_SESSION['cart'], $item);

$item = array(
    'id' => $_POST['Ultrasound-id'],
    'name' => 'Ultrasound',
    'quantity' => $_POST['Ultrasound-quantity'],
    'price' => 33500.00
);
array_push($_SESSION['cart'], $item);

$item = array(
    'id' => $_POST['MedicationCart-id'],
    'name' => 'MedicationCart',
    'quantity' => $_POST['MedicationCart-quantity'],
    'price' => 1470.00
);
array_push($_SESSION['cart'], $item);

$item = array(
    'id' => $_POST['WelchAllyn-id'],
    'name' => 'WelchAllyn',
    'quantity' => $_POST['WelchAllyn-quantity'],
    'price' => 316.00
);
array_push($_SESSION['cart'], $item);

$item = array(
    'id' => $_POST['HospitalBed-id'],
    'name' => 'HospitalBed',
    'quantity' => $_POST['HospitalBed-quantity'],
    'price' => 2490.00
);
array_push($_SESSION['cart'], $item);

$item = array(
    'id' => $_POST['Ventilator-id'],
    'name' => 'Ventilator',
    'quantity' => $_POST['Ventilator-quantity'],
    'price' => 9500.00
);
array_push($_SESSION['cart'], $item);

$item = array(
    'id' => $_POST['UrineCollection-id'],
    'name' => 'UrineCollection',
    'quantity' => $_POST['UrineCollection-quantity'],
    'price' => 329.00
);
array_push($_SESSION['cart'], $item);

$item = array(
    'id' => $_POST['Dialysis-id'],
    'name' => 'Dialysis',
    'quantity' => $_POST['Dialysis-quantity'],
    'price' => 3995.00
);
array_push($_SESSION['cart'], $item);

// Redirect the user back to the Products page
header('Location: Products.php');
exit();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
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
        <div class="productimage"><img src="images/VitalSignsMonitor.png" alt="Vital Signs VS5 Patient Monitor"></div>
        <h4>Vital Signs VS5 Patient Monitor is priced at $2,995.00 per unit.</h4>
        <p>Sound and light integrated alarm, Alarm parameters can be adjusted to upper or lower. Suitable for adults, pediatrics and neonates.
            Applications in bedside and delivery monitoring. 12.1inches color TFT LCD screen, High brightness, Wide viewing, 8 waveforms can be
            displayed on the same screen. Lightness and volume are adjustable independently. Printing of data, waveform, trend tables and trend
            diagram. Multi-language interface selection: Chinese, English, Spanish, Portuguese, French, Arabic, Russian, Italian, Turkish, etc.
            User-friendly and man-machine dialogue interface with pop-up menus, dialogue boxes, rotary mouse and etc. Low-power consumption design
            with standby mode, rechargeable high-energy built-in battery.</p>
        <form action="cart.php" method="post">
            <label for="VitalSignsMonitor-quantity">Quantity:</label>
            <input type="number" id="VitalSignsMonitor-quantity" name="VitalSignsMonitor-quantity" min="1" value="1">
            <input type="hidden" name="VitalSignsMonitor-id" value="VitalSignsMonitor">
            <input type="submit" value="Add to Cart">
        </form>

        <br>
        <div class="productimage"><img src="images/IVinfusion.jpg" alt="Alaris PCU 8015LS unit with Alaris 8100 Infusion Pump Module"></div>
        <h4>Alaris PCU 8015LS unit with Alaris 8100 Infusion Pump Module is priced at $1,795.00 per unit.</h4>
        <p>8.9 inches high. 3.3 inches wide. 5.5 inches deep. 2.5 pounds weight. Rate accuracy is plus or minus 5% at rates between one and 999 mL/h,
            and plus or minus 5.5% at rates less than 1 mL/H 95% of the time given that the conditions are appropriate as detailed below:The infusion
            rate range is between 0.1 and 999 mL/h. The ambient temperature is 68 degrees Fahrenheit plus or minus four degrees. The source container
            height is 20 inches above the top of the module. The test solution is distilled water. The distal back pressure is 0 mmHg. An 18 gauge
            needle is used. The Administration Set Model is 2210. The Alaris 8100 IV Infusion Pump Module is equipped with Ultrasonic Air-in-Line
            Detection: The Maximum single bolus size is equal to selectable 50, 75 or 250 nominal microliters. The KVO rate may be set from 0.1 to
            20 mL/h in 0.1 mL/h increments in the System Configuration area. The factory default setting for the Keep Vein Open rate is one mL/h
            if the set rate is one mL/h or greater.</p>
        <form action="cart.php" method="post">
            <label for="IVinfusion-quantity">Quantity:</label>
            <input type="number" id="IVinfusion-quantity" name="IVinfusion-quantity" min="1" value="1">
            <input type="hidden" name="IVinfusion-id" value="IVinfusion">
            <input type="submit" value="Add to Cart">
        </form>

        <br>
        <div class="productimage"><img src="images/Defibrillator.jpg" alt="Encore Series Physio-Control LIFEPAK 15 defibrillator"></div>
        <h4>All LifePak 15 configurations include the following base specifications: Encore Series Physio-Control LIFEPAK 15 defibrillator is priced at $5,995.00 per unit.</h4>
        <p>ADAPTIV Biphasic Technology. Manual & AED External Defibrillation. 8.4" Color LCD Screen. CPR Metronome. Noninvasive Pacing (Demand & Non-Demand).
            3-Lead ECG Monitoring. 100mm Printer.</p>
        <form action="cart.php" method="post">
            <label for="Defibrillator-quantity">Quantity:</label>
            <input type="number" id="Defibrillator-quantity" name="Defibrillator-quantity" min="1" value="1">
            <input type="hidden" name="Defibrillator-id" value="Defibrillator">
            <input type="submit" value="Add to Cart">
        </form>

        <br>
        <div class="productimage"><img src="images/Ultrasound.jpg" alt="Samsung WS80A Ultrasound Machine"></div>
        <h4>Samsung WS80A Ultrasound Machine is priced at $33,500.00 per unit.</h4>
        <p>The monitor is a 23” Wide LED touch screen. The WS80A is compatible with well over 20 ultrasound probes. Height: 1,430 ~ 1,710 mm. Width: 557 mm.
            Depth: 791 ~ 860 mm. Weight with monitor: approx. 105.4 kg (232 lb.). </p>
        <form action="cart.php" method="post">
            <label for="Ultrasound-quantity">Quantity:</label>
            <input type="number" id="Ultrasound-quantity" name="Ultrasound-quantity" min="1" value="1">
            <input type="hidden" name="Ultrasound-id" value="Ultrasound">
            <input type="submit" value="Add to Cart">
        </form>

        <br>
        <div class="productimage"><img src="images/MedicationCart.jpg" alt="Lite Mobile Medication Cart"></div>
        <h4>Lite Mobile Medication Cart is priced at $1,470.00 per unit.</h4>
        <p>Made of ABS plastic and steel-plastic, easy to clean and corrosion-proof. (2) Key locks for safe storage, one lock for each side.
            Steel guardrail stablilizes items during transport. (6) ABS drawers on each side (12 drawers total) slide smooth and silent with
            centralized lock and plug-in labels to avoid dust (4) 5" Heavy Duty Anti-Static castors, two locking, designed to eliminate debris
            from wrapping the caster.Two keys included. 5 bins per drawer, 50 Bins total Bin dimensions: 8.5(L) x 4.25(W) x 3.5(D)(4 dividers
            per bin) 200 bins total with dividers. (1)Chart Storage Bin. (2)Trash bins</p>
        <form action="cart.php" method="post">
            <label for="MedicationCart-quantity">Quantity:</label>
            <input type="number" id="MedicationCart-quantity" name="MedicationCart-quantity" min="1" value="1">
            <input type="hidden" name="MedicationCart-id" value="MedicationCart">
            <input type="submit" value="Add to Cart">
        </form>

        <br>
        <div class="productimage"><img src="images/WelchAllyn.jpg" alt="Welch Allyn SureTemp Plus 692 Electronic Thermometer with Wall Mount"></div>
        <h4>Welch Allyn SureTemp Plus 692 Electronic Thermometer with Wall Mount is priced at $316.00 per unit.</h4>
        <p>Ergonomic design, comfortable to hold, easy to use, and very durable. Large back lit LCD display with location identification capability.
            Includes a 60-second pulse timer for counting pulses and respirations. Mechanical or electronic security options to help prevent theft.
            Interchangeable, removable probe wells reduce the risk of cross-contamination</p>
        <form action="cart.php" method="post">
            <label for="WelchAllyn-quantity">Quantity:</label>
            <input type="number" id="WelchAllyn-quantity" name="WelchAllyn-quantity" min="1" value="1">
            <input type="hidden" name="WelchAllyn-id" value="WelchAllyn">
            <input type="submit" value="Add to Cart">
        </form>

        <br>
        <div class="productimage"><img src="images/HospitalBed.jpg" alt="Hill-Rom Versacare P3200 Hospital Bed"></div>
        <h4>Hill-Rom Versacare P3200 Hospital Bed is priced at $2,490.00.00 per unit.</h4>
        <p>Foam mattress. Low position from surface edge to floor 18" (45.7 cm) With optional IntelliDrive® power transport 22" (55.9 cm).
            High position from surface center to floor 37" (94.0 cm). Bed must be turned on its side to pass through standard doors of 36 inches or less.</p>
        <form action="cart.php" method="post">
            <label for="HospitalBed-quantity">Quantity:</label>
            <input type="number" id="HospitalBed-quantity" name="HospitalBed-quantity" min="1" value="1">
            <input type="hidden" name="HospitalBed-id" value="HospitalBed">
            <input type="submit" value="Add to Cart">
        </form>

        <br>
        <div class="productimage"><img src="images/Ventilator.jpg" alt="Drager Evita Infinity V500 ICU Ventilator"></div>
        <h4>Drager Evita Infinity V500 ICU Ventilator is priced at $9,500.00 per unit.</h4>
        <p>Designed for adult, pediatric, and infant use. Mobile trolley can adapt to carry oxygen cylinders. Non-invasive ventilation modes.
            Full record of all patient data, alarms, and trends. RFID functionality. Flexible screen configuration. Omni-directional alarm bar.
            Easy to download to a USB stock for follow-up research.</p>
        <form action="cart.php" method="post">
            <label for="Ventilator-quantity">Quantity:</label>
            <input type="number" id="Ventilator-quantity" name="Ventilator-quantity" min="1" value="1">
            <input type="hidden" name="Ventilator-id" value="Ventilator">
            <input type="submit" value="Add to Cart">
        </form>

        <br>
        <div class="productimage"><img src="images/UrineCollection.jpg" alt="PureWick™ Urine Collection System without Battery"></div>
        <h4>PureWick™ Urine Collection System without Battery is priced at $329.00 per unit.</h4>
        <p>The PureWick™ Urine Collection System contains the suction pump, 2000cc collection canister with lid, pump tubing, collector tubing with
            elbow connector, two privacy covers and a power cord. The system does not contain a rechargeable battery and needs to be plugged in at all
            times when in use. The PureWick™ Female External Catheters are sold separately in boxes of 30. The PureWick™ Urine Collection System is
            small at 9″ x 6.5″ x 11″ and able to fit on most nightstands and small tables.</p>
        <form action="cart.php" method="post">
            <label for="UrineCollection-quantity">Quantity:</label>
            <input type="number" id="UrineCollection-quantity" name="UrineCollection-quantity" min="1" value="1">
            <input type="hidden" name="UrineCollection-id" value="UrineCollection">
            <input type="submit" value="Add to Cart">
        </form>

        <br>
        <div class="productimage"><img src="images/Dialysis.jpg" alt="NxStage System One S Home Hemodialysis Dialysis Machine"></div>
        <h4>NxStage System One S Home Hemodialysis Dialysis Machine is priced at $3,995.00 per unit.</h4>
        <p>At home or hospital use. </p>
        <form action="cart.php" method="post">
            <label for="Dialysis-quantity">Quantity:</label>
            <input type="number" id="Dialysis-quantity" name="Dialysis-quantity" min="1" value="1">
            <input type="hidden" name="Dialysis-id" value="Dialysis">
            <input type="submit" value="Add to Cart">
        </form>

        <br>
        <br>
        <h4>For more information about the quantitly or shipping for large orders ask one of our sales rep.</h4>
        <h4>They can answer all your questions.</h4>
    </div>

</body>

<br>
<br>
<a href="#header">Back to the top</a>
<footer>
    <?php include "footer.php"; ?>
</footer>

</html>