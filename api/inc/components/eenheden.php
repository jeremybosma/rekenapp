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
                            <input id="inp_right" type="text" class="form-control" placeholder="Antwoord">
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

    let index_left = 0;
    let index_right = 0;

    let dim_select = document.getElementById("dim_select");

    let inp_left = document.getElementById("inp_left");
    let eenh_left = document.getElementById("eenh_left");

    let inp_right = document.getElementById("inp_right");
    let eenh_right = document.getElementById("eenh_right");

    let opgave_float = 3.14;
    let right_answer = undefined;

    let factor = 10;
    let aantal_stappen = 0;


    function makeProblem() {
        index_left = Math.floor(Math.random() * 7);
        index_right = Math.floor(Math.random() * 7);

        if (index_left == index_right) {
            // alert("test dezelfde eenheden gegenereerd er wordt een nieuwe som gemaakt.");
            return makeProblem();
        }

        eenh_left.innerHTML = eenheden[index_left] + "<sup>" + dim_select.value + "</sup>";
        eenh_right.innerHTML = eenheden[index_right] + "<sup>" + dim_select.value + "</sup>";

        opgave_float = (Math.random() * 1000).toFixed(3);
        inp_left.value = opgave_float;

        inp_right.value = "";
        inp_right.focus();

        document.getElementById("alert-banner").classList.remove("alert", "alert-success", "alert-danger");
        document.getElementById("alert-banner").innerHTML = "";
        document.getElementById("inp_right").classList.remove("is-valid", "is-invalid");
    }

    function checkSolution() {
        if (dim_select.value > 1) {

            factor = Math.pow(10, dim_select.value);
        }

        if (index_left < index_right) {
            aantal_stappen = index_right - index_left;
            right_answer = opgave_float / Math.pow(factor, aantal_stappen);
        } else {
            aantal_stappen = index_left - index_right;
            right_answer = opgave_float * Math.pow(factor, aantal_stappen);
        }

        if (inp_right.value == right_answer) {
            document.getElementById("inp_right").classList.remove("is-invalid");
            document.getElementById("inp_right").classList.add("is-valid");
            document.getElementById("alert-banner").classList.add("alert", "alert-info");
            document.getElementById("alert-banner").innerHTML =
                "Goed gedaan, je krijgt een nieuwe som over 5 seconden.";

            setTimeout(function () {
                document.getElementById("alert-banner").innerHTML = "";
            }, 5000);

            setTimeout(makeProblem, 5000);
        } else {
            document.getElementById("inp_right").classList.add("is-invalid");
            if (inp_right.value == !right_answer) {
                document.getElementById("alert-banner").classList.add("alert", "alert-info");
                document.getElementById("alert-banner").innerHTML = "Hint: factor = " + factor;
            }
        }
    }
</script>