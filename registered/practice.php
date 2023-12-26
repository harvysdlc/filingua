<?php
require '../server/config.php';
session_start();
    if (!empty($_SESSION["email"])) {
        $email = $_SESSION["email"];
        $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");

        if ($row = mysqli_fetch_assoc($result)) {
            $language = $row['language'];
            $lesson = $row['lesson'];
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
        $language = mysqli_real_escape_string($conn, $_POST["language"]);
        $lesson = mysqli_real_escape_string($conn, $_POST["lesson"]);

        // Update user information in the database
        $updateQuery = "UPDATE tb_user SET language = '$language', lesson = '$lesson' WHERE email = '$email'";
        mysqli_query($conn, $updateQuery);

        // Redirect or display a success message as needed
        if ($language == 'Tagalog' && $lesson == 'Aralin 1') {
            header("Location: /filingua/quiz/Tagalog1.php");
            exit;
        }
        else if ($language == 'Tagalog' && $lesson == 'Aralin 2') {
            header("Location: /filingua/quiz/Tagalog2.php");
            exit;
        }
        else if ($language == 'Tagalog' && $lesson == 'Aralin 3') {
            header("Location: /filingua/quiz/Tagalog3.php");
            exit;
        }
        else if ($language == 'Tagalog' && $lesson == 'Aralin 4') {
            header("Location: /filingua/quiz/Tagalog4.php");
            exit;
        }
        else if ($language == 'Tagalog' && $lesson == 'Aralin 5') {
            header("Location: /filingua/quiz/Tagalog5.php");
            exit;
        }
        else if ($language == 'Tagalog' && $lesson == 'Aralin 6') {
            header("Location: /filingua/quiz/Tagalog6.php");
            exit;
        }
        else if ($language == 'Bicolano' && $lesson == 'Aralin 1') {
            header("Location: /filingua/quiz/Bicolano1.php");
            exit;
        }
        else if ($language == 'Bicolano' && $lesson == 'Aralin 2') {
            header("Location: /filingua/quiz/Bicolano2.php");
            exit;
        }
        else if ($language == 'Bicolano' && $lesson == 'Aralin 3') {
            header("Location: /filingua/quiz/Bicolano3.php");
            exit;
        }
        else if ($language == 'Bicolano' && $lesson == 'Aralin 4') {
            header("Location: /filingua/quiz/Bicolano4.php");
            exit;
        }
        else if ($language == 'Bicolano' && $lesson == 'Aralin 5') {
            header("Location: /filingua/quiz/Bicolano5.php");
            exit;
        }
        else if ($language == 'Bicolano' && $lesson == 'Aralin 6') {
            header("Location: /filingua/quiz/Bicolano6.php");
            exit;
        }
        else if ($language == 'Cebuano' && $lesson == 'Aralin 1') {
            header("Location: /filingua/quiz/Cebuano1.php");
            exit;
        }
        else if ($language == 'Cebuano' && $lesson == 'Aralin 2') {
            header("Location: /filingua/quiz/Cebuano2.php");
            exit;
        }
        else if ($language == 'Cebuano' && $lesson == 'Aralin 3') {
            header("Location: /filingua/quiz/Cebuano3.php");
            exit;
        }
        else if ($language == 'Cebuano' && $lesson == 'Aralin 4') {
            header("Location: /filingua/quiz/Cebuano4.php");
            exit;
        }
        else if ($language == 'Cebuano' && $lesson == 'Aralin 5') {
            header("Location: /filingua/quiz/Cebuano5.php");
            exit;
        }
        else if ($language == 'Cebuano' && $lesson == 'Aralin 6') {
            header("Location: /filingua/quiz/Cebuano6.php");
            exit;
        }
        else if ($language == 'Ilocano' && $lesson == 'Aralin 1') {
            header("Location: /filingua/quiz/Ilocano1.php");
            exit;
        }
        else if ($language == 'Ilocano' && $lesson == 'Aralin 2') {
            header("Location: /filingua/quiz/Ilocano2.php");
            exit;
        }
        else if ($language == 'Ilocano' && $lesson == 'Aralin 3') {
            header("Location: /filingua/quiz/Ilocano3.php");
            exit;
        }
        else if ($language == 'Ilocano' && $lesson == 'Aralin 4') {
            header("Location: /filingua/quiz/Ilocano4.php");
            exit;
        }
        else if ($language == 'Ilocano' && $lesson == 'Aralin 5') {
            header("Location: /filingua/quiz/Ilocano5.php");
            exit;
        }
        else if ($language == 'Ilocano' && $lesson == 'Aralin 6') {
            header("Location: /filingua/quiz/Ilocano6.php");
            exit;
        }
        else if ($language == 'Kapampangan' && $lesson == 'Aralin 1') {
            header("Location: /filingua/quiz/Kapampangan1.php");
            exit;
        }
        else if ($language == 'Kapampangan' && $lesson == 'Aralin 2') {
            header("Location: /filingua/quiz/Kapampangan2.php");
            exit;
        }
        else if ($language == 'Kapampangan' && $lesson == 'Aralin 3') {
            header("Location: /filingua/quiz/Kapampangan3.php");
            exit;
        }
        else if ($language == 'Kapampangan' && $lesson == 'Aralin 4') {
            header("Location: /filingua/quiz/Kapampangan4.php");
            exit;
        }
        else if ($language == 'Kapampangan' && $lesson == 'Aralin 5') {
            header("Location: /filingua/quiz/Kapampangan5.php");
            exit;
        }
        else if ($language == 'Kapampangan' && $lesson == 'Aralin 6') {
            header("Location: /filingua/quiz/Kapampangan6.php");
            exit;
        }
        else if ($language == 'Pangasinense' && $lesson == 'Aralin 1') {
            header("Location: /filingua/quiz/Pangasinense1.php");
            exit;
        }
        else if ($language == 'Pangasinense' && $lesson == 'Aralin 2') {
            header("Location: /filingua/quiz/Pangasinense2.php");
            exit;
        }
        else if ($language == 'Pangasinense' && $lesson == 'Aralin 3') {
            header("Location: /filingua/quiz/Pangasinense3.php");
            exit;
        }
        else if ($language == 'Pangasinense' && $lesson == 'Aralin 4') {
            header("Location: /filingua/quiz/Pangasinense4.php");
            exit;
        }
        else if ($language == 'Pangasinense' && $lesson == 'Aralin 5') {
            header("Location: /filingua/quiz/Pangasinense5.php");
            exit;
        }
        else if ($language == 'Pangasinense' && $lesson == 'Aralin 6') {
            header("Location: /filingua/quiz/Pangasinense6.php");
            exit;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filingua - Practice</title>
    <link rel="stylesheet" href="../../filingua/css/practice.css">
    <link rel="icon" type="image/png" href="../../filingua/images/logo.png">   
</head>
<body>
    <style>
        body { background-color: #ffbd59; };
    </style>
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

    <form class="form" id="selectform" action="" method="post">
        <div class="update-form">
            <h2>Pagsasanay - Tagasala</h2>

            <label for="language">Wika (Language)</label>
            <select id="language" name="language">
                <?php
                $languages = array("Bicolano", "Cebuano", "Ilocano", "Kapampangan", "Pangasinense", "Tagalog");
                
                foreach ($languages as $languageoption) {
                    $selected = ($languageoption == $language) ? 'selected' : '';
                    echo "<option value=\"$languageoption\" $selected>$languageoption</option>";
                }
                ?>
            </select>

            <label for="lesson">Aralin (Lesson)</label>
            <select id="lesson" name="lesson">
                <?php
                $quiz = array("Aralin 1", "Aralin 2", "Aralin 3", "Aralin 4", "Aralin 5", "Aralin 6", "Aralin 7", "Aralin 8", "Aralin 9");
                
                foreach ($quiz as $lessonoption) {
                    $selected = ($lessonoption == $lesson) ? 'selected' : '';
                    echo "<option value=\"$lessonoption\" $selected>$lessonoption</option>";
                }
                ?>
            </select>
            <button type="submit" name="update_profile">Magsimula</button>
        </div>
    </form> 
</body>
</html>
