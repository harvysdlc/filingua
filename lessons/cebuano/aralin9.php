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
    <script src="../cebuano/js/aralin9.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 9: Transportasyon</h2>
                <p>Lesson 9: Travel and Transportation</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/cebuano/aralin8.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/cebuano/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/cebuano/aralin1.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/cebuano/recordings/9/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/cebuano/recordings/9/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/cebuano/recordings/9/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/cebuano/recordings/9/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/cebuano/recordings/9/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/cebuano/recordings/9/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/cebuano/recordings/9/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/cebuano/recordings/9/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/cebuano/recordings/9/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/cebuano/recordings/9/10.wav"></audio>
    
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Asa ang terminal sa bus?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-an ang ter-mi-nal ng bus? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Kagawad Mike, asa ang terminal sa bus padulong sa Maynila?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the location of the bus terminal, which is the designated place where buses depart and arrive.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Pila ang plete paingon sa Manila?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Mag-ka-no ang pa-ma-sa-he pa-pun-tang <b>[Place]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Manong tsuper, tagpila ang plete padulong sa Maynila?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Seeks information on the cost of traveling by bus to a specific destination.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Unsa oras ang biyahe?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-nong o-ras ang bi-ya-he? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Unsa nga oras ang biyahe nimo Julian? Pwede mi makisakay ni Ella?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Asked to find out the departure or arrival time of a particular bus trip.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Unsa ang sakyan paingon sa Indang?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-no ang sa-sak-yan pa-pun-tang <b>[Place]?</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Lolo Juan, unsa ang sakyanan padulong sa Indang? Jeepney ba o Van?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the type of transportation that can take someone to a specific destination.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Naay taxi dinhi?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ May-ro-on bang ta-xi ri-to? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nena, aduna bay taxi dinhi padulong sa San Juan?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A straightforward inquiry about the availability of taxis in the current location.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Asa ang paluparan?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-sa-an ang pa-li-pa-ran? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Diin dapit ang airport? Kay karon ang akong biyahe padulong sa Cebu.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to ask for directions to the location of the airport, which is the facility where airplanes take off and land, facilitating air travel.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Asa ang pinakaduol nga istasyon sa tren?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-an ang pi-na-ka-ma-la-pit na es-tas-yon ng tren? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Mang Jose, asa ang pinakamalapit nga estasyon sa tren padulong sa Lucban?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Seeks information about the location of the closest train station, which is a facility where trains arrive and depart. </span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Palihug bayad</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pa-ki-a-bot ang ba-yad /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ate, palihug abot ang bayad nako padulong sa Bacoor.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A request for someone to provide the necessary money for transportation.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Unsa oras mouli ang eroplano?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-nong o-ras da-ra-ting ang e-ro-pla-no?  /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Binibini, unsa ka oras mosulod ang eroplano? Huli na kay kini sa tatlumpu ka minutos.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the expected arrival time of a flight.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Unsaon pag-adto sa bangko?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pa-a-no pu-mun-ta sa bang-ko? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Inay, unsaon pag-abot sa bangko nga gi-trabahoan ni kuya?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A request for directions or guidance on reaching the bank, indicating a need for information on the route or means of transportation to reach the specified destination.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Magsanay | Practice </button>
        </p>
    </div>
</body>
</html>