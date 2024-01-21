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
        <audio id="audio1" src="../../../filingua/lessons/cebuano/recordings/7/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/cebuano/recordings/7/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/cebuano/recordings/7/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/cebuano/recordings/7/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/cebuano/recordings/7/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/cebuano/recordings/7/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/cebuano/recordings/7/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/cebuano/recordings/7/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/cebuano/recordings/7/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/cebuano/recordings/7/10.wav"></audio>
    
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Pagkaon</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pag-ka-in /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Gipreparar og daghang pagkaon sa adlaw sa kapanganakan ni Josephine.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Refers to any substance consumed by living organisms to provide the necessary nutrients for sustenance, growth, and energy.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Tabig</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tu-big /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ang tigulang nga pulubi nagpangayo og tabang sa kilid sa dalan gamit ang iyang tabig.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A transparent, odorless, and tasteless liquid essential for the survival of all known forms of life.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Kaanunay kita!</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-in ta-yo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Kaanunay kita! Juan, daghan ang among gigama karon.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An informal and inviting expression used to suggest or announce the commencement of a meal.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Lami!</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-sa-rap i-to /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Aling Nelia, lami kaayo ning luto nimong adobo karon!</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">It indicates that the item is enjoyable, flavorful, and satisfying to the palate.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Pwede bang makuha ang resibo?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pwe-de bang ma-ku-ha ang re-si-bo? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ginoo, pwede bang makuha ang resibo aron makabayad ko?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A polite request for a document that itemizes the goods or services purchased and their corresponding costs.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Ganahan ko'g prutas</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Gus-to ko ng pru-tas /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Inay, ganahan ko'g prutas ug utanon buwas sa kaugmaon. </span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">It expresses a desire or intention to acquire fruits.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Palit ug bugas</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pa-bi-li ng ka-nin /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ate, palit ug bugas ug hinay'ng sabaw, palihug.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">It communicates the intent to purchase rice.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Tagpila ni nga ulam?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Mag-ka-no i-tong u-lam? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Tagpila ni nga ulam, Juan? Muambag ko.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the price or cost of a particular food item or meal.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Unsa ang espesyal dinhi?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-no ang es-pe-syal di-to? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Unsa ang espesyal dinhi sa restaurant, Miguel?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Posed to inquire about the unique or distinctive dishes or offerings that a particular place, such as a restaurant or cafe, is known for.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Unsay imong ulam?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-nong u-lam mo? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Gemma, unsay imong ulam? Pwede makatilaw?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An inquiry about the primary protein or main component of the meal being offered or consumed.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Magsanay | Practice </button>
        </p>
    </div>
</body>
</html>