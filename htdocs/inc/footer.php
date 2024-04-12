<br>
<footer class="py-3 my-4">
  <ul class="nav justify-content-left pb-3 mb-3">
    <p class="text-center text-muted">Gemaakt door <a href="https://jeremybosma.nl" target="_blank">Jeremy Bosma</a></p>
</footer>

<!-- bootstrap theme switcher van google ergens -->
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>