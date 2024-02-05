function playAudio1() {
  var audio = document.getElementById("audio1");
  audio.play();
}
function first(element) {
  if (element.textContent === "1. Marhay na Aldaw!") {
    element.textContent = "1. Good Day!";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "1. Marhay na Aldaw!";
    element.style.color = "#ff914d";
    element.style.fontStyle = "normal";
    element.style.fontSize = "initial";
    element.style.fontWeight = "bold";
  }
}
function playAudio2() {
  var audio = document.getElementById("audio2");
  audio.play();
}
function second(element) {
  if (element.textContent === "2. Kumusta ka?") {
    element.textContent = "2. How are you?";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "2. Kumusta ka?";
    element.style.color = "#ff914d";
    element.style.fontStyle = "normal";
    element.style.fontSize = "initial";
    element.style.fontWeight = "bold";
  }
}
function playAudio3() {
  var audio = document.getElementById("audio3");
  audio.play();
}
function third(element) {
  if (element.textContent === "3. Dios mabalos") {
    element.textContent = "3. Thank you";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "3. Dios mabalos";
    element.style.color = "#ff914d";
    element.style.fontStyle = "normal";
    element.style.fontSize = "initial";
    element.style.fontWeight = "bold";
  }
}
function playAudio4() {
  var audio = document.getElementById("audio4");
  audio.play();
}
function fourth(element) {
  if (element.textContent === "4. Dai man") {
    element.textContent = "4. You're Welcome";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "4. Dai man";
    element.style.color = "#ff914d";
    element.style.fontStyle = "normal";
    element.style.fontSize = "initial";
    element.style.fontWeight = "bold";
  }
}
function playAudio5() {
  var audio = document.getElementById("audio5");
  audio.play();
}
function fifth(element) {
  if (element.textContent === "5. Adios") {
    element.textContent = "5. Goodbye";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "5. Adios";
    element.style.color = "#ff914d";
    element.style.fontStyle = "normal";
    element.style.fontSize = "initial";
    element.style.fontWeight = "bold";
  }
}
function playAudio6() {
  var audio = document.getElementById("audio6");
  audio.play();
}
function sixth(element) {
  if (element.textContent === "6. Oo") {
    element.textContent = "6. Yes";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "6. Oo";
    element.style.color = "#ff914d";
    element.style.fontStyle = "normal";
    element.style.fontSize = "initial";
    element.style.fontWeight = "bold";
  }
}
function playAudio7() {
  var audio = document.getElementById("audio7");
  audio.play();
}
function seventh(element) {
  if (element.textContent === "7. Dae") {
    element.textContent = "7. No";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "7. Dae";
    element.style.color = "#ff914d";
    element.style.fontStyle = "normal";
    element.style.fontSize = "initial";
    element.style.fontWeight = "bold";
  }
}
function playAudio8() {
  var audio = document.getElementById("audio8");
  audio.play();
}
function eight(element) {
  if (element.textContent === "8. Marhay na Aga!") {
    element.textContent = "8. Good Morning!";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "8. Marhay na Aga!";
    element.style.color = "#ff914d";
    element.style.fontStyle = "normal";
    element.style.fontSize = "initial";
    element.style.fontWeight = "bold";
  }
}
function playAudio9() {
  var audio = document.getElementById("audio9");
  audio.play();
}
function ninth(element) {
  if (element.textContent === "9. Marhay na Banggi!") {
    element.textContent = "9. Good Evening!";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "9. Marhay na Banggi!";
    element.style.color = "#ff914d";
    element.style.fontStyle = "normal";
    element.style.fontSize = "initial";
    element.style.fontWeight = "bold";
  }
}
function playAudio10() {
  var audio = document.getElementById("audio10");
  audio.play();
}
function tenth(element) {
  if (element.textContent === "10. Magdangat ka") {
    element.textContent = "10. Take care";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "10. Magdangat ka";
    element.style.color = "#ff914d";
    element.style.fontStyle = "normal";
    element.style.fontSize = "initial";
    element.style.fontWeight = "bold";
  }
}

function startPractice() {
  // Play the audio
  var audio = document.getElementById("click");

  // Check if the audio is already playing, stop and reset it
  if (!audio.paused) {
    audio.pause();
    audio.currentTime = 0;
  }

  // Play the audio
  audio.play();

  // Delay the redirection to allow the audio to play
  setTimeout(function () {
    window.location.href = "../../../../filingua/quiz/Bicolano1.php";
  }, audio.duration * 1000); // Multiply by 1000 to convert seconds to milliseconds
}