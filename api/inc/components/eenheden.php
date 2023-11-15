<div>
    <div class="row">
        <div class="col-md-6 mt-2">
            <div class="card text-center">
                <div id="tafel" class="card-body">
                    <select class="form-select" style="font-weight: bold;">
                        <option selected>Kies...</option>
                        <option value="1">1D (lengte)</option>
                        <option value="2">2D (Oppervlake)</option>
                        <option value="3">3D (Inhoud)</option>
                    </select>

                    <div class="row">
                        <div class="col-5">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control mt-3" placeholder="opgave" aria-describedby="basic-addon2" disabled>
                                <span class="input-group-text mt-3" id="basic-addon2">mm</span>
                            </div>
                        </div>
                        <div class="col-1 mt-4">=</div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control mt-3" placeholder="antwoord" aria-describedby="basic-addon2">
                                <span class="input-group-text mt-3" id="basic-addon2">km</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary" onclick="genereerSom()">Genereer</button>
                        <button class="btn btn-success" onclick="checkOplossing()">Check</button>
                    </div>
                </div>
            </div>
        </div>
    </div>