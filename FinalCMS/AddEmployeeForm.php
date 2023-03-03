<?php
    session_start();
    include 'config.php';

    if (isset($_POST['add'])) {
        $name = $_POST["name"];
        $title = $_POST["title"];
        $department = $_POST["department"];
        $education = $_POST["education"];
        $hobbies = $_POST["hobbies"];
        $project = $_POST["project"];

        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $target_dir = "images/";

        $stmt = $con->prepare("INSERT INTO `employee`(`name`, `job_title`, `department`, `education`, `hobbies`, `project`, `image`) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $name, $title, $department, $education, $hobbies, $project, $file_name);
        if ($stmt->execute()) {
            move_uploaded_file($file_tmp, $target_dir.$file_name);
            echo "<script>alert('Employee added successfully.!!');</script>";

        }else{
            echo "<script>alert('Error occurred. Try again later!!');</script>";

        }
        
    }

?>

<!DOCTYPE html>
<html>

<head>
    <title>Employee Directory</title>
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
        form{
            border: 1px solid grey;
            padding: 10px;
            width: 30%;
        }
        form input{
            padding: 8px;
            margin-top: 2px;
        }
    </style>
</head>

<body>
    <div style="padding:0 30px">
        <h2>Add Employee</h2>
        <form action="AddEmployeeForm.php" method="post" enctype="multipart/form-data">
            <label>Name: </label>
            <input type="text" name="name" placeholder="Enter name" required><br>
            <label>Job Title: </label>
            <input type="text" name="title" placeholder="Enter job title" required><br>  
            <label>Department: </label>
            <input type="text" name="department" placeholder="Enter department" required><br>
            <label>Education: </label>
            <input type="text" name="education" placeholder="Enter education" required><br>  
            <label>Hobbies: </label>
            <input type="text" name="hobbies" placeholder="Enter hobbies" required><br>
            <label>Project: </label>
            <input type="text" name="project" placeholder="Enter project" required><br> 
            <label>Image: </label>
            <input type="file" name="image"><br>
            <input type="submit" name="add" value="ADD">
            
        </form>

    </div>
    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>

<html>