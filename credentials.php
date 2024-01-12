<?php

require '../filingua/server/config.php';

if(isset($_POST['submit'])) {
    ini_set('SMTP', 'smtp.gmail.com'); // Update with your mail server address
    ini_set('smtp_port', '587'); // Update with your mail server port
    $email = $_POST["email"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $password = $_POST["password"];


    $to = $email;  // Replace with the actual recipient email address
    $subject = 'Welcome to Filingua!';
    $message = 'A new user signed up with the email: ' . $email. '<br>Password: ' .$password;
    $headers = 'From: harvysdlc@gmail.com';  // Replace with the actual sender email address

    // Send the email
    mail($to, $subject, $message, $headers);
    exit();
}
?>
