<?php
session_start();

// Check if the user is logged in
if (!empty($_SESSION["email"])) {
    $email = $_SESSION["email"];

    // Your database connection code
    require '../server/config.php';

    // Define the upload directory
    $uploadDir = 'path/to/your/upload/directory/';

    // Handle file upload
    if ($_FILES['profile_pic']['error'] === UPLOAD_ERR_OK) {
        $tempFilePath = $_FILES['profile_pic']['tmp_name'];
        $newFileName = $email . '_' . uniqid() . '.' . pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION);
        $newFilePath = $uploadDir . $newFileName;

        // Move the uploaded file to the destination directory
        if (move_uploaded_file($tempFilePath, $newFilePath)) {
            // Update the database with the new profile image path
            $updateQuery = "UPDATE tb_user SET profile_image_path = '$newFilePath' WHERE email = '$email'";
            mysqli_query($conn, $updateQuery);
        }
    }
}

// Redirect back to the profile page
header("Location: profile.php");
exit();
?>
