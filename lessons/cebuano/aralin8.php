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
    
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Tindahan</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tin-da-han /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Si Anjo nagpalit og mga paninda alang sa ilang tindahan.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A commercial establishment where goods or services are offered for sale to consumers.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Pila ni?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Mag-ka-no i-to? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Manong, tagpila kini nga taho?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the price of a specific item or product.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Aduna mo niini nga sahi?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ May-ro-on bang ka-tam-ta-mang la-ki ni-to? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ate, guwapa ang pulang sanina, aduna bay sakto nga sukat niini?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Posed when looking for clothing or other items with size variations.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Gusto nako ni!</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Gus-to ko i-to! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Gusto nako ang hamonado nga gihatag ni Aling Bebang.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A direct expression of the customer's desire to purchase a particular item.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Pwede'g baratohon?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pwe-de bang tu-ma-wad? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ate, mokuha unta ko ug tulo, pwede'g baratohon?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire whether it is possible to negotiate or haggle over the price of a product.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Asa ang linya?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-an ang su-ka-tan? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Inay, asa dapit ang linya probador diri sa mall? Gusto ko makita kung bagay sa ako ang bestida. </span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Asked to seek directions to the area within a store where customers can try on clothes before making a purchase.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Wala ko'y kwarta.</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa-la a-kong da-lang pe-ra /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Juan, okay lang ba mangayo og singkwenta? Wala ko'y kwarta karon.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Indicates that the customer does not possess physical currency and may be inquiring about alternative payment methods such as credit cards, debit cards, or electronic forms of payment.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Aduna bay diskuwento?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ May-ro-on bang dis-kwen-to? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ate Sally, aduna bay diskuwento kini nga mahalon nga bag?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the availability of reduced prices or special offers on the products or services being considered for purchase.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Unsa oras mo bukas ug mohatag?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-nong o-ras ka-yo mag-bu-bu-kas at mag-sa-sa-ra? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Aling Reyes, unsa orasa mo magbuhat ug mag-undang ug bukas?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Seeks information about the operating hours of the store, asking when it opens for business and when it closes. </span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Pwede bay credit card?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pwe-de bang gu-ma-mit ng cre-dit card? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: BIni, pwede bang magamit og credit card? Wala ko'y kwarta nga dala.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Asked to ascertain whether the store accepts credit cards as a form of payment. It indicates the customer's interest in using a credit card for the transaction.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Magsanay | Practice </button>
        </p>
    </div>
</body>
</html>