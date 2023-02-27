<?php
session_start();

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    // $quantity = 1;
    if (isset($_SESSION["shopping_cart"])) {
        $is_available = 0;
        foreach ($_SESSION['shopping_cart'] as $key => $value) {
            if ($_SESSION['shopping_cart'][$key]['product_id'] == $product_id) {
                $is_available++;
                $_SESSION['shopping_cart'][$key]['product_quantity'] = $_SESSION['shopping_cart'][$key]['product_quantity'] + $quantity;


                echo "<script>alert('Quantity updated to cart.')</script>";
            }


            # code...
        }
        if ($is_available == 0) {
            $item_array = array(
                'product_id' => $product_id,
                'product_quantity' => $quantity,
                'product_name' => $name,
                'product_price' => $price
            );
            $_SESSION["shopping_cart"][] = $item_array;
            echo "<script>alert('Product added to cart.')</script>";
            # code...
        }
        # code...
    } else {
        $item_array = array(
            'product_id' => $product_id,
            'product_quantity' => $quantity,
            'product_name' => $name,
            'product_price' => $price
        );
        $_SESSION["shopping_cart"][] = $item_array;
        echo "<script>alert('Product added to cart.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Style1.css?version=1">
    <link rel="shortcut icon" href="/images/Ducklogo.jpg" />
    <!--    
        Rachel Brinkley's Liberty University CSIS410 B01 web project
    -->
    <?php include "header.html"; ?>
    <?php include "menu.php"; ?>
</head>

<body>
    <div style="padding:0 30px" class="main_div">
        <div class="product_div">
            <div class="productimage"><img src="images/VitalSignsMonitor.png" alt="Vital Signs VS5 Patient Monitor"></div>
            <h4>Vital Signs VS5 Patient Monitor is priced at $2,995.00 per unit.</h4>
            <p>Sound and light integrated alarm, Alarm parameters can be adjusted to upper or lower. Suitable for adults, pediatrics and neonates.
                Applications in bedside and delivery monitoring. 12.1inches color TFT LCD screen, High brightness, Wide viewing, 8 waveforms can be
                displayed on the same screen. Lightness and volume are adjustable independently. Printing of data, waveform, trend tables and trend
                diagram. Multi-language interface selection: Chinese, English, Spanish, Portuguese, French, Arabic, Russian, Italian, Turkish, etc.
                User-friendly and man-machine dialogue interface with pop-up menus, dialogue boxes, rotary mouse and etc. Low-power consumption design
                with standby mode, rechargeable high-energy built-in battery.</p>
            <form action="Products.php" method="post">
                <label for="VitalSignsMonitor-quantity">Quantity:</label>
                <input type="number" class="quantity" name="quantity" min="1" value="1">
                <input type="hidden" name="id" value="VitalSignsMonitor">
                <input type="hidden" name="name" value="Vital Signs VS5 Patient Monitor">
                <input type="hidden" name="price" value="2995">
                <input type="submit" class="add_to_cart" name="add_to_cart" value="Add to Cart">
            </form>

        </div>
        <div class="product_div">
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
            <form action="Products.php" method="post">
                <label for="IVinfusion-quantity">Quantity:</label>
                <input type="number" class="quantity" name="quantity" min="1" value="1">
                <input type="hidden" name="id" value="IVinfusion">
                <input type="hidden" name="name" value="Alaris PCU 8015LS unit with Alaris 8100 Infusion Pump Module">
                <input type="hidden" name="price" value="1795">
                <input type="submit" class="add_to_cart" name="add_to_cart" value="Add to Cart">
            </form>
        </div>

        <div class="product_div">
            <div class="productimage"><img src="images/Defibrillator.jpg" alt="Encore Series Physio-Control LIFEPAK 15 defibrillator"></div>
            <h4>All LifePak Encore Series Physio-Control LIFEPAK 15 defibrillator is priced at $5,995.00 per unit.</h4>
            <p>ADAPTIV Biphasic Technology. Manual & AED External Defibrillation. 8.4" Color LCD Screen. CPR Metronome. Noninvasive Pacing (Demand & Non-Demand).
                3-Lead ECG Monitoring. 100mm Printer.</p>
            <form action="Products.php" method="post">
                <label for="Defibrillator-quantity">Quantity:</label>
                <input type="number" class="quantity" name="quantity" min="1" value="1">
                <input type="hidden" name="id" value="Defibrillator">
                <input type="hidden" name="name" value="Encore Series Physio-Control LIFEPAK 15 defibrillator">
                <input type="hidden" name="price" value="5995">
                <input type="submit" class="add_to_cart" name="add_to_cart" value="Add to Cart">
            </form>
        </div>

        <div class="product_div">
            <div class="productimage"><img src="images/Ultrasound.jpg" alt="Samsung WS80A Ultrasound Machine"></div>
            <h4>Samsung WS80A Ultrasound Machine is priced at $33,500.00 per unit.</h4>
            <p>The monitor is a 23” Wide LED touch screen. The WS80A is compatible with well over 20 ultrasound probes. Height: 1,430 ~ 1,710 mm. Width: 557 mm.
                Depth: 791 ~ 860 mm. Weight with monitor: approx. 105.4 kg (232 lb.). </p>
            <form action="Products.php" method="post">
                <label for="Ultrasound-quantity">Quantity:</label>
                <input type="number" class="quantity" name="quantity" min="1" value="1">
                <input type="hidden" name="id" value="Ultrasound">
                <input type="hidden" name="name" value="Samsung WS80A Ultrasound Machine">
                <input type="hidden" name="price" value="33500">
                <input type="submit" class="add_to_cart" name="add_to_cart" value="Add to Cart">
            </form>
        </div>

        <div class="product_div">
            <div class="productimage"><img src="images/MedicationCart.jpg" alt="Lite Mobile Medication Cart"></div>
            <h4>Lite Mobile Medication Cart is priced at $1,470.00 per unit.</h4>
            <p>Made of ABS plastic and steel-plastic, easy to clean and corrosion-proof. (2) Key locks for safe storage, one lock for each side.
                Steel guardrail stablilizes items during transport. (6) ABS drawers on each side (12 drawers total) slide smooth and silent with
                centralized lock and plug-in labels to avoid dust (4) 5" Heavy Duty Anti-Static castors, two locking, designed to eliminate debris
                from wrapping the caster.Two keys included. 5 bins per drawer, 50 Bins total Bin dimensions: 8.5(L) x 4.25(W) x 3.5(D)(4 dividers
                per bin) 200 bins total with dividers. (1)Chart Storage Bin. (2)Trash bins</p>
            <form action="Products.php" method="post">
                <label for="MedicationCart-quantity">Quantity:</label>
                <input type="number" class="quantity" name="quantity" min="1" value="1">
                <input type="hidden" name="id" value="MedicationCart">
                <input type="hidden" name="name" value="Lite Mobile Medication Cart">
                <input type="hidden" name="price" value="1470">
                <input type="submit" class="add_to_cart" name="add_to_cart" value="Add to Cart">
            </form>
        </div>

        <div class="product_div">
            <div class="productimage"><img src="images/WelchAllyn.jpg" alt="Welch Allyn SureTemp Plus 692 Electronic Thermometer with Wall Mount"></div>
            <h4>Welch Allyn SureTemp Plus 692 Electronic Thermometer with Wall Mount is priced at $316.00 per unit.</h4>
            <p>Ergonomic design, comfortable to hold, easy to use, and very durable. Large back lit LCD display with location identification capability.
                Includes a 60-second pulse timer for counting pulses and respirations. Mechanical or electronic security options to help prevent theft.
                Interchangeable, removable probe wells reduce the risk of cross-contamination</p>
            <form action="Products.php" method="post">
                <label for="WelchAllyn-quantity">Quantity:</label>
                <input type="number" class="quantity" name="quantity" min="1" value="1">
                <input type="hidden" name="id" value="WelchAllyn">
                <input type="hidden" name="name" value="Welch Allyn SureTemp Plus 692 Electronic Thermometer with Wall Mount">
                <input type="hidden" name="price" value="316">
                <input type="submit" class="add_to_cart" name="add_to_cart" value="Add to Cart">
            </form>
        </div>

        <div class="product_div">
            <div class="productimage"><img src="images/HospitalBed.jpg" alt="Hill-Rom Versacare P3200 Hospital Bed"></div>
            <h4>Hill-Rom Versacare P3200 Hospital Bed is priced at $2,490.00.00 per unit.</h4>
            <p>Foam mattress. Low position from surface edge to floor 18" (45.7 cm) With optional IntelliDrive® power transport 22" (55.9 cm).
                High position from surface center to floor 37" (94.0 cm). Bed must be turned on its side to pass through standard doors of 36 inches or less.</p>
            <form action="Products.php" method="post">
                <label for="HospitalBed-quantity">Quantity:</label>
                <input type="number" class="quantity" name="quantity" min="1" value="1">
                <input type="hidden" name="id" value="HospitalBed">
                <input type="hidden" name="name" value="Hill-Rom Versacare P3200 Hospital Bed">
                <input type="hidden" name="price" value="2490">
                <input type="submit" class="add_to_cart" name="add_to_cart" value="Add to Cart">
            </form>
        </div>

        <div class="product_div">
            <div class="productimage"><img src="images/Ventilator.jpg" alt="Drager Evita Infinity V500 ICU Ventilator"></div>
            <h4>Drager Evita Infinity V500 ICU Ventilator is priced at $9,500.00 per unit.</h4>
            <p>Designed for adult, pediatric, and infant use. Mobile trolley can adapt to carry oxygen cylinders. Non-invasive ventilation modes.
                Full record of all patient data, alarms, and trends. RFID functionality. Flexible screen configuration. Omni-directional alarm bar.
                Easy to download to a USB stock for follow-up research.</p>
            <form action="Products.php" method="post">
                <label for="Ventilator-quantity">Quantity:</label>
                <input type="number" class="quantity" name="quantity" min="1" value="1">
                <input type="hidden" name="id" value="Ventilator">
                <input type="hidden" name="name" value="Drager Evita Infinity V500 ICU Ventilator">
                <input type="hidden" name="price" value="9500">
                <input type="submit" class="add_to_cart" name="add_to_cart" value="Add to Cart">
            </form>
        </div>

        <div class="product_div">
            <div class="productimage"><img src="images/UrineCollection.jpg" alt="PureWick™ Urine Collection System without Battery"></div>
            <h4>PureWick™ Urine Collection System without Battery is priced at $329.00 per unit.</h4>
            <p>The PureWick™ Urine Collection System contains the suction pump, 2000cc collection canister with lid, pump tubing, collector tubing with
                elbow connector, two privacy covers and a power cord. The system does not contain a rechargeable battery and needs to be plugged in at all
                times when in use. The PureWick™ Female External Catheters are sold separately in boxes of 30. The PureWick™ Urine Collection System is
                small at 9″ x 6.5″ x 11″ and able to fit on most nightstands and small tables.</p>
            <form action="Products.php" method="post">
                <label for="UrineCollection-quantity">Quantity:</label>
                <input type="number" class="quantity" name="quantity" min="1" value="1">
                <input type="hidden" name="id" value="UrineCollection">
                <input type="hidden" name="name" value="PureWick™ Urine Collection System without Battery">
                <input type="hidden" name="price" value="329">
                <input type="submit" class="add_to_cart" name="add_to_cart" value="Add to Cart">
            </form>
        </div>

        <div class="product_div">
            <div class="productimage"><img src="images/Dialysis.jpg" alt="NxStage System One S Home Hemodialysis Dialysis Machine"></div>
            <h4>NxStage System One S Home Hemodialysis Dialysis Machine is priced at $3,995.00 per unit.</h4>
            <p>At home or hospital use. </p>
            <form action="Products.php" method="post">
                <label for="Dialysis-quantity">Quantity:</label>
                <input type="number" class="quantity" name="quantity" min="1" value="1">
                <input type="hidden" name="id" value="Dialysis">
                <input type="hidden" name="name" value="NxStage System One S Home Hemodialysis Dialysis Machine">
                <input type="hidden" name="price" value="3995">
                <input type="submit" class="add_to_cart" name="add_to_cart" value="Add to Cart">
            </form>
        </div>


    </div>
    <br>
    <br>
    <h4 style="text-align: center;">For more information about the quantitly or shipping for large orders ask one of our sales rep.<br>They can answer all your questions.</h4>
</body>

<br>
<br>
<a href="#header">Back to the top</a>
<footer>
    <?php include "footer.php"; ?>
</footer>

</html>