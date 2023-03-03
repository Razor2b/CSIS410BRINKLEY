<?php
    session_start();
    include 'config.php';

    $query  = "SELECT * FROM employee"; 

    $output = '';
    $statement = $db->prepare($query);
    if ($statement->execute()) {
        $result = $statement->fetchAll();
        foreach ($result as $value) {
            $job_title = $value["job_title"];
            $id = $value["id"];
            $link = "";
            if($job_title == "CEO"){
                $link = "CEO.php?id=".$id;
            }else if($job_title == "CFO"){
                $link = "CFO.php?id=".$id;
            }else if($job_title == "IT Manager"){
                $link = "ITManager.php?id=".$id;
            }else if($job_title == "Head Sales Rep"){
                $link = "HeadRep.php?id=".$id;
            }else if($job_title == "Sales Rep"){
                $link = "SalesRep.php?id=".$id;
            }else if($job_title == "Machine Mechanic Manager"){
                $link = "Mechanic.php?id=".$id;
            }else{
                $link = "NewEmployee.php?id=".$id;
            }
            $output .= '
                <p>'.$value["name"].' - '.$value["job_title"].'</p>
                <a href="'.$link.'">More Information</a>
                <br>
                <br>
            ';
                    
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
</head>

<body>
    <div style="padding:0 30px">
        <h3>Employee Directory</h3>
        <p>Meet the amazing employees at Razor's Medical Equipment.</p>
        <br>
        <h3>Please select a team member from the list to view information.</h3>

        <?php echo $output; ?>

    </div>
    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>

<html>