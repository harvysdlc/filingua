<?php
require '../server/config.php';

if(!empty($_SESSION["email"])){
    $email = $_SESSION["email"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    
    if ($row = mysqli_fetch_assoc($result)) {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
    } else {
        // Handle the case where no user with the provided email was found.
        header("Location: login.php");
        exit; // Terminate the script to prevent further execution.
    }
} else {
    header("Location: login.php");
    exit; // Terminate the script to prevent further execution.
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filingua - Learn</title>
    <link rel="stylesheet" href="../filingua/css/mainpage.css">
    <link rel="icon" type="image/png" href="../filingua/images/logo.png">
</head>
<body>
    <button onclick="window.location.href='../../filingua/registered/logout.php'">logout</button>
    <!-- Your HTML body content -->
</body>
</html>
