<?php
session_start();

// Set the username and password for each account
$accounts = array(
    'admin' => 'admin',
    'publisher' => 'publisher',
    'customer' => 'customer'
);

// Check if the user has submitted the login form
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password match an account
    if (isset($accounts[$username]) && $accounts[$username] == $password) {
        // Set the username and access level in the session
        $_SESSION['username'] = $username;
        $_SESSION['access_level'] = $username;

        // Redirect to the appropriate page
        if ($username == 'admin') {
            header('Location: admin.php');
            exit();
        } else if ($username == 'publisher') {
            header('Location: publisher.php');
            exit();
        } else if ($username == 'customer') {
            header('Location: customer.php');
            exit();
        }
    } else {
        $error = 'Invalid username or password.';
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Log In</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Style1.css">
    <link rel="shortcut icon" href="/images/Ducklogo.jpg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!--    
        Rachel Brinkley's Liberty University CSIS410 B01 web project
    -->

    <?php include "header.html"; ?>
    <?php include "menu.php"; ?>
</head>

<body>
    <div style="padding:0 30px">
        <h3>Input your login information</h3>
        <br>

        <?php if (isset($error)) : ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post" action="" id="login-form">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <br>
            <br>
            <div class="password-container" id="password-container">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <i class="fa-solid fa-eye" id="show-password"></i>
            </div>
            <br>
            <br>
            <button type="submit">Login</button>
        </form>
        <script src="PasswordEye.js"></script>
    </div>
</body>
<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>

</html>