<div class="row">
    <div class="col-md-6 mt-2">
        <div id="alert-banner"></div>
        <div class="card text-center">
            <div id="tafel" class="card-body">
                <div class="pb-2">
                    <select style="font-weight: bold;" id="dim_select" class="form-select">
                        <option value="1">1D (lengte)</option>
                        <option value="2">2D (oppervlakte)</option>
                        <option value="3">3D (inhoud)</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-5">
                        <div class="input-group mb-3">
                            <input id="inp_left" type="text" class="form-control" placeholder="Opgave" disabled>
                            <span id="eenh_left" class="input-group-text">mm</span>
                        </div>
                    </div>
                    <div class="col-1 mt-1">=</div>
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <input id="inp_right" type="number" class="form-control" placeholder="Antwoord">
                            <span id="eenh_right" class="input-group-text">km</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary" onclick="makeProblem()">Genereer</button>
                    <button class="btn btn-success" onclick="checkSolution()">Check</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const eenheden = ["mm", "cm", "dm", "m", "dam", "hm", "km"];

    const dim_select = document.getElementById("dim_select");
    const inp_left = document.getElementById("inp_left");
    const eenh_left = document.getElementById("eenh_left");
    const inp_right = document.getElementById("inp_right");
    const eenh_right = document.getElementById("eenh_right");
    const alertBanner = document.getElementById("alert-banner");

    let opgave_float = 3.14;
    let right_answer;

    function makeProblem() {
        let index_left = Math.floor(Math.random() * eenheden.length);
        let index_right = Math.floor(Math.random() * eenheden.length);

        if (index_left === index_right) {
            return makeProblem();
        }

        eenh_left.innerHTML = `${eenheden[index_left]}<sup>${dim_select.value}</sup>`;
        eenh_right.innerHTML = `${eenheden[index_right]}<sup>${dim_select.value}</sup>`;

        opgave_float = (Math.random() * 1000).toFixed(3);
        inp_left.value = opgave_float;

        inp_right.value = "";
        inp_right.focus();

        alertBanner.classList.remove("alert", "alert-success", "alert-danger");
        alertBanner.innerHTML = "";
        inp_right.classList.remove("is-valid", "is-invalid");
    }

    function checkSolution() {
        const factor = Math.pow(10, dim_select.value > 1 ? dim_select.value : 1);
        const aantal_stappen = Math.abs(index_right - index_left);
        right_answer = index_left < index_right ? opgave_float / Math.pow(factor, aantal_stappen) : opgave_float * Math.pow(factor, aantal_stappen);

        if (inp_right.value == right_answer) {
            inp_right.classList.replace("is-invalid", "is-valid");
            alertBanner.classList.add("alert", "alert-info");
            alertBanner.innerHTML = "Goed gedaan, je krijgt een nieuwe som over 5 seconden.";

            setTimeout(() => {
                alertBanner.innerHTML = "";
                makeProblem();
            }, 5000);
        } else {
            inp_right.classList.add("is-invalid");
            alertBanner.classList.add("alert", "alert-info");
            alertBanner.innerHTML = "Hint: factor = " + factor;
        }
    }
</script>