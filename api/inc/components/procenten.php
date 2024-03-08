<div class="col-6">
    <div class="mb-3">
        <select class="form-select is-invalid" id="select_soort">
            <option disabled selected>Kies*</option>
            <option id="">van</option>
            <option id="">toename</option>
            <option id="">afname</option>
        </select>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">Percentage:</span>
        <input type="text" class="form-control is-invalid" id="inp_percentage">
        <span class="input-group-text">%</span>
    </div>

    <div class="input-group">
        <span class="input-group-text">Vermenigsvuldigingfactor:</span>
        <input type="text" class="form-control" id="inp_factor" disabled>
    </div>
</div>

<div class="row mb-3" style="margin-top: -180px;">
    <div class="col-3">
        <div class="card" style="margin-top: 200px">
            <div class="card-header">
                Oud
            </div>
            <div class="card-body">
                <p class="card-text">
                    Denk ook aan:
                <ul>
                    <li>zonder BTW</li>
                    <li>zonder korting</li>
                </ul>
                </p>
            </div>
            <div class="card-footer text-body-secondary">
                <input type="text" class="form-control is-invalid" id="inp_oud" placeholder="Oud bedrag">
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="card" style="margin-top: 200px">
            <div class="card-header">
                Nieuw
            </div>
            <div class="card-body">
                <p class="card-text">
                    Denk ook aan:
                <ul>
                    <li>zonder BTW</li>
                    <li>zonder korting</li>
                </ul>
                </p>
            </div>
            <div class="card-footer text-body-secondary">
                <input type="text" class="form-control is-invalid" id="inp_nieuw" placeholder="Nieuw bedrag">
            </div>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="input-group mb-3">
        <span class="input-group-text">Deler:</span>
        <input type="text" class="form-control" id="deler" disabled>
    </div>

    <div class="d-grid">
        <button class="btn btn-success" onclick="losOp()">Los Op</button>
    </div>
</div>

<script>
    function losOp() {
        alert("Hij doet het, Ids is mijn absolute held");
    }
</script>