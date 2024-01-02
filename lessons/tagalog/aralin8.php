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
    <script src="../tagalog/js/aralin8.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 8: Pamimili</h2>
                <p>Lesson 8: Shopping</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/tagalog/aralin7.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/tagalog/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/tagalog/aralin9.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/tagalog/recordings/8/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/tagalog/recordings/8/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/tagalog/recordings/8/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/tagalog/recordings/8/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/tagalog/recordings/8/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/tagalog/recordings/8/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/tagalog/recordings/8/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/tagalog/recordings/8/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/tagalog/recordings/8/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/tagalog/recordings/8/10.wav"></audio>
    
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Tindahan</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tin-da-han /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Namili ng mga paninda si Anjo para sa kanilang tindahan.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A commercial establishment where goods or services are offered for sale to consumers.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Magkano ito?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Mag-ka-no i-to? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Manong, magkano itong taho?.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the price of a specific item or product.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Mayroon ba kayong katamtamang laki nito?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ May-ro-on bang ka-tam-ta-mang la-ki ni-to? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Maganda itong pulang damit ate, mayroon bang katamtamang laki nito?.</span><br>   
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Posed when looking for clothing or other items with size variations.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Gusto ko ito!</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Gus-to ko i-to! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Gusto ko itong hamonado na bigay ni Aling Bebang.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A direct expression of the customer's desire to purchase a particular item.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Pwede bang tumawad?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pwe-de bang tu-ma-wad? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ate kukuha ako tatlo, pwede bang tumawad?.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire whether it is possible to negotiate or haggle over the price of a product.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Saan ang sukatan?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-an ang su-ka-tan? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Inay, saan ang sukatan dito sa mall? gusto ko makita kung bagay sa akin itong bestida. </span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Asked to seek directions to the area within a store where customers can try on clothes before making a purchase.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Wala akong dalang pera</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa-la a-kong da-lang pe-ra /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Juan, ayos lang ba mang hiram ng singkwenta? wala akong dalang pera eh.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Indicates that the customer does not possess physical currency and may be inquiring about alternative payment methods such as credit cards, debit cards, or electronic forms of payment.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Mayroon bang diskwento?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ May-ro-on bang dis-kwen-to? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Mayroon bang diskwento itong mamahaling bag ate Sally?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to inquire about the availability of reduced prices or special offers on the products or services being considered for purchase.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Anong oras kayo magbubukas at magsasara?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-nong o-ras ka-yo mag-bu-bu-kas at mag-sa-sa-ra? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Aling Reyes, anong oras kayo magbubukas at magsasara bukas?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Seeks information about the operating hours of the store, asking when it opens for business and when it closes. </span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Pwede bang gumamit ng credit card?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pwe-de bang gu-ma-mit ng cre-dit card? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Binibini, pwede bang gumamit ng credit card? wala kasi akong dalang pera.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Asked to ascertain whether the store accepts credit cards as a form of payment. It indicates the customer's interest in using a credit card for the transaction.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Magsanay | Practice </button>
        </p>
    </div>
</body>
</html>