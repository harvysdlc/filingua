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
    <title>Filingua - Aralin 9</title>
    <link rel="stylesheet" href="../../../filingua/lessons/aralin.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
    <script src="../kapampangan/js/aralin9.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 9: Transportasyon</h2>
                <p>Lesson 9: Travel and Transportation</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/kapampangan/aralin8.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/kapampangan/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/kapampangan/aralin1.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/kapampangan/recordings/9/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/kapampangan/recordings/9/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/kapampangan/recordings/9/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/kapampangan/recordings/9/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/kapampangan/recordings/9/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/kapampangan/recordings/9/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/kapampangan/recordings/9/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/kapampangan/recordings/9/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/kapampangan/recordings/9/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/kapampangan/recordings/9/10.wav"></audio>
    
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Nukarin ing pauling terminal ng bus?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Nu-ka-rin ing pa-u-ling ter-mi-nal ng bus? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Kagawad Mike, Nukarin ing pauling terminal ng bus?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the location of the bus terminal, which is the designated place where buses depart and arrive.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Magkanu ing bayad pa-Manila? </span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Mag-ka-nu ing ba-yad pa- <b>[Place]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Manong tsuper, magkanu ing bayad pa-Manila?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Seeks information on the cost of traveling by bus to a specific destination.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Nanu ing oras ning byahe?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-nu ing o-ras ning bya-he? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nanu ing oras ning karin byahe, Julian? pasabay naman kami ni Ella.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Asked to find out the departure or arrival time of a particular bus trip.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Nanu ing saken pa-Indang?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-nu ing sa-ken pa- <b>[Place]?</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Lolo Juan, Nanu ing saken pa-Indang?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the type of transportation that can take someone to a specific destination.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Atyu bang taxi idi?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-tyu bang ta-xi i-di? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nena, atyu bang taxi idi?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A straightforward inquiry about the availability of taxis in the current location.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Nukarin mung paliparan?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Nu-ka-rin mung pa-li-pa-ran? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nukarin mung paliparan, manong tsuper?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to ask for directions to the location of the airport, which is the facility where airplanes take off and land, facilitating air travel.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Nukarin ing pinakamalapit a estasyun ning tren?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Nu-ka-rin ing pi-na-ka-ma-la-pit a es-ta-syun ning tren? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Mang Jose, nukarin ing pinakamalapit a estasyun ning tren?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Seeks information about the location of the closest train station, which is a facility where trains arrive and depart. </span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Pabie bayad mu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pa-bie ba-yad mu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ate pabie bayad mu.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A request for someone to provide the necessary money for transportation.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Nanu ing oras ing eruplanu makaratang? </span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-nu ing o-ras ing e-ru-pla-nu ma-ka-ra-tang?  /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Binibini, nanu ing oras ing eruplanu makaratang? Ulia ing metung kareng tatlumpung minutu.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the expected arrival time of a flight.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Makananu miras king bangku?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-ka-na-nu mi-ras king bang-ku? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Inay, Makananu miras king bangku?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A request for directions or guidance on reaching the bank, indicating a need for information on the route or means of transportation to reach the specified destination.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice</button>
        </p>
    </div>
</body>
</html>