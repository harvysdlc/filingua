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
        $query = "INSERT INTO tb_user VALUES ('$email', '$first_name', '$last_name', '$age', '$sex', '$password', '')";
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
    <link rel="stylesheet" href="../">
    <link rel="icon" type="image/png" href="../filingua/images/icon.jpg">
</head>
<body>
    <style>
        body {
            background-image: url(../filingua/images/accountbg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
        }
    </style>
    <form class="signup" action="" method="post" autocomplete="off">
        <input type="text" name="email" id="email" placeholder="email" required value=""> <br><br>
        <input type="text" name="first_name" id="first_name" placeholder="first name" required value=""> <br><br>
        <input type="text" name="last_name" id="last_name" placeholder="last name" required value=""> <br><br>
        <input type="number" name="age" id="age" placeholder="age" required value=""> <br><br>

        <!-- Dropdown for sex -->
        <label for="sex">Sex:</label>
        <select id="sex" name="sex" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="lesbian">Lesbian</option>
            <option value="gay">Gay</option>
            <option value="bisexual">Bisexual</option>
            <option value="transgender">Transgender</option>
            <option value="asexual">Asexual</option>
            <option value="rather_not_say">Rather Not Say</option>
        </select>
        <br><br>

        <input type="password" name="password" id="password" placeholder="password" required value=""> <br><br>
        
        <div class="submitbtn">
            <button type="submit" name="submit">Sign Up</button>
        </div>
</form>

</body>
</html>