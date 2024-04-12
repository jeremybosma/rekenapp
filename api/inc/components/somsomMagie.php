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
        let inp_A1 = document.getElementById("inp_A1");
        let inp_D1 = document.getElementById("inp_D1");
        let inp_D2 = document.getElementById("inp_D2");
        let inp_D3 = document.getElementById("inp_D3");
        let inp_C4 = document.getElementById("inp_C4");
        let inp_B4 = document.getElementById("inp_B4");

        let opl_B2 = document.getElementById("opl_B2");
        let opl_C2 = document.getElementById("opl_C2");
        let opl_B3 = document.getElementById("opl_B3");
        let opl_C3 = document.getElementById("opl_C3");

        function solveProblem() {
            document.getElementById("alert-banner").classList.remove("alert", "alert-success", "alert-danger");
            document.getElementById("alert-banner").innerHTML = "";

            let gok = 1;
            let decision = true;
            while (decision) {
                opl_B2.value = gok;
                opl_C2.value = parseInt(inp_D2.value) - parseInt(opl_B2.value);
                opl_B3.value = parseInt(inp_B4.value) - parseInt(opl_B2.value);
                opl_C3.value = parseInt(inp_C4.value) - parseInt(opl_C2.value);
                if (parseInt(opl_B2.value) + parseInt(opl_C3.value) == parseInt(inp_A1.value) &&
                    parseInt(opl_B3.value) + parseInt(opl_C2.value) == parseInt(inp_D1.value) &&
                    parseInt(opl_B3.value) + parseInt(opl_C3.value) == parseInt(inp_D3.value)) {
                    document.getElementById("alert-banner").classList.remove("alert-danger");
                    document.getElementById("alert-banner").classList.add("alert", "alert-success");
                    document.getElementById("alert-banner").innerHTML = "Bingo!";
                    decision = false;
                } else {
                    document.getElementById("alert-banner").classList.add("alert", "alert-danger");
                    document.getElementById("alert-banner").innerHTML = "Niet bingo!";
                    gok++;
                }

            }
        }
    </script>