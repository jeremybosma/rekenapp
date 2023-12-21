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
                    <div class="col"><input id="inp_A1" type="text" class="form-control text-center" value="" disabled>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"><input id="inp_D1" type="text" class="form-control text-center" value="" disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col"></div>
                    <div class="col"><input id="opl_B2" type="text" class="form-control text-center" value="">
                    </div>
                    <div class="col"><input id="opl_C2" type="text" class="form-control text-center" value="">
                    </div>
                    <div class="col"><input id="inp_D2" type="text" class="form-control text-center" value="" disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col"></div>
                    <div class="col"><input id="opl_B3" type="text" class="form-control text-center" value="">
                    </div>
                    <div class="col"><input id="opl_C3" type="text" class="form-control text-center" value="">
                    </div>
                    <div class="col"><input id="inp_D3" type="text" class="form-control text-center" value="" disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col"></div>
                    <div class="col"><input id="inp_B4" type="text" class="form-control text-center" value="" disabled>
                    </div>
                    <div class="col"><input id="inp_C4" type="text" class="form-control text-center" value="" disabled>
                    </div>
                    <div class="col"></div>
                </div><br>
                <div class="row">
                    <div class="col">
                        <a class="btn btn-primary d-grid" onclick="generateSomSom()">Genereer SomSom</a>
                    </div>
                    <div class="col">
                        <a class="btn btn-success d-grid" onclick="checkSomSom()">Check SomSom</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let opl_B2 = 0;
        let opl_C2 = 0;
        let opl_B3 = 0;
        let opl_C3 = 0;


        function generateSomSom() {
            document.getElementById("alert-banner").classList.remove("alert", "alert-success", "alert-danger");
            document.getElementById("alert-banner").innerHTML = "";
            opl_B2 = Math.floor(Math.random() * 21);
            opl_C2 = Math.floor(Math.random() * 21);
            opl_B3 = Math.floor(Math.random() * 21);
            opl_C3 = Math.floor(Math.random() * 21);

            let inp_A1 = opl_B2 + opl_C3;
            let inp_D1 = opl_B3 + opl_C2;
            let inp_D2 = opl_B2 + opl_C2;
            let inp_D3 = opl_B3 + opl_C3;
            let inp_C4 = opl_C2 + opl_C3;
            let inp_B4 = opl_B2 + opl_B3;

            document.getElementById("inp_A1").value = inp_A1;
            document.getElementById("inp_D1").value = inp_D1;
            document.getElementById("inp_D2").value = inp_D2;
            document.getElementById("inp_D3").value = inp_D3;
            document.getElementById("inp_C4").value = inp_C4;
            document.getElementById("inp_B4").value = inp_B4;
            console.log(opl_B2, opl_C2, opl_B3, opl_C3)
        }

        function checkSomSom() {
            document.getElementById("alert-banner").classList.remove("alert", "alert-success", "alert-danger");
            document.getElementById("alert-banner").innerHTML = "";

            let inv_B2 = parseInt(document.getElementById("opl_B2").value);
            let inv_C2 = parseInt(document.getElementById("opl_C2").value);
            let inv_B3 = parseInt(document.getElementById("opl_B3").value);
            let inv_C3 = parseInt(document.getElementById("opl_C3").value);
            if (inv_B2 == opl_B2 && inv_C2 == opl_C2 && inv_B3 == opl_B3 && inv_C3 == opl_C3) {
                document.getElementById("alert-banner").classList.add("alert", "alert-success");
                document.getElementById("alert-banner").innerHTML = "Bingo!";
            }
            else {
                document.getElementById("alert-banner").classList.add("alert", "alert-danger");
                document.getElementById("alert-banner").innerHTML = "Niet bingo!";
            }
        }
    </script>