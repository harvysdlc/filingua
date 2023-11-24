<?php
require '../filingua/server/config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["signin"] = true;
            $_SESSION["email"] = $row["email"];
            header("Location: /filingua/registered/mainpage.php");
        }
        else{
            echo
            "<script> alert('Wrong Password!'); </script>";
        }
    }
    else{
        echo
            "<script> alert('Account Not Found'); </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filingua - login</title>
    <link rel="stylesheet" href="../filingua/css/login.css">
    <link rel="icon" type="image/png" href="../filingua/images/icon.jpg">
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
        <h2>Magbukas ng Account</h2>
    </div>

    <form class="login" action="" method="post" autocomplete="off">
        <label for="email">Sulatroniko:</label>
        <input type="text" name="email" id="email" placeholder="Sulatroniko" required value=""> <br><br>
        <label for="password">Kontrasenyas:</label>
        <input type="password" name="password" id="password" placeholder="Kontrasenyas" required value=""> <br><br>
        <div class="submitbtn">
        <button type="submit" name="submit"> Buksan ang Account </button>
        </div>
    </form>
</body>
</html>