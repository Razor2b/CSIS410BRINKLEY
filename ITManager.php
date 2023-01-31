<!DOCTYPE html>
<html>

<head>
    <title>Employee Christopher Kelly</title>
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
        echo '<img src="images/Kelly.jpg" alt="Christopher Kelly" style="width:253px;">';
        echo nl2br("\n<h2>$kelly_name</h2>");
        echo nl2br("\nJob Title: $kelly_jobTitle");
        echo nl2br("\nDepartment: $kelly_department");
        echo nl2br("\nEducation: $kelly_degree");
        echo nl2br("\nHobbies: $kelly_hobby");
        ?>
    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>


</html>