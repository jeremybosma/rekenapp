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
    let berekendeOplossing;

    function showOpdracht() {
        const tafelVan = parseInt(document.getElementById("inputTafelvan").value, 10);
        const tafelTot = parseInt(document.getElementById("inputTafeltot").value, 10);

        if (tafelVan <= 0 || tafelTot <= 0) {
            const errorMessage = tafelVan === 0 || tafelTot === 0 ? "Een van de waarden is 0, probeer het opnieuw." : "Je hebt een negatief getal gebruikt, probeer het opnieuw.";
            alert(errorMessage);
            return;
        }

        const randomNummer = Math.floor(Math.random() * tafelTot) + 1;
        const opgave = `${randomNummer} x ${tafelVan}`;
        document.getElementById("inputOpdracht").value = opgave;
        document.getElementById("inputOplossing").focus();

        berekendeOplossing = randomNummer * tafelVan;

        setTimeout(() => document.getElementById("inputOplossing").value = "", 5000);

        document.getElementById("inputOplossing").classList.remove("is-valid", "is-invalid");
    }

    function checkOplossing() {
        const ingevoerdeOplossing = parseInt(document.getElementById("inputOplossing").value, 10);
        if (berekendeOplossing === ingevoerdeOplossing) {
            document.getElementById("inputOplossing").classList.replace("is-invalid", "is-valid");
            const alertBanner = document.getElementById("alert-banner");
            alertBanner.className = "alert alert-success";
            alertBanner.textContent = "Goed gedaan, je krijgt een nieuwe som over 5 seconden.";

            setTimeout(() => {
                alertBanner.textContent = "";
                alertBanner.classList.remove("alert", "alert-success");
            }, 5000);

            setTimeout(showOpdracht, 5000);
        } else {
            document.getElementById("inputOplossing").classList.add("is-invalid");
        }
    }
</script>