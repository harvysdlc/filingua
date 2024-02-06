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
    <title>Filingua - Aralin 6</title>
    <link rel="stylesheet" href="../../../filingua/lessons/aralin.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
    <script src="../kapampangan/js/aralin6.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 6: Direksyon</h2>
                <p>Lesson 6: Directions</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/kapampangan/aralin5.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/kapampangan/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/kapampangan/aralin7.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/kapampangan/recordings/6/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/kapampangan/recordings/6/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/kapampangan/recordings/6/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/kapampangan/recordings/6/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/kapampangan/recordings/6/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/kapampangan/recordings/6/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/kapampangan/recordings/6/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/kapampangan/recordings/6/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/kapampangan/recordings/6/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/kapampangan/recordings/6/10.wav"></audio>
    
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Wanan</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa-nan /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Hintu sa wanan, aliwa kayli.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Located on or toward the side of the body or object that is considered the stronger or more dexterous.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Kayli</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Kay-li /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Likuwa king kayling bahagi ing atyu king mekasunud keng aming sasakyan a motor.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Located on or toward the side of the body or object that is opposite to the right side.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Arap</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-rap /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ing Titser Juana pina-patawag la king arap ning entablado si Nelia.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The part or side of something that faces forward or is directed forward.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Gulut</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Gu-lut /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ing bage gusali king gulut ning iskuwela atyu king panaun ning Don Guevarra.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The rear surface of something; opposite of the front.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. A-tyu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-tyu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Atyu king Kabite atyu ing lugar king misaupang Emilio Aguinaldo.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In, at, or to this place or position.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Ane</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-ne /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Celia, amlat mu king payung ku king ane nang aparador.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In, at, or to that place or position (not here).</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Babo</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ba-bo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Inutusan king Aling Puring si Gwen atyu king iba ning babo ya ing kekang pusa king ikalawang palapag ning bale</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Moving or situated in a direction opposite to that of gravity; toward the sky or a higher position.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Lalam</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-lam /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nung mengabat a tatanaw ka king lalam ning matalang gusali.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Moving or situated in a direction with the pull of gravity; toward the ground or a lower position.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Derechu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ De-re-chu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ing Inay ipinagbilin a derechuin king dapang lang Kalsadang ini papuntang San Isidro..</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Move in a continuous forward direction without turning or changing course.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Lateral</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-te-ral /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Atyu king lateral ning kama ku ing mekasunud lamesita.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Next to or at the side of; by the side of.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice</button>
        </p>
    </div>
</body>
</html>