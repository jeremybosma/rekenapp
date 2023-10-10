let errorTekst = "Er is iets misgegaan bij het genereren van je antwoord, heb je wel een cijfer ingevuld?"

function genereerTafel() {
  let tafelVan = parseInt(document.getElementById("tafelInput").value);

  if (isNaN(tafelVan)) {
    document.getElementById("antwoord").innerHTML = errorTekst;
  } else {
    let teller = 1
    let uitkomst = 0
    let tekst = ""

    while (teller < 11) {
      uitkomst = teller * tafelVan
      tekst += teller + "x" + tafelVan + "=" + uitkomst + "<br>"
      teller++
    }
    document.getElementById("tafel").innerHTML = tekst
  }
}

function berekenPlus() {
  let eersteInput = parseInt(document.getElementById("plus1").value);
  let TweedeInput = parseInt(document.getElementById("plus2").value);

  if (isNaN(eersteInput + TweedeInput)) {
    document.getElementById("antwoord").innerHTML = errorTekst;
  } else {
    document.getElementById("antwoord").innerHTML = eersteInput + "+" + TweedeInput + "=" + (eersteInput + TweedeInput);
  }
}

function berekenMin() {
  let eersteInput = parseInt(document.getElementById("-1").value);
  let TweedeInput = parseInt(document.getElementById("-2").value);

  if (isNaN(eersteInput - TweedeInput)) {
    document.getElementById("antwoord").innerHTML = errorTekst;
  } else {
    document.getElementById("antwoord").innerHTML = eersteInput + "-" + TweedeInput + "=" + (eersteInput - TweedeInput);
  }
}

function berekenX() {
  let eersteInput = parseInt(document.getElementById("x1").value);
  let TweedeInput = parseInt(document.getElementById("x2").value);

  if (isNaN(eersteInput * TweedeInput)) {
    document.getElementById("antwoord").innerHTML = errorTekst;
  } else {
    document.getElementById("antwoord").innerHTML = eersteInput + "x" + TweedeInput + "=" + (eersteInput * TweedeInput);
  }
}

function berekenDelen() {
  let eersteInput = parseInt(document.getElementById("deel1").value);
  let TweedeInput = parseInt(document.getElementById("deel2").value);

  if (isNaN(eersteInput / TweedeInput)) {
    document.getElementById("antwoord").innerHTML = errorTekst;
  } else {
    document.getElementById("antwoord").innerHTML = eersteInput + "÷" + TweedeInput + "=" + (eersteInput / TweedeInput);
  }
}

function copyAntwoord() {
  var copyText = document.getElementById("antwoord");

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