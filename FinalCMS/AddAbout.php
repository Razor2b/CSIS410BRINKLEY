<?php
    session_start();
    include 'config.php';

    if (isset($_POST['add'])) {
        $content = $_POST["content"];

        $stmt = $con->prepare("INSERT INTO `about`(`content`) VALUES (?)");
        $stmt->bind_param("s", $content);
        if ($stmt->execute()) {
            echo "<script>alert('Content added successfully.!!');</script>";

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


    <?php include "header.html"; ?>
    <?php include "menu.php"; ?>
</head>

<body>
    <div style="padding:0 30px">
        <h2>Add About Us Content</h2>
        <form action="AddAbout.php" method="post">
            <label>Content: </label><br>
            <textarea style="width: 700px; height: 200px;" name="content" placeholder="Write Content"></textarea><br>
            
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