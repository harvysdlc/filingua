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
    <link rel="icon" type="image/png" href="../filingua/images/logo.png">
</head>
<body>
    <style>
        body {
            background-image: url(../filingua/images/bgindex.gif);
            background-size: 100% 100%;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
        }
    </style>
    <div class="buttons">
        <button onclick="signupPage()"> Sign Up </button>
        <button onclick="loginPage()"> Sign In </button>
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
</body>
</html>