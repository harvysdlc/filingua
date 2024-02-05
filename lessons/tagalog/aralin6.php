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
    <script src="../tagalog/js/aralin6.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 6: Direksyon</h2>
                <p>Lesson 6: Directions</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/tagalog/aralin5.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/tagalog/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/tagalog/aralin7.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/tagalog/recordings/6/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/tagalog/recordings/6/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/tagalog/recordings/6/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/tagalog/recordings/6/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/tagalog/recordings/6/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/tagalog/recordings/6/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/tagalog/recordings/6/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/tagalog/recordings/6/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/tagalog/recordings/6/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/tagalog/recordings/6/10.wav"></audio>
        <audio id="click" src="../../../filingua/audio/click.mp3"></audio>
    
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Kanan</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-nan /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Huminto ang sasakyan sa bandang kanan ng kalsada.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The car stopped on the right side of the road.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: Located on or toward the side of the body or object that is considered the stronger or more dexterous.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Kaliwa</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-li-wa /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Lumiko pa-kaliwa ang mga motor na nasa unahan ng aming sasakyan.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The motorcycles in front of our vehicle turned left.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: Located on or toward the side of the body or object that is opposite to the right side.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Harap</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ha-rap /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Pinatawag ni Titser Juana si Nelia sa harap ng entablado.</span><br>   
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Teacher Juana called Nelia to the front of the stage.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: The part or side of something that faces forward or is directed forward.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Likod</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Li-kod /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Ang bagong gusali sa likod ng eskwelahan ay pagmamay-ari ni Don Guevarra.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The new building behind the school is owned by Don Guevarra.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: The rear surface of something; opposite of the front.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Dito</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Di-to /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Dito sa Kabite nagmula si Emilio Aguinaldo.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Emilio Aguinaldo came here, in Cavite.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: In, at, or to this place or position.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Doon</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Do-on /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Celia, pakuha nga ang aking payong doon sa may aparador. </span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Celia, please get my umbrella from the cabinet over there.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: In, at, or to that place or position (not here).</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Itaas</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ I-ta-as /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Inutusan ni Aling Puring si Gwen na itaas nito ang kaniyang pusa sa ikalawang palapag ng bahay.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Aling Puring instructed Gwen to take her cat upstairs to the second floor of the house.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: Moving or situated in a direction opposite to that of gravity; toward the sky or a higher position.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Ibaba</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ I-ba-ba /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Nakakalula tuwing natingin ka sa ibaba ng mataas na gusali.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: It's dizzying when you look down from the top of a tall building.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: Moving or situated in a direction with the pull of gravity; toward the ground or a lower position.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Diretsuhin</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Di-re-tsu-hin /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Ipinagbilin ni Inay na diretsuhin lamang natin ang kalsadang ito papuntang San Isidro.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Mom insisted that we just follow this road straight to San Isidro.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: Move in a continuous forward direction without turning or changing course.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Gilid</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Gi-lid /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Nasa gilid ng aking kama ang mamahaling lamesita.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The expensive side table is beside my bed.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: Next to or at the side of; by the side of.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice </button>
        </p>
    </div>
</body>
</html>