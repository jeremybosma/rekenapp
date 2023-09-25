function genereerTafel() {
  let tafelVan = parseInt(document.getElementById("tafelInput").value);

  if (isNaN(tafelVan)) {
    alert("Er is iets misgegaan bij het genereren van de tafels, heb je wel een cijfer ingevuld?");
  } else {
    let teller = 1
    let uitkomst = 0
    let tekst = ""

    while (teller < 11) {
      uitkomst = teller * tafelVan
      tekst += tafelVan + "x" + teller + "=" + uitkomst + "<br>"
      teller++
    }
    document.getElementById("tafel").innerHTML = tekst
  }
}

function berekenPlus() {
  let eersteInput = parseInt(document.getElementById("plus1").value);
  let TweedeInput = parseInt(document.getElementById("plus2").value);

  if (isNaN(eersteInput + TweedeInput)) {
    alert("Er is iets misgegaan in de berekening, heb je de cijfers goed ingevuld?");
  } else {
    alert(eersteInput + TweedeInput);
  }
}

function berekenMin() {
  let eersteInput = parseInt(document.getElementById("-1").value);
  let TweedeInput = parseInt(document.getElementById("-2").value);

  if (isNaN(eersteInput - TweedeInput)) {
    alert("Er is iets misgegaan in de berekening, heb je de cijfers goed ingevuld?");
  } else {
    alert(eersteInput - TweedeInput);
  }
}

function berekenX() {
  let eersteInput = parseInt(document.getElementById("x1").value);
  let TweedeInput = parseInt(document.getElementById("x2").value);

  if (isNaN(eersteInput * TweedeInput)) {
    alert("Er is iets misgegaan in de berekening, heb je de cijfers goed ingevuld?");
  } else {
    alert(eersteInput * TweedeInput);
  }
}

function berekenDelen() {
  let eersteInput = parseInt(document.getElementById("deel1").value);
  let TweedeInput = parseInt(document.getElementById("deel2").value);

  if (isNaN(eersteInput / TweedeInput)) {
    alert("Er is iets misgegaan in de berekening, heb je de cijfers goed ingevuld?");
  } else {
    alert(eersteInput / TweedeInput);
  }
}

// bootstrap thema switcher
const btnSwitch = document.getElementById('btnSwitch');
const currentTheme = localStorage.getItem('theme');

if (currentTheme) {
  document.documentElement.setAttribute('data-bs-theme', currentTheme);
}

btnSwitch.addEventListener('click', () => {
  if (document.documentElement.getAttribute('data-bs-theme') == 'dark') {
    document.documentElement.setAttribute('data-bs-theme', 'light');
    localStorage.setItem('theme', 'light'); 
  } else {
    document.documentElement.setAttribute('data-bs-theme', 'dark');
    localStorage.setItem('theme', 'dark'); 
  }
});