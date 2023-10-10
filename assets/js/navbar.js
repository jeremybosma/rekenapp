// Components maken met .innerHTML wat we hebben geleerd omdat ik er zat van ben elke page de updaten.

document.getElementById("navigation").innerHTML = `
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">Rekenapp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.html">Plus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="min.html">Min</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          Tafels
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="tafels.html">Tafels</a></li>
          <li><a class="dropdown-item" href="tafelsLeren.html">Tafels Leren</a></li>
          <li><a class="dropdown-item" href="tafelsOefenen.html">Tafels Oefenen</a></li>
        </ul>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="gedeeldDoor.html">Delen</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Instellingen
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="" id="btnSwitch">Wissel Thema</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="https://github.com/jecta/rekenapp">Github</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
`;

document.getElementById("footer").innerHTML = `
<br>
    <footer class="py-3 my-4">
      <ul class="nav justify-content-left pb-3 mb-3">
        <p class="text-center text-muted">Gemaakt door <a href="https://jeremybosma.nl">Jeremy Bosma</a></p>
    </footer>
`;