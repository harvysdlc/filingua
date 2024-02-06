<?php
require '../server/config.php';
session_start();

if(!empty($_SESSION["email"])){
    $email = $_SESSION["email"];
    $AccType = $_SESSION["AccType"];
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
    <title>Filingua - About</title>
    <link rel="stylesheet" href="../../filingua/css/about.css">
    <link rel="icon" type="image/png" href="../../filingua/images/logo.png">
    <style>
        body { background-color: #ffffff; }
    </style>
</head>
<body>
    <div class="stage">
        <div class="logo">
            <img src="../../filingua/images/textimage.png" alt="">
        </div>
        <div class="buttons">
            <button onclick="window.location.href='../../filingua/registered/mainpage.php'">Learn</button>
            <button onclick="window.location.href='../../filingua/registered/practice.php'">Practice</button>
            <button onclick="window.location.href='../../filingua/registered/profile.php'">Profile</button>
            <?php
            if ($AccType == "developer") {
                echo '<button onclick="window.location.href=\'../../filingua/registered/admin.php\'">Manage</button>';
            }
            ?>
            <button onclick="window.location.href='../../filingua/registered/about.php'">About</button>
            <button onclick="window.location.href='../../filingua/registered/logout.php'">Logout</button>
        </div>
        <div class="about">
            <h1>ABOUT US</h1><br>
            <p><b>Filingua</b> is a language-learning web application designed for teaching various
            <p>Philippine Languages. <br>
            <p>As of the moment, we offer <b>Tagalog, Cebuano, Ilocano, and Kapampangan</b>,
            <p>as our main courses.<br><br>
            <p>There will be more to come as we progress onwards.<br><br>
            <hr><br><br>
            <p>This project is spearheaded by <b>HARVY DELA CRUZ</b>,
            <p>joined by <b>JOSH ELLAND SOMBRANO</b> of <b>BSCS 3-2</b><br><br><br>
            <hr>
        </div>
    </div>    
</body>
</html>
