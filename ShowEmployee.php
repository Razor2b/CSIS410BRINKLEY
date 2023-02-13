<html>

<head>
    <title>Update Employee Information</title>
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
        <h2><?php require("EmployeeArray.php");
            echo "$name"; ?></h2>

        <img src="images/<?php echo "$picture"; ?>" style="width:253px" ;>
        <br>
        <br>

        <!--Information-->
        <?php

        // Validation
        if (empty($employee['degree'])) {
            print "YOUR DEGREE OR CERTIFICATIONS NEEDS TO BE ENTERED.";
            $okay = FALSE;
        }

        if (empty($employee['hobby'])) {
            print "A HOBBY NEEDS TO BE ENETERED.";
            $okay = FALSE;
        }

        if (empty($employee['project'])) {
            print "A PROJECT NEEDS TO BE ENTERED.";
            $okay = FALSE;
        }
        ?>
        <!--Prints out information-->
        <ul style="list-style-type:none;">
            <li>Education:  <?php echo $employee['degree']; ?></li>
            <br>
            <li>Hobby:  <?php echo $employee['hobby']; ?></li>
            <br>
            <li>Current Project:  <?php echo $employee['project']; ?></li>
        </ul>

    </div>
</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>

</html>