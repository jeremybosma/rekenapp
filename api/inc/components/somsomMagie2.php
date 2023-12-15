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
                        <a class="btn btn-primary d-grid" onclick="generateProblem()">Genereer SomSom</a>
                    </div>
                    <div class="col">
                        <a class="btn btn-success d-grid" onclick="checkSomSom()">Check SomSom</a>
                    </div>
                </div>
            </div>
        </div>
    </div>