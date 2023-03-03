<?php
session_start();
include 'config.php';

// Set the username and password for each account
$accounts = array(
    'admin' => 'admin',
    'publisher' => 'publisher',
    'customer' => 'customer'
);

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $timestamp = date('Y-m-d H:i:s');

    $sql = $con->prepare("select id, access_level, firstname, lastname, email from user where username = ? and password = ? limit 1");
    $sql->bind_param("ss", $username, $password);
    $sql->execute();

    $result = $sql->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row["id"];
        $_SESSION['access_level'] = $row["access_level"];
        $_SESSION['firstname'] = $row["firstname"];
        $_SESSION['lastname'] = $row["lastname"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['username'] = $username;

        $stmt = "UPDATE `user` SET `login_timestamp`='$timestamp' WHERE id = '" . $_SESSION["user_id"] . "'";
        mysqli_query($con, $stmt);

        header("Location: index.php");
    } else {
        $error_message = "Incorrect email or password";
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
        <form method="post" action="login.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <br>
            <br>
            <div class="password-container" id="password-container">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password...">
                <i class="fa-solid fa-eye" id="show-password"></i>
            </div>

            <br>
            <br>
            <!-- <button type="submit">Login</button> -->
            <input type="submit" name="login" value="Login">
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