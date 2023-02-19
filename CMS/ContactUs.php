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
        <form class="form-horizontal" method="post" action="ContactForm.php">
            <section id="last">
                <!-- heading -->
                <div class="full">
                    <h3>Contact Us!</h3>

                    <div class="lt">

                        <!-- form starting  -->
                        <form class="form-horizontal" method="post" action="contact.php">
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

                            <!-- message  -->
                            <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"></textarea>

                            <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                                <i class="fa fa-paper-plane"></i>
                                <br>
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