<!DOCTYPE html>
<html>

<head>
    <title>Update Employee Information</title>
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
    <div style="padding:0 30px">
        <?php
        $EmployeeName = $_POST['EmployeeName'];

        // switch case to determine name and picture to use
        switch ($EmployeeName) {
            case 'rachel':
                $picture = "SelfPhoto.jpg";
                $name = "Rachel Brinkley - CEO";
                break;
            case 'charles':
                $picture = "Chuck.jpg";
                $name = "Charles Brinkley - CFO";
                break;
            case 'kelly':
                $picture = "Kelly.jpg";
                $name = "Christopher Kelly - IT Manager";
                break;
            case 'sharon':
                $picture = "Sharon.png";
                $name = "Sharon Brinkley - Head Sales Rep.";
                break;
            case 'collin':
                $picture = "Collin.jpg";
                $name = "Collin Miller - Sales Rep.";
                break;
            case 'carol':
                $picture = "Carol.jpg";
                $name = "Carol Martin - Machine Mechanic Manager";
                break;
        }

        // Declare variables
        $okay = TRUE;

        // Storing informaiton from UpdateForm.php
        $degree = $_POST['degree'];
        $hobby = $_POST['hobby'];
        $project = $_POST['project'];

        // Storing information in array
        $employee = array(
            'degree' => "$degree",
            'hobby' => "$hobby",
            'project' => "$project"
        );
        ?>

    </div>
</body>
<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>

</html>