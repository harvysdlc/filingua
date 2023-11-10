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
    <button type="submit" name="signup"> Create my filingua account  </button>
    <br>
    <button type="submit" name="login"> I already have an account </button>
</body>
</html>