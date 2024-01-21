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
    <title>Filingua - Aralin 3</title>
    <link rel="stylesheet" href="../../../filingua/lessons/aralin.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
    <script src="../bicolano/js/aralin3.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 3: Pagbilang</h2>
                <p>Lesson 3: Numbers and Counting</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/bicolano/aralin2.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/bicolano/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/bicolano/aralin4.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/bicolano/recordings/3/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/bicolano/recordings/3/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/bicolano/recordings/3/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/bicolano/recordings/3/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/bicolano/recordings/3/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/bicolano/recordings/3/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/bicolano/recordings/3/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/bicolano/recordings/3/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/bicolano/recordings/3/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/bicolano/recordings/3/10.wav"></audio>
        <audio id="audio11" src="../../../filingua/lessons/bicolano/recordings/3/11.wav"></audio>
        <audio id="audio12" src="../../../filingua/lessons/bicolano/recordings/3/12.wav"></audio>
        <audio id="audio13" src="../../../filingua/lessons/bicolano/recordings/3/13.wav"></audio>
        <audio id="audio14" src="../../../filingua/lessons/bicolano/recordings/3/14.wav"></audio>
        <audio id="audio15" src="../../../filingua/lessons/bicolano/recordings/3/15.wav"></audio>
        <audio id="audio16" src="../../../filingua/lessons/bicolano/recordings/3/16.wav"></audio>
        <audio id="audio17" src="../../../filingua/lessons/bicolano/recordings/3/17.wav"></audio>
        <audio id="audio18" src="../../../filingua/lessons/bicolano/recordings/3/18.wav"></audio>
        <audio id="audio19" src="../../../filingua/lessons/bicolano/recordings/3/19.wav"></audio>
        <audio id="audio20" src="../../../filingua/lessons/bicolano/recordings/3/20.wav"></audio>
        <audio id="audio30" src="../../../filingua/lessons/bicolano/recordings/3/30.wav"></audio>
        <audio id="audio40" src="../../../filingua/lessons/bicolano/recordings/3/40.wav"></audio>
        <audio id="audio50" src="../../../filingua/lessons/bicolano/recordings/3/50.wav"></audio>
        <audio id="audio60" src="../../../filingua/lessons/bicolano/recordings/3/60.wav"></audio>
        <audio id="audio70" src="../../../filingua/lessons/bicolano/recordings/3/70.wav"></audio>
        <audio id="audio80" src="../../../filingua/lessons/bicolano/recordings/3/80.wav"></audio>
        <audio id="audio90" src="../../../filingua/lessons/bicolano/recordings/3/90.wav"></audio>
        <audio id="audio100" src="../../../filingua/lessons/bicolano/recordings/3/100.wav"></audio>
        <audio id="audio1000" src="../../../filingua/lessons/bicolano/recordings/3/1000.wav"></audio>
        <audio id="audio1000000" src="../../../filingua/lessons/bicolano/recordings/3/1000000.wav"></audio>
        <audio id="audio1000000000" src="../../../filingua/lessons/bicolano/recordings/3/1000000000.wav"></audio>
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Saro</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ I-sa /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: An Pilipinas igdi sa mga nasyon sa Timog-Sidlakan na Asya.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The fundamental unit, singular and indivisible.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Duwa</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Da-la-wa /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Mayduwang tugang ako, si Toto asin si Nene.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The first and simplest even number, denoting duality.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Tulo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tat-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Tolo an karnero sa bukid ni Mang Juan.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The smallest prime number, often symbolizing balance.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Apat</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-pat /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Apat na baso an ibinaton na regalo.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A square number, representing stability and order.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Lima</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Li-ma /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Lima an kandidato para sa konsehal sa banwaan kan Indang.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The third prime number, associated with change and dynamism.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Anom</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-nim /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: An haba kan tela tolong dipa.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The first perfect number, symbolizing harmony.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Pito</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pi-to /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Pito an paborito na numero ni Andrei.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A prime number, often considered mystical or lucky.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Walo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ikawalo sa pila si Nena.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A cube number, representing balance and strength.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Siyam</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Si-yam /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Siyam na pato an naglalangoy sa salog kan Pasig.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A square number, symbolizing completeness and wholeness.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Sampulo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sam-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nabukas ko na an sangko sa labinduwa na regalo ni Julian.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A decade, often used as a basis for counting.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eleven(this)">11. Kagsaro</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio11()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bing i-sa  /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: An bilang kan nagbagasak sa pagsusulit labing-isa.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A prime number, often considered special or unique.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twelve(this)">12. Kagduwa</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio12()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bin-da-la-wa /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Labinduwa an hiwa kan pizza.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A dozen, used in calendars and measurements.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="thirteen(this)">13. Kagtulo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio13()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bin-tat-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Labintres an bilang kan Martir sa Kabite.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A prime number, sometimes associated with superstitions.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourteen(this)">14. Kag-apat</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio14()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bing a-pat /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: An aldaw kan mga kasingkasing igwa sa ika-katorse kan Pebrero.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The natural number following thirteen and preceding fifteen.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifteen(this)">15. Kaglima</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio15()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bing li-ma /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Pang-kalima sa lista kan mga pasyente si Nena.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A positive integer and is the natural number that comes after fourteen.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixteen(this)">16. Kag-anom</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio16()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bing a-nim /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ang kanyang kaaldawan ay sa ika-Kag-anom ng Pebrero.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant number in the hexadecimal (base-16) numbering system. In this system, the digits include 0-9 and the letters A-F.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventeen(this)">17. Kagpito</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio17()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bing pi-to /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: An saindang kasal isasagibo sa ika-kagpito kan Oktubre.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A positive integer, coming after sixteen and before eighteen.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eighteen(this)">18. Kagwalo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio18()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bing wa-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: An kagwalo na porsyento kan kita itinutukdo para sa proyektong pangkalikasan.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant milestone in many cultures, as it marks the age of legal adulthood in several countries, granting individuals certain rights and responsibilities.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="nineteen(this)">19. Kagsiyam</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio19()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bing si-yam /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa:An kahoy sa aming harong may kagsiyam na taon na..</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In basic arithmetic, nineteen is a positive integer, coming after eighteen and before twenty.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twenty(this)">20. Duwang pulo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio20()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Da-la-wam-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: May duwangpung barya ako sa akong bulsa.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to denote the twentieth item in a series or sequence.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="thirty(this)">30. Tulong pulo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio30()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tat-lum-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: May mga bulan na igwang tigtolo na aldaw sana.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A composite number, associated with decades and cycles.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourty(this)">40. Apat na pulo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio40()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-pat-na-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Hali Maria, hatag ko ikaw apat na pulo na mansanas!</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A symbolic or significant number associated with milestones such as age, anniversaries, and biblical events.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifty(this)">50. Limang pulo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio50()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Li-mam-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Magarbo an Ika-Limang pulo na kaadlawan ni Aling Bebet.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In percentage terms, fifty represents half of a whole.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixty(this)">60. Anom na pulo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio60()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-nim-na-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Anom na pulo porsyento an kabuuang kayamanan ni Don Guevarra sa kwarta kan paggibo nin alak. </span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In timekeeping, sixty (seconds) make up a minute, and sixty (minutes) make up one hour..</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventy(this)">70. Pitong pulo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio70()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pi-tum-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Si Mang Juan igwa nin pitong pulo puting karnero.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant milestone, often celebrated as one enters the septuagenarian years.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eighty(this)">80. Walong pulo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio80()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa-lum-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Sa dulo kan eskinita an ika-waluyo na harong.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Number eighty is often associated with the well-known Hypertext Transfer Protocol (HTTP) port 80, which is commonly used for web traffic.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninety(this)">90. Siyam na pulo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio90()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Si-yam-na-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Si Lolo Daniel igwa na sinampulo na taon.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A semiperfect number because the sum of some of its proper divisors (excluding itself) equals the number itself.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onehundred(this)">100. Sanggatos</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio100()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ I-sang-da-an /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Sanggatos na lang an akong kwarta.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Often used as a symbol of completeness, perfection, or a full cycle.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onethousand(this)">1,000. Sang ribo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1000()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ I-sang li-bo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Si Joven igwa nin Sang ribo na kaaway sa internet.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A large numeric value, used in counting and measurements.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onemillion(this)">1,000,000. Sanglaksa</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1000000()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ I-sang mil-yon /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: An harong ni Juanita nagkakahalagang sobra sa sarong milyon.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant numeric quantity, often used in population and finance.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onebillion(this)">1,000,000,000. Sangbilyon</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1000000000()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ I-sang bil-yon /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: An kabuuang populasyon sa Timog-Sidlakan na Asya sobra sa sarong bilyon.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A very large numeric value, commonly used in economic and population contexts.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Magsanay | Practice </button>
        </p>
    </div>
</body>
</html>