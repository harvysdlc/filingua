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
    <title>Filingua - Aralin 2</title>
    <link rel="stylesheet" href="../../../filingua/lessons/aralin.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
    <script src="../kapampangan/js/aralin2.js" defer></script>
</head>
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 2: Pagpapakilala</h2>
                <p>Lesson 2: Self Introduction</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/kapampangan/aralin1.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/kapampangan/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/kapampangan/aralin3.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/kapampangan/recordings/2/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/kapampangan/recordings/2/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/kapampangan/recordings/2/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/kapampangan/recordings/2/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/kapampangan/recordings/2/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/kapampangan/recordings/2/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/kapampangan/recordings/2/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/kapampangan/recordings/2/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/kapampangan/recordings/2/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/kapampangan/recordings/2/10.wav"></audio>
        <audio id="audio11" src="../../../filingua/lessons/kapampangan/recordings/2/11.wav"></audio>
        <audio id="audio12" src="../../../filingua/lessons/kapampangan/recordings/2/12.wav"></audio>
        <audio id="audio13" src="../../../filingua/lessons/kapampangan/recordings/2/13.wav"></audio>
        <audio id="audio14" src="../../../filingua/lessons/kapampangan/recordings/2/14.wav"></audio>
        <audio id="audio15" src="../../../filingua/lessons/kapampangan/recordings/2/15.wav"></audio>

        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Aku pu Juan!</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-ku pu <b>[Your Name]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ako pu Juan, ing kapatud ni Maria.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to introduce oneself.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Nanu ing lagyu mu?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-nu ing lag-yu mu? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Manong tsuper, nanu ung lagyu mu?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Act of inquiring about the specific identifier by which an individual is known, typically for the purpose of identification, establishing a connection, or facilitating communication.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Nukarin po ing kayang luguran?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Nu-ka-rin po ing ka-yang lu-gu-ran? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Sa Maynila aku kayang luguran Pedro. Ikaw, nukaring po ing kayang luguran?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An inquiry aimed at obtaining information about their current place of residence or address.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Nukarin la pung gawan?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Nu-ka-rin la pung ga-wan? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Nukaring la pun gawan sa Cavite?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A common way to ask about someone's place of employment.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Taga nukarin ka?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ta-ga nu-ka-rin ka? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Binibining Lopez, Taga nukarin ka?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An inquiry seeking information about the place or location of a person's origin or hometown, often inquiring about their cultural or geographic background.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Nanu yang edad mu?</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Na-nu yang e-dad mu? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Phum, nanu yang edad mu?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Act of inquiring about the number of years a person has lived since their birth, often done to learn more about their life stage or to establish a basic understanding of their chronological age.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Aku pu mipabalu ku kasanting-walung taung gulang</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-ku pu mi-pa-ba-lu ku <b>[Age]</b> ta-ung gu-lang /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Maria, aku pu mipabalu ku kasanting-walung taung gulang, ikaw?.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to state someone's age.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Kapatad ku pu si Pedro</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-pa-tad ku pu si <b>[Sibling's Name]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Juan, kapatad ku pu si Pedro at Daniel.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Act of verbally identifying and mentioning the given name of your brother or sister.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Kaluguran ku pu!</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-lu-gu-ran ku pu! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Daniel, kaluguran ku pu.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">It involves verbally expressing or acknowledging that you have a personal connection with an individual characterized by mutual affection, camaraderie, and a positive relationship.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Malugud ku king pamagkulala mu!</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-lu-gud ku king pa-mag-ku-la-la mu! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Malugud ku kung pamagkulala mu, Marie.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An expression of a positive sentiment about meeting and getting to know the person. It conveys a sense of joy or satisfaction in having had the opportunity to make the acquaintance of the individual.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eleven(this)">11. Aku pu king pamagaral king Unibersidad ning Pilipinas</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio11()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-ku pu king pa-mag-a-ral king <b>[School Name]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Yes tita, aku pu kung pamagaral king Unibersidad ning Pilipinas bilang Nars.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A statement that tells that the speaker is a student of a specific school or university.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twelve(this)">12. Ing obra ku king pagkumpuni ning mabukung computer</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio12()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ing o-bra ku king <b>[Occupation]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Dati kung gwardya, ngayon, ing obra ku king pagkumpuni ning mabukung computer.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to state someone's occupation.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="thirteen(this)">13. Taga-Trece Martires ku ing metung a lugar king ka-pampangan</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio13()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ta-ga <b>[Place]</b> ku ing me-tung a lu-gar king ka--pam-pa-ngan /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Aku si David at taga-Trece Martires ku ing metung a lugar king ka-pampangan.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A statement that expressess someone's hometown or the place the person originated.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourteen(this)">14. Aku pu ing dili a estudiante</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio14()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-ku pu ing di-li a es-tu-dian-te /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: AAku pu ing dili a estudiante at aku pu king pamagaral ng college.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">It indicates that the speaker is currenly, still a learner.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifteen(this)">15. Asul ing favorite kung kulay</span>
            <img src="../../../filingua/lessons/kapampangan/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio15()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ <b>[Color]</b> ing fa-vo-rite kung ku-lay /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Asil in favorite kung kulay.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to state someone's favorite color.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice</button>
        </p>
    </div>
</body>
</html>