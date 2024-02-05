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
    <script src="../cebuano/js/aralin3.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 3: Pagbilib</h2>
                <p>Lesson 3: Numbers and Counting</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/cebuano/aralin2.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/cebuano/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/cebuano/aralin4.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/cebuano/recordings/3/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/cebuano/recordings/3/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/cebuano/recordings/3/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/cebuano/recordings/3/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/cebuano/recordings/3/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/cebuano/recordings/3/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/cebuano/recordings/3/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/cebuano/recordings/3/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/cebuano/recordings/3/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/cebuano/recordings/3/10.wav"></audio>
        <audio id="audio11" src="../../../filingua/lessons/cebuano/recordings/3/11.wav"></audio>
        <audio id="audio12" src="../../../filingua/lessons/cebuano/recordings/3/12.wav"></audio>
        <audio id="audio13" src="../../../filingua/lessons/cebuano/recordings/3/13.wav"></audio>
        <audio id="audio14" src="../../../filingua/lessons/cebuano/recordings/3/14.wav"></audio>
        <audio id="audio15" src="../../../filingua/lessons/cebuano/recordings/3/15.wav"></audio>
        <audio id="audio16" src="../../../filingua/lessons/cebuano/recordings/3/16.wav"></audio>
        <audio id="audio17" src="../../../filingua/lessons/cebuano/recordings/3/17.wav"></audio>
        <audio id="audio18" src="../../../filingua/lessons/cebuano/recordings/3/18.wav"></audio>
        <audio id="audio19" src="../../../filingua/lessons/cebuano/recordings/3/19.wav"></audio>
        <audio id="audio20" src="../../../filingua/lessons/cebuano/recordings/3/20.wav"></audio>
        <audio id="audio30" src="../../../filingua/lessons/cebuano/recordings/3/30.wav"></audio>
        <audio id="audio40" src="../../../filingua/lessons/cebuano/recordings/3/40.wav"></audio>
        <audio id="audio50" src="../../../filingua/lessons/cebuano/recordings/3/50.wav"></audio>
        <audio id="audio60" src="../../../filingua/lessons/cebuano/recordings/3/60.wav"></audio>
        <audio id="audio70" src="../../../filingua/lessons/cebuano/recordings/3/70.wav"></audio>
        <audio id="audio80" src="../../../filingua/lessons/cebuano/recordings/3/80.wav"></audio>
        <audio id="audio90" src="../../../filingua/lessons/cebuano/recordings/3/90.wav"></audio>
        <audio id="audio100" src="../../../filingua/lessons/cebuano/recordings/3/100.wav"></audio>
        <audio id="audio1000" src="../../../filingua/lessons/cebuano/recordings/3/1000.wav"></audio>
        <audio id="audio1000000" src="../../../filingua/lessons/cebuano/recordings/3/1000000.wav"></audio>
        <audio id="audio1000000000" src="../../../filingua/lessons/cebuano/recordings/3/1000000000.wav"></audio>
        <audio id="click" src="../../../filingua/audio/click.mp3"></audio>
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Usa</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ U-sa /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ang Pilipinas ay usa sa mga nasud sa Timog-Silangang Asya.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The Philippines is one of the countries in Southeast Asia.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The fundamental unit, singular and indivisible.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Duha</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Du-ha /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Naa koy duha ka igsuon, sila Toto at Nene.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I have two siblings, they are Toto and Nene.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The first and simplest even number, denoting duality.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Tulo</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tu-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Tulo kabuok ang karnero ni Mang Juan..</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Mr. John has three sheep in his farm.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The smallest prime number, often symbolizing balance.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Upat</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ U-pat /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Upat ka baso ang akong nadawat nga regalo.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I have received four mugs as a gift.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A square number, representing stability and order.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Lima</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Li-ma /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Lima ang kandidato para konsehal sa nasud sa Indang.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: There are five candidates for councilor in the town of Indang.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The third prime number, associated with change and dynamism.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Unom</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ U-nom /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ang sukod sa tela kay unom ka dupa.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The length of the fabric is six meters.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The first perfect number, symbolizing harmony.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Pito</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pi-to /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Pito ang paborito na numero ni Andrei.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Seven is Andrei's favorite number.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A prime number, often considered mystical or lucky.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Walo</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ika-walo sa linya si Nena.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Nena is eighth in line.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A cube number, representing balance and strength.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Siyam</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Si-yam /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Siyam ka itik ang galangoy sa ilog Pasig..</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Nine ducks are swimming in the Pasig River.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A square number, symbolizing completeness and wholeness.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Napulo</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-pu-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Naablihan na nako ang napu sud sa dose ka regalo ni Julian.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I have already opened ten out of Julian's twelve gifts.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A decade, often used as a basis for counting.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eleven(this)">11. Napulo'g-usa</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio11()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-pu-lo'g-u-sa /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Napulo’g usa ang nahagbong sa eksam.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Eleven students failed the exam.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A prime number, often considered special or unique.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twelve(this)">12. Napulo'g-duha</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon"in- style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio12()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-pu-lo'g-du-ha /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Napulo'g-duha ang hiwa sa pizza.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: A pizza has twelve slices.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A dozen, used in calendars and measurements.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="thirteen(this)">13. Napulo'g-tulo</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio13()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-pu-lo'g-tu-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Napulo’g-tulo ang Martir sa Cavite.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: There are thirteen Martyrs in Cavite.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A prime number, sometimes associated with superstitions.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourteen(this)">14. Napulo'g-upat</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio14()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-pu-lo'g-u-pat /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ang adlaw sa mga kasing-kasing ay siniselebreta kada ika napulo'g-upat sa Pebrero.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Valentine's Day is celebrated on the fourteenth of February.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The natural number following thirteen and preceding fifteen.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifteen(this)">15. Napulo'g-lima</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio15()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-pu-lo'g-li-ma /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Si Nena ang ika napulo'g-lima sa listahan sa mga pasyente.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Nena is fifteenth on the list of patients.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A positive integer and is the natural number that comes after fourteen.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixteen(this)">16. Napulo'g-unom</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio16()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-pu-lo'g-u-nom /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ang iyang adlaw nga natawhan ay sa ika napulo'g-unom sa Pebrero.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Her birthday is on the sixteenth of February.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant number in the hexadecimal (base-16) numbering system. In this system, the digits include 0-9 and the letters A-F.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventeen(this)">17. Napulo'g-pito</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio17()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-pu-lo'g-pi-to /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ang ilahang kasal kay iselebreta sa ika napulo'g-pito sa Oktubre.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Their wedding will take place on the seventeenth of October.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A positive integer, coming after sixteen and before eighteen.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eighteen(this)">18. Napulo'g-walo</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio18()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-pu-lo'g-wa-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ang napulo'g-walo ka porsiyento sa kita ay gamiton sa proyektong pangkapaligiran.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Eighteen percent of the income is allocated for the environmental project.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant milestone in many cultures, as it marks the age of legal adulthood in several countries, granting individuals certain rights and responsibilities.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="nineteen(this)">19. Napulo'g-siyam</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio19()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-pu-lo'g-si-yam /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ang kahoy sa among tugkaran kay ika napulo'g-siyam ka tuig na.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The tree in our backyard is nineteen years old.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In basic arithmetic, nineteen is a positive integer, coming after eighteen and before twenty.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twenty(this)">20. Kawhaan</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio20()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Kaw-haan /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Naa koy kawhaan pesos sa akong pitaka.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I have twenty coins in my wallet.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to denote the twentieth item in a series or sequence.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="thirty(this)">30. Katuloan</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio30()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Kat-lo-an /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa:  Naay mga bulan nga naa ray katuloan ka adlaw.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: There are months with only thirty days.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A composite number, associated with decades and cycles.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourty(this)">40. Kaupatan</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio40()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-u-pa-tan /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ari dire Maria, tagaan tikag kaupatan nga mansanas!</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Come here, Maria, I'll give you forty apples!.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A symbolic or significant number associated with milestones such as age, anniversaries, and biblical events.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifty(this)">50. Kalimaan</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio50()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-li-ma-an /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Garbo kaayo ang ika kaimaan nga adlaw na natawhan ni Aling Bebet.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Aling Bebet's fiftieth birthday is extravagant.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In percentage terms, fifty represents half of a whole.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixty(this)">60. Kaunoman</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio60()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-u-no-man /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Kaunoman ka porsyento sa tibuok nga kwarta ni Don Guevarra gikan sa Himuanan og alak.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Sixty percent is the total share of Don Guevarra in the distillery's money.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In timekeeping, sixty (seconds) make up a minute, and sixty (minutes) make up one hour..</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventy(this)">70. Kapitoan</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio70()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-pi-to-an /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Naay kapitoan ka puti nga karnero si Mang Juan.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Mr. John has seventy white sheep.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant milestone, often celebrated as one enters the septuagenarian years.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eighty(this)">80. Kawaloan</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio80()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Kaw-a-lo-an /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Naa sa tumoy sa eskina ang ika kawaloan nga balay.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The eightieth house is at the end of the alley.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Number eighty is often associated with the well-known Hypertext Transfer Protocol (HTTP) port 80, which is commonly used for web traffic.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninety(this)">90. Kasiyaman</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio90()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-si-ya-man /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Si Lolo Daniel ay kasiyaman tuig na.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Grandpa Daniel is ninety years old.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A semiperfect number because the sum of some of its proper divisors (excluding itself) equals the number itself.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onehundred(this)">100. Usa ka gatos</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio100()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ U-sa ka ga-tos /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Usa ka gatos nalang ako kwarta.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I only have a hundred pesos left.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Often used as a symbol of completeness, perfection, or a full cycle.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onethousand(this)">1,000. Usa ka libo</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1000()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ U-sa ka li-bo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Naay usa ka libo nga kontra si Joven sa internet.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Joven has a thousand enemies on the internet.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A large numeric value, used in counting and measurements.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onemillion(this)">1,000,000. Usa ka milyon</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1000000()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ U-sa ka mil-yon /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ang balay ni Juanita ay kapin sa usa ka milyon ang kantidad.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Juanita's house is worth approximately a million.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant numeric quantity, often used in population and finance.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onebillion(this)">1,000,000,000. Usa ka bilyon</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1000000000()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ U-sa ka bil-yon /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ang kinatibuk-ang populasyon sa timog-silangang Asya ay kapin sa usa ka bilyon.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The total population in Southeast Asia is over a billion.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A very large numeric value, commonly used in economic and population contexts.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice </button>
        </p>
    </div>
</body>
</html>