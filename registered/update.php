<?php
require '../server/config.php';

if (!empty($_SESSION["email"])) {
    $email = $_SESSION["email"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");

    if ($row = mysqli_fetch_assoc($result)) {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $age = $row['age'];
        $sex = $row['sex'];
        $password = $row['password'];
        $profile_image_path = $row['profile_image_path'];
        $nationality = $row['nationality'];
        $bio = $row['bio'];
    } else {
        header("Location: /filingua/login.php");
        exit;
    }
} else {
    header("Location: /filingua/login.php");
    exit;
}
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update_profile"])) {
        $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
        $last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
        $age = mysqli_real_escape_string($conn, $_POST["age"]);
        $sex = mysqli_real_escape_string($conn, $_POST["sex"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        $nationality = mysqli_real_escape_string($conn, $_POST["nationality"]);
        $bio = mysqli_real_escape_string($conn, $_POST["bio"]);

        // Update user information in the database
        $updateQuery = "UPDATE tb_user SET first_name = '$first_name', last_name = '$last_name', age = '$age', sex = '$sex', password = '$password',   nationality = '$nationality', bio = '$bio' WHERE email = '$email'";
        mysqli_query($conn, $updateQuery);

        // Redirect or display a success message as needed
        header("Location: /filingua/registered/profile.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filingua - Update Profile</title>
    <link rel="stylesheet" href="../../filingua/css/update.css">
    <link rel="icon" type="image/png" href="../../filingua/images/logo.png">
    <style>
        body { background-color: #f0f0f0; }
    </style>
</head>
<body>
    <div class="stage">
        <div class="logo">
            <img src="../../filingua/images/textimage.png" alt="">
        </div>
        <div class="buttons">
            <button onclick="window.location.href='../../filingua/registered/mainpage.php'">Mag-Aral</button>
            <button onclick="window.location.href='../../filingua/registered/practice.php'">Magsanay</button>
            <button onclick="window.location.href='../../filingua/registered/profile.php'">Profile</button>
            <button onclick="window.location.href='../../filingua/registered/about.php'">About</button>
            <button onclick="window.location.href='../../filingua/registered/logout.php'">Logout</button>
        </div>
    </div>   
    <!-- Add the update form -->
    <form class="form" id="updateForm" action="" method="post">
        <div class="update-section">
            <h2>Baguhin ang Personal na mga Detalye</h2>

            <label for="first_name">Pangalan:</label>
            <input type="text" id="first_name" name="first_name" maxlength="50" value="<?php echo $first_name; ?>">

            <label for="last_name">Apelyido:</label>
            <input type="text" id="last_name" name="last_name" maxlength="50" value="<?php echo $last_name; ?>">

            <label for="last_name">Edad:</label>
            <input type="number" id="age" name="age" min="1" max="150" value="<?php echo $age; ?>">

            <label for="sex">Kasarian:</label>
            <select id="sex" name="sex">
                <?php
                $sexes = array("Lalaki", "Babae", "LGBTQIA+", "Huwag Sabihin");
                
                foreach ($sexes as $sexoption) {
                    $selected = ($sexoption == $sex) ? 'selected' : '';
                    echo "<option value=\"$sexoption\" $selected>$sexoption</option>";
                }
                ?>
            </select>

            <label for="first_name">Kontrasenyas:</label>
            <input type="password" id="password" name="password" maxlength="50" value="<?php echo $password; ?>">

            <label for="nationality">Nasyonalidad:</label>
            <select id="nationality" name="nationality">
                <?php
                $nationalities = array("Filipino", "Amerikano", "Australyano", "Espanyol", "Hapon", "Koryano", "Thai", "Tsino");
                
                foreach ($nationalities as $option) {
                    $selected = ($option == $nationality) ? 'selected' : '';
                    echo "<option value=\"$option\" $selected>$option</option>";
                }
                ?>
            </select>

            <label for="bio">Bio:</label>
            <input type="text" id="bio" name="bio" maxlength="50" value="<?php echo $bio; ?>">

            <button type="submit" name="update_profile">Update Profile</button>
        </div>
    </form> 
</body>
</html>
