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
    <style>
        body { background-color: #ffffff; }
    </style>
</head>
<body>
    <div class="stage">
        <div class="logo">
            <img src="../../../filingua/images/textimage.png" alt="">
        </div>
        <div class="buttons">
            <button onclick="window.location.href='../../../filingua/registered/mainpage.php'">Mag-Aral</button>
            <button onclick="window.location.href='../../../filingua/registered/practice.php'">Magsanay</button>
            <button onclick="window.location.href='../../../filingua/registered/profile.php'">Profile</button>
            <button onclick="window.location.href='../../../filingua/registered/about.php'">About</button>
            <button onclick="window.location.href='../../../filingua/registered/logout.php'">Logout</button>
        </div>
    </div>
    <div class="languages">
        <a href="">
            <img src="../../../filingua/lessons/tagalog/images/1.png" alt="isa">
        </a>
        <a href="">
            <img src="../../../filingua/lessons/tagalog/images/2.png" alt="dalawa">
        </a>
        <a href="">
            <img src="../../../filingua/lessons/tagalog/images/3.png" alt="tatlo">
        </a>
        <a href="">
            <img src="../../../filingua/lessons/tagalog/images/4.png" alt="apat">
        </a>
        <a href="">
            <img src="../../../filingua/lessons/tagalog/images/5.png" alt="lima">
        </a>
        <a href="">
            <img src="../../../filingua/lessons/tagalog/images/6.png" alt="anim">
        </a>
	</div>
    
</body>
</html>
