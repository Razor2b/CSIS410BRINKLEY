<?php
    session_start();
    include 'config.php';

    $query  = "SELECT * FROM about"; 

    $output = '';
    $statement = $db->prepare($query);
    if ($statement->execute()) {
        $result = $statement->fetchAll();
        foreach ($result as $value) {
            $output .= '
                <p>'.$value["content"].'</p>
            ';
                    
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
</head>

<body>
    <div style="padding:0 30px">
        <h3>About Us</h3>
        <img src="images/handshake.jpg" alt=HandShake Brinkely style="width:400px; position: center;";>
        <?php echo $output; ?>
    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>


</html>