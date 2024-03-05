<div class="row">

    <div class="col-4">
        <div class="mb-3">
            <select class="form-select is-invalid">
                <option disabled selected>Kies*</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Percentage:</span>
            <input type="text" class="form-control is-invalid">
            <span class="input-group-text">%</span>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Vermenigsvuldigingfactor: x</span>
            <input type="text" class="form-control" disabled>
            <span class="input-group-text">%</span>
        </div>
    </div>

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
                <input type="text" class="form-control is-invalid" id="oud" placeholder="Oud bedrag">
            </div>
        </div>

    </div>

    <div class="col-4">

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
                <input type="text" class="form-control is-invalid" id="oud" placeholder="Nieuw bedrag">
            </div>
        </div>

        <div class="col-4">
        <div class="input-group mb-3">
            <span class="input-group-text">Delingsfactor: :</span>
            <input type="text" class="form-control" disabled>
            <span class="input-group-text">%</span>
        </div>

        <button class="btn btn-success" disabled>Los Op</button>
    </div>

    </div>

</div>