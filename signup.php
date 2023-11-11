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
        <input type="text" name="email" id="email" placeholder="EMAIL ACCOUNT" required value=""> <br><br>
        <input type="text" name="first_name" id="first_name" placeholder="FIRST NAME" required value=""> <br><br>
        <input type="text" name="last_name" id="last_name" placeholder="LAST NAME" required value=""> <br><br>
        <input type="number" name="age" id="age" placeholder="AGE" required value=""> <br><br>

       <!-- Dropdown for sex -->
        <select id="sex" name="sex" required>
            <option value="" disabled selected>--SEX--</option>
            <option value="male">MALE</option>
            <option value="female">FEMALE</option>
            <option value="lgbtqia">LGBTQIA+</option>
            <option value="rather_not_say">RATHER NOT SAY</option>
        </select>
        <br><br>

        <input type="password" name="password" id="password" placeholder="PASSWORD" required value=""> <br><br>
        
        <div class="submitbtn">
            <button type="submit" name="submit">CREATE ACCOUNT</button>
        </div>
    </form>

</body>
</html>