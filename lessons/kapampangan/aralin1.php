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
    <script src="../kapampangan/js/aralin1.js" defer></script>
</head>
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 1: Mga Pagbati</h2>
                <p>Lesson 1: Basic Greetings</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/kapampangan/landing.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/kapampangan/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/kapampangan/aralin2.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/kapampangan/recordings/1/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/kapampangan/recordings/1/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/kapampangan/recordings/1/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/kapampangan/recordings/1/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/kapampangan/recordings/1/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/kapampangan/recordings/1/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/kapampangan/recordings/1/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/kapampangan/recordings/1/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/kapampangan/recordings/1/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/kapampangan/recordings/1/10.wav"></audio>
        <audio id="click" src="../../../filingua/audio/click.mp3"></audio>
  
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Mayap a abak!</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-yap a a-bak /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Mayap a abak!, Alian.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931"> Example: Good day!, Alian.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Expressing good wishes on meeting or parting during the day.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Kumusta ka?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ku-mus-ta Ka /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Andrei, Kumusta ka?.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Andrei, How are you?.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to ask someone if they are well and happy.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Salamat</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-la-mat /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Salamat ke dalu, Maria.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Thank you for attending, Maria.</span><br><br>  
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A polite expression used when acknowledging a gift, service, or compliment, or accepting or refusing an offer.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Ngeni ya mu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Nge-ni ya mu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ngeni ya mu, Pedro!</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: You're Welcome, Pedro!</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used as a response after being thanked by someone.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Atyu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-tyu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Salamat pu king metung la reng tanamu Johnoy, Atyu.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Thank you for everything Johnoy, goodbye.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to express good wishes when parting or at the end of a conversation.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Wa</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Wa, pikarekak keng panyulatan mu Juan.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Yes, I'm accepting your proposal Juan.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to give an affirmative response.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Ali/Aliwa</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-li / A-li-wa /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Aliwa ing sagut ku ya pagsusulit.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: My answers on the exam are not correct.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to give a negative response.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Mayap a abak!</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-yap a a-bak /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Mayap a abak! Binibining Reyes.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Good Morning! Ms. Reyes.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Expressing good wishes on meeting or parting during the morning.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Mayap a napun!</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-yap a na-pun /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Mayap a napun! Mahal ko.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Good Evening, My love.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Expressing good wishes on meeting or parting during the evening.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Mingat ka/Mimingat ka</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Mi-ngat ka / Mi-mi-ngat ka /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Mingat ka sa pag-uwi!.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Take care when you go home.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;"> It can mean to be careful or watchful, to give particular attention, or to express good wishes.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice</button>
        </p>
    </div>
</body>
</html>
