<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: EmployeeChart.php');
    exit;
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username)) {
        $errors[] = 'The username field is required.';
    }

    if (empty($password)) {
        $errors[] = 'The password field is required.';
    }

    if ($username === 'customer' && $password === 'customer') {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        header('Location: EmployeeChart.php');
        exit;
    } else {
        $errors[] = 'Incorrect username or password.';
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Log In</title>
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
        <h1>Login to see Employee Directory</h1>

        <?php if (!empty($errors)) : ?>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form method="post">
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
<br>
<br>

<footer>
    <?php include "footer.php"; ?>
</footer>


</html>