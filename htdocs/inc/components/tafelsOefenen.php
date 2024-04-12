<div>
    <div class="row">
        <div class="col-md-6">
            <div id="alert-banner"></div>
            <div class="card text-center">
                <div id="tafel" class="card-body">
                    <form class="row g-3 mb-2">
                        <div class="col-md-4" style="text-align: left;">
                            <label for="inputTafelvan" class="form-label">Tafel van</label>
                            <input type="number" class="form-control" id="inputTafelvan" value="1">
                        </div>
                        <div class="col-md-4" style="text-align: left;">
                            <label for="inputTafeltot" class="form-label">Tafel tot</label>
                            <input type="number" class="form-control" id="inputTafeltot" value="10">
                        </div>
                        <div class="col-md-4 align-self-end d-grid">
                            <button type="button" class="btn btn-primary" onclick="showOpdracht()">Genereer Som</button>
                        </div>
                    </form>
                    <div class="input-group mb-3">
                        <input id="inputOpdracht" type="text" class="form-control" placeholder="Som" disabled>
                        <span class="input-group-text">=</span>
                        <input id="inputOplossing" type="number" class="form-control" placeholder="Antwoord">
                    </div>
                    <div id="succesText"></div>
                    <div class="d-grid">
                        <button class="btn btn-success" onclick="checkOplossing()">Check oplossing</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>

<script>
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
        document.getElementById("inputOplossing").focus();

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
            document.getElementById("alert-banner").classList.add("alert", "alert-success");
            document.getElementById("alert-banner").innerHTML =
                "Goed gedaan, je krijgt een nieuwe som over 5 seconden.";

            setTimeout(function () {
                document.getElementById("alert-banner").innerHTML = "";
                document.getElementById("alert-banner").classList.remove("alert", "alert-success", "alert-danger");
            }, 5000);

            setTimeout(showOpdracht, 5000);
        } else {
            document.getElementById("inputOplossing").classList.add("is-invalid");
        }
    }
</script>