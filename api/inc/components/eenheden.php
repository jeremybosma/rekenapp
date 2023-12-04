    <div class="row">
        <div class="col-md-6 mt-2">
            <div class="card text-center">
                <div id="tafel" class="card-body">
                    <select id="inp_dim" class="form-select">
                        <option value="1">1D (lengte)</option>
                        <option value="2">2D (oppervlakte)</option>
                        <option value="3">3D (inhoud)</option>
                    </select>
                    <br>
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
                        <button class="btn btn-primary" onclick="generateProblem()">Genereer</button>
                        <button class="btn btn-success" onclick="checkSolution()">Check</button>
                    </div>
                </div>
            </div>
        </div>
    </div>