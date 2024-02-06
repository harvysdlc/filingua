<?php
require '../filingua/server/config.php';
session_start();

if (!empty($_SESSION["id"])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if ( password_verify($password,$row["password"] )) {
            $_SESSION["signin"] = true;
            $_SESSION["email"] = $row["email"];
            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION["AccType"] = $row["AccType"];
            $_SESSION["progress"] = $row["progress"];

            if ($_SESSION["progress"] == 1) {
                header("Location: block.php");
                exit();
            }

            if($_SESSION["progress"] == 2) {
                header("Location: /filingua/registered/systemupdate.php");
                exit();
            }

            header("Location: /filingua/registered/mainpage.php");
            exit();
        } else {
            echo "<script> alert('Wrong Password!'); </script>";
        }
    } else {
        echo "<script> alert('Account Not Found'); </script>";
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
    <link rel="icon" type="image/png" href="../filingua/images/logo.png">
</head>
<body>
    <div class="overall">
    <form class="login" action="" method="post" autocomplete="off">
        <a href="../filingua/index.php" class="back">
            <img src="../filingua/images/back.png" alt="Icon" style="width: 50px; height: 50px;">
        </a>
        <h2>Login Account</h2>
        <label for="email">Email:</label>
        <!-- Echo the value of the email input field if it's set -->
        <input type="email" name="email" id="email" placeholder="Email" required value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"> <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Password" required value=""> <br><br>
        <!-- Added Forgot Password link -->
        <a href="forgot.php" class="forgot-password">Forgot Password?</a> <br><br>
        <div class="submitbtn">
            <button type="submit" name="submit"> Login </button>
        </div>
    </form>
</div>
</body>
</html>
