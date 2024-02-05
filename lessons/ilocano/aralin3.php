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
    <title>Filingua - Aralin 3</title>
    <link rel="stylesheet" href="../../../filingua/lessons/aralin.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
    <script src="../ilocano/js/aralin3.js" defer></script>
</head> 
<body>
    <div class="stage">
        <div class="label">
                <h2>Aralin 3: Agbilang</h2>
                <p>Lesson 3: Numbers and Counting</p>
        </div>
        <div class="larrow">
            <a href="../../lessons/ilocano/aralin2.php">
                <img src="../../images/larrow.png" alt="left-arrow">
            </a>
        </div>
        <div class="home">
            <a href="../../lessons/ilocano/landing.php">
                <img src="../../images/home.png" alt="home">
            </a>
        </div>
        <div class="rarrow">
            <a href="../../lessons/ilocano/aralin4.php">
                <img src="../../images/rarrow.png" alt="right-arrow">
            </a>
        </div>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/ilocano/recordings/3/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/ilocano/recordings/3/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/ilocano/recordings/3/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/ilocano/recordings/3/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/ilocano/recordings/3/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/ilocano/recordings/3/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/ilocano/recordings/3/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/ilocano/recordings/3/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/ilocano/recordings/3/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/ilocano/recordings/3/10.wav"></audio>
        <audio id="audio11" src="../../../filingua/lessons/ilocano/recordings/3/11.wav"></audio>
        <audio id="audio12" src="../../../filingua/lessons/ilocano/recordings/3/12.wav"></audio>
        <audio id="audio13" src="../../../filingua/lessons/ilocano/recordings/3/13.wav"></audio>
        <audio id="audio14" src="../../../filingua/lessons/ilocano/recordings/3/14.wav"></audio>
        <audio id="audio15" src="../../../filingua/lessons/ilocano/recordings/3/15.wav"></audio>
        <audio id="audio16" src="../../../filingua/lessons/ilocano/recordings/3/16.wav"></audio>
        <audio id="audio17" src="../../../filingua/lessons/ilocano/recordings/3/17.wav"></audio>
        <audio id="audio18" src="../../../filingua/lessons/ilocano/recordings/3/18.wav"></audio>
        <audio id="audio19" src="../../../filingua/lessons/ilocano/recordings/3/19.wav"></audio>
        <audio id="audio20" src="../../../filingua/lessons/ilocano/recordings/3/20.wav"></audio>
        <audio id="audio30" src="../../../filingua/lessons/ilocano/recordings/3/30.wav"></audio>
        <audio id="audio40" src="../../../filingua/lessons/ilocano/recordings/3/40.wav"></audio>
        <audio id="audio50" src="../../../filingua/lessons/ilocano/recordings/3/50.wav"></audio>
        <audio id="audio60" src="../../../filingua/lessons/ilocano/recordings/3/60.wav"></audio>
        <audio id="audio70" src="../../../filingua/lessons/ilocano/recordings/3/70.wav"></audio>
        <audio id="audio80" src="../../../filingua/lessons/ilocano/recordings/3/80.wav"></audio>
        <audio id="audio90" src="../../../filingua/lessons/ilocano/recordings/3/90.wav"></audio>
        <audio id="audio100" src="../../../filingua/lessons/ilocano/recordings/3/100.wav"></audio>
        <audio id="audio1000" src="../../../filingua/lessons/ilocano/recordings/3/1000.wav"></audio>
        <audio id="audio1000000" src="../../../filingua/lessons/ilocano/recordings/3/1000000.wav"></audio>
        <audio id="audio1000000000" src="../../../filingua/lessons/ilocano/recordings/3/1000000000.wav"></audio>
        <audio id="click" src="../../../filingua/audio/click.mp3"></audio>
        <!-- Text element -->
        <p>Pindutin ang salita o parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the word or phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Maysa</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ May-sa /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ti Filipinas ket maysa a bansa iti Southeast Asia.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The Philippines is one of the countries in Southeast Asia.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The fundamental unit, singular and indivisible.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="second(this)">2. Dua</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Du-a /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Adda dua a kabsat ko, Da Toto ken Nene.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I have two siblings, they are Toto and Nene.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The first and simplest even number, denoting duality.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="third(this)">3. Tallo</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tal-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Tallo a karnero ti tukud ti Mang Juan.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Mr. John has three sheep in his farm.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The smallest prime number, often symbolizing balance.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourth(this)">4. Uppat</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Up-pat /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Uppat a baso ti naawat mi nga regalo.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I have received four mugs as a gift.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A square number, representing stability and order.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifth(this)">5. Lima</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Li-ma /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Lima a kandidato para konsehal iti ili ti Indang.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: There are five candidates for councilor in the town of Indang.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The third prime number, associated with change and dynamism.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixth(this)">6. Innem</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ In-nem /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Innem nga metro ti aba ti tela.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The length of the fabric is six meters.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The first perfect number, symbolizing harmony.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventh(this)">7. Pito</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pi-to /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Pito ti paborito nga numero ni Andrei.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Seven is Andrei's favorite number.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A prime number, often considered mystical or lucky.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eight(this)">8. Walo</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Pang-walo ni Nena iti linya.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Nena is eighth in line.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A cube number, representing balance and strength.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninth(this)">9. Siam</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Si-yam /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Siam nga bibe ket aglanglangoy idiay karayan ti Pasig.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Nine ducks are swimming in the Pasig River.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A square number, symbolizing completeness and wholeness.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="tenth(this)">10. Sangapulo</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-nga-pu-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Naalak ti pangsangapulo nga regalo iti sangapulo ken dua nga regalo ni Julian.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I have already opened ten out of Julian's twelve gifts.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A decade, often used as a basis for counting.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eleven(this)">11. Sangapulo ket maysa</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio11()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-nga-pu-lo ket may-sa /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Sangapulo ket maysa ti bumagsak ti exam.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Eleven students failed the exam.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A prime number, often considered special or unique.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twelve(this)">12. Sangapulo ket dua</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio12()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-nga-pu-lo ket du-a /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Diay pizza ket adda sangapulo ket dua nga iwa.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: A pizza has twelve slices.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A dozen, used in calendars and measurements.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="thirteen(this)">13. Sangapulo ket tallo</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio13()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-nga-pu-lo ket tal-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Adda sangapulo ket tallo a Martir idiay Kabite.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: There are thirteen Martyrs in Cavite.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A prime number, sometimes associated with superstitions.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourteen(this)">14. Sangapulo ket uppat</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio14()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-nga-pu-lo ket up-pat /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ti aldaw ti puso ket naadalan iti sangapulo ket uppat nga aldaw iti Pebrero</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Valentine's Day is celebrated on the fourteenth of February.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">The natural number following thirteen and preceding fifteen.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifteen(this)">15. Sangapulo ket lima</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio15()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-nga-pu-lo ket li-ma /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ni Nena ket pang sangapulot ket lima idiay listaan ti pasyente.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Nena is fifteenth on the list of patients.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A positive integer and is the natural number that comes after fourteen.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixteen(this)">16. Sangapulo ket innem</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio16()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-nga-pu-lo ket in-nem /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ti aldaw iti pangakayannak na ket idi maika-sangapulo ket innem ti Pebrero.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Her birthday is on the sixteenth of February.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant number in the hexadecimal (base-16) numbering system. In this system, the digits include 0-9 and the letters A-F.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventeen(this)">17. Sangapulo ket pito</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio17()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-nga-pu-lo ket pi-to /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ti kasar da ket mapasamak ton maika-sangapulot ket pito iti  Octubre.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Their wedding will take place on the seventeenth of October.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A positive integer, coming after sixteen and before eighteen.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eighteen(this)">18. Sangapulo ket walo</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio18()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-nga-pu-lo ket wa-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Sangapulo ket walo a porsyento ti kita ket mapan para iti proyekto iti kalikasan.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Eighteen percent of the income is allocated for the environmental project.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant milestone in many cultures, as it marks the age of legal adulthood in several countries, granting individuals certain rights and responsibilities.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="nineteen(this)">19. Sangapulo ket siam</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio19()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-nga-pu-lo ket si-am /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ti  punoidiay likod ti balay mi ket sangapulo ket siyam a tawen.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The tree in our backyard is nineteen years old.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In basic arithmetic, nineteen is a positive integer, coming after eighteen and before twenty.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="twenty(this)">20. Duapulo</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio20()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Du-a-pu-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Adda duapulo ken lima nga sentimos ditoy pitakak.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I have twenty coins in my wallet.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Used to denote the twentieth item in a series or sequence.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="thirty(this)">30. Tallopulo</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio30()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Tal-lo-pu-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Adda bulan nga adda laeng tallopulo nga aldaw</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: There are months with only thirty days.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A composite number, associated with decades and cycles.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fourty(this)">40. Uppat a pulo</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio40()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Up-pat a pu-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Umay ka ditoy, Maria, iteddan ka ti uppat a pulo a mansanas!</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Come here, Maria, I'll give you forty apples!.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A symbolic or significant number associated with milestones such as age, anniversaries, and biblical events.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="fifty(this)">50. Limapulo</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio50()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Li-ma-pu-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ti mayka limapulo nga tawen iti panagkayanak ni Aling Bebet ket nagarbo.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Aling Bebet's fiftieth birthday is extravagant.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In percentage terms, fifty represents half of a whole.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="sixty(this)">60. Innem a pulo</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio60()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ In-nem a pu-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Innem a pulo nga porsyento ti kinikita ni Don Guevarra ket mapan iti paggaramidan ti arak.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Sixty percent is the total share of Don Guevarra in the distillery's money.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">In timekeeping, sixty (seconds) make up a minute, and sixty (minutes) make up one hour..</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="seventy(this)">70. Pitopulo</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio70()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pi-to-pu-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ni Mang Juan ket adda Pitopulo a puraw nga tupa.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Mr. John has seventy white sheep.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant milestone, often celebrated as one enters the septuagenarian years.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="eighty(this)">80. Walopulo</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio80()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa-lo-pu-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ti mayka walopulo nga balay ket adiddiay udi ti eskinita.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The eightieth house is at the end of the alley.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Number eighty is often associated with the well-known Hypertext Transfer Protocol (HTTP) port 80, which is commonly used for web traffic.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="ninety(this)">90. Siam a pulo</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio90()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Si-am a pu-lo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ni Tatang Daniel ket siam a pulo a tawen.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Grandpa Daniel is ninety years old.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A semiperfect number because the sum of some of its proper divisors (excluding itself) equals the number itself.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onehundred(this)">100. Sangagasut</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio100()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-nga-ga-sut /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Adda laeng sangagasut ko nga kuarta a nabati.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: I only have a hundred pesos left.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Often used as a symbol of completeness, perfection, or a full cycle.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onethousand(this)">1,000. Sangaribo</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1000()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-nga-ri-bo /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ni Joven, adda sangaribo nga kaapa idiay internet.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Joven has a thousand enemies on the internet.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A large numeric value, used in counting and measurements.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onemillion(this)">1,000,000. Sangariwriw</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1000000()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-nga-riw-riw /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ti balay ni Juanita ket nasurok iti sangariwriw.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: Juanita's house is worth approximately a million.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A significant numeric quantity, often used in population and finance.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br>
            <span onclick="onebillion(this)">1,000,000,000. Maysa a bilyon</span>
            <img src="../../../filingua/lessons/ilocano/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1000000000()"><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ May-sa a bil-yon /</span><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ti populasyon idiay Southeast Asia ket lumagpas ti maysa a bilyon.</span><br>
            <span style="font-size: small; font-weight: bold; color: #3F3931;">Example: The total population in Southeast Asia is over a billion.</span><br><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">A very large numeric value, commonly used in economic and population contexts.</span><br><br>
            <span style="font-size: small; font-weight: smaller; color: #bbb;">___________________________________________________________________________________________________________</span>
            <br><br><br><br>
            <button onclick="startPractice()">Practice </button>
        </p>
    </div>
</body>
</html>