<?php
session_start();
include 'config.php';

$id = $_SESSION['emp_id'];
$name = $_SESSION['emp_name'];
$title = $_SESSION['emp_title'];
$department = $_SESSION['emp_depart'];
$education = $_SESSION['emp_education'];
$hobbies = $_SESSION['emp_hobbies'];
$project = $_SESSION['emp_project'];

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

    $hasFile = false;

    if (filesize($file_tmp) == 0) {
        $hasFile = false;
    } else {
        $hasFile = true;
    }

    if ($hasFile) {
        $stmt = "UPDATE `employee` SET `name`='$name',`job_title`='$title',`department`='$department',`education`='$education',`hobbies`='$hobbies',`project`='$project',`image`='$file_name' WHERE id = '" . $_SESSION["emp_id"] . "'";
        if (mysqli_query($con, $stmt)) {
            move_uploaded_file($file_tmp, $target_dir . $file_name);
            echo "<script>alert('Employee updated successfully.!!');</script>";
        } else {
            echo "<script>alert('Something went wrong.')</script>";
        }
    } else {
        $stmt = "UPDATE `employee` SET `name`='$name',`job_title`='$title',`department`='$department',`education`='$education',`hobbies`='$hobbies',`project`='$project' WHERE id = '" . $_SESSION["emp_id"] . "'";
        if (mysqli_query($con, $stmt)) {
            echo "<script>alert('Employee updated successfully.!!');</script>";
        } else {
            echo "<script>alert('Something went wrong.')</script>";
        }
    }
}

?>
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
    <style>
        form {
            border: 1px solid grey;
            padding: 10px;
            width: 30%;
        }

        form input {
            padding: 8px;
            margin-top: 2px;
        }
    </style>
</head>

<body>
    <div style="padding:0 30px">
        <p>Welcome,</p>
        <?php echo "<h2>Update " . $name . " - " . $title . " Profile</h2>"; ?>

        <form action="UpdateEmployeeForm.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
            <label>Name: </label>
            <input type="text" name="name" placeholder="Enter name" value="<?php echo $name ?>" required><br>
            <label>Job Title: </label>
            <input type="text" name="title" placeholder="Enter job title" value="<?php echo $title ?>" required><br>
            <label>Department: </label>
            <input type="text" name="department" placeholder="Enter department" value="<?php echo $department ?>" required><br>
            <label>Education: </label>
            <input type="text" name="education" placeholder="Enter education" value="<?php echo $education ?>" required><br>
            <label>Hobbies: </label>
            <input type="text" name="hobbies" placeholder="Enter hobbies" value="<?php echo $hobbies ?>" required><br>
            <label>Project: </label>
            <input type="text" name="project" placeholder="Enter project" value="<?php echo $project ?>" required><br>
            <label>Image: </label>
            <input type="file" name="image"><br>
            <input type="submit" name="add" value="Update">

        </form>

    </div>
</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>

</html>