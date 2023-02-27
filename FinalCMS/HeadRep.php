<!DOCTYPE html>
<html>

<head>
    <title>Employee Sharon Brinkley</title>
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
    <br>
    <div style="padding:0 30px; float:center;">
        <?php require("Variables.php");
        //Information
        echo '<img src="images/Sharon.png" alt=Sharon Brinkely style="width:253px";>';
        echo nl2br("\n<h2>$sharon_name</h2>");
        echo nl2br("\nJob Title: $sharon_jobTitle");
        echo nl2br("\nDepartment: $sharon_department");
        echo nl2br("\nEducation: $sharon_degree");
        echo nl2br("\nHobbies: $sharon_hobby");
        ?>
        <br>
        <p><a href="EmployeeChart.php">Back to Employee Directory</a></p>
    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>


</html>