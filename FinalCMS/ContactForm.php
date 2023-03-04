<?php
include 'config.php';
if (isset($_POST['submit'])) {
    // Get data from form 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    //This below line is a code to Send form entries to database
    $sql = "INSERT INTO contactform_entries (id, name, email, phone, message) VALUES ('0', '$name', '$email', '$phone', '$message')";
    //fire query to save entries and check it with if statement
    $rs = mysqli_query($con, $sql);
    if ($rs) {
        echo "Message has been sent successfully!";
    } else {
        echo "Error, Message didn't send! Something Went Wrong.";
    }

    // Redirect to
    header("Location:ContactUs.php");
}
?>

