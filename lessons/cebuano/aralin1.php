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
    <script src="../cebuano/js/aralin1.js" defer></script>
</head>
<body>
    <div class="stage">
        <div class="label">
                <h2>Leksyon 1: Pag-abi-abi</h2>
                <p>Lesson 1: Basic Greetings</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/cebuano/landing.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/cebuano/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/cebuano/aralin2.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/cebuano/recordings/1/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/cebuano/recordings/1/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/cebuano/recordings/1/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/cebuano/recordings/1/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/cebuano/recordings/1/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/cebuano/recordings/1/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/cebuano/recordings/1/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/cebuano/recordings/1/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/cebuano/recordings/1/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/cebuano/recordings/1/10.wav"></audio>
  
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Maayong Adlaw!</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-a-yong Ad-law /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Maayong Adlaw!, Ginoo Jose.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Expressing good wishes on meeting or parting during the day.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Kumusta ka?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ku-mus-ta Ta /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Andrei, Kumusta ka?.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to ask someone if they are well and happy.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Salamat</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-la-mat /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Salamat sa pag-abot, Maria.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A polite expression used when acknowledging a gift, service, or compliment, or accepting or refusing an offer.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Wala'y Sapayan</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa-lay Sa-pa-yan /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Wala'y sapayan, Pedro!</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used as a response after being thanked by someone.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Adios</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pa-a-lam /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Salamat sa tanan, Dante. Adios.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to express good wishes when parting or at the end of a conversation.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Oo</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ O-o /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Oo, gi-replyan na nako ikaw, Juan.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to give an affirmative response.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Dili</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Di-li /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Dili tamang tubag ako gihatag sa eksaminasyon.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to give a negative response.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Maayong Buntag!</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-a-yong Bun-tag /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Maayong Buntag! Binibining Reyes.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Expressing good wishes on meeting or parting during the morning.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Maayong Gabii!</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-a-yong Ga-bii /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Maayong Gabii! Irog ko.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Expressing good wishes on meeting or parting during the evening.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Amping</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Am-ping /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Pag-amping sa imong pag-uli.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;"> It can mean to be careful or watchful, to give particular attention, or to express good wishes.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Magsanay | Practice </button>
        </p>
    </div>
</body>
</html>
