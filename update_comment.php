<?php
    session_start();
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
        $id = $_SESSION['id'];

        if (!empty($name)) {
            if (!empty($title)) {
                if (!empty($comment)) {
                    
                    $stmt = $con->prepare("UPDATE comments SET name = ?, title = ?, comments = ? WHERE ID = ?");
                    $stmt->bind_param("ssss", $name, $title, $comment, $id);
                    if ($stmt->execute()) {
                        echo "<script>alert('Comment updated successfully.!!');</script>";

                    }else{
                        echo "<script>alert('Error occurred. Try again later!!');</script>";

                    }
                }else{
                    echo "<script>alert('Comment field is required!')</script>";
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
            <form action="update_comment.php" method="post">
                <h3>Update Comment</h3>
                <label>Name: </label>
                <input type="text" name="name" placeholder="Enter your name" value="<?php echo $_SESSION['name'] ?>"><br>
                <label>Title: </label>
                <input type="text" name="title" placeholder="Enter comment title" value="<?php echo $_SESSION['title'] ?>"><br>
                <label>Comment: </label><br>
                <textarea name="comment" placeholder="Enter your comment here"><?php echo $_SESSION['comment'] ?></textarea><br>
                <input type="submit" id="comment-btn" name="submit" value="Update">
                
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