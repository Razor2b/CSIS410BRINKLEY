<?php
    $username = "rbrinkley";
    $password = "Razor77!";
    $dbName = "rachelbrinkley";
    try{
        if ($con = mysqli_connect("localhost", $username, $password, $dbName)) {
            
            
        }else{
            throw new Exception("Error Processing Request", 1);
            
        }
    }
    catch(Exception $e){
        echo $e->getMessage();

    } 
    
    if (isset($_POST['submit'])) {
        $name = $_POST["name"];
        $title = $_POST["title"];
        $comment = $_POST["comment"];

        if (!empty($name)) {
            if (!empty($title)) {
                if (!empty($comment)) {
                    $stmt = $con->prepare("INSERT INTO `comments`(`name`, `title`, `comments`) VALUES (?, ?, ?)");
                    $stmt->bind_param("sss", $name, $title, $comment);
                    if ($stmt->execute()) {
                        echo "<script>alert('Comment submitted successfully.!!');</script>";

                    }else{
                        echo "<script>alert('Error occurred. Try again later!!');</script>";

                    }
                
                    }else{
                        echo "<script>alert('Title field is required!')</script>";
                    }
            }else{
                echo "<script>alert('Title field is required!')</script>";
            }
        }else{
            echo "<script>alert('Name field is required!')</script>";
        }
    }
    
?>
<!DOCTYPE html>
<html>

<head>
    <title>Comments</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="shortcut icon" href="images/Ducklogo.jpg" />

    <!--    
        Rachel Brinkley's Liberty University CSIS410 B01 web project
    -->

    <?php include "header.html"; ?>
    <style>
        .add-comment input{
            padding: 10px;
        }
        .add-comment textarea{
            padding: 10px;
            width: 300px;
            height: 100px;
        }
        #comment-btn{
            background: green;
            color: white;
            width: 100px;
        }
        
    </style>
</head>

<body>
    <div style="padding:0 30px" class="div-comment">
        <div class="add-comment">
            <form action="comments.php" method="post">
                <h3>Comment Section</h3>
                <label>Name: </label>
                <input type="text" name="name" placeholder="Enter your name"><br>
                <label>Title: </label>
                <input type="text" name="title" placeholder="Enter comment title"><br>
                <label>Comment: </label><br>
                <textarea name="comment" placeholder="Enter your comment here"></textarea><br>
                <input type="submit" id="comment-btn" name="submit" value="Submit">
                
            </form>
        </div>
    </div>


</body>

<br>
<br>

<footer>
    <?php include "footer.php";?>
</footer>


</html>