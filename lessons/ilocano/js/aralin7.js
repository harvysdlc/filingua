function playAudio1() {
  var audio = document.getElementById("audio1");
  audio.play();
}
function first(element) {
  if (element.textContent === "1. Makan") {
    element.textContent = "1. Food";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "1. Makan";
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
  if (element.textContent === "2. Danum") {
    element.textContent = "2. Water";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "2. Danum";
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
  if (element.textContent === "3. Mangan tayo!") {
    element.textContent = "3. Let's eat!";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "3. Mangan tayo!";
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
  if (element.textContent === "4. Naimas daytoy") {
    element.textContent = "4. This is delicious!";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "4. Naimas daytoy";
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
  if (element.textContent === "5. Mayat ko kadi maala diay resibo?") {
    element.textContent = "5. Can I have the receipt?";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "5. Mayat ko kadi maala diay resibo?";
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
  if (element.textContent === "6. Kayat ko ti prutas") {
    element.textContent = "6. I want fruits";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "6. Kayat ko ti prutas";
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
  if (element.textContent === "7. Gumatang ti inapoy") {
    element.textContent = "7. I wanna buy rice";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "7. Gumatang ti inapoy";
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
  if (element.textContent === "8. Sagmamano daytoy sidaen?") {
    element.textContent = "8. How much is this dish? ";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "8. Sagmamano daytoy sidaen?";
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
  if (element.textContent === "9. Ania ti espesyal ditoy?") {
    element.textContent = "9. What is the specialty here?";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "9. Ania ti espesyal ditoy?";
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
  if (element.textContent === "10. Ania ti sidaem?") {
    element.textContent = "10. What is your viand?";
    element.style.color = "#3F3931";
    element.style.fontStyle = "italic";
    element.style.fontSize = "small";
    element.style.fontWeight = "bold";
  } else {
    element.textContent = "10. Ania ti sidaem?";
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
    window.location.href = "../../../../filingua/quiz/Ilocano7.php";
  }, audio.duration * 1000); // Multiply by 1000 to convert seconds to milliseconds
}
