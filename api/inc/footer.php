<br>
<footer class="py-3 my-4">
  <ul class="nav justify-content-left pb-3 mb-3">
    <p class="text-center text-muted">Gemaakt door <a href="https://jeremybosma.nl" target="_blank">Jeremy Bosma</a></p>
</footer>

<!-- Theme Switcher -->
<script>
  const btnSwitch = document.querySelector('#btnSwitch');
  const theme = localStorage.getItem('theme') || 'light';

  document.documentElement.setAttribute('data-bs-theme', theme);

  btnSwitch.addEventListener('click', () => {
    const newTheme = document.documentElement.getAttribute('data-bs-theme') === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-bs-theme', newTheme);
    localStorage.setItem('theme', newTheme);
  });
</script>

<!-- Copy Answer Functionality -->
<script>
  const errorText = "Er is iets misgegaan bij het genereren van je antwoord, heb je wel een cijfer ingevuld?";

  function copyAnswer() {
    const copyTextElement = document.querySelector("#antwoord");
    const copyText = copyTextElement.innerText;

    if (!copyText || copyText === errorText) {
      alert(copyText ? "Je kan geen error kopieren." : "Er is geen antwoord om te kopieren.");
      return;
    }

    navigator.clipboard.writeText(copyText).then(() => {
      alert("Text gekopieerd: " + copyText);
    }).catch(err => {
      console.error("Kon de text niet kopieren: ", err);
    });
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>