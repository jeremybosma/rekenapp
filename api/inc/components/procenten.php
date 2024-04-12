<?php
include "db/dbconnection.class.php";
$dbconnect = new Dbconnection();
$sql = "SELECT * FROM sommen ORDER BY RAND() LIMIT 1";
$query = $dbconnect->prepare($sql);
$query->execute();
$recset = $query->fetchAll(2);

/*echo "<pre>";
print_r($recset);
echo "</pre>";*/
?>

<div id="som">
    <div class="row">
        <div class="col-8">
            <h5>Inleiding</h5>
            <?php
            echo $recset[0]['inleiding'];
            ?>
            <h5>Vraag</h5>
            <!-- shortcut voor het opvragen van 1 variabele -->
            <?= $recset[0]['vraag']; ?>
            <h5>Geef hier je antwoord</h5>
            <div class='row'>
                <div class='col-3'>
                    <?php
                    if ($recset[0]['voor_achter'] == 0) {
                        ?>
                        <div class='input-group mb-3'>
                            <span class='input-group-text'><?= $recset[0]['eenheid'] ?></span>
                            <input id='answer' type='text' class='form-control'>
                        </div>

                        <?php
                    } else {
                        ?>
                        <div class='input-group mb-3'>
                            <input id='answer' type='text' class='form-control'>
                            <span class='input-group-text'><?= $recset[0]['eenheid'] ?></span>
                        </div>
                    <?php }
                    ?>
                </div>
                <div class='col-3'>
                    <button class="btn btn-success" onclick="checkAnswer('<?= $recset[0]['antwoord'] ?>')">Check
                        antwoord</button>
                </div>
            </div>
        </div>
        <div class="col-4">
            <?php
            if ($recset[0]['afbeelding'] != '')
                echo "<img src='https://raw.githubusercontent.com/idsosd/BSD-O-AUG23A-procenten_rekentool_met_db/main/htdocs/procentenrekentool/img/{$recset[0]['afbeelding']}' 
                  alt='' style='height: 300px;' class='img-fluid'>";
            ?>


        </div>
    </div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-3">
        <!-- begin card -->
        <div class="card" style="margin-top: 200px">
            <div class="card-header">
                Oud
            </div>
            <div class="card-body">
                <p>Denk ook aan</p>
                <ul>
                    <li>zonder of exclusief BTW</li>
                    <li>zonder of exclusief korting</li>
                </ul>
            </div>
            <div class="card-footer text-body-secondary">
                <input id="inp_oud" class="form-control is-invalid" onchange="checkInput()">
            </div>
        </div>
        <!-- einde card -->
    </div>
    <div class="col-4">
        <select id="select_soort" class="form-select" style="margin-top: 50px;" onchange="checkInput()">
            <option value="">Kies...</option>
            <option value="0">van</option>
            <option value="1">toename</option>
            <option value="2">afname</option>
        </select>
        <div class="input-group mb-3 mt-3">
            <span class="input-group-text">Percentage</span>
            <input id="inp_percentage" type="text" class="form-control" onchange="checkInput()">
            <span class="input-group-text">%</span>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vermenigvuldigingsfactor</span>
            <input id="inp_factor" type="text" class="form-control" disabled>
        </div>
        <img src="https://raw.githubusercontent.com/idsosd/BSD-O-AUG23A-procenten_rekentool_met_db/main/htdocs/procentenrekentool/pijlen.avif"
            alt="" class="img-fluid">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Deler</span>
            <input id="inp_deler" type="text" class="form-control" disabled>
        </div>
        <div class="d-grid">
            <button id="losop_btn" type="button" class="btn btn-success" disabled onclick="solveProblem()">Los
                op</button>
        </div>
    </div>
    <div class="col-3">
        <!-- begin card -->
        <div class="card" style="margin-top: 200px">
            <div class="card-header">
                Nieuw
            </div>
            <div class="card-body">
                <p>Denk ook aan</p>
                <ul>
                    <li>met of inclusief BTW</li>
                    <li>met of inclusief korting</li>
                </ul>
            </div>
            <div class="card-footer text-body-secondary">
                <input id="inp_nieuw" class="form-control is-invalid" onchange="checkInput()">
            </div>
        </div>
        <!-- einde card -->
    </div>
    <div class="col-1"></div>
</div>

<script>
    const oud = document.getElementById("inp_oud");
    const soort = document.getElementById("select_soort");
    const perc = document.getElementById("inp_percentage");
    const nieuw = document.getElementById("inp_nieuw");
    const losopknop = document.getElementById("losop_btn");
    const factor = document.getElementById("inp_factor");
    const deler = document.getElementById("inp_deler");

    function enableButtonIfValid() {
        const isOudOrNieuwFilled = oud.value || nieuw.value;
        const isSoortAndPercFilled = soort.value && perc.value;
        const isValid = isOudOrNieuwFilled && isSoortAndPercFilled || (oud.value && nieuw.value);

        losopknop.disabled = !isValid;
        [oud, soort, perc, nieuw].forEach(input => {
            input.classList.toggle("is-invalid", !input.value);
            input.classList.toggle("is-valid", !!input.value);
        });
    }

    function calculateFactor(soortValue, percValue) {
        switch (soortValue) {
            case "0": return percValue / 100;
            case "1": return 1 + percValue / 100;
            case "2": return 1 - percValue / 100;
            default: return null;
        }
    }

    function solveProblem() {
        let ber_factor;
        if (oud.value && soort.value && perc.value) {
            ber_factor = calculateFactor(soort.value, parseFloat(perc.value));
            nieuw.value = oud.value * ber_factor;
        } else if (nieuw.value && soort.value && perc.value) {
            ber_factor = calculateFactor(soort.value, parseFloat(perc.value));
            oud.value = nieuw.value / ber_factor;
        } else {
            ber_factor = parseFloat((nieuw.value / oud.value).toFixed(4));
            soort.value = ber_factor > 1 ? "1" : "2";
            perc.value = ((Math.abs(1 - ber_factor)) * 100).toFixed(2);
        }

        factor.value = deler.value = ber_factor;
        [oud, nieuw, soort, perc, losopknop].forEach(input => input.disabled = true);
    }

    function checkAnswer(antw) {
        alert(answer.value == antw ? "Antwoord is goed" : "Antwoord is fout");
    }
</script>