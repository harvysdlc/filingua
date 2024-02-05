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
    <title>Filingua - Aralin 8</title>
    <link rel="stylesheet" href="../../../filingua/lessons/aralin.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
    <script src="../cebuano/js/aralin8.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 8: Pamimili</h2>
                <p>Lesson 8: Shopping</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/cebuano/aralin7.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/cebuano/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/cebuano/aralin9.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/cebuano/recordings/8/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/cebuano/recordings/8/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/cebuano/recordings/8/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/cebuano/recordings/8/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/cebuano/recordings/8/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/cebuano/recordings/8/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/cebuano/recordings/8/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/cebuano/recordings/8/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/cebuano/recordings/8/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/cebuano/recordings/8/10.wav"></audio>
        <audio id="click" src="../../../filingua/audio/click.mp3"></audio>
    
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Tindahan</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tin-da-han /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nangumpra og pambaligya si Anjo para sa ilahang tindahan..</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Anjo shopped for goods for their store.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A commercial establishment where goods or services are offered for sale to consumers.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Tagpila ni?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tag-pi-la ni? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Manong, tagpila ning taho?</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Mister, how much is this taho?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the price of a specific item or product.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Naay sakto ra nga dako ani?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/  Na-ay sak-to ra nga da-ko a-ni? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nindot ning puwa nga sinina ate, naay sakto ra nga dako ani?</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Sis, this red dress is beautiful, do you have a medium size that fits me?</span><br><br> 
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Posed when looking for clothing or other items with size variations.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Gusto nako ni!</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Gus-to na-ko ni! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Gusto nako ning hamonado nga hatag ni Aling Bebang.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I like this ham given by Aling Bebang.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A direct expression of the customer's desire to purchase a particular item.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Pwedeng baratohon?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pwe-deng ba-ra-to-hon? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ate mukuha kog tulo, pwedeng baratohon?</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Miss, I'll get three, can I bargain?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire whether it is possible to negotiate or haggle over the price of a product.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Asa ang sukdanan?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-sa ang suk-da-nan? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ma, asa ang sukdanan dire sa mall? Gusto nako makit’an kung bagay nako ning sinina.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Mom, where's the fitting room here in the mall? I want to see if this dress suits me.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Asked to seek directions to the area within a store where customers can try on clothes before making a purchase.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Wa ko'y dala'g kwarta</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa ko'y da-la'g kwar-ta /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Juan, okay raba manghuwam og sikwenta? Wa ko'y dala'g kwarta.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Juan, is it okay if I borrow fifty? I don't have money with me.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Indicates that the customer does not possess physical currency and may be inquiring about alternative payment methods such as credit cards, debit cards, or electronic forms of payment.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Naa bay diskwento?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-a bay dis-kwen-to? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Naa bay diskwento kaning mahalon nga bag ate Sally?</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Is there a discount for this expensive bag, Ms. Sally?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the availability of reduced prices or special offers on the products or services being considered for purchase.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Unsa mo orasa mangabli og magsarado?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Un-sa mo o-ra-sa ma-nga-bli og mag-sa-ra-do? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Aling Reyes, unsa mo orasa mangabli og magsarado ogma??</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Mrs. Reyes, what time will you open and close tomorrow?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Seeks information about the operating hours of the store, asking when it opens for business and when it closes. </span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Pwede raba mugamit og credit card?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pwe-de bang gu-ma-mit ng cre-dit card? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Miss, pwede raba mugamit og credit card? Wa ko'y dala'g kwarta.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Miss, can I use a credit card? I don't have cash with me.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Asked to ascertain whether the store accepts credit cards as a form of payment. It indicates the customer's interest in using a credit card for the transaction.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice </button>
        </p>
    </div>
</body>
</html>