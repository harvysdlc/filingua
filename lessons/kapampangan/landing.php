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
$query_progress = "SELECT kapampangan FROM progress_tbl WHERE user_id = $user_id";
$result_progress = mysqli_query($conn, $query_progress);

if ($row_progress = mysqli_fetch_assoc($result_progress)) {
    $kapampangan_progress = $row_progress['kapampangan'];
} else {
    $kapampangan_progress = 0; // Default value if no progress found
}

//quiz results
$user_id = $row['user_id'];
$query_score = "SELECT L1,L2,L3,L4,L5,L6,L7,L8,L9 FROM kapampangan_tbl WHERE user_id = $user_id";
$result_score = mysqli_query($conn, $query_score);

if ($row_score = mysqli_fetch_assoc($result_score)) {
    $t1_score = ($row_score["L1"] !== null) ? $row_score["L1"] : 0;
    $t2_score = ($row_score["L2"] !== null) ? $row_score["L2"] : 0;
    $t3_score = ($row_score["L3"] !== null) ? $row_score["L3"] : 0;
    $t4_score = ($row_score["L4"] !== null) ? $row_score["L4"] : 0;
    $t5_score = ($row_score["L5"] !== null) ? $row_score["L5"] : 0;
    $t6_score = ($row_score["L6"] !== null) ? $row_score["L6"] : 0;
    $t7_score = ($row_score["L7"] !== null) ? $row_score["L7"] : 0;
    $t8_score = ($row_score["L8"] !== null) ? $row_score["L8"] : 0;
    $t9_score = ($row_score["L9"] !== null) ? $row_score["L9"] : 0;
} else {
    $t1_score = 0; $t2_score = 0; $t3_score = 0; $t4_score = 0; $t5_score = 0; $t6_score = 0; $t7_score = 0; $t8_score = 0; $t9_score = 0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filingua - kapampangan</title>
    <link rel="stylesheet" href="../../../filingua/lessons/landing.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
</head>
<body>
    <style>
        body {
            background-color:#ffffff;
        }
    </style>
    <div class="stage">
        <div class="label">
                <h2>Manganupda king Kapampangan</h2>
                <p>Learn Kapampangan</p>
        </div>
        <div class="larrow">
            <a href="../../registered/mainpage.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="progress-container">
            <p><?php echo $kapampangan_progress."%"?></p>
            <div class="progress-bar" style="width: <?php echo $kapampangan_progress."%"?>;"></div>
        </div>
    </div>
    <div class="container">
    <div class="languages-wrapper">
        <div class="languages">
            <a href="../../../filingua/lessons/kapampangan/aralin1.php" class="image-container">
                <img src="../../../filingua/lessons/kapampangan/images/A1.png" alt="Aralin 1">
                <div class="score">
                <p>Current Score: <?php echo $t1_score?>/10</p>
                </div>
            </a>
            <a href="../../../filingua/lessons/kapampangan/aralin2.php" class="image-container">
                <div class="score">
                <img src="../../../filingua/lessons/kapampangan/images/A2.png" alt="Aralin 2">
                <p>Current Score: <?php echo $t2_score?>/10</p>
                </div>
                
            </a>
            <a href="../../../filingua/lessons/kapampangan/aralin3.php" class="image-container">
                <img src="../../../filingua/lessons/kapampangan/images/A3.png" alt="Aralin 3">
                <div class="score1">
                <p>Current Score: <?php echo $t3_score?>/10</p>
                </div>
            </a>
            <a href="../../../filingua/lessons/kapampangan/aralin4.php" class="image-container">
                <img src="../../../filingua/lessons/kapampangan/images/A4.png" alt="Aralin 4">
                <div class="score2">
                <p>Current Score: <?php echo $t4_score?>/10</p>
                </div>
            </a>
            <a href="../../../filingua/lessons/kapampangan/aralin5.php" class="image-container">
                <img src="../../../filingua/lessons/kapampangan/images/A5.png" alt="Aralin 5">
                <div class="score3">
                <p>Current Score: <?php echo $t5_score?>/10</p>
                </div>
            </a>
            <a href="../../../filingua/lessons/kapampangan/aralin6.php" class="image-container">
                <img src="../../../filingua/lessons/kapampangan/images/A6.png" alt="Aralin 6">
                <div class="score4">
                <p>Current Score: <?php echo $t6_score?>/10</p>
                </div>
            </a>
            <a href="../../../filingua/lessons/kapampangan/aralin7.php" class="image-container">
                <img src="../../../filingua/lessons/kapampangan/images/A7.png" alt="Aralin 7">
                <div class="score5">
                <p>Current Score: <?php echo $t7_score?>/10</p>
                </div>
            </a>
            <a href="../../../filingua/lessons/kapampangan/aralin8.php" class="image-container">
                <img src="../../../filingua/lessons/kapampangan/images/A8.png" alt="Aralin 8">
                <div class="score6">
                <p>Current Score: <?php echo $t8_score?>/10</p>
                </div>
            </a>
            <a href="../../../filingua/lessons/kapampangan/aralin9.php" class="image-container">
                <img src="../../../filingua/lessons/kapampangan/images/A9.png" alt="Aralin 9">
                <div class="score7">
                <p>Current Score: <?php echo $t9_score?>/10</p>
                </div>
            </a>
        </div>
    </div>
</div>
</body>
</html>