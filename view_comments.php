<?php
    session_start();
    $username = "rbrinkley";
    $password = "Razor77!";
    $dbName = "rachelbrinkley";
    try{
        if ($conn = mysqli_connect("localhost", $username, $password, $dbName)) {
            
            
        }else{
            throw new Exception("Error Processing Request", 1);
            
        }
    }
    catch(Exception $e){
        echo $e->getMessage();

    } 
    
    $query  = "SELECT * FROM comments ORDER By ID DESC";
    $result = mysqli_query($conn, $query);

    $output = '';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            
            $output .= '<div class="comment">
                <label class="name"><b>'.$row["name"].'</b></label><br>
                <label class="com-title">'.$row["title"].'</label><br>
                <label class="date">'.$row["commentdate"].'</label>
                <p>'.$row["comments"].'</p>
                <div class="update-remove">
                    <form action="view_comments.php" method="post">
                        <input type="hidden" name="id" value="'.$row["ID"].'"/>
                        <input type="hidden" name="name" value="'.$row["name"].'"/>
                        <input type="hidden" name="title" value="'.$row["title"].'"/>
                        <input type="hidden" name="comment" value="'.$row["comments"].'"/>
                        <input type="submit" class="update" name="update" value="Update">
                    </form>
                    <form action="view_comments.php" method="post">
                        <input type="hidden" name="id" value="'.$row["ID"].'"/>
                        <input type="submit" class="remove" name="remove" value="Remove">
                    </form>
                    
                </div>
                
                <hr>
            </div>';
        }
        
    } else {
        echo "0 results";
    }
    if (isset($_POST['update'])) {
        $_SESSION['id'] = $_POST['id'];
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['title'] = $_POST['title'];
        $_SESSION['comment'] = $_POST['comment'];
        header("Location: update_comment.php");
    }
    if (isset($_POST['remove'])) {
        $id = $_POST['id'];
        $query  = "DELETE FROM comments WHERE ID = '$id'";

        $delete_stmt = $conn->prepare($query);

        if ($delete_stmt->execute()) {
            echo "<script>alert('Comment removed successfully')</script>";
            echo "<meta http-equiv='refresh' content='0'>";
   
        }else{
            echo "<script>alert('Error occurred. Try again later.')</script>";
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
        .comment .name{
            font-size: 25px;
            margin: 0;
        }
        .comment .com-title{
            font-size: 25px;
            margin: 0;
        }
        .comment .date{
            font-size: 20px;
            color: blue;
        }
        .update-remove{
            display: flex;
        }
        .update-remove .update{
            background: green;
            padding: 10px;
            color: white;
        }
        .update-remove .remove{
            background: red;
            padding: 10px;
            color: white;
            margin-left: 30px;
        }
        
        
    </style>
</head>

<body>
    <div style="padding:0 30px" class="div-comment">
        <?php echo $output; ?>
    </div>


</body>

<br>
<br>

<footer>
    <?php include "footer.php";?>
</footer>


</html>