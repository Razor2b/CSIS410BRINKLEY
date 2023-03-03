<?php 
    session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Style1.css">
    <link rel="shortcut icon" href="/images/Ducklogo.jpg">

    <!--    
        Rachel Brinkley's Liberty University CSIS410 B01 web project
    -->

    <?php include "header.html"; ?>
    <?php include "menu.php"; ?>
</head>

<body>
    
    <div style="padding:0 30px; text-align: center;">
        <h3>We sell hospital equipement easy and fast!</h3>
        <p>Feel free to look around and ask questions.</p>
        <p><a href="AboutUs.php">About Us</a></p>
        <p><a href="EmployeeChart.php">Meet the team!</a></p>
        <br>
        
        <h3 style="text-align: center;">Here is our top product for more sales this week!! <br><br>
            <img src="images/Defibrillator.jpg" id="WelchAllyn" alt="All LifePak Encore Series Physio-Control LIFEPAK 15 defibrillator"><br>
            All LifePak Encore Series Physio-Control LIFEPAK 15 defibrillator
        </h3>
        <p style="text-align: center;">If you like to buy a bluck order please fill out this <a href="ContactUs.php">form</a><br> and a sales rep will be in
            contact with in 24hrs. Thank you!</p>
        <br>
        <p>Is anyone among you sick? Let him call for the elders of the church, and let them pray over him,<br> 
            anointing him with oil in the name of the Lord. And the prayer of faith will save the one who is sick,<br> 
            and the Lord will raise him up. And if he has committed sins, he will be forgiven.<br> - James 5:14,15</p>


    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>


</html>