<footer align="center">
    <hr width="900px" size="2" noshade="noshade" color="black" align="center">
    <div style="padding:0 30px">
        <p>Validated by:</p>
        <a href="https://validator.w3.org/check?uri=referer"><img src="https://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88"></a>
        <a href="https://jigsaw.w3.org/css-validator/check/referer"><img src="https://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS"></a>

        <p>Last modified:
            <?php
            $timestamp = filemtime(__FILE__);
            $date_time = new DateTime();
            $date_time->setTimezone(new DateTimeZone("America/New_York"));
            $date_time->setTimestamp($timestamp);

            echo $date_time->format("F j Y g:i a.");
            ?>
        </p>
    </div>
</footer>