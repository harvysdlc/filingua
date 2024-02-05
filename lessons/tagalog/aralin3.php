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
    <script src="../tagalog/js/aralin3.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 3: Pagbilang</h2>
                <p>Lesson 3: Numbers and Counting</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/tagalog/aralin2.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/tagalog/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/tagalog/aralin4.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/tagalog/recordings/3/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/tagalog/recordings/3/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/tagalog/recordings/3/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/tagalog/recordings/3/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/tagalog/recordings/3/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/tagalog/recordings/3/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/tagalog/recordings/3/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/tagalog/recordings/3/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/tagalog/recordings/3/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/tagalog/recordings/3/10.wav"></audio>
        <audio id="audio11" src="../../../filingua/lessons/tagalog/recordings/3/11.wav"></audio>
        <audio id="audio12" src="../../../filingua/lessons/tagalog/recordings/3/12.wav"></audio>
        <audio id="audio13" src="../../../filingua/lessons/tagalog/recordings/3/13.wav"></audio>
        <audio id="audio14" src="../../../filingua/lessons/tagalog/recordings/3/14.wav"></audio>
        <audio id="audio15" src="../../../filingua/lessons/tagalog/recordings/3/15.wav"></audio>
        <audio id="audio16" src="../../../filingua/lessons/tagalog/recordings/3/16.wav"></audio>
        <audio id="audio17" src="../../../filingua/lessons/tagalog/recordings/3/17.wav"></audio>
        <audio id="audio18" src="../../../filingua/lessons/tagalog/recordings/3/18.wav"></audio>
        <audio id="audio19" src="../../../filingua/lessons/tagalog/recordings/3/19.wav"></audio>
        <audio id="audio20" src="../../../filingua/lessons/tagalog/recordings/3/20.wav"></audio>
        <audio id="audio30" src="../../../filingua/lessons/tagalog/recordings/3/30.wav"></audio>
        <audio id="audio40" src="../../../filingua/lessons/tagalog/recordings/3/40.wav"></audio>
        <audio id="audio50" src="../../../filingua/lessons/tagalog/recordings/3/50.wav"></audio>
        <audio id="audio60" src="../../../filingua/lessons/tagalog/recordings/3/60.wav"></audio>
        <audio id="audio70" src="../../../filingua/lessons/tagalog/recordings/3/70.wav"></audio>
        <audio id="audio80" src="../../../filingua/lessons/tagalog/recordings/3/80.wav"></audio>
        <audio id="audio90" src="../../../filingua/lessons/tagalog/recordings/3/90.wav"></audio>
        <audio id="audio100" src="../../../filingua/lessons/tagalog/recordings/3/100.wav"></audio>
        <audio id="audio1000" src="../../../filingua/lessons/tagalog/recordings/3/1000.wav"></audio>
        <audio id="audio1000000" src="../../../filingua/lessons/tagalog/recordings/3/1000000.wav"></audio>
        <audio id="audio1000000000" src="../../../filingua/lessons/tagalog/recordings/3/1000000000.wav"></audio>
        <audio id="click" src="../../../filingua/audio/click.mp3"></audio>
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Isa</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ I-sa /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Ang Pilipinas ay isa sa mga bansa sa Timog-Silangang Asya.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The Philippines is one of the countries in Southeast Asia.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: The fundamental unit, singular and indivisible.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Dalawa</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Da-la-wa /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Mayroon akong dalawang kapatid, sina Toto at Nene.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I have two siblings, they are Toto and Nene.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: The first and simplest even number, denoting duality.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Tatlo</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tat-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Tatlo ang tupa sa bukid ni Mang Juan.</span><br>   
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Mr. John has three sheep in his farm.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: The smallest prime number, often symbolizing balance.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Apat</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-pat /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Apat na baso ang natanggap kong regalo.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I have received four mugs as a gift.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: A square number, representing stability and order.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Lima</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Li-ma /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Lima ang kandidato para konsehal sa bayan ng Indang.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: There are five candidates for councilor in the town of Indang.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: The third prime number, associated with change and dynamism.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Anim</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-nim /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Ang haba ng tela ay anim na dipa.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The length of the fabric is six meters.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: The first perfect number, symbolizing harmony.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Pito</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pi-to /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Pito ang paboritong numero ni Andrei.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Seven is Andrei's favorite number.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: A prime number, often considered mystical or lucky.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Walo</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Ika-walo sa pila si Nena.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Nena is eighth in line.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: A cube number, representing balance and strength.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Siyam</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Si-yam /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Siyam na bibe ang lumalangoy sa ilog Pasig.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Nine ducks are swimming in the Pasig River.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A square number, symbolizing completeness and wholeness.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Sampu</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sam-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Nabuksan ko na ang sampu sa labing-dalawang regalo ni Julian.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I have already opened ten out of Julian's twelve gifts.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A decade, often used as a basis for counting.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eleven(this)">11. Labing-isa</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio11()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bing i-sa  /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Ang bilang ng mga bumagsak sa pagsusulit ay labing-isa.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Eleven students failed the exam.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A prime number, often considered special or unique.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twelve(this)">12. Labindalawa</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio12()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bin-da-la-wa /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Labindalawa ang hiwa ng pizza.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: A pizza has twelve slices.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A dozen, used in calendars and measurements.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="thirteen(this)">13. Labintatlo</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio13()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bin-tat-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Labintatlo ang bilang ng mga Martir sa Kabite.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: There are thirteen Martyrs in Cavite.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A prime number, sometimes associated with superstitions.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourteen(this)">14. Labing-apat</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio14()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bing a-pat /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Ang araw ng mga puso ay ginaganap tuwing ika labing-apat ng Pebrero.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Valentine's Day is celebrated on the fourteenth of February.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The natural number following thirteen and preceding fifteen.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifteen(this)">15. Labing-lima</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio15()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bing li-ma /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Pang labing-lima sa listahan ng mga pasyente si Nena.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Nena is fifteenth on the list of patients.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A positive integer and is the natural number that comes after fourteen.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixteen(this)">16. Labing-anim</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio16()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bing a-nim /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Ang kanyang kaarawan ay sa ika-labing-anim ng Pebrero.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Her birthday is on the sixteenth of February.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant number in the hexadecimal (base-16) numbering system. In this system, the digits include 0-9 and the letters A-F.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventeen(this)">17. Labing-pito</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio17()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bing pi-to /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Ang kanilang kasal ay idaraos sa ika-labing-pito ng Oktubre.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Their wedding will take place on the seventeenth of October.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A positive integer, coming after sixteen and before eighteen.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eighteen(this)">18. Labing-walo</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio18()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bing wa-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Ang labing-walong porsyento ng kita ay inilaan para sa proyektong pangkapaligiran.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Eighteen percent of the income is allocated for the environmental project.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant milestone in many cultures, as it marks the age of legal adulthood in several countries, granting individuals certain rights and responsibilities.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="nineteen(this)">19. Labing-siyam</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio19()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-bing si-yam /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Ang puno sa aming bakuran ay labing-siyam na taon na.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The tree in our backyard is nineteen years old.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In basic arithmetic, nineteen is a positive integer, coming after eighteen and before twenty.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twenty(this)">20. Dalawampu</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio20()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Da-la-wam-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Ako ay may dalawampung barya sa aking pitaka.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I have twenty coins in my wallet.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to denote the twentieth item in a series or sequence.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="thirty(this)">30. Tatlumpu</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio30()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tat-lum-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: May mga buwan na may tatlumpu na araw lamang.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: There are months with only thirty days.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A composite number, associated with decades and cycles.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourty(this)">40. Apatnapu</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio40()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-pat-na-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Halika Maria, bibigyan kita ng apatnapu na mansanas!</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Come here, Maria, I'll give you forty apples!.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A symbolic or significant number associated with milestones such as age, anniversaries, and biblical events.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifty(this)">50. Limampu</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio50()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Li-mam-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Magarbo ang Ika-Limampung kaarawan ni Aling Bebet.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Aling Bebet's fiftieth birthday is extravagant.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In percentage terms, fifty represents half of a whole.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixty(this)">60. Animnapu</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio60()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-nim-na-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Animnapu ang kabuuang porsyento ni Don Guevarra sa pera ng pagawaan ng alak. </span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Sixty percent is the total share of Don Guevarra in the distillery's money.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In timekeeping, sixty (seconds) make up a minute, and sixty (minutes) make up one hour..</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventy(this)">70. Pitumpu</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio70()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pi-tum-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Si Mang Juan ay may pitumpung puting tupa.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Mr. John has seventy white sheep.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant milestone, often celebrated as one enters the septuagenarian years.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eighty(this)">80. Walumpu</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio80()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa-lum-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Nasa dulo ng eskinita ang ika-walumpu na bahay.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The eightieth house is at the end of the alley.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Number eighty is often associated with the well-known Hypertext Transfer Protocol (HTTP) port 80, which is commonly used for web traffic.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninety(this)">90. Siyamnapu</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio90()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Si-yam-na-pu /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Si Lolo Daniel ay siyamnapung taong gulang na.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Grandpa Daniel is ninety years old.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A semiperfect number because the sum of some of its proper divisors (excluding itself) equals the number itself.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onehundred(this)">100. Isangdaan</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio100()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ I-sang-da-an /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Isangdaan na lamang ang aking pera.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I only have a hundred pesos left.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Often used as a symbol of completeness, perfection, or a full cycle.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onethousand(this)">1,000. Isang Libo</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1000()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ I-sang li-bo /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Si Joven ay may Isanglibong kaaway sa internet.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Joven has a thousand enemies on the internet.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A large numeric value, used in counting and measurements.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onemillion(this)">1,000,000. Isang Milyon</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1000000()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ I-sang mil-yon /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Ang bahay ni Juanita ay nagkakahalagang higit kumulang isang milyon.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Juanita's house is worth approximately a million.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant numeric quantity, often used in population and finance.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onebillion(this)">1,000,000,000. Isang Bilyon</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1000000000()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ I-sang bil-yon /</span><br><br>
            <span style="font-size: small; font-weight: bold">Halimbawa: Ang kabuuang populasyon sa timog-silangang asya ang mahigit sa isang bilyon.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The total population in Southeast Asia is over a billion.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A very large numeric value, commonly used in economic and population contexts.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice </button>
        </p>
    </div>
</body>
</html>