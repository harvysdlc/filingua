<?php
if(isset($_POST["signup"])){
    header("Location: ../filingua/signup.php");
}
else if (isset($_POST["login"])){
    header("Location: ../filingua/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filingua</title>
    <link rel="stylesheet" href="../filingua/css/index.css">
    <link rel="icon" type="image/png" href="../filingua/images/icon.jpg">
</head>
<body>
    <style>
        body {
            background-image: url(../filingua/images/bgindex.gif);
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
        }
    </style>
    <div class="buttons">
        <button onclick="signupPage()"> Simulan   </button>
        <button onclick="loginPage()"> Salihan </button>
        <script>
            function signupPage(){
                var signup = "../filingua/signup.php";
                window.location.href = signup;
            }
        </script>
        <script>
            function loginPage(){
                var login = "../filingua/login.php";
                window.location.href = login;
            }
        </script>
    </div>
    <div class="logo">
        <img src="../filingua/images/" alt="">
    </div>
    <div class="credits">
            <p>Filingua 2024</p>
    </div>
</body>
</html>