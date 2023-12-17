<?php
require '../../server/config.php';

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
    <title>Filingua - Aralin 1</title>
    <link rel="stylesheet" href="../../../filingua/lessons/tagalog/css/aralin1.css">
    <link rel="icon" type="image/png" href="../../../filingua/images/logo.png">
</head>
<body>
    <style>
        body {
            background-image: url(../../../filingua/images/static.jpg);
            background-size: cover; /* Cover the entire viewport */
            background-repeat: no-repeat; /* Do not repeat the background image */
        }
    </style>
    <div class="label">
            <h2>Aralin 1: Mga Pagbati</h2>
            <p>Lesson 1: Basic Greetings</p>
    </div>
    <div class="greetings"> 
        <!-- Audio element -->
        <audio id="audio1" src="../../../filingua/lessons/tagalog/recordings/1.wav"></audio>
        <audio id="audio2" src="../../../filingua/lessons/tagalog/recordings/2.wav"></audio>
        <audio id="audio3" src="../../../filingua/lessons/tagalog/recordings/3.wav"></audio>
        <audio id="audio4" src="../../../filingua/lessons/tagalog/recordings/4.wav"></audio>
        <audio id="audio5" src="../../../filingua/lessons/tagalog/recordings/5.wav"></audio>
        <audio id="audio6" src="../../../filingua/lessons/tagalog/recordings/6.wav"></audio>
        <audio id="audio7" src="../../../filingua/lessons/tagalog/recordings/7.wav"></audio>
        <audio id="audio8" src="../../../filingua/lessons/tagalog/recordings/8.wav"></audio>
        <audio id="audio9" src="../../../filingua/lessons/tagalog/recordings/9.wav"></audio>
        <audio id="audio10" src="../../../filingua/lessons/tagalog/recordings/10.wav"></audio>
        <script>
            function playAudio1() {
            var audio = document.getElementById('audio1');
            audio.play();
            }
            function first(element) {
                if (element.textContent === '1. Magandang Araw!') {
                    element.textContent = '1. Good Day!';
                    element.style.color = '#3F3931';
                    element.style.fontStyle = 'italic';
                    element.style.fontSize = 'small';
                    element.style.fontWeight = 'normal';

                } else {
                    element.textContent = '1. Magandang Araw!';
                    element.style.color = '#ff914d';
                    element.style.fontStyle = 'normal';
                    element.style.fontSize = 'initial';
                    element.style.fontWeight = 'bold';
                }
            }
            function playAudio2() {
            var audio = document.getElementById('audio2');
            audio.play();
            }
            function second(element) {
                if (element.textContent === '2. Kumusta ka?') {
                    element.textContent = '2. How are you?';
                    element.style.color = '#3F3931';
                    element.style.fontStyle = 'italic';
                    element.style.fontSize = 'small';
                    element.style.fontWeight = 'normal';
                } else {
                    element.textContent = '2. Kumusta ka?';
                    element.style.color = '#ff914d';
                    element.style.fontStyle = 'normal';
                    element.style.fontSize = 'initial';
                    element.style.fontWeight = 'bold';
                }
            }
            function playAudio3() {
            var audio = document.getElementById('audio3');
            audio.play();
            }
            function third(element) {
                if (element.textContent === '3. Salamat') {
                    element.textContent = '3. Thank you';
                    element.style.color = '#3F3931';
                    element.style.fontStyle = 'italic';
                    element.style.fontSize = 'small';
                    element.style.fontWeight = 'normal';
                } else {
                    element.textContent = '3. Salamat';
                    element.style.color = '#ff914d';
                    element.style.fontStyle = 'normal';
                    element.style.fontSize = 'initial';
                    element.style.fontWeight = 'bold';
                }
            }
            function playAudio4() {
            var audio = document.getElementById('audio4');
            audio.play();
            }
            function fourth(element) {
                if (element.textContent === '4. Walang anuman') {
                    element.textContent = "4. You're Welcome";
                    element.style.color = '#3F3931';
                    element.style.fontStyle = 'italic';
                    element.style.fontSize = 'small';
                    element.style.fontWeight = 'normal';
                } else {
                    element.textContent = '4. Walang anuman';
                    element.style.color = '#ff914d';
                    element.style.fontStyle = 'normal';
                    element.style.fontSize = 'initial';
                    element.style.fontWeight = 'bold';
                }
            }
            function playAudio5() {
            var audio = document.getElementById('audio5');
            audio.play();
            }
            function fifth(element) {
                if (element.textContent === '5. Paalam') {
                    element.textContent = "5. Goodbye";
                    element.style.color = '#3F3931';
                    element.style.fontStyle = 'italic';
                    element.style.fontSize = 'small';
                    element.style.fontWeight = 'normal';
                } else {
                    element.textContent = '5. Paalam';
                    element.style.color = '#ff914d';
                    element.style.fontStyle = 'normal';
                    element.style.fontSize = 'initial';
                    element.style.fontWeight = 'bold';
                }
            }
            function playAudio6() {
            var audio = document.getElementById('audio6');
            audio.play();
            }
            function sixth(element) {
                if (element.textContent === '6. Oo') {
                    element.textContent = "6. Yes";
                    element.style.color = '#3F3931';
                    element.style.fontStyle = 'italic';
                    element.style.fontSize = 'small';
                    element.style.fontWeight = 'normal';
                } else {
                    element.textContent = '6. Oo';
                    element.style.color = '#ff914d';
                    element.style.fontStyle = 'normal';
                    element.style.fontSize = 'initial';
                    element.style.fontWeight = 'bold';
                }
            }
            function playAudio7() {
            var audio = document.getElementById('audio7');
            audio.play();
            }
            function seventh(element) {
                if (element.textContent === '7. Hindi') {
                    element.textContent = "7. No";
                    element.style.color = '#3F3931';
                    element.style.fontStyle = 'italic';
                    element.style.fontSize = 'small';
                    element.style.fontWeight = 'normal';
                } else {
                    element.textContent = '7. Hindi';
                    element.style.color = '#ff914d';
                    element.style.fontStyle = 'normal';
                    element.style.fontSize = 'initial';
                    element.style.fontWeight = 'bold';
                }
            }
            function playAudio8() {
            var audio = document.getElementById('audio8');
            audio.play();
            }
            function eight(element) {
                if (element.textContent === '8. Magandang Umaga!') {
                    element.textContent = '8. Good Morning!';
                    element.style.color = '#3F3931';
                    element.style.fontStyle = 'italic';
                    element.style.fontSize = 'small';
                    element.style.fontWeight = 'normal';
                } else {
                    element.textContent = '8. Magandang Umaga!';
                    element.style.color = '#ff914d';
                    element.style.fontStyle = 'normal';
                    element.style.fontSize = 'initial';
                    element.style.fontWeight = 'bold';
                }
            }
            function playAudio9() {
            var audio = document.getElementById('audio9');
            audio.play();
            }
            function ninth(element) {
                if (element.textContent === '9. Magandang Gabi!') {
                    element.textContent = '9. Good Evening!';
                    element.style.color = '#3F3931';
                    element.style.fontStyle = 'italic';
                    element.style.fontSize = 'small';
                    element.style.fontWeight = 'normal';
                } else {
                    element.textContent = '9. Magandang Gabi!';
                    element.style.color = '#ff914d';
                    element.style.fontStyle = 'normal';
                    element.style.fontSize = 'initial';
                    element.style.fontWeight = 'bold';
                }
            }
            function playAudio10() {
            var audio = document.getElementById('audio10');
            audio.play();
            }
            function tenth(element) {
                if (element.textContent === '10. Ingat ka') {
                    element.textContent = '10. Take care';
                    element.style.color = '#3F3931';
                    element.style.fontStyle = 'italic';
                    element.style.fontSize = 'small';
                    element.style.fontWeight = 'normal';
                } else {
                    element.textContent = '10. Ingat ka';
                    element.style.color = '#ff914d';
                    element.style.fontStyle = 'normal';
                    element.style.fontSize = 'initial';
                    element.style.fontWeight = 'bold';
                }
            }
            function startPractice() {
                window.location.href = '../../../../filingua/quiz/Tagalog1.php';
                
            alert('Magsanay button clicked!');
            }
        </script>
        <p>Pindutin ang parirala upang makita ang pagsasalin<br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">Click the phrase to see translation</span><br><br><br>
            <span onclick="first(this)">1. Magandang Araw!</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio1()"><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Magandang Araw!, Ginoong Jose.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-gan-dang A-raw /</span><br><br>
            <span onclick="second(this)">2. Kumusta ka?</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio2()"><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Andrei, Kumusta ka?.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ku-mus-ta Ka /</span><br><br>
            <span onclick="third(this)">3. Salamat</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio3()"><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Salamat sa pagdalo, Maria.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Sa-la-mat /</span><br><br>
            <span onclick="fourth(this)">4. Walang anuman</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio4()"><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Walang anuman, Pedro!</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Wa-lang A-nu-man /</span><br><br>
            <span onclick="fifth(this)">5. Paalam</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio5()"><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Salamat sa lahat Dante, paalam.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Pa-a-lam /</span><br><br>
            <span onclick="sixth(this)">6. Oo</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio6()"><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Oo, sinasagot na kita Juan.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ O-o /</span><br><br>
            <span onclick="seventh(this)">7. Hindi</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio7()"><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Hindi tama ang sagot ko sa pagsusulit.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Hin-di /</span><br><br>
            <span onclick="eight(this)">8. Magandang Umaga!</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio8()"><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Magandang Umaga! Binibining Reyes.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-gan-dang U-ma-ga /</span><br><br>
            <span onclick="ninth(this)">9. Magandang Gabi!</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio9()"><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Magandang Gabi! Mahal ko.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ Ma-gan-dang Ga-bi /</span><br><br>
            <span onclick="tenth(this)">10. Ingat ka</span>
            <img src="../../../filingua/lessons/tagalog/images/play.png" alt="Favicon" style="width: 16px; height: 16px; margin-left: 10px" onclick="playAudio10()"><br><br>
            <span style="font-size: small; font-weight: bold"> Halimbawa: Ingat ka sa pag-uwi!.</span><br>
            <span style="font-size: small; font-weight: normal; color: #3F3931;">/ I-ngat Ka /</span><br><br><br><br>
            <button onclick="startPractice()">Magsanay</button>
        </p>
    </div>
   
</body>
</html>
