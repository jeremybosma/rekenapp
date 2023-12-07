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
        <div class="card text-center">
            <div id="tafel" class="card-body">
                <div class="row">
                    <div class="col"><input type="number" class="form-control text-center" value="25" id="row1-col1"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"><input type="number" class="form-control text-center" value="3" id="row1-col4"></div>
                </div><br>
                <div class="row">
                    <div class="col"></div>
                    <div class="col"><input type="number" class="form-control text-center" id="row2-col2" disabled></div>
                    <div class="col"><input type="number" class="form-control text-center" id="row2-col3" disabled></div>
                    <div class="col"><input type="number" class="form-control text-center" value="18" id="row2-col4"></div>
                </div><br>
                <div class="row">
                    <div class="col"></div>
                    <div class="col"><input type="number" class="form-control text-center" id="row3-col2" disabled></div>
                    <div class="col"><input type="number" class="form-control text-center" id="row3-col3" disabled></div>
                    <div class="col"><input type="number" class="form-control text-center" value="10" id="row3-col4"></div>
                </div><br>
                <div class="row">
                    <div class="col"></div>
                    <div class="col"><input type="number" class="form-control text-center" value="7" id="row4-col2"></div>
                    <div class="col"><input type="number" class="form-control text-center" value="21" id="row4-col3"></div>
                    <div class="col"></div>
                </div><br>
                <button class="btn btn-primary" onclick="LosSomSomOp()">Los SomSom op</button>
            </div>
        </div>
    </div>