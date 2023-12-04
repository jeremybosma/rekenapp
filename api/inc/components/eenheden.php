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

    <script>
        // ids zn code
        //de array met alle eenheden waaruit we willekeurig twee laten kiezen op basis
        //van de index-waarde; de indexwaarden zijn 0, 1, 2, 3, 4, 5 en 6 -->
        //eenheden[5] = "hm"
        const eenheden = ["mm", "cm", "dm", "m", "dam", "hm", "km"];
        let random_index_left = 0;
        let random_index_right = 0;

        let selected_dim = document.getElementById("inp_dim");
        let problem = document.getElementById("inp_left");
        let unit_left = document.getElementById("eenh_left");
        let solution = document.getElementById("inp_right");
        let unit_right = document.getElementById("eenh_right");



        function generateProblem() {
            //alert("hij doet het");
            let dimension = selected_dim.value;
            random_index_left = Math.floor(Math.random() * 7);
            random_index_right = Math.floor(Math.random() * 7);
            unit_left.innerHTML = eenheden[random_index_left] + "<sup>" + dimension + "</sup>";
            unit_right.innerHTML = eenheden[random_index_right] + "<sup>" + dimension + "</sup>";
            problem.value = (Math.random() * 1000).toFixed(3);
        }

        function checkSolution() {

            let verm_factor = Math.pow(10, selected_dim.value);
            //ik ben alleen geinteresseerd in het aantal stappen tussen de eenheden,
            //door Math.abs wordt een negatief positief gemaakt
            let aantal_stappen = Math.abs(random_index_left - random_index_right);

            //als de eenheid links groter is dan de eenheid rechts,
            //dan wordt het antwoord groter, oftewel de komma moet naar rechts
            //andersom: als de eenheid links kleiner is dan de eenheid rechts,
            //dan wordt het antwoord kleiner, oftewel de komma moet naar links
            let correct_answer = 3.14;
            if (random_index_left > random_index_right) {
                //het antwoord wordt groter
                correct_answer = problem.value * Math.pow(verm_factor, aantal_stappen);
            } else {
                //het antwoord wordt kleiner
                correct_answer = problem.value / Math.pow(verm_factor, aantal_stappen);
            }
            alert("verm_factor = " + verm_factor + " en het aantal stappen = " + aantal_stappen + " het goede antwoord is: " + correct_answer);
        }
    </script>