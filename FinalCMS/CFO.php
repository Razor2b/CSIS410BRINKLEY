<!DOCTYPE html>
<html>

<head>
    <title>Employee Charles Brinkley</title>
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
        echo '<img src="images/Chuck.jpg" alt="Charles Brinkley" style="width:253px;">';
        echo nl2br("\n<h2>$charles_name</h2>");
        echo nl2br("\nJob Title: $charles_jobTitle");
        echo nl2br("\nDepartment: $charles_department");
        echo nl2br("\nEducation: $charles_degree");
        echo nl2br("\nHobbies: $charles_hobby");
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