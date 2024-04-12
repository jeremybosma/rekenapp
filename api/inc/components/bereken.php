https://stackoverflow.com/questions/1232097/php-include-a-php-file-and-also-send-query-parameters

<div style="display: flex; align-items: center; width: 300px;">
  <input type="number" class="form-control" placeholder="1" id="bereken1" style="margin-right: 10px;">
  <h2 class="text-muted" style="margin-right: 10px;" id="berekenValue">$value</h2>
  <input type="number" class="form-control" placeholder="1" id="bereken2" style="margin-right: 10px;">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
    onClick="bereken()">Bereken</button>
</div>

<script>
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
</script>

<!-- sommen berekenen (plus, min, keer, delen) -->
<script>
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

  function bereken() {
    let eersteInput = parseFloat(document.getElementById("bereken1").value);
    let TweedeInput = parseFloat(document.getElementById("bereken2").value);
    let berekenvalue = document.getElementById("berekenValue");

    if (isNaN(eersteInput + TweedeInput)) {
      document.getElementById("antwoord").innerHTML = errorTekst;
    } else {
      if (? = +) {
        berekenvalue.innerText = "+";
        document.getElementById("antwoord").innerHTML =
          eersteInput + "+" + TweedeInput + "=" + (eersteInput + TweedeInput);
      }
    }
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
</script>