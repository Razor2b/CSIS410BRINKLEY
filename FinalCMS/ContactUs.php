<?php
include 'config.php';
session_start();
if (isset($_POST['send'])) {
    // Get data from form 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    //This below line is a code to Send form entries to database
    $sql = "INSERT INTO contactform_entries (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    //fire query to save entries and check it with if statement
    $rs = mysqli_query($con, $sql);
    if ($rs) {
        echo "<script>alert('Message has been sent successfully!');</script>";
    } else {
        echo "<script>alert('Error, Message didn't send! Something Went Wrong.');</script>";
    }
}
?>




<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
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
        <form class="form-horizontal" method="post" action="ContactUs.php">
            <section id="last">
                <!-- heading -->
                <div class="full">
                    <h3>Contact Us!</h3>

                    <div class="lt">

                        <!-- form starting  -->
                        <form class="form-horizontal" method="post" action="ContactUs.php">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <!-- name  -->
                                    <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" />
                                </div>
                            </div>
                            <br>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <!-- email  -->
                                    <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" />
                                </div>
                            </div>
                            <br>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <!-- phone  -->
                                    <input type="phone" class="form-control" id="phone" placeholder="PHONE NUMBER" name="phone" value="" />
                                </div>
                            </div>
                            <br>

                            <!-- message  -->
                            <textarea class="form-control" id="message" rows="10" placeholder="MESSAGE" name="message"></textarea>
                            <br>
                            <br>
                            <button class="btn btn-primary send-button" id="submit" name="send" type="submit" value="SEND">
                                <i class="fa fa-paper-plane"></i>
                                <span class="send-text">SEND</span>
                            </button>
                        </form>
                    </div>
                    <!-- end of form -->

                    <!-- Contact information -->
                    <div class="rt">
                        <ul class="contact-list">
                            <li class="list-item">
                                <i class="fa fa-map-marker fa-1x">
                                    <span class="contact-text place">
                                        We would love to start the process for your easy equipment ordering.
                                    </span>
                                </i>
                            </li>

                            <li class="list-item">
                                <i class="fa fa-envelope fa-1x">
                                    <span class="contact-text gmail">
                                        <a href="mailto:ContactUs@email.com" title="Send me an email">
                                            ContactUs@email.com</a>
                                    </span>
                                </i>
                            </li>

                            <li class="list-item">
                                <i class="fa fa-phone fa-1x">
                                    <span class="contact-text phone">
                                        Call us toll free at 1(800)-555-5323
                                    </span>
                                </i>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
    </div>

</body>

<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>


</html>