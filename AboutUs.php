<!DOCTYPE html>
<html>

<head>
    <title>AboutUs</title>
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
        <h3>Rachel Brinkley's Website for CSIS 410 B01 class</h3>
        <p>Razor's Medical Equipment is a new wave of orders, processing, and maintaining hospital equipment.
            We strive to make every step of owning medical equipment worry-free. With every order, we
            ensure that you get what you ordered and that nothing is broken. When new equipment is deliveried Razor's
            Medical
            Equipment will fully install and test every machine you ordered. Then, every six months, we send a small
            group
            of the maintenance team to test every produce to ensure everything is calibrated.
        </p>
        <p>One of our newer services is to pay on layaway for your machines. There is a layaway plan
            for everyone. Feel free to look at our catalog or we can send one of our knowledgeable sales representatives
            to your office at your convenience. They can discuss every back of the process with you. One of the main
            questions
            every consumer makes is whether or not the larger machines can make it into the building. i.e. having to
            tear down
            a wall or a door to get it in the room.
        </p>
    </div>

</body>

<br>
<br>

<footer>
    <p>Validated by:</p>
    <a href="https://validator.w3.org/check?uri=referer"><img src="https://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88"></a>
    <a href="https://jigsaw.w3.org/css-validator/check/referer"><img src="https://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS"></a>
    <p>Last modified: <?php echo date("F d Y H:i:s.", filemtime("AboutUs.php")); ?></p>
</footer>


</html>