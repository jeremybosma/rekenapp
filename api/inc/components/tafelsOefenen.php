<div>
            <div class="row">
                <div class="col-md-6">
                    <form class="row g-3 mb-2">
                        <div class="col-md-4">
                            <label for="inputTafelvan" class="form-label">Tafel van</label>
                            <input type="number" class="form-control" id="inputTafelvan">
                        </div>
                        <div class="col-md-4">
                            <label for="inputTafeltot" class="form-label">Tafel tot</label>
                            <input type="number" class="form-control" id="inputTafeltot" value="10">
                        </div>
                        <button type="button" class="btn btn-primary" onclick="showOpdracht()">Start</button>
                    </form>
                    <div class="card text-center">
                        <div id="tafel" class="card-body">
                            <div class="input-group mb-3">
                                <input id="inputOpdracht" type="text" class="form-control" placeholder="Som" disabled>
                                <span class="input-group-text">=</span>
                                <input id="inputOplossing" type="text" class="form-control" placeholder="Antwoord">
                            </div>
                            <div id="succesText"></div>
                            <div class="d-grid">
                                <button class="btn btn-success" onclick="checkOplossing()">Check oplossing</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>

        <script src="../../assets/js/tafels.js"></script>