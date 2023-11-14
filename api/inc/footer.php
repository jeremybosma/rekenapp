<br>
<footer class="py-3 my-4">
  <ul class="nav justify-content-left pb-3 mb-3">
    <p class="text-center text-muted">Gemaakt door <a href="https://jeremybosma.nl" target="_blank">Jeremy Bosma</a></p>
</footer>

<script src="/js/main.js"></script>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>