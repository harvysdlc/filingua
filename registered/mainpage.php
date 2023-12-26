<?php
require '../server/config.php';
session_start();

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
    <link rel="stylesheet" href="../../filingua/css/mainpage.css">
    <link rel="icon" type="image/png" href="../../filingua/images/logo.png">
</head>
<body>
    <style>
        body {
            background-color: #ffbd59;
        }
    </style>
    <div class="stage">
        <div class="logo">
            <img src="../../filingua/images/textimage.png" alt="">
        </div>
        <div class="buttons">
            <button onclick="window.location.href='../../filingua/registered/mainpage.php'">Mag-Aral</button>
            <button onclick="window.location.href='../../filingua/registered/practice.php'">Magsanay</button>
            <button onclick="window.location.href='../../filingua/registered/profile.php'">Profile</button>
            <button onclick="window.location.href='../../filingua/registered/about.php'">About</button>
            <button onclick="window.location.href='../../filingua/registered/logout.php'">Logout</button>
        </div>
    </div>
    <div class="languages">
        <a href="../../filingua/lessons/tagalog/landing.php">
            <img src="../../filingua/images/tagalog.png" alt="Tagalog">
        </a>
        <a href="../../filingua/lessons/bicolano/landing.php">
            <img src="../../filingua/images/bicolano.png" alt="Bicolano">
        </a>
        <a href="../../filingua/lessons/cebuano/landing.php">
            <img src="../../filingua/images/cebuano.png" alt="Cebuano">
        </a>
        <a href="../../filingua/lessons/ilocano/landing.php">
            <img src="../../filingua/images/ilocano.png" alt="Ilocano">
        </a>
        <a href="../../filingua/lessons/kapampangan/landing.php">
            <img src="../../filingua/images/kapampangan.png" alt="Kapampangan">
        </a>
        <a href="../../filingua/lessons/pangasinense/landing.php">
            <img src="../../filingua/images/pangasinense.png" alt="Pangasinense">
        </a>
	</div>
    
</body>
</html>
