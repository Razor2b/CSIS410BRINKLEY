<!DOCTYPE html>
<html>

<head>
    <title>Employee Rachel Brinkley</title>
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
        echo '<img src="images/SelfPhoto.jpg" alt=Rachel Brinkely style="width:253px";>';
        echo nl2br("\n<h2>$rachel_name</h2>");
        echo nl2br("\nJob Title: $rachel_jobTitle");
        echo nl2br("\nDepartment: $rachel_department");
        echo nl2br("\nEducation: $rachel_degree");
        echo nl2br("\nHobbies: $rachel_hobby");
        ?>
        <br>
        <p><a href="EmployeeChart.php">Back to Employee Directory</a></p>

    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>


</html>