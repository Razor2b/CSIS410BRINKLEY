<!DOCTYPE html>
<html>

<head>
    <title>Employee Sharon Brinkley</title>
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
    <br>
    <div style="padding:0 30px">
        <?php require("Variables.php");
        //Information
        echo '<img src="images/Sharon.png" alt=Sharon Brinkely style="width:253px";>';
        echo nl2br("\n<h2>$sharon_name</h2>");
        echo nl2br("\nJob Title: $sharon_jobTitle");
        echo nl2br("\nDepartment $sharon_department");
        echo nl2br("\nEducation: $sharonl_degree");
        echo nl2br("\nHobbies: $sharon_hobby");
        ?>
    </div>

</body>

<br>
<br>

<footer>
    <p>Validated by:</p>
    <a href="https://validator.w3.org/check?uri=referer"><img src="https://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88"></a>
    <a href="https://jigsaw.w3.org/css-validator/check/referer"><img src="https://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS"></a>
    <p>Last modified: <?php echo date("F d Y H:i:s.", filemtime("HeadRep.php")); ?></p>
</footer>


</html>