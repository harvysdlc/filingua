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
    <title>Filingua - Aralin 5</title>
    <link rel="stylesheet" href="../../../filingua/lessons/tagalog/css/aralin.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
    <script src="../tagalog/js/aralin5.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 5: Mga Araw at Buwan</h2>
                <p>Lesson 5: Days, Weeks, Months</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/tagalog/aralin4.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/tagalog/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/tagalog/aralin6.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/tagalog/recordings/5/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/tagalog/recordings/5/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/tagalog/recordings/5/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/tagalog/recordings/5/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/tagalog/recordings/5/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/tagalog/recordings/5/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/tagalog/recordings/5/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/tagalog/recordings/5/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/tagalog/recordings/5/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/tagalog/recordings/5/10.wav"></audio>
        <audio id="audio11" src="../../../filingua/lessons/tagalog/recordings/5/11.wav"></audio>
        <audio id="audio12" src="../../../filingua/lessons/tagalog/recordings/5/12.wav"></audio>
        <audio id="audio13" src="../../../filingua/lessons/tagalog/recordings/5/13.wav"></audio>
        <audio id="audio14" src="../../../filingua/lessons/tagalog/recordings/5/14.wav"></audio>
        <audio id="audio15" src="../../../filingua/lessons/tagalog/recordings/5/15.wav"></audio>
        <audio id="audio16" src="../../../filingua/lessons/tagalog/recordings/5/16.wav"></audio>
        <audio id="audio17" src="../../../filingua/lessons/tagalog/recordings/5/17.wav"></audio>
        <audio id="audio18" src="../../../filingua/lessons/tagalog/recordings/5/18.wav"></audio>
        <audio id="audio19" src="../../../filingua/lessons/tagalog/recordings/5/19.wav"></audio>
        <audio id="audio20" src="../../../filingua/lessons/tagalog/recordings/5/20.wav"></audio>
    
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Linggo</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ling-go /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ti simbaan ket naragsak iti linggo.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The first day of the week, traditionally considered a day of rest and religious observance in many cultures.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Lunes</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Lu-nes /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: No Lunes ket kasasaad ti proyekto mi.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The second day of the week, often associated with the beginning of the workweek in many calendars.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Martes</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Mar-tes /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ni Dona ket aggatang idi Martes.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The third day of the week.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Miyerkules</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Myer-ku-les /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Naikkan daytoy ti payong ni Jojo iti naisardeng Mierkules iti silid aklattan.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The fourth day of the week.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Huwebes</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ We-bes /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: No Huwebes nga aldaw idi nagpadasanakami ni Juan.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The fifth day of the week.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Biyernes</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Byer-nes /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Uray isu pay laeng ti biernes!, maaga laeng ta aglako kami. </span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The sixth day of the week, considered the end of the workweek in many cultures.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Sabado</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-ba-do /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Daytoy ket sa Batangas, daytoy ti gala mi iti nadaydayaw a Sabado.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The seventh day of the week, often a day off work and associated with relaxation and leisure.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Enero</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ E-ne-ro /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ti huling panagsalitaanmi ket iti napaspasamak Enero, dua a libo ken napulu ket pito.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The first month of the year, named after Janus, the Roman god of beginnings and transitions.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Pebrero</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Peb-re-ro /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Kayatko laeng ti tsokolate ken rosas iti Pebrero.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The second month, known for having 28 or 29 days in common years and 30 days in leap years.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Marso</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Mar-so /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: No Marso nga aldaw nagtapos kami iti Kolehio.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The third month, named after Mars, the Roman god of war.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eleven(this)">11. Abril</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio11()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ab-ril /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Dakkel ti bulaklak iti pannakapudno ti bulan ti Abril.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The fourth month, usually associated with flowers during spring.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twelve(this)">12. Mayo</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio12()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-yo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nagkuna ni Roland iti Mindoro iti Mayo a tres.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The fifth month, a good month for workers especially during labor day!.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="thirteen(this)">13. Hunyo</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio13()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Hun-yo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nagabgak iti init dagiti Pilipino iti nupay panawen ti Hunyo.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The sixth month, the first month to welcome the heat of summer.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourteen(this)">14. Hulyo</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio14()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Hul-yo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ibinebenta ni Aling Senya ang mga prutas tuwing sasapit ang Hulyo.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The seventh month, named after Julius Caesar.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifteen(this)">15. Agosto</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio15()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-gos-to /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Agosto ti adda iti pinakadakkel a pistahan iti Lungsod ti Quezon.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The eighth month, named after Augustus Caesar.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixteen(this)">16. Setyembre</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio16()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Set-yem-bre /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: No Setyembre ket naiparit ti cellphoneko iti pampasaherong bus.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The ninth month, fall or autumn usually kicks in during this month.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventeen(this)">17. Oktubre</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio17()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ok-tub-re /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Kaarawanku idi Octubre a tres.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The tenth month, a notable event during this month is world's teachers day.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eighteen(this)">18. Nobyembre</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio18()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Nob-yem-bre /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Saririt nga multo kadagiti umadadakkel a panawen ti Nobyembre.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The eleventh month, known for the it's spookiness thanks to Halloween!</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="nineteen(this)">19. Disyembre</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio19()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Dis-yem-bre /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: No Disyembre bente-uno ket matangkenakon ti sahodko.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The twelfth month, start of winter and holiday season.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twenty(this)">20. Aldaw</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio20()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-raw /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nakasangpetak pay kada aldaw iti ammok iti kiosko.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A unit of time consisting of 24 hours, representing the time it takes for the Earth to complete one full rotation on its axis.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Magsanay | Practice </button>
        </p>
    </div>
</body>
</html>