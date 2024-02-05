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
    <link rel="stylesheet" href="../../../filingua/lessons/aralin.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
    <script src="../bicolano/js/aralin5.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 5: Mga Aldaw at Buwan</h2>
                <p>Lesson 5: Days, Weeks, Months</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/bicolano/aralin4.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/bicolano/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/bicolano/aralin6.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/bicolano/recordings/5/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/bicolano/recordings/5/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/bicolano/recordings/5/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/bicolano/recordings/5/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/bicolano/recordings/5/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/bicolano/recordings/5/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/bicolano/recordings/5/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/bicolano/recordings/5/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/bicolano/recordings/5/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/bicolano/recordings/5/10.wav"></audio>
        <audio id="audio11" src="../../../filingua/lessons/bicolano/recordings/5/11.wav"></audio>
        <audio id="audio12" src="../../../filingua/lessons/bicolano/recordings/5/12.wav"></audio>
        <audio id="audio13" src="../../../filingua/lessons/bicolano/recordings/5/13.wav"></audio>
        <audio id="audio14" src="../../../filingua/lessons/bicolano/recordings/5/14.wav"></audio>
        <audio id="audio15" src="../../../filingua/lessons/bicolano/recordings/5/15.wav"></audio>
        <audio id="audio16" src="../../../filingua/lessons/bicolano/recordings/5/16.wav"></audio>
        <audio id="audio17" src="../../../filingua/lessons/bicolano/recordings/5/17.wav"></audio>
        <audio id="audio18" src="../../../filingua/lessons/bicolano/recordings/5/18.wav"></audio>
        <audio id="audio19" src="../../../filingua/lessons/bicolano/recordings/5/19.wav"></audio>
        <audio id="audio20" src="../../../filingua/lessons/bicolano/recordings/5/20.wav"></audio>
        <audio id="click" src="../../../filingua/audio/click.mp3"></audio>
    
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Linggo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ling-go /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: An simbahan puno sa Linggo</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The church is full every Sunday.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The first day of the week, traditionally considered a day of rest and religious observance in many cultures.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Lunes</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Lu-nes /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Sa Lunes an pag-apply kan samuyang proyekto.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Our project deadline is on Monday.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The second day of the week, often associated with the beginning of the workweek in many calendars.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Martes</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Mar-tes /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Si Dona mag-aalis sa sunod na Martes.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Dona will leave next Tuesday.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The third day of the week.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Miyerkules</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Myer-ku-les /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Naiwan ni Jojo an iyo'n payong kan nagtapos na Miyerkules sa silid aklatan.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Jojo left his umbrella last Wednesday in the library.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The fourth day of the week.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Huwebes</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ We-bes /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Huwebes nganing naghulag kami ni Juan.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: It was Thursday when Juan and I parted ways.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The fifth day of the week.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Biyernes</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Byer-nes /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Paborito ko talaga an kada Biyernes!, maaga kasi an uwi mi.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I really like Fridays! We go home early.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The sixth day of the week, considered the end of the workweek in many cultures.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Sabado</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-ba-do /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Sa Batangas an samuyang dayaw sa darangging Sabado.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Our outing in Batangas is on the coming Saturday.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The seventh day of the week, often a day off work and associated with relaxation and leisure.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Enero</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ E-ne-ro /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: An huling pakikipag-usap mi kan ika-pito na Enero, taon dos mil dose.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Our last conversation was on the seventh of January, two thousand and seventeen.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The first month of the year, named after Janus, the Roman god of beginnings and transitions.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Pebrero</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Peb-re-ro /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Mabenta an tsokolate asin rosas sa kada Pebrero.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Chocolate and roses sell well every February.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The second month, known for having 28 or 29 days in common years and 30 days in leap years.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Marso</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Mar-so /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Kan nagtapos kaming Marso an kolehiyo.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: We graduated last March.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The third month, named after Mars, the Roman god of war.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eleven(this)">11. Abril</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio11()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ab-ril /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Makulay an mga burak sa pag-abot kan bulan kan Abril.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Colorful flowers bloom in April.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The fourth month, usually associated with flowers during spring.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twelve(this)">12. Mayo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio12()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-yo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Binagyo sinda Roland sa Mindoro kan Mayo tres.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Roland experienced a typhoon in Mindoro on May 3.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The fifth month, a good month for workers especially during labor day!.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="thirteen(this)">13. Hunyo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio13()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Hun-yo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Matinding init an nararamdaman kan mga Filipino sa tuwing nagtatapos an bulan kan Hunyo.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Filipinos feel intense heat as June ends.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The sixth month, the first month to welcome the heat of summer.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourteen(this)">14. Hulyo</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio14()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Hul-yo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ibinibenta ni Aling Senya an mga prutas sa kada Hulyo.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Aling Senia sells fruits every July.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The seventh month, named after Julius Caesar.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifteen(this)">15. Agosto</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio15()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-gos-to /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Agosto an may pinakaraming piyesta sa Ciudad kan Quezon.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: August has the most festivals in Quezon City.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The eighth month, named after Augustus Caesar.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixteen(this)">16. Setyembre</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio16()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Set-yem-bre /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Kan Setyembre ko iniwan an aking telepono sa pampasaherong bus.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I left my phone on a public bus in September..</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The ninth month, fall or autumn usually kicks in during this month.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventeen(this)">17. Oktubre</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio17()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ok-tub-re /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Kaadlawan ni Tita Jena sa Oktubre tres.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Tita Jena's birthday is on October 3.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The tenth month, a notable event during this month is world's teachers day.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eighteen(this)">18. Nobyembre</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio18()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Nob-yem-bre /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Madalas sinda multuhan kan nag-aabot an bulan kan Nobyembre.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: They are often haunted every November.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The eleventh month, known for the it's spookiness thanks to Halloween!</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="nineteen(this)">19. Disyembre</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio19()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Dis-yem-bre /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Sa Disyembre bente-uno ko makakua an akong sahod.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I will receive my salary on the twenty-first of December.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The twelfth month, start of winter and holiday season.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twenty(this)">20. Aldaw</span>
            <img src="../../../filingua/lessons/bicolano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio20()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-raw /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Aldaw-aldaw ko siya nakikita sa aming harong.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I see him/her every day in our backyard.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A unit of time consisting of 24 hours, representing the time it takes for the Earth to complete one full rotation on its axis.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice </button>
        </p>
    </div>
</body>
</html>