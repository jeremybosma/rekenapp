let errorTekst =
  "Er is iets misgegaan bij het genereren van je antwoord, heb je wel een cijfer ingevuld?";

function copyAntwoord() {
  var copyText = document.getElementById("antwoord");

  if (copyText.innerText == "") {
    alert("Er is geen antwoord om te kopieren.");
    return;
  }

  if (copyText.innerText == errorTekst) {
    alert("Je kan geen error kopieren.");
    return;
  }

  var range = document.createRange();
  range.selectNode(copyText);
  window.getSelection().removeAllRanges();
  window.getSelection().addRange(range);

  try {
    document.execCommand("copy");
    alert("Text gekopieerd: " + copyText.innerText);
  } catch (err) {
    console.error("Kon de text niet kopieren: ", err);
  }

  window.getSelection().removeAllRanges();
}