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
    <script src="../kapampangan/js/aralin3.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 3: Pagbilang</h2>
                <p>Lesson 3: Numbers and Counting</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/kapampangan/aralin2.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/kapampangan/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/kapampangan/aralin4.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/kapampangan/recordings/3/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/kapampangan/recordings/3/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/kapampangan/recordings/3/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/kapampangan/recordings/3/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/kapampangan/recordings/3/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/kapampangan/recordings/3/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/kapampangan/recordings/3/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/kapampangan/recordings/3/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/kapampangan/recordings/3/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/kapampangan/recordings/3/10.wav"></audio>
        <audio id="audio11" src="../../../filingua/lessons/kapampangan/recordings/3/11.wav"></audio>
        <audio id="audio12" src="../../../filingua/lessons/kapampangan/recordings/3/12.wav"></audio>
        <audio id="audio13" src="../../../filingua/lessons/kapampangan/recordings/3/13.wav"></audio>
        <audio id="audio14" src="../../../filingua/lessons/kapampangan/recordings/3/14.wav"></audio>
        <audio id="audio15" src="../../../filingua/lessons/kapampangan/recordings/3/15.wav"></audio>
        <audio id="audio16" src="../../../filingua/lessons/kapampangan/recordings/3/16.wav"></audio>
        <audio id="audio17" src="../../../filingua/lessons/kapampangan/recordings/3/17.wav"></audio>
        <audio id="audio18" src="../../../filingua/lessons/kapampangan/recordings/3/18.wav"></audio>
        <audio id="audio19" src="../../../filingua/lessons/kapampangan/recordings/3/19.wav"></audio>
        <audio id="audio20" src="../../../filingua/lessons/kapampangan/recordings/3/20.wav"></audio>
        <audio id="audio30" src="../../../filingua/lessons/kapampangan/recordings/3/30.wav"></audio>
        <audio id="audio40" src="../../../filingua/lessons/kapampangan/recordings/3/40.wav"></audio>
        <audio id="audio50" src="../../../filingua/lessons/kapampangan/recordings/3/50.wav"></audio>
        <audio id="audio60" src="../../../filingua/lessons/kapampangan/recordings/3/60.wav"></audio>
        <audio id="audio70" src="../../../filingua/lessons/kapampangan/recordings/3/70.wav"></audio>
        <audio id="audio80" src="../../../filingua/lessons/kapampangan/recordings/3/80.wav"></audio>
        <audio id="audio90" src="../../../filingua/lessons/kapampangan/recordings/3/90.wav"></audio>
        <audio id="audio100" src="../../../filingua/lessons/kapampangan/recordings/3/100.wav"></audio>
        <audio id="audio1000" src="../../../filingua/lessons/kapampangan/recordings/3/1000.wav"></audio>
        <audio id="audio1000000" src="../../../filingua/lessons/kapampangan/recordings/3/1000000.wav"></audio>
        <audio id="audio1000000000" src="../../../filingua/lessons/kapampangan/recordings/3/1000000000.wav"></audio>
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Metung</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Me-tung /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ing laptop ku ay metung.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The fundamental unit, singular and indivisible.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Adwa</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ad-wa /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Adwang kanun.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The first and simplest even number, denoting duality.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Atlu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ At-lu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Atlu ing gitara ku.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The smallest prime number, often symbolizing balance.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Apat</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-pat /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Apat na tau.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A square number, representing stability and order.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Lima</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Li-ma /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Lima ing nanalu na konsehal.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The third prime number, associated with change and dynamism.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Anam</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-nam /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Anam ing barya ku.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The first perfect number, symbolizing harmony.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Pitu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pi-tu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Pitu ang favorite number ni Andrei.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A prime number, often considered mystical or lucky.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Walo</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Pang walo ini.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A cube number, representing balance and strength.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Siam</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Siam /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Siam na bibe.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A square number, symbolizing completeness and wholeness.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Apulu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-pu-lu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nabuksan ku na ing apulung pintu.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A decade, often used as a basis for counting.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eleven(this)">11. Kasanting-metung</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio11()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-san-ting me-tung  /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Kasanting-metung ing lumalabas king paaralan.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A prime number, often considered special or unique.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twelve(this)">12. Kasanting-adwa</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio12()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-san-ting ad-wa /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: kasanting-adwang regalu ku.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A dozen, used in calendars and measurements.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="thirteen(this)">13. Kasanting-atlu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio13()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-san-ting at-lu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Kasanting-atlu ing Martyr sa Cavite.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A prime number, sometimes associated with superstitions.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourteen(this)">14. Kasanting-apat</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio14()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-san-ting a-pat /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Valentine's na sa kasanting-apat ke Pebrero.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The natural number following thirteen and preceding fifteen.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifteen(this)">15. Kasanting-lima</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio15()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-san-ting li-ma /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Pang kasanting-lima ing amung banda.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A positive integer and is the natural number that comes after fourteen.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixteen(this)">16. Kasanting-anam</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio16()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-san-ting a-nam /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: si Brook pu mipabalu ku kasanting-anam taung gulang sa darating na Domingo.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant number in the hexadecimal (base-16) numbering system. In this system, the digits include 0-9 and the letters A-F.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventeen(this)">17. Kasanting-pitu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio17()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-san-ting pi-tu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Kasanting-pitung tupa.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A positive integer, coming after sixteen and before eighteen.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eighteen(this)">18. Kasanting-walo</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio18()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-san-ting wa-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Owa, kasanting-walu taung gulang ba ikaw?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant milestone in many cultures, as it marks the age of legal adulthood in several countries, granting individuals certain rights and responsibilities.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="nineteen(this)">19. Kasanting-siam</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio19()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-san-ting siam /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Kasanting-siam na taun.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In basic arithmetic, nineteen is a positive integer, coming after eighteen and before twenty.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twenty(this)">20. Adwang pulu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio20()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ad-wang pu-lu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Adwang pulung barya.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to denote the twentieth item in a series or sequence.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="thirty(this)">30. Atlung pulu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio30()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ At-lung pu-lu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Atlung pulung edad ang kailangan.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A composite number, associated with decades and cycles.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourty(this)">40. Apat a pulu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio40()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-pat a pu-lu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ing mansanas ke apat a pulu.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A symbolic or significant number associated with milestones such as age, anniversaries, and biblical events.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifty(this)">50. Limang pulu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio50()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Li-mang pu-lu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Si Bebet ay limang pulu taung gulang na.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In percentage terms, fifty represents half of a whole.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixty(this)">60. Anam a pulu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio60()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-nam a pu-lu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Anam a pulu akung hanap sa negosyu.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In timekeeping, sixty (seconds) make up a minute, and sixty (minutes) make up one hour..</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventy(this)">70. Pitung pulu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio70()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pi-tung pu-lu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Pitung pulu lahat, Josh.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant milestone, often celebrated as one enters the septuagenarian years.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eighty(this)">80. Walong pulu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio80()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa-long pu-lu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Si lola king walong pulu taung gulang na.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Number eighty is often associated with the well-known Hypertext Transfer Protocol (HTTP) port 80, which is commonly used for web traffic.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninety(this)">90. Siam a pulu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio90()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Siam a pu-lu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Siam a pulu pesos, aliwa discount.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A semiperfect number because the sum of some of its proper divisors (excluding itself) equals the number itself.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onehundred(this)">100. Dinalan</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio100()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Di-na-lan /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Dinalang estudiante.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Often used as a symbol of completeness, perfection, or a full cycle.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onethousand(this)">1,000. Lauit libu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1000()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-wit li-bu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Wala ku lauit libu barya.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A large numeric value, used in counting and measurements.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onemillion(this)">1,000,000. Sangyuta</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1000000()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sang-yu-ta /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Sangyutang deboto ng Nazareno.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant numeric quantity, often used in population and finance.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onebillion(this)">1,000,000,000. Sang bilion</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1000000000()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sang bil-yon /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Sang biliong pagmamahal.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A very large numeric value, commonly used in economic and population contexts.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice</button>
        </p>
    </div>
</body>
</html>