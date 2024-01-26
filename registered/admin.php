<?php
require '../server/config.php';
session_start();

if (!empty($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
    $progress = $_SESSION["progress"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE user_id = '$user_id'");

    if ($row = mysqli_fetch_assoc($result)) {
        $user_id = $row['user_id'];
        $AccType = $row['AccType'];
    } else {
        header("Location: /filingua/login.php");
        exit;
    }
}

if ($AccType !== "developer") {
    header("Location: restricted_access.php");
    exit();
}

// Handle search
$search_name = isset($_GET['search']) ? $_GET['search'] : '';
$sql_condition = empty($search_name) ? '' : "WHERE first_name LIKE '%$search_name%'";

$sql = "SELECT * FROM tb_user $sql_condition";
$sqlresult = mysqli_query($conn, $sql);

// System Update Logic
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["system_update"])) {
    $newProgress = ($_POST["system_update"] == 1) ? 2 : 0;

    // Update progress for users whose AccType is not 'developer'
    $updateQuery = "UPDATE tb_user SET progress = $newProgress WHERE AccType != 'developer' AND progress != 1";
    $updateResult = mysqli_query($conn, $updateQuery);

    if (!$updateResult) {
        echo "Error updating progress: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../../filingua/css/admin.css">
    <link rel="icon" type="image/png" href="../../filingua/images/logo.png">  
</head>
<body>
<div class="back">
    <a href="../registered/mainpage.php">
        <img src="../images/back.png" alt="back">
    </a>
</div>
<!-- System Update Button -->
<div class="system-update">
    <form action="" method="post">
        <button type="submit" name="system_update" value="<?= isset($_POST["system_update"]) && $_POST["system_update"] == 1 ? 0 : 1 ?>">
            System Update (<?= isset($_POST["system_update"]) && $_POST["system_update"] == 1 ? 'Revert Changes' : 'Apply Changes' ?>)
        </button>
    </form>
</div>

<div class="container">
    <div class="search">
        <form action="" method="get">
            <input type="text" name="search" id="search" value="<?= htmlspecialchars($search_name) ?>">
            <button type="submit"><?php echo '<img src="../images/search.png" alt="Icon" style="width: 16px; height: 16px;">&nbsp '?></button>
        </form>
    </div>
    <div class="result">
        <?php
        // Check if the query was successful
        if ($sqlresult) {
            // Check if there are any rows returned from the query
            if (mysqli_num_rows($sqlresult) > 0) {
                // Fetch associative array for each row in the result set
                while ($row = mysqli_fetch_assoc($sqlresult)) {
                    // Display data for each row
                    echo "<div class='user-details'><br>";
                    echo "<img src='../images/user.png' alt='Icon' style='width: 16px; height: 16px;'>&nbsp ";
                    echo $row['first_name'] ." (". $row['AccType'].")" ."<br>";
                    echo "<img src='../images/email.png' alt='Icon' style='width: 16px; height: 16px;'>&nbsp ";
                    echo $row['email'] ."<br>";
                    echo "<img src='../images/access.png' alt='Icon' style='width: 16px; height: 16px;'>&nbsp ";

                    // Display status based on $progress
                    if ($row['progress'] == 1) {
                        echo 'Blocked<br>';
                    } else {
                        echo 'Normal Access<br>';
                    }

                    // Buttons for each user
                    echo "<form onsubmit='return false;' id='form_" . $row['user_id'] . "'>
                            <input type='hidden' name='user_id' value='" . $row['user_id'] . "'>";

                    // Block/Unblock button
                    $blockButtonText = ($row['progress'] == 1) ? 'Unblock' : 'Block';
                    echo "<button type='button' onclick='updateStatus(\"" . $row['user_id'] . "\", \"toggle_block\")'>
                            $blockButtonText
                        </button>";

                    // Make Developer/Make Learner button
                    echo "<button type='button' onclick='updateStatus(\"" . $row['user_id'] . "\", \"toggle_developer\")'>
                            " . ($row['AccType'] === 'developer' ? 'Make Learner' : 'Make Developer') . "
                        </button>";

                    // Remove button
                    echo "<button type='button' onclick='removeUser(\"" . $row['user_id'] . "\")'>Remove</button>";
                    echo "<br><br></div>";


                    // Add a separator between rows
                    echo "<hr>";
                }
            } else {
                // No users found
                echo "<p>No users found.</p>";
            }

            // Free the result set
            mysqli_free_result($sqlresult);
        } else {
            // Handle the case where the query fails
            echo "Error: " . mysqli_error($conn);
        }
        ?>
    </div>
</div>

<!-- Include the JavaScript and AJAX script -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<?php include 'ajax_script.php'; ?>

</body>
</html>
