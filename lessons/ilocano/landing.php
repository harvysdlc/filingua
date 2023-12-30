<?php
require '../../server/config.php';
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
    <title>Filingua - Ilocano</title>
    <link rel="stylesheet" href="../../../filingua/lessons/bicolano/css/landing.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
</head>
<body>
    <style>
        body {
            background-color:#ffbd59;
        }
    </style>
    <div class="stage">
        <div class="label">
                <h2>Aranap ti Ilocano</h2>
                <p>Learn Ilocano</p>
        </div>
        <div class="larrow">
            <a href="../../registered/mainpage.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
    </div>
    <div class="container">
    <div class="languages-wrapper">
        <div class="languages">
            <a href="../../../filingua/lessons/bicolano/aralin1.php">
                <img src="../../../filingua/lessons/bicolano/images/A1.png" alt="Aralin 1">
            </a>
            <a href="../../../filingua/lessons/bicolano/aralin2.php">
                <img src="../../../filingua/lessons/bicolano/images/A2.png" alt="Aralin 2">
            </a>
            <a href="../../../filingua/lessons/bicolano/aralin3.php">
                <img src="../../../filingua/lessons/bicolano/images/A3.png" alt="Aralin 3">
            </a>
            <a href="../../../filingua/lessons/bicolano/aralin4.php">
                <img src="../../../filingua/lessons/bicolano/images/A4.png" alt="Aralin 4">
            </a>
            <a href="../../../filingua/lessons/bicolano/aralin5.php">
                <img src="../../../filingua/lessons/bicolano/images/A5.png" alt="Aralin 5">
            </a>
            <a href="../../../filingua/lessons/bicolano/aralin6.php">
                <img src="../../../filingua/lessons/bicolano/images/A6.png" alt="Aralin 6">
            </a>
            <a href="../../../filingua/lessons/bicolano/aralin7.php">
                <img src="../../../filingua/lessons/bicolano/images/A7.png" alt="Aralin 7">
            </a>
            <a href="../../../filingua/lessons/bicolano/aralin8.php">
                <img src="../../../filingua/lessons/bicolano/images/A8.png" alt="Aralin 8">
            </a>
            <a href="../../../filingua/lessons/bicolano/aralin9.php">
                <img src="../../../filingua/lessons/bicolano/images/A9.png" alt="Aralin 9">
            </a>
            <!-- Add more language links and images as needed -->
        </div>
    </div>
</div>
</body>
</html>
