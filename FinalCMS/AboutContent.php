<?php
    session_start();
    include 'config.php';

    $query  = "SELECT * FROM about"; 

    $output = '';
    $statement = $db->prepare($query);
    if ($statement->execute()) {
        $result = $statement->fetchAll();
        foreach ($result as $value) {
            $delete_form = '';
            if ($_SESSION['access_level'] == "admin") {
                $delete_form = '<form action="AboutContent.php" method="post">
                        <input type="hidden" name="id" value="'.$value["id"].'">
                        <input type="submit" class="delete" name="delete" value="Delete">
                    </form>';
            }
            $output .= '
                <div class="content">
                    <p >'.$value["content"].'</p>
                    <form action="AboutContent.php" method="post">
                        <input type="hidden" name="id" value="'.$value["id"].'">
                        <input type="hidden" name="content" value="'.$value["content"].'">
                        <input type="submit" class="update" name="update" value="Update">
                    </form>
                    '.$delete_form.'
                </div>
            ';
                    
        }
    }
    if (isset($_POST['update'])) {
        $_SESSION['update_id'] = $_POST['id'];
        $_SESSION['update_content'] = $_POST['content'];
        header("Location: UpdateAbout.php");
       
    }
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $query  = "
        DELETE FROM about WHERE id = ".$id."
        ";

        $delete_stmt = $con->prepare($query);

        if ($delete_stmt->execute()) {
            echo "<script>alert('Content deleted successfully')</script>";
            echo "<meta http-equiv='refresh' content='0'>";   
        }
    }

?>
<!DOCTYPE html>
<html>

<head>
    <title>AboutUs</title>
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
        .content{
            border: 1px solid black;
            padding: 10px;
            margin-top: 10px;
        }
        .update{
            background: green;
            margin-top: 10px;
            color: white;
            padding: 10px;
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
    <div style="padding:0 30px">
        <h3>About Us</h3>
        <?php echo $output; ?>

    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>


</html>