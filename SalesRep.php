<!DOCTYPE html>
<html>

<head>
    <title>Employee Collin Miller</title>
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
    <div style="padding:0 30px; float:center;">
        <?php require("Variables.php");
        //Information
        echo '<img src="images/Collin.jpg" alt=Collin Miller style="width:253px";>';
        echo nl2br("\n<h2>$collin_name</h2>");
        echo nl2br("\nJob Title: $collin_jobTitle");
        echo nl2br("\nDepartment $collin_department");
        echo nl2br("\nEducation: $collin_degree");
        echo nl2br("\nHobbies: $collin_hobby");
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