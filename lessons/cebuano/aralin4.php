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
    <script src="../cebuano/js/aralin4.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 4: Mga Panultihon</h2>
                <p>Lesson 4: Common Phrases</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/cebuano/aralin3.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/cebuano/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/cebuano/aralin5.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/cebuano/recordings/4/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/cebuano/recordings/4/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/cebuano/recordings/4/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/cebuano/recordings/4/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/cebuano/recordings/4/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/cebuano/recordings/4/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/cebuano/recordings/4/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/cebuano/recordings/4/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/cebuano/recordings/4/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/cebuano/recordings/4/10.wav"></audio>
    
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Pasayloa ko</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pa-say-lo-wa ko /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Pasayloa ko, wala nako nabantay ang imong tawag.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An expression of apology or asking for forgiveness.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Pasaylo</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pa-say-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Pasaylo, dili gyud nako gusto nga nabangga nako imong plorera.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Another way of saying sorry or apologizing, commonly used to express regret.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Wala ko kahibaw</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Hin-di ko a-lam /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Wala ko kahibaw asa nahimutang ang iyang opisina.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to express uncertainty.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Unsa oras karon?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-nong o-ras na? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Unsay orasa karon? Kinahanglan nako muuli og sayo.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the current time.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Asa ang kasilyas?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-sa-an ang ban-yo? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Asa ang kasilyas? Gikinahanglan na nako mag-ihap.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to ask for the location of the restroom.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Gusto ko'g kape.</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Gus-to ko ng ka-pe /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Gusto ko og kape, samtang sayo pa.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">It expresses the speaker's desire for coffee.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Unsa ngalan ani nga karsada?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-nong pa-nga-lan ng kal-sa-dang i-to? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Unsa'y ngalan ani nga karsada? Nagpangita ko og dalan padulong sa ospital.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to ask for the name of the street when the speaker is looking for directions.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Aduna ka bay wifi?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ May-ro-on ka bang wi-fi? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Aduna ka bay wifi? Gusto nako mokuha og koneksyon.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire if there is an available wifi connection, indicating the speaker's interest in connecting to the internet.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Tagpila ni?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Mag-ka-no i-to? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Tagpila ni? Gusto ko sanang mopalit.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the price of an item the speaker is interested in purchasing.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Gusto nako kini</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Gus-to ko i-to! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Gusto nako kini, bisan pa og gamayg mahal.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to express the speaker's desire to buy or have a particular item.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Magsanay | Practice </button>
        </p>
    </div>
</body>
</html>