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
    <script src="../tagalog/js/aralin2.js" defer></script>
</head>
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 2: Pagpapakilala</h2>
                <p>Lesson 2: Self Introduction</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/tagalog/aralin1.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/tagalog/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/tagalog/aralin3.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/tagalog/recordings/2/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/tagalog/recordings/2/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/tagalog/recordings/2/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/tagalog/recordings/2/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/tagalog/recordings/2/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/tagalog/recordings/2/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/tagalog/recordings/2/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/tagalog/recordings/2/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/tagalog/recordings/2/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/tagalog/recordings/2/10.wav"></audio>
        <audio id="audio11" src="../../../filingua/lessons/tagalog/recordings/2/11.wav"></audio>
        <audio id="audio12" src="../../../filingua/lessons/tagalog/recordings/2/12.wav"></audio>
        <audio id="audio13" src="../../../filingua/lessons/tagalog/recordings/2/13.wav"></audio>
        <audio id="audio14" src="../../../filingua/lessons/tagalog/recordings/2/14.wav"></audio>
        <audio id="audio15" src="../../../filingua/lessons/tagalog/recordings/2/15.wav"></audio>

        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Ako si Juan</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-ko si <b>[Your Name]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ako si Juan, ang kapatid ni Maria.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to introduce oneself.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Ano ang pangalan mo?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-no ang pa-nga-lan mo? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Manong tsuper, ano ang pangalan mo?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Act of inquiring about the specific identifier by which an individual is known, typically for the purpose of identification, establishing a connection, or facilitating communication.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Saan ka nakatira?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-an ka na-ka-ti-ra? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Sa Maynila ako nakatira Pedro. Ikaw, saan ka nakatira?</span><br>   
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An inquiry aimed at obtaining information about their current place of residence or address.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Saan ka nagtatrabaho?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-an ka nag-ta-tra-ba-ho? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Saan ka nagtatrabaho sa Cavite?</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A common way to ask about someone's place of employment.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Taga-saan ka?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ta-ga-sa-an ka? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Binibining Lopez, Taga-saan ka?.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An inquiry seeking information about the place or location of a person's origin or hometown, often inquiring about their cultural or geographic background.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Ilang taon ka na?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ I-lang ta-on ka na? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Diego, Ilang taon ka na ulit?.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Act of inquiring about the number of years a person has lived since their birth, often done to learn more about their life stage or to establish a basic understanding of their chronological age.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Ako ay labing-walong taong gulang</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-ko ay <b>[Age]</b> ta-ong gu--lang /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Maria, ako ay labing-walong taong gulang na, ikaw?.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to state someone's age.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Kapatid ko si Pedro</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-pa-tid ko si <b>[Sibling's Name]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Juan, kapatid ko si Pedro at Daniel.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Act of verbally identifying and mentioning the given name of your brother or sister.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Kaibigan kita!</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ka-i-bi-gan ki-ta! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Daniel, kaibigan kita.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">It involves verbally expressing or acknowledging that you have a personal connection with an individual characterized by mutual affection, camaraderie, and a positive relationship.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Masaya akong nakilala kita!</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-sa-ya a-kong na-ki-la-la ki-ta! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Gusto ko lang sabihin na masaya akong nakilala kita, Marie.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An expression of a positive sentiment about meeting and getting to know the person. It conveys a sense of joy or satisfaction in having had the opportunity to make the acquaintance of the individual.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eleven(this)">11. Ako ay nag-aaral sa Unibersidad ng Pilipinas</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio11()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-ko ay nag-a-a-ral sa <b>[School Name]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Tama tita, ako ay nag-aaral sa Unibersidad ng Pilipinas bilang Nurse.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A statement that tells that the speaker is a student of a specific school or university.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twelve(this)">12. Ang trabaho ko ay magkumpuni ng sirang kompyuter</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio12()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ang tra-ba-ho ko ay <b>[Occupation]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Dati akong gwardya, ngayon, ang trabaho ko ay magkumpuni ng sirang kompyuter.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to state someone's occupation.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="thirteen(this)">13. Nagmula ako sa siyudad ng Trece Martires</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio13()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/Nag-mu-la a-ko sa si-yu-dad ng <b>[Place]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ako si David at nagmula ako sa siyudad ng Trece Martires.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A statement that expressess someone's hometown or the place the person originated.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourteen(this)">14. Ako ay isang estudyante</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio14()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-ko ay i-sang es-tu-dyan-te /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ako ay isang estudyante sa umaga at trabahador naman sa gabi.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">It indicates that the speaker is currenly, still a learner.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifteen(this)">15. Asul ang paborito kong kulay</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio15()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ <b>[Color]</b> ang pa-bo-ri-to kong ku-lay /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Asul ang paborito kong kulay para sa sasakyan.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to state someone's favorite color.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Magsanay | Practice </button>
        </p>
    </div>
</body>
</html>