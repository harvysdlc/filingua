<?php
require '../filingua/server/config.php';
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $new_password = $_POST['new_password'];

    // Check if email, first name, and last name match in the database
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email' AND first_name = '$first_name' AND last_name = '$last_name'");
    if (mysqli_num_rows($result) > 0) {
        // Encode the new password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        // Update the password in the database
        $updateQuery = "UPDATE tb_user SET password = '$hashed_password' WHERE email = '$email'";
        if (mysqli_query($conn, $updateQuery)) {
            echo "<script>alert('Password updated successfully.');</script>";
            // Redirect to login.php
            header("Location: login.php");
            exit();
        } else {
            echo "<script>alert('Error updating password. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Email, first name, or last name does not match.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Filingua</title>
    <link rel="stylesheet" href="../filingua/css/forgot.css">
    <link rel="icon" type="image/png" href="../filingua/images/logo.png">
</head>
<body>
    <div class="overall">
        <form class="login" action="" method="post" autocomplete="off">
            <a href="../filingua/login.php" class="back">
                <img src="../filingua/images/back.png" alt="Icon" style="width: 50px; height: 50px;">
            </a>
            <h2>Forgot Password</h2>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Email" required value=""> <br>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" placeholder="First Name" required value=""> <br>
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" placeholder="Last Name" required value=""> <br>
            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" id="new_password" placeholder="New Password" required value=""> <br><br>
            <div class="submitbtn">
                <button type="submit" name="submit">Reset Password</button>
            </div>
        </form>
    </div>
</body>
</html>
