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

// ids zn code
//de array met alle eenheden waaruit we willekeurig twee laten kiezen op basis
//van de index-waarde; de indexwaarden zijn 0, 1, 2, 3, 4, 5 en 6 -->
//eenheden[5] = "hm"
const eenheden = ["mm", "cm", "dm", "m", "dam", "hm", "km"];
let random_index_left = 0;
let random_index_right = 0;

let selected_dim = document.getElementById("inp_dim");
let problem = document.getElementById("inp_left");
let unit_left = document.getElementById("eenh_left");
let solution = document.getElementById("inp_right");
let unit_right = document.getElementById("eenh_right");



function generateProblem()
{
    //alert("hij doet het");
    let dimension = selected_dim.value;
    random_index_left = Math.floor(Math.random() * 7);
    random_index_right = Math.floor(Math.random() * 7);
    unit_left.innerHTML = eenheden[random_index_left] + "<sup>" + dimension + "</sup>";
    unit_right.innerHTML = eenheden[random_index_right]+ "<sup>"+ dimension + "</sup>";
    problem.value = (Math.random() * 1000).toFixed(3);
}

function checkSolution()
{
    
    let verm_factor = Math.pow(10,selected_dim.value);
    //ik ben alleen geinteresseerd in het aantal stappen tussen de eenheden,
    //door Math.abs wordt een negatief positief gemaakt
    let aantal_stappen = Math.abs(random_index_left - random_index_right);
    
    //als de eenheid links groter is dan de eenheid rechts,
    //dan wordt het antwoord groter, oftewel de komma moet naar rechts
    //andersom: als de eenheid links kleiner is dan de eenheid rechts,
    //dan wordt het antwoord kleiner, oftewel de komma moet naar links
    let correct_answer = 3.14;
    if(random_index_left > random_index_right)
    {
        //het antwoord wordt groter
        correct_answer = problem.value * Math.pow(verm_factor, aantal_stappen);
    }
    else
    {
        //het antwoord wordt kleiner
        correct_answer = problem.value / Math.pow(verm_factor, aantal_stappen);
    }
    alert("verm_factor = " + verm_factor + " en het aantal stappen = " + aantal_stappen + " het goede antwoord is: " + correct_answer );
}