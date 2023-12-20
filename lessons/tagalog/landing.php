<?php
require '../../server/config.php';

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
    <title>Filingua - Tagalog</title>
    <link rel="stylesheet" href="../../../filingua/lessons/tagalog/css/landing.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
</head>
<body>
    <style>
        body {
            background-image: url(../../../filingua/images/static.jpg);
            background-size: cover; /* Cover the entire viewport */
            background-repeat: no-repeat; /* Do not repeat the background image */
        }
    </style>
    <div class="label">
            <h2>Mag-Aral ng Tagalog</h2>
            <p>Learn Tagalog at Filingua</p>
        </div>
    <div class="languages">
        <a href="../../../filingua/lessons/tagalog/aralin1.php">
            <img src="../../../filingua/lessons/tagalog/images/A1.png" alt="Aralin 1">
        </a>
        <a href="../../../filingua/lessons/tagalog/aralin2.php">
            <img src="../../../filingua/lessons/tagalog/images/A2.png" alt="Aralin 2">
        </a>
        <a href="../../../filingua/lessons/tagalog/aralin3.php">
            <img src="../../../filingua/lessons/tagalog/images/A3.png" alt="Aralin 3">
        </a>
        <a href="../../../filingua/lessons/tagalog/aralin4.php">
            <img src="../../../filingua/lessons/tagalog/images/A4.png" alt="Aralin 4">
        </a>
        <a href="../../../filingua/lessons/tagalog/aralin5.php">
            <img src="../../../filingua/lessons/tagalog/images/A5.png" alt="Aralin 5">
        </a>
        <a href="../../../filingua/lessons/tagalog/aralin6.php">
            <img src="../../../filingua/lessons/tagalog/images/A6.png" alt="Aralin 6">
        </a>
        <a href="../../../filingua/lessons/tagalog/aralin7.php">
            <img src="../../../filingua/lessons/tagalog/images/A7.png" alt="Aralin 7">
        </a>
        <a href="../../../filingua/lessons/tagalog/aralin8.php">
            <img src="../../../filingua/lessons/tagalog/images/A8.png" alt="Aralin 8">
        </a>
        <a href="../../../filingua/lessons/tagalog/aralin9.php">
            <img src="../../../filingua/lessons/tagalog/images/A9.png" alt="Aralin 9">
        </a>
	</div>
    
</body>
</html>
