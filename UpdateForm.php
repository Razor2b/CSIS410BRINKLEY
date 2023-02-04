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
        <h2>Update Your Employee Profile</h2>
        <p>Please select your name and input the updated information.</p>

        <form action="EmployeeArray.php" method="post">
            <select name="EmployeeName">
                <option value="rachel">Rachel Brinkley</option>
                <option value="charles">Charles Brinkley</option>
                <option value="kelly">Christopher Kelly</option>
                <option value="sharon">Sharon Brinkley</option>
                <option value="collin">Collin Miller</option>
                <option value="carol">Carol Martin</option>
            </select>
            <br>
            <br>
            Education: <input type="text" name="degree">
            <br>
            <br>
            Hobby: <input type="text" name="hobby">
            <br>
            <br>
            Current Project: <input type="text" name="project">
            <br>
            <br>

            <input type="submit" formaction="ShowEmployee.php">
        </form>

    </div>
</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>

</html>