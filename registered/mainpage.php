<?php
require '../server/config.php';
session_start();

if(!empty($_SESSION["email"])){
    $email = $_SESSION["email"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    
    if ($row = mysqli_fetch_assoc($result)) {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $AccType = $row['AccType'];
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
    </div>

    <?php
    $user_id = $row['user_id'];
    $query_score = "SELECT tagalog, bicolano, cebuano, ilocano FROM progress_tbl WHERE user_id = $user_id";
    $result_score = mysqli_query($conn, $query_score);

    if ($row_score = mysqli_fetch_assoc($result_score)) {
        $tagalog_score = ($row_score["tagalog"] !== null) ? $row_score["tagalog"] : 0;
        $bicolano_score = ($row_score["bicolano"] !== null) ? $row_score["bicolano"] : 0;
        $cebuano_score = ($row_score["cebuano"] !== null) ? $row_score["cebuano"] : 0;
        $ilocano_score = ($row_score["ilocano"] !== null) ? $row_score["ilocano"] : 0;
    } else {
        $tagalog_score = 0; $bicolano_score = 0; $cebuano_score = 0; $ilocano_score = 0;
    }
    ?>
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
    </div>  
</body>
</html>
