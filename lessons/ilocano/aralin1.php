<?php
require '../../server/config.php';
session_start();

if(!empty($_SESSION["email"])){
    $email = $_SESSION["email"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
    
    if ($row = mysqli_fetch_assoc($result)) {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
    } else {
        // Handle the case where no user with the provided email was found.
        header("Location: login.php");
        exit; // Terminate the script to prevent further execution.
    }
} else {
    header("Location: login.php");
    exit; // Terminate the script to prevent further execution.
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filingua - Aralin 1</title>
    <link rel="stylesheet" href="../../../filingua/lessons/aralin.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
    <script src="../ilocano/js/aralin1.js" defer></script>
</head>
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 1: Dagiti Kablaawan</h2>
                <p>Lesson 1: Basic Greetings</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/ilocano/landing.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/ilocano/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/ilocano/aralin2.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/ilocano/recordings/1/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/ilocano/recordings/1/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/ilocano/recordings/1/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/ilocano/recordings/1/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/ilocano/recordings/1/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/ilocano/recordings/1/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/ilocano/recordings/1/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/ilocano/recordings/1/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/ilocano/recordings/1/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/ilocano/recordings/1/10.wav"></audio>
        <audio id="click" src="../../../filingua/audio/click.mp3"></audio>
  
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Naimbag nga Adlaw!</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-im-bag nga Ad-law! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Naimbag nga aldaw, Manong Jose.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931"> Example: Good day!, Mr. Jose.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Expressing good wishes on meeting or parting during the day.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Kumusta ka?</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ku-mus-ta Ka? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Andrei, Kumusta ka?</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Andrei, How are you?.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to ask someone if they are well and happy.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Agyamanak</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ag-ya-ma-nak /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Agyamanak iti pagsardeng mo, Maria.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Thank you for attending, Maria.</span><br><br>   
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A polite expression used when acknowledging a gift, service, or compliment, or accepting or refusing an offer.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Saanko laeng</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-an-ko la-eng /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Saanko laeng, Pedro!</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: You're Welcome, Pedro!</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used as a response after being thanked by someone.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Kabayaten ka</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-ba-ya-ten ka /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Salamat sa lahat, Dante, kabayaten ka.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Thank you for everything Dante, goodbye.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to express good wishes when parting or at the end of a conversation.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Wen</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wen /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Wen, sinagot naak ni Juan.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Yes, I'm accepting your proposal Juan.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to give an affirmative response.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Saan</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-an /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Dagiti sungbat ko idiay exam ket saan nga usto.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: My answers on the exam are not correct.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to give a negative response.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Naimbag a Bigat!</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-im-bag a Bi-gat! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Naimbag a bigat, Manang Reyes.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Good Morning! Ms. Reyes.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Expressing good wishes on meeting or parting during the morning.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Naimbag a Rabii!</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-im-bag a Ra-bii! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Naimbag a Rabii! Ayat ko.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Good Evening, My love.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Expressing good wishes on meeting or parting during the evening.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Aganannad</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Aga-nan-nad ka /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Aganannad ka iti pagawid mo!</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Take care when you go home.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;"> It can mean to be careful or watchful, to give particular attention, or to express good wishes.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice</button>
        </p>
    </div>
</body>
</html>
