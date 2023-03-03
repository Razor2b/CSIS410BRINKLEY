<?php 
    session_start();
    include 'config.php';
    $id = $_GET['id'];

    $name = "";
    $job_title = "";
    $department = "";
    $education  = "";
    $hobbies = "";
    $project = "";
    $image = "";
    
    $sql = $con->prepare("select name, job_title, department, education, hobbies, project, image from employee where id = ? limit 1");
    $sql->bind_param("s", $id);
    $sql->execute();

    $result = $sql->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $name = $row["name"];
        $job_title = $row["job_title"];
        $department = $row["department"];
        $education  = $row["education"];
        $hobbies = $row["hobbies"];
        $project = $row["project"];
        $image = $row["image"];
    }
    if (isset($_POST['delete'])) {
        $query  = "
        DELETE FROM employee WHERE id = ".$id."
        ";

        $delete_stmt = $con->prepare($query);

        if ($delete_stmt->execute()) {
            echo "<script>alert('Employee deleted successfully')</script>";
            header("Location: EmployeeChart.php");  
        }
    }


?>
<!DOCTYPE html>
<html>

<head>
    <title>Employee Christopher Kelly</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Style1.css">
    <link rel="shortcut icon" href="/images/Ducklogo.jpg" />

    <!--    
        Rachel Brinkley's Liberty University CSIS410 B01 web project
    -->

    <?php include "header.html"; ?>
    <?php include "menu.php"; ?>
    <style>
        #update-btn{
            background: green;
            color: white;
            padding: 10px;
            border-radius: 20px;
        }
        .delete{
            background: red;
            margin-top: 10px;
            color: white;
            padding: 10px;
        }
    </style>
</head>

<body>
    <br>
    <div style="padding:0 30px; float:center;">
        <?php require("Variables.php");
        echo '<img src="images/'.$image.'" alt="Christopher Kelly" style="width:253px";>';
        echo nl2br("\n<h2>".$name."</h2>");
        echo nl2br("\nJob Title: ".$job_title);
        echo nl2br("\nDepartment: ".$department);
        echo nl2br("\nEducation: ".$education);
        echo nl2br("\nHobbies: ".$hobbies);
        echo nl2br("\nProject: ".$project);
        $_SESSION['emp_id'] = $id;
        $_SESSION['emp_name'] = $name;
        $_SESSION['emp_title'] = $job_title;
        $_SESSION['emp_depart'] = $department;
        $_SESSION['emp_education'] = $education;
        $_SESSION['emp_hobbies'] = $hobbies;
        $_SESSION['emp_project'] = $project;
        ?>
        
        <br>
        <p><a href="EmployeeChart.php">Back to Employee Directory</a></p>
        <?php
            echo '<a id="update-btn" href="UpdateEmployeeForm.php">Update this Employee</a>';
             if ($_SESSION['access_level'] == "admin") {
                echo '<form action="CFO.php?id='.$id.'" method="post">
                        <input type="submit" class="delete" name="delete" value="Delete">
                    </form>';
            }
        ?>
    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>


</html>