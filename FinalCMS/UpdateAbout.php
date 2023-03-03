<?php
session_start();
include 'config.php';

if (isset($_POST['add'])) {
    $content = $_POST["content"];

    $stmt = "UPDATE `about` SET `content`='$content' WHERE id = '" . $_SESSION["update_id"] . "'";
    if (mysqli_query($con, $stmt)) {
        echo "<script>alert('Content updated successfully.!!');</script>";
    } else {
        echo "<script>alert('Something went wrong.')</script>";
    }
    $_SESSION['update_content'] = $_POST['content'];
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
        <h2>Update About Us Content</h2>
        <form action="UpdateAbout.php" method="post">
            <label>Content: </label><br>
            <textarea style="width: 700px; height: 200px;" name="content" placeholder="Write Content"><?php echo $_SESSION['update_content']; ?></textarea><br>

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