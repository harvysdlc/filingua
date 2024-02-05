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
        <audio id="click" src="../../../filingua/audio/click.mp3"></audio>
    
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Pasaylo</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pa-say-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Pasayloa ko, wa nako nabantayan ang imong tawag..</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I'm sorry, I didn't notice your call.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An expression of apology or asking for forgiveness.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Patawad</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pa-ta-wad /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Patawad, wa nako gituyo mabuak ang imong plorera.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I apologize, I didn't mean to break your vase.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Another way of saying sorry or apologizing, commonly used to express regret.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Wa ko kabaw</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa ko ka-baw /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Wa ko kabaw asa dapit ang iyang opisina.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I don't know where her office is.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to express uncertainty.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Unsa na orasa?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Un-sa na o-ra-sa? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Unsa na orasa? Kinahanglan na nako muoli og sayo.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: What time is it? I need to go home early.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the current time.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Asa ang kasilyas?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-sa ang ka-sil-yas? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Asa ang kasilyas? Kahion na kaayo ko.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Where is the bathroom? I need to pee.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to ask for the location of the restroom.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Gusto nako og kape</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Gus-to na-ko og ka-pe /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Gusto nako og kape, hamtang sayo pa.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I want coffee, while it's still early.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">It expresses the speaker's desire for coffee.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Unsa pangan ani na kalsadaha?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Un-sa pan-gan a-ni na kal-sa-da-ha? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Unsa pangan ani na kalsadaha? Nangita kog agianan padong sa ospital.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: What's the name of this street? I'm looking for the way to the hospital.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to ask for the name of the street when the speaker is looking for directions.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Naa moy wifi?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-a moy wi-fi? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Naa moy wifi? Mogusto ko og konekta.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Do you have wifi? I want to connect.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire if there is an available wifi connection, indicating the speaker's interest in connecting to the internet.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Tagpila ni?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tag-pi-la ni? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Tagpila ni? Gusto unta nako paliton..</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: How much is this? I would like to buy it.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the price of an item the speaker is interested in purchasing.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Gusto nako ni!</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Gus-to na-ko ni! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa:  Gusto nako ni! Bisag medyo mahalon.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I like this! Even if it's a bit expensive.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to express the speaker's desire to buy or have a particular item.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice </button>
        </p>
    </div>
</body>
</html>