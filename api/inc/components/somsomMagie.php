<!-- haal scroll wheel op input type number weg -->
<style>
    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0
    }

    input[type=number] {
        -moz-appearance: textfield
    }
</style>

<div class="row">
    <div class="col-md-6 mt-2">
        <div id="alert-banner"></div>
        <div class="card text-center">
            <div id="tafel" class="card-body">
                <div class="row">
                    <div class="col"><input id="inp_A1" type="number" class="form-control text-center" value="25"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"><input id="inp_D1" type="number" class="form-control text-center" value="3"></div>
                </div>
                <div class="row mt-3">
                    <div class="col"></div>
                    <div class="col"><input id="opl_B2" type="number" class="form-control text-center" value=""
                            disabled>
                    </div>
                    <div class="col"><input id="opl_C2" type="number" class="form-control text-center" value=""
                            disabled>
                    </div>
                    <div class="col"><input id="inp_D2" type="number" class="form-control text-center" value="18"></div>
                </div>
                <div class="row mt-3">
                    <div class="col"></div>
                    <div class="col"><input id="opl_B3" type="number" class="form-control text-center" value=""
                            disabled>
                    </div>
                    <div class="col"><input id="opl_C3" type="number" class="form-control text-center" value=""
                            disabled>
                    </div>
                    <div class="col"><input id="inp_D3" type="number" class="form-control text-center" value="10"></div>
                </div>
                <div class="row mt-3">
                    <div class="col"></div>
                    <div class="col"><input id="inp_B4" type="number" class="form-control text-center" value="7"></div>
                    <div class="col"><input id="inp_C4" type="number" class="form-control text-center" value="21"></div>
                    <div class="col"></div>
                </div><br>
                <button class="btn btn-primary" onclick="solveProblem()">Los SomSom op</button>
            </div>
        </div>
    </div>

    <script>
        const inputs = ["inp_A1", "inp_D1", "inp_D2", "inp_D3", "inp_C4", "inp_B4", "opl_B2", "opl_C2", "opl_B3", "opl_C3"].reduce((acc, id) => {
            acc[id] = document.getElementById(id);
            return acc;
        }, {});

        function solveProblem() {
            const alertBanner = document.getElementById("alert-banner");
            alertBanner.classList.remove("alert", "alert-success", "alert-danger");
            alertBanner.innerHTML = "";

            let gok = 1;
            let solved = false;
            while (!solved) {
                inputs.opl_B2.value = gok;
                inputs.opl_C2.value = parseInt(inputs.inp_D2.value) - gok;
                inputs.opl_B3.value = parseInt(inputs.inp_B4.value) - gok;
                inputs.opl_C3.value = parseInt(inputs.inp_C4.value) - inputs.opl_C2.value;
                if (parseInt(inputs.opl_B2.value) + parseInt(inputs.opl_C3.value) === parseInt(inputs.inp_A1.value) &&
                    parseInt(inputs.opl_B3.value) + parseInt(inputs.opl_C2.value) === parseInt(inputs.inp_D1.value) &&
                    parseInt(inputs.opl_B3.value) + parseInt(inputs.opl_C3.value) === parseInt(inputs.inp_D3.value)) {
                    alertBanner.classList.remove("alert-danger");
                    alertBanner.classList.add("alert", "alert-success");
                    alertBanner.innerHTML = "Bingo!";
                    solved = true;
                } else {
                    alertBanner.classList.add("alert", "alert-danger");
                    alertBanner.innerHTML = "Niet bingo!";
                    gok++;
                }
            }
        }
    </script>