<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="shortcut icon" href="images/Ducklogo.jpg" />

    <!--    
        Rachel Brinkley's Liberty University CSIS410 B01 web project
    -->

    <?php include "header.html"; ?>
</head>

<body>
    <div style="padding:0 30px">
        <h3>Rachel Brinkley's Website for CSIS 410 B01 class</h3>
        <p>Enjoy my website Site! This is the Home page.</p>
        <br>
        <p>Each folder above on the navbar is the Module Week topics. It was easier to have a smaller title.</p>
        <p>Module 1: Week 1 Foundations</p>
        <p>Module 1: Week 1 Variables</p>
        <p>Module 2: Week 2 Forms</p>
        <p>Module 3: Week 3 Arrays</p>
        <p>Module 4: Week 4 Sessions</p>
        <p>Module 5: Week 5 CMS Sessions</p>
        <p>Module 6: Week 6 Database</p>
        <p>Module 8: Week 8 CMS Database</p>
        <br>
        <p>I also upload my code to my GitHub repository before I "turn in" my asisgnments. (When I have finshished and have turned in the Word Doc.)</p>
        <p><a href="https://github.com/Razor2b/CSIS410BRINKLEY">CSIS 410 GitHub repository.</a></p>

    </div>

</body>

<br>
<br>

<footer>
    <p>Validated by:</p>
    <a href="https://validator.w3.org/check?uri=referer"><img src="https://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88"></a>
    <a href="https://jigsaw.w3.org/css-validator/check/referer"><img src="https://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS"></a>
    <p>Last modified: <?php echo date("F d Y H:i:s.", filemtime("index.php")); ?></p>
</footer>


</html>