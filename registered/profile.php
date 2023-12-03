<?php
require '../server/config.php';

session_start();

if (!empty($_SESSION["email"])) {
    $email = $_SESSION["email"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");

    if ($row = mysqli_fetch_assoc($result)) {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $profile_image_path = $row['profile_image_path'];
    } else {
        header("Location: login.php");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filingua - Profile</title>
    <link rel="stylesheet" href="../../filingua/css/profile.css">
    <link rel="icon" type="image/png" href="../../filingua/images/logo.png">
    <style>
        body { background-color: #ffbd59; }
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
            <button onclick="window.location.href='../../filingua/registered/about.php'">About</button>
            <button onclick="window.location.href='../../filingua/registered/logout.php'">Logout</button>
        </div>
    </div>    
    
    <div class="user">
        <div class="container">
            <h1><?php echo $first_name ?></h1>
            <p><?php echo $email ?></p>
            <img src="<?php echo $profile_image_path ? $profile_image_path : '../../filingua/images/default.png'; ?>" id="profile-pic">
            <form action="../../filingua/registered/upload_profile_pic.php" method="post" enctype="multipart/form-data">
            <label for="input-file">Baguhin ang larawan</label>
            <input type="file" accept="image/jpeg, image/png, image/jpg" id="input-file" name="profile_pic">
            <input type="submit" value="Upload">
        </form>
        </div>
    </div>
    <script>
    let profilePic = document.getElementById("profile-pic");
    let inputFile = document.getElementById("input-file");
    inputFile.onchange = function(){
        profilePic.src = URL.createObjectURL(inputFile.files[0]);
    }
    </script>
</body>
</html>
