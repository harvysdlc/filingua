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
    <script src="../bicolano/js/aralin1.js" defer></script>
</head>
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 1: Mga Pagbati</h2>
                <p>Lesson 1: Basic Greetings</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/bicolano/landing.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/bicolano/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/bicolano/aralin2.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/bicolano/recordings/1/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/bicolano/recordings/1/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/bicolano/recordings/1/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/bicolano/recordings/1/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/bicolano/recordings/1/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/bicolano/recordings/1/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/bicolano/recordings/1/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/bicolano/recordings/1/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/bicolano/recordings/1/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/bicolano/recordings/1/10.wav"></audio>
  
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Marhay na aldaw</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-gan-dang A-raw /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Magayon na Aldaw!, Ginoong Jose.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Expressing good wishes on meeting or parting during the day.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Musta ka?</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ku-mus-ta Ka /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Andrei, Musta ka?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to ask someone if they are well and happy.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Dios mabalos</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-la-mat /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Dios mabalos sa pagdalo, Maria.</span><br>   
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A polite expression used when acknowledging a gift, service, or compliment, or accepting or refusing an offer.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Dai man</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa-lang A-nu-man /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Dai man, Pedro!</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used as a response after being thanked by someone.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Adios</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pa-a-lam /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Dios mabalos sa gabos Dante, Adios.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to express good wishes when parting or at the end of a conversation.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Oo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ O-o /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Oo, pinapangutan ko na ikaw Juan.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to give an affirmative response.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Dae</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Hin-di /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Dae tamang sagot ko sa pagsusulit.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to give a negative response.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Marhay na aga</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-gan-dang U-ma-ga /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Magayon na Aga! Binibining Reyes. </span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Expressing good wishes on meeting or parting during the morning.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Marhay na banggi</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-gan-dang Ga-bi /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Magayon na Banggi! Mahal ko.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Expressing good wishes on meeting or parting during the evening.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Ingat ka</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ I-ngat Ka /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ingat ka sa pag-uwi!.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;"> It can mean to be careful or watchful, to give particular attention, or to express good wishes.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Magsanay | Practice </button>
        </p>
    </div>
</body>
</html>
