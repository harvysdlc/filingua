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
    <title>Filingua - Aralin 4</title>
    <link rel="stylesheet" href="../../../filingua/lessons/aralin.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
    <script src="../kapampangan/js/aralin4.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 4: Mga Parirala</h2>
                <p>Lesson 4: Common Phrases</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/kapampangan/aralin3.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/kapampangan/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/kapampangan/aralin5.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/kapampangan/recordings/4/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/kapampangan/recordings/4/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/kapampangan/recordings/4/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/kapampangan/recordings/4/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/kapampangan/recordings/4/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/kapampangan/recordings/4/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/kapampangan/recordings/4/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/kapampangan/recordings/4/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/kapampangan/recordings/4/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/kapampangan/recordings/4/10.wav"></audio>
    
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Pasensya na</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pa-sen-sya na /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Pasensya na, Harvy.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An expression of apology or asking for forgiveness.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Paumanhin</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pa-u-man-hin /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Paumanhin, aliwa ko malay ing lahat.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Another way of saying sorry or apologizing, commonly used to express regret.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. E ku balu</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ E ku ba-lu /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: E ku balu ang kapampangan.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to express uncertainty.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Nanu ing oras na?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-nu ing o-ras na? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nanu ing oras ini?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the current time.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Nukarin ing banyu?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Nu-ka-rin ing ba-nyu? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nukarin ing banyu? ihing-ihi aku..</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to ask for the location of the restroom.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Buri ku yang kapi</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Bu-ri ku yang ka-pi /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Buri ku yang kapi, Salamat.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">It expresses the speaker's desire for coffee.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Nanu ing kewanan da kung lalawigan?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-nu ing ke-wa-nan da kung la-la-wi-gan? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nanu ing kewanan da kung lalawigan? Naliligaw aku.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to ask for the name of the street when the speaker is looking for directions.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Atyu wifi karin?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ At-yu wi-fi ka-rin? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Atyu hotspot karin? Pa-connect.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire if there is an available wifi connection, indicating the speaker's interest in connecting to the internet.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Magkanu ya iya?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Mag-ka-nu ya i-ya? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Magkanu ya iya? buri ke ini.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the price of an item the speaker is interested in purchasing.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Buri ke ini!</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Bu-ri ke i-ni! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Buri ke ining hotdog!</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to express the speaker's desire to buy or have a particular item.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice</button>
        </p>
    </div>
</body>
</html>