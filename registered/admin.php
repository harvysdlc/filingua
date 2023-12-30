<?php
    require '../server/config.php';
    session_start();

    if (!empty($_SESSION["user_id"])) {
        $user_id = $_SESSION["user_id"];
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

    // Check if the query was successful
    if ($sqlresult) {
        // Add a search form at the top
        echo '<form action="" method="get">
                <label for="search">Search by Name:</label>
                <input type="text" name="search" id="search" value="' . htmlspecialchars($search_name) . '">
                <button type="submit">Search</button>
              </form>';
              
        // Fetch associative array for each row in the result set
        while ($row = mysqli_fetch_assoc($sqlresult)) {
            // Display data for each row
            echo "User ID: " . $row['user_id'] . "<br>";
            echo "Name: " . $row['first_name'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
            echo "AccType: " . $row['AccType'] . "<br>";

            // Buttons for each user
            echo '<form action="" method="post">
                    <input type="hidden" name="user_id" value="' . $row['user_id'] . '">
                    <button type="submit" name="block" value="block">Block</button>
                    <button type="submit" name="unblock" value="unblock">Unblock</button>
                    <button type="submit" name="make_developer" value="make_developer">Make Developer</button>
                    <button type="submit" name="make_user" value="make_user">Make User</button>
                    <button type="submit" name="remove" value="remove">Remove</button>
                  </form>';

            // Add a separator between rows
            echo "<hr>";
        }

        // Free the result set
        mysqli_free_result($sqlresult);
    } else {
        // Handle the case where the query fails
        echo "Error: " . mysqli_error($conn);
    }

    // Handle button actions
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_id_to_update = $_POST["user_id"];

        if (isset($_POST["block"])) {
            // Perform block action
            mysqli_query($conn, "UPDATE tb_user SET progress = 1 WHERE user_id = '$user_id_to_update'");
        } elseif (isset($_POST["unblock"])) {
            // Perform unblock action
            mysqli_query($conn, "UPDATE tb_user SET progress = 0 WHERE user_id = '$user_id_to_update'");
            // Redirect to the unblock page if needed
        } elseif (isset($_POST["make_developer"])) {
            // Perform make developer action
            mysqli_query($conn, "UPDATE tb_user SET AccType = 'developer' WHERE user_id = '$user_id_to_update'");
        } elseif (isset($_POST["make_user"])) {
            // Perform make user action
            mysqli_query($conn, "UPDATE tb_user SET AccType = 'user' WHERE user_id = '$user_id_to_update'");
        } elseif (isset($_POST["remove"])) {
            // Perform remove action
            mysqli_query($conn, "DELETE FROM tb_user WHERE user_id = '$user_id_to_update'");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <!-- Page content goes here -->
</body>
</html>
