<!DOCTYPE html>
<html>

<head>
    <title>Razor's Medical Equipment ContactUs</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="shortcut icon" href="images/Ducklogo.jpg" />

    <!--    
        Rachel Brinkley's Liberty University 410 B01 web project
    -->

    <?php include "header.html"; ?>
</head>

<body>
    <div style="padding:0 30px">
        <h3>Contact Us!</h3>
        <?php
        print "You can contact us either email or phone.";
        print "We would love to start the process for your easy equipment ordering.";
        print "ContactUs@email.com or call us toll free at 1(800)-555-5323";
        ?>
    </div>

</body>

<br>
<br>

<footer>
    <p>Validated by:</p>
    <a href="https://validator.w3.org/check?uri=referer"><img src="https://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88"></a>
    <a href="https://jigsaw.w3.org/css-validator/check/referer"><img src="https://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS"></a>
    <p>Last modified: <?php echo date("F d Y H:i:s.", filemtime("ContactUs.php")); ?></p>
</footer>


</html>