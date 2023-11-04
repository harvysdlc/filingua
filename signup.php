<?php
require '../filingua/server/config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    if(mysqli_num_rows($duplicate)>0){
        echo
        "<script> alert('Email has already been taken'); </script>";
    }
    else{
        $query = "INSERT INTO tb_user VALUES ('$email', '$password', '$first_name', '$last_name', '')";
        mysqli_query($conn, $query);
        echo
        "<script> alert('Account Sign up Complete!'); </script>";
    }
}
header("Location: login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filingua - signup</title>
    <link rel="stylesheet" href="../">
    <link rel="icon" type="image/png" href="../">
</head>
<body>
    <form class="" action="" method="post" autocomplete="off">
        <input type="text" name="email" id="email" placeholder="email" value=""> <br><br>
        <input type="password" name="password" id="password" placeholder="password" value=""> <br><br>
        <input type="text" name="first_name" id="first_name" placeholder="first name" required value=""> <br><br>
        <input type="text" name="last_name" id="last_name" placeholder="last name" required value=""> <br><br>
        <div class="submitbtn">
            <button type="submit" name="submit"> sign up </button>
        </div>
    </form>
</body>
</html>