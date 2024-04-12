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
                    <div class="col"><input id="inp_A1" type="number" class="form-control text-center" value=""
                            disabled>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"><input id="inp_D1" type="number" class="form-control text-center" value=""
                            disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col"></div>
                    <div class="col"><input id="opl_B2" type="number" class="form-control text-center" value="">
                    </div>
                    <div class="col"><input id="opl_C2" type="number" class="form-control text-center" value="">
                    </div>
                    <div class="col"><input id="inp_D2" type="number" class="form-control text-center" value=""
                            disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col"></div>
                    <div class="col"><input id="opl_B3" type="number" class="form-control text-center" value="">
                    </div>
                    <div class="col"><input id="opl_C3" type="number" class="form-control text-center" value="">
                    </div>
                    <div class="col"><input id="inp_D3" type="number" class="form-control text-center" value=""
                            disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col"></div>
                    <div class="col"><input id="inp_B4" type="number" class="form-control text-center" value=""
                            disabled>
                    </div>
                    <div class="col"><input id="inp_C4" type="number" class="form-control text-center" value=""
                            disabled>
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
        const oplValues = { B2: 0, C2: 0, B3: 0, C3: 0 };

        function generateSomSom() {
            const alertBanner = document.getElementById("alert-banner");
            alertBanner.classList.remove("alert", "alert-success", "alert-danger");
            alertBanner.innerHTML = "";

            Object.keys(oplValues).forEach(key => {
                oplValues[key] = Math.floor(Math.random() * 21);
            });

            const { B2, C2, B3, C3 } = oplValues;

            const inpValues = {
                A1: B2 + C3,
                D1: B3 + C2,
                D2: B2 + C2,
                D3: B3 + C3,
                C4: C2 + C3,
                B4: B2 + B3
            };

            Object.keys(inpValues).forEach(key => {
                document.getElementById(`inp_${key}`).value = inpValues[key];
            });

            console.log(B2, C2, B3, C3);
        }

        function checkSomSom() {
            const alertBanner = document.getElementById("alert-banner");
            alertBanner.classList.remove("alert", "alert-success", "alert-danger");
            alertBanner.innerHTML = "";

            const invValues = {
                B2: parseInt(document.getElementById("opl_B2").value),
                C2: parseInt(document.getElementById("opl_C2").value),
                B3: parseInt(document.getElementById("opl_B3").value),
                C3: parseInt(document.getElementById("opl_C3").value)
            };

            const isCorrect = Object.keys(oplValues).every(key => invValues[key] === oplValues[key]);

            if (isCorrect) {
                alertBanner.classList.add("alert", "alert-success");
                alertBanner.innerHTML = "Bingo!";
            } else {
                alertBanner.classList.add("alert", "alert-danger");
                alertBanner.innerHTML = "Niet bingo!";
            }
        }
    </script>