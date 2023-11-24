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
    <link rel="stylesheet" href="../filingua/css/signup.css">
    <link rel="icon" type="image/png" href="../filingua/images/logo.png">

    <div class="exit">
        <a href="../filingua/index.php"><<<</a>
    </div>

    <div class="enter">
        <a href="../filingua/login.php">>>></a>
    </div>

</head>
<body>
    <style>
        body {
            background-image: url(../filingua/images/bgaccount.gif);
            background-size: cover;
            background-repeat:inherit;
            background-position: center;
        }
    </style>

    <div class="text-above-form">
        <h2>Gumawa ng Account</h2>
    </div>

    <form class="signup" action="" method="post" autocomplete="off">
        <label for="email">Sulatroniko:</label>
        <input type="text" name="email" id="email" placeholder="Sulatroniko" required value=""> <br><br>
        <label for="first_name">Pangalan:</label>
        <input type="text" name="first_name" id="first_name" placeholder="Pangalan" required value=""> <br><br>
        <label for="last_name">Apelyido:</label>
        <input type="text" name="last_name" id="last_name" placeholder="Apelyido" required value=""> <br><br>
        <label for="agel">Edad:</label>
        <input type="number" name="age" id="age" placeholder="Edad" required value="" min="0" max="200"> <br><br>

       <!-- Dropdown for sex -->
        <label for="sex">Kasarian:</label>
        <select id="sex" name="sex" required>
            <option value="" disabled selected>--Kasarian--</option>
            <option value="male">Lalaki</option>
            <option value="female">Babae</option>
            <option value="lgbtqia">LGBTQIA+</option>
            <option value="rather_not_say">Huwag Sabihin</option>
        </select>
        <br><br>
        <label for="password">Kontrasenyas:</label>
        <input type="password" name="password" id="password" placeholder="Kontrasenyas" required value=""> <br><br>
        
        <div class="submitbtn">
            <button type="submit" name="submit">Sumali</button>
        </div>
    </form>
    <div class="text-below-form">
        <p>Sa pag gawa ng account, ikaw ay sumasang-ayon</p>
        <p>sa <b>Terms</b> at <b>Privacy Policy</b> ng Filingua 2024</p>
    </div>
</body>
</html>