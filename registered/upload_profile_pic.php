<?php
session_start();
require '../server/config.php';

// Check if the user is logged in
if (!empty($_SESSION["email"])) {
    $email = $_SESSION["email"];

    // Define the upload directory
    $uploadDir = '../../filingua/images/uploads/';

    // Handle file upload
    if ($_FILES['profile_pic']['error'] === UPLOAD_ERR_OK) {
        $tempFilePath = $_FILES['profile_pic']['tmp_name'];
        $newFileName = $email . '_' . uniqid() . '.' . pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION);
        $newFilePath = $uploadDir . $newFileName;

        // Check if the file move is successful
        if (move_uploaded_file($tempFilePath, $newFilePath)) {
            // Update the database with the new profile image path using prepared statement
            $updateQuery = "UPDATE tb_user SET profile_image_path = ? WHERE email = ?";
            $stmt = mysqli_prepare($conn, $updateQuery);
            mysqli_stmt_bind_param($stmt, "ss", $newFilePath, $email);
            mysqli_stmt_execute($stmt);

            // Check if the database update is successful
            if (!mysqli_stmt_error($stmt)) {
                // Redirect back to the profile page
                header("Location: ../../filingua/registered/profile.php");
                exit();
            } else {
                // Handle database update failure
                echo "Database update failed.";
            }
        } else {
            // Handle file upload failure
            echo "File upload failed.";
        }
    }
}
?>
