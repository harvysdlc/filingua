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
    <div class="buttons">
        <button onclick="signupPage()"> Create a Filingua account  </button>
        <br><br><br>
        <button onclick="loginPage()"> I already have an account </button>

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