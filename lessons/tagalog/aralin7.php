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
    <script src="../tagalog/js/aralin7.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 7: Pagkain</h2>
                <p>Lesson 7: Food and Dining</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/tagalog/aralin6.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/tagalog/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/tagalog/aralin8.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/tagalog/recordings/7/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/tagalog/recordings/7/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/tagalog/recordings/7/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/tagalog/recordings/7/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/tagalog/recordings/7/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/tagalog/recordings/7/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/tagalog/recordings/7/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/tagalog/recordings/7/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/tagalog/recordings/7/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/tagalog/recordings/7/10.wav"></audio>
        <audio id="click" src="../../../filingua/audio/click.mp3"></audio>
    
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Pagkain</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pag-ka-in /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ang daming pagkain ang inihanda noong kaarawan ni Josephine.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: There's a lot of food prepared for Josephine's birthday.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: Refers to any substance consumed by living organisms to provide the necessary nutrients for sustenance, growth, and energy.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Tubig</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tu-big /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Humihingi ang matandang pulubi sa kalsada ng tubig.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: The old beggar is asking for water on the street.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: A transparent, odorless, and tasteless liquid essential for the survival of all known forms of life.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Kain tayo!</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-in ta-yo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Kain tayo! Juan, marami kaming inihanda ngayon.</span><br>  
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Let's eat! Juan, we prepared a lot today.</span><br><br> 
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: An informal and inviting expression used to suggest or announce the commencement of a meal.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Masarap ito!</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-sa-rap i-to /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Aling Nelia, masarap itong luto mong adobo ngayon!.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Aling Nelia, the adobo that you cooked today is delicious!</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: It indicates that the item is enjoyable, flavorful, and satisfying to the palate.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Pwede bang makuha ang resibo?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pwe-de bang ma-ku-ha ang re-si-bo? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ginoo, pwede bang makuha ang resibo para makapagbayad na ako?.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Sir, can I have the receipt so I can make the payment?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: A polite request for a document that itemizes the goods or services purchased and their corresponding costs.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Gusto ko ng prutas</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Gus-to ko ng pru-tas /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Inay, gusto ko ng prutas at gulay bukas sa tanghalian.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Mom, I want fruits and vegetables for lunch tomorrow.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: It expresses a desire or intention to acquire fruits.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Pabili ng kanin</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pa-bi-li ng ka-nin /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ate, pabili ng kanin at konting sabaw.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Sis, i wanna buy some rice and a bit of broth.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: It communicates the intent to purchase rice.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Magkano itong ulam?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Mag-ka-no i-tong u-lam? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Magkano itong ulam Juan? mag-aambag ako.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: How much is this dish, Juan? I'll contribute.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: Used to inquire about the price or cost of a particular food item or meal.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Ano ang espesyal dito?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-no ang es-pe-syal di-to? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ano ang espesyal dito sa restaurant, Miguel?.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Miguel, what's special here in the restaurant?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: Posed to inquire about the unique or distinctive dishes or offerings that a particular place, such as a restaurant or cafe, is known for.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Anong ulam mo?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-nong u-lam mo? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Gemma, anong ulam mo? pwede maki-tikim?.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;"> Example: Gemma, what's your viand? Can I have a taste?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Definition: An inquiry about the primary protein or main component of the meal being offered or consumed.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice </button>
        </p>
    </div>
</body>
</html>