<?php
// Start the session
session_start();
?>
<footer style="padding:0 30px" align="center">
    <hr width="900px" size="2" noshade="noshade" color="black" align="center">
    <a href="https://www.linkedin.com/in/rachel-brinkley-65950017b/" target="_blank"> <img src="images/LinkedIn_logo.png" style="width:50px;" /></a>
    <a href="https://twitter.com/LadyCoder77" target="_blank"> <img src="images/Twitter_logo.png" style="width:50px;" /></a>

    <p>
        <?php
        if (!isset($_SESSION['access_level'])) {
            echo " USER NOT LOGGED IN. <a href='login.php'>Log In here</a>";
        } else echo " User: {$_SESSION['access_level']}";
        if (isset($_SESSION['access_level'])) {
            echo " <a href='LogoutQuestion.php'>Logout</a>";
        }

        echo "<br>";
        echo "<br>";
        echo "Last modified:";
        $timestamp = filemtime(__FILE__);
        $date_time = new DateTime();
        $date_time->setTimezone(new DateTimeZone("America/New_York"));
        $date_time->setTimestamp($timestamp);
        echo $date_time->format("F j Y g:i a.");

        ?>

    </p>

    <p>Validated by:</p>
    <a href="https://validator.w3.org/check?uri=referer"><img src="https://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88"></a>
    <a href="https://jigsaw.w3.org/css-validator/check/referer"><img src="https://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS"></a>
</footer>