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

// Retrieve the value from the progress_tbl for the logged-in user
$user_id = $row['user_id'];
$query_progress = "SELECT cebuano FROM progress_tbl WHERE user_id = $user_id";
$result_progress = mysqli_query($conn, $query_progress);

if ($row_progress = mysqli_fetch_assoc($result_progress)) {
    $cebuano_progress = $row_progress['cebuano'];
} else {
    $cebuano_progress = 0; // Default value if no progress found
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filingua - Cebuano</title>
    <link rel="stylesheet" href="../../../filingua/lessons/landing.css">
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
                <h2>Magtuon og Sugbuanon</h2>
                <p>Learn Cebuano</p>
        </div>
        <div class="larrow">
            <a href="../../registered/mainpage.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="progress-container">
            <p><?php echo $cebuano_progress."%"?></p>
            <div class="progress-bar" style="width: <?php echo $cebuano_progress."%"?>;"></div>
        </div>
    </div>
    <div class="container">
    <div class="languages-wrapper">
        <div class="languages">
            <a href="../../../filingua/lessons/cebuano/aralin1.php">
                <img src="../../../filingua/lessons/cebuano/images/A1.png" alt="Aralin 1">
            </a>
            <a href="../../../filingua/lessons/cebuano/aralin2.php">
                <img src="../../../filingua/lessons/cebuano/images/A2.png" alt="Aralin 2">
            </a>
            <a href="../../../filingua/lessons/cebuano/aralin3.php">
                <img src="../../../filingua/lessons/cebuano/images/A3.png" alt="Aralin 3">
            </a>
            <a href="../../../filingua/lessons/cebuano/aralin4.php">
                <img src="../../../filingua/lessons/cebuano/images/A4.png" alt="Aralin 4">
            </a>
            <a href="../../../filingua/lessons/cebuano/aralin5.php">
                <img src="../../../filingua/lessons/cebuano/images/A5.png" alt="Aralin 5">
            </a>
            <a href="../../../filingua/lessons/cebuano/aralin6.php">
                <img src="../../../filingua/lessons/cebuano/images/A6.png" alt="Aralin 6">
            </a>
            <a href="../../../filingua/lessons/cebuano/aralin7.php">
                <img src="../../../filingua/lessons/cebuano/images/A7.png" alt="Aralin 7">
            </a>
            <a href="../../../filingua/lessons/cebuano/aralin8.php">
                <img src="../../../filingua/lessons/cebuano/images/A8.png" alt="Aralin 8">
            </a>
            <a href="../../../filingua/lessons/cebuano/aralin9.php">
                <img src="../../../filingua/lessons/cebuano/images/A9.png" alt="Aralin 9">
            </a>
            <!-- Add more language links and images as needed -->
        </div>
    </div>
</div>
</body>
</html>
