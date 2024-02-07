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
    <script src="../cebuano/js/aralin2.js" defer></script>
</head>
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 2: Pagpaila-ila</h2>
                <p>Lesson 2: Self-Introduction</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/cebuano/aralin1.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/cebuano/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/cebuano/aralin3.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/cebuano/recordings/2/1.mp3"></audio>
        <audio id="audio2" src="../../../filingua/lessons/cebuano/recordings/2/2.mp3"></audio>
        <audio id="audio3" src="../../../filingua/lessons/cebuano/recordings/2/3.mp3"></audio>
        <audio id="audio4" src="../../../filingua/lessons/cebuano/recordings/2/4.mp3"></audio>
        <audio id="audio5" src="../../../filingua/lessons/cebuano/recordings/2/5.mp3"></audio>
        <audio id="audio6" src="../../../filingua/lessons/cebuano/recordings/2/6.mp3"></audio>
        <audio id="audio7" src="../../../filingua/lessons/cebuano/recordings/2/7.mp3"></audio>
        <audio id="audio8" src="../../../filingua/lessons/cebuano/recordings/2/8.mp3"></audio>
        <audio id="audio9" src="../../../filingua/lessons/cebuano/recordings/2/9.mp3"></audio>
        <audio id="audio10" src="../../../filingua/lessons/cebuano/recordings/2/10.mp3"></audio>
        <audio id="audio11" src="../../../filingua/lessons/cebuano/recordings/2/11.mp3"></audio>
        <audio id="audio12" src="../../../filingua/lessons/cebuano/recordings/2/12.mp3"></audio>
        <audio id="audio13" src="../../../filingua/lessons/cebuano/recordings/2/13.mp3"></audio>
        <audio id="audio14" src="../../../filingua/lessons/cebuano/recordings/2/14.mp3"></audio>
        <audio id="audio15" src="../../../filingua/lessons/cebuano/recordings/2/15.mp3"></audio>
        <audio id="click" src="../../../filingua/audio/click.mp3"></audio>

        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Ako si Juan</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-ko si <b>[Your Name]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ako si Juan, ang igsuon ni Maria.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I am John, the brother of Mary.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to introduce oneself.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Unsay imong ngalan?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Un-say i-mong ngalan? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Manong driver, unsay imong ngalan?</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Mr. Driver, what is your name?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Act of inquiring about the specific identifier by which an individual is known, typically for the purpose of identification, establishing a connection, or facilitating communication.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Asa ka nagpuyo?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-sa ka nag-pu-yo? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Sa Maynila ko nagpuyo Pedro, ikaw asa ka nagpuyo?</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I live in Manila, Pedro. How about you, where do you live?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An inquiry aimed at obtaining information about their current place of residence or address.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Asa ka nagtrabaho?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-sa ka nag-tra-ba-ho? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Asa ka sa Cavite nagtrabaho?</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Where do you work in Cavite?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A common way to ask about someone's place of employment.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Taga-asa ka?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ta-ga-a-sa ka? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ms. Lopez, Taga-asa ka?</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Ms. Lopez, where are you from?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An inquiry seeking information about the place or location of a person's origin or hometown, often inquiring about their cultural or geographic background.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Pila na imo edad?</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pi-la na i-mo e-dad? /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Diego, pila gani imo edad?</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Diego, how old are you again?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Act of inquiring about the number of years a person has lived since their birth, often done to learn more about their life stage or to establish a basic understanding of their chronological age.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Disiotso na ako edad</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ <b>[Age]</b> na a-ko e-dad /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Maria, disiotso na ako edad, ikaw?</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Maria, I am eighteen years old, how about you?</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to state someone's age.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Igsuon ko si Pedro</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ig-su-on ko si <b>[Sibling's Name]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Juan, igsuon ko si Pedro og Daniel.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Juan, Pedro and Daniel are my siblings.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Act of verbally identifying and mentioning the given name of your brother or sister.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Amigo/Amiga tika!</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-mi-go/ga ti-ka! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Daniel, amigo tika.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Daniel, you are my friend.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">It involves verbally expressing or acknowledging that you have a personal connection with an individual characterized by mutual affection, camaraderie, and a positive relationship.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Lipay kay ko nakaila tika!</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Li-pay kay ko na-ka-i-la ti-ka! /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa:  Gusto lang nako isulti na lipay kay ko nakaila tika, Marie.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I just want to say that I'm happy to have met you, Marie.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">An expression of a positive sentiment about meeting and getting to know the person. It conveys a sense of joy or satisfaction in having had the opportunity to make the acquaintance of the individual.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eleven(this)">11. Nagtuon kog sa Unibersidad ng Pilipinas</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio11()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Nag-tu-on kog sa <b>[School Name]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Sakto, tita, nagtuon kog sa Unibersidad ng Pilipinas ug nagkuha og kurso sa Nurse.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: That's right, Aunt. I am studying at the University of the Philippines as a Nurse.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A statement that tells that the speaker is a student of a specific school or university.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twelve(this)">12. Akong trabaho kay mag-ayo og guba nga kompyuter</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio12()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ A-kong tra-ba-ho kay <b>[Occupation]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Sa una kay gwardya ko, karon, akong trabaho kay mag-ayo og guba nga Kompyuter.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I used to be a security guard. Now, my job is to repair broken computers.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to state someone's occupation.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="thirteen(this)">13. Gikan sa siyudad sa Trece Martires</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio13()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Gi-kan sa si-yu-dad sa <b>[Place]</b> /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa:  Ako si David og gikan sa siyudad sa Trece Martires.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I am David, and I come from the city of Trece Martires.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A statement that expressess someone's hometown or the place the person originated.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourteen(this)">14. Estudyante ko</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio14()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Es-tu-dyan-te ko /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Estudyante ko sa buntag nya trabahador ko sa gabii.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I am a student in the morning and a worker at night.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">It indicates that the speaker is currenly, still a learner.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifteen(this)">15. Asul ang paborito nako nga kulay</span>
            <img src="../../../filingua/lessons/cebuano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio15()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ <b>[Color]</b> ang pa-bo-ri-to na-ko nga ku-lay /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Asul ang paborito nako nga kulay para sa sakyanan.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Blue is my favorite color for a car.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to state someone's favorite color.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice</button>
        </p>
    </div>
</body>
</html>