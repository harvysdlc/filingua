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
    <title>Filingua - Aralin 7</title>
    <link rel="stylesheet" href="../../../filingua/lessons/aralin.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
    <script src="../cebuano/js/aralin7.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 7: Pagkaon</h2>
                <p>Lesson 7: Food and Dining</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/cebuano/aralin6.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/cebuano/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/cebuano/aralin8.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/cebuano/recordings/7/1.mp3"></audio>
        <audio id="audio2" src="../../../filingua/lessons/cebuano/recordings/7/2.mp3"></audio>
        <audio id="audio3" src="../../../filingua/lessons/cebuano/recordings/7/3.mp3"></audio>
        <audio id="audio4" src="../../../filingua/lessons/cebuano/recordings/7/4.mp3"></audio>
        <audio id="audio5" src="../../../filingua/lessons/cebuano/recordings/7/5.mp3"></audio>
        <audio id="audio6" src="../../../filingua/lessons/cebuano/recordings/7/6.mp3"></audio>
        <audio id="audio7" src="../../../filingua/lessons/cebuano/recordings/7/7.mp3"></audio>
        <audio id="audio8" src="../../../filingua/lessons/cebuano/recordings/7/8.mp3"></audio>
        <audio id="audio9" src="../../../filingua/lessons/cebuano/recordings/7/9.mp3"></audio>
        <audio id="audio10" src="../../../filingua/lessons/cebuano/recordings/7/10.mp3"></audio>
        <audio id="click" src="../../../filingua/audio/click.mp3"></audio>
    
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Pagkaon</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pag-ka-on /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Daghan kaayo ang handa nga pagkaon katong adlaw na nataw-an no Josephine.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: There's a lot of food prepared for Josephine's birthday.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Refers to any substance consumed by living organisms to provide the necessary nutrients for sustenance, growth, and energy.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Tubig</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tu-big /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nangayo ang tiguwang nga manglilimos sa kalsada og tubig</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: The old beggar is asking for water on the street.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A transparent, odorless, and tasteless liquid essential for the survival of all known forms of life.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Kaon ta!</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-on ta! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Kaon ta! Juan, daghan kay mi handa karon.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Let's eat! Juan, we prepared a lot today.</span><br><br> 
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An informal and inviting expression used to suggest or announce the commencement of a meal.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Lami!</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ La-mi /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Aling Nelia, lami kay ni imong luto nga adobo karon!</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Aling Nelia, the adobo that you cooked today is delicious!</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">It indicates that the item is enjoyable, flavorful, and satisfying to the palate.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Pwede ba nako makuha ang resibo?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pwe-de ba na-ko ma-ku-ha ang re-si-bo? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Sir, pwede ba nako makuha ang resibo para makabayad nako?</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Sir, can I have the receipt so I can make the payment?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A polite request for a document that itemizes the goods or services purchased and their corresponding costs.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Gusto nako'g prutas</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Gus-to na-ko'g pru-tas /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ma, gusto nako'g prutas og utanon og sa paniodto.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Mom, I want fruits and vegetables for lunch tomorrow.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">It expresses a desire or intention to acquire fruits.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Papalita kog kan-on</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pa-pa-li-ta kog kan-on /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ate, papalita kog kan-on og gamay nga sabaw.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Sis, i wanna buy some rice and a bit of broth.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">It communicates the intent to purchase rice.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Tagpila ni sud-an?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tag-pi-la ni sud-an? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Tagpila ni sud-an Juan? Muamot ko.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: How much is this dish, Juan? I'll contribute.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the price or cost of a particular food item or meal.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Unsay espesyal dire?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Un-say es-pe-syal di-re? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Unsay espesyal dire sa restaurant, Miguel?</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Miguel, what's special here in the restaurant?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Posed to inquire about the unique or distinctive dishes or offerings that a particular place, such as a restaurant or cafe, is known for.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Unsa imo sud-an?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Un-sa i-mo sud-an? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Gemma, unsa imo sud-an? Pwede patilaw?</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Gemma, what's your viand? Can I have a taste?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An inquiry about the primary protein or main component of the meal being offered or consumed.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice </button>
        </p>
    </div>
</body>
</html>