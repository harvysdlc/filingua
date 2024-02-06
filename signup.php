<?php
require '../filingua/server/config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $password = $_POST["password"];

    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    if(mysqli_num_rows($duplicate)>0){
        echo
        "<script> alert('Email has already been taken'); </script>";
    }
    else{
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO tb_user VALUES ('','$email', '$first_name', '$last_name', '$age', '$sex', '$hashed_password', '', 'default.png', 'learner', null, 'bio goes here..', null, null)";
        mysqli_query($conn, $query);
        echo
        "<script> alert('Account Sign up Complete!'); </script>";
        header("Location: login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filingua - signup</title>
    <link rel="stylesheet" href="../filingua/css/signup.css">
    <link rel="icon" type="image/png" href="../filingua/images/logo.png">
</head>
<body>
    <div class="overall">
        <a href="../filingua/index.php" class="back">
            <img src="../filingua/images/back.png" alt="Icon" style="width: 50px; height: 50px;">
        </a>
        <form class="signup" action="" method="post" autocomplete="off">
            <h2>Create an Account</h2>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Email" required value=""> <br>
            <label for="first_name">Name:</label>
            <input type="text" name="first_name" id="first_name" placeholder="Name" required value=""> <br>
            <label for="last_name">Surname:</label>
            <input type="text" name="last_name" id="last_name" placeholder="Surname" required value=""> <br>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" placeholder="Age" required value="" min="0" max="200"> <br>

        <!-- Dropdown for sex -->
            <label for="sex">Sex:</label>
            <select id="sex" name="sex" required>
                <option value="" disabled selected>--Sex--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="LGBTQIA+++">LGBTQIA+</option>
                <option value="Rather Not Say">Rather Not Say</option>
            </select> <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Password" required value=""> <br><br>
            <div class="submitbtn">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>