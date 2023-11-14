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

function berekenPlus() {
  let eersteInput = parseFloat(document.getElementById("plus1").value);
  let TweedeInput = parseFloat(document.getElementById("plus2").value);

  if (isNaN(eersteInput + TweedeInput)) {
    document.getElementById("antwoord").innerHTML = errorTekst;
  } else {
    document.getElementById("antwoord").innerHTML =
      eersteInput + "+" + TweedeInput + "=" + (eersteInput + TweedeInput);
  }
}

function berekenMin() {
  let eersteInput = parseFloat(document.getElementById("-1").value);
  let TweedeInput = parseFloat(document.getElementById("-2").value);

  if (isNaN(eersteInput - TweedeInput)) {
    document.getElementById("antwoord").innerHTML = errorTekst;
  } else {
    document.getElementById("antwoord").innerHTML =
      eersteInput + "-" + TweedeInput + "=" + (eersteInput - TweedeInput);
  }
}

function berekenX() {
  let eersteInput = parseFloat(document.getElementById("x1").value);
  let TweedeInput = parseFloat(document.getElementById("x2").value);

  if (isNaN(eersteInput * TweedeInput)) {
    document.getElementById("antwoord").innerHTML = errorTekst;
  } else {
    document.getElementById("antwoord").innerHTML =
      eersteInput + "x" + TweedeInput + "=" + eersteInput * TweedeInput;
  }
}

function berekenDelen() {
  let eersteInput = parseFloat(document.getElementById("deel1").value);
  let TweedeInput = parseFloat(document.getElementById("deel2").value);

  if (isNaN(eersteInput / TweedeInput)) {
    document.getElementById("antwoord").innerHTML = errorTekst;
  } else {
    document.getElementById("antwoord").innerHTML =
      eersteInput + "÷" + TweedeInput + "=" + eersteInput / TweedeInput;
  }
}

function genereerTafel() {
  let tafelVan = parseFloat(document.getElementById("tafelInput").value);

  if (isNaN(tafelVan)) {
    document.getElementById("antwoord").innerHTML = errorTekst;
  } else {
    let teller = 1;
    let uitkomst = 0;
    let tekst = "";

    while (teller < 11) {
      uitkomst = teller * tafelVan;
      tekst += teller + "x" + tafelVan + "=" + uitkomst + "<br>";
      teller++;
    }
    document.getElementById("tafel").innerHTML = tekst;
  }
}

// showOpdracht en checkOplossing is code van Ids wat ik zwaar gemodified heb.
let berekendeoplossing;

function showOpdracht() {
  let tafelvan = document.getElementById("inputTafelvan").value;
  let tafeltot = document.getElementById("inputTafeltot").value;

  if (tafelvan == 0 || tafeltot == 0) {
    alert(errorTekst);
    return;
  } else if (tafelvan < 0 || tafeltot < 0) {
    alert("Je hebt een negatief getal gebruikt, probeer het opnieuw.");
    return;
  }

  let randomnmbr = Math.floor(Math.random() * tafeltot) + 1;
  let opgave = randomnmbr + " x " + tafelvan;
  document.getElementById("inputOpdracht").value = opgave;

  berekendeoplossing = randomnmbr * tafelvan;

  setTimeout((document.getElementById("inputOplossing").value = ""), 5000);

  document
    .getElementById("inputOplossing")
    .classList.remove("is-valid", "is-invalid");
}

function checkOplossing() {
  let ingevoerdeoplossing = document.getElementById("inputOplossing").value;
  if (berekendeoplossing == ingevoerdeoplossing) {
    document.getElementById("inputOplossing").classList.remove("is-invalid");
    document.getElementById("inputOplossing").classList.add("is-valid");
    document.getElementById("succesText").innerHTML =
      "Goed gedaan, je krijgt een nieuwe som over 5 seconden.";

    setTimeout(function () {
      document.getElementById("succesText").innerHTML = "";
    }, 5000);

    setTimeout(showOpdracht, 5000);
  } else {
    document.getElementById("inputOplossing").classList.add("is-invalid");
  }
}