<?php
include "db/dbconnection.class.php";
$dbconnect = new Dbconnection();
//$dbconnect is een instantie van de Dbconnection-class
//en bevat dus alles wat nodig is voor een werkende database-connectie
$sql = "SELECT * FROM sommen ORDER BY RAND() LIMIT 1";
//standaard:
$query = $dbconnect->prepare($sql);
//standaard:
$query->execute();
//standaard:
$recset = $query->fetchAll(2);
//slimmigheid: kijken wat de raw-output is
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
        <img src="https://raw.githubusercontent.com/idsosd/BSD-O-AUG23A-procenten_rekentool_met_db/main/htdocs/procentenrekentool/pijlen.avif" alt="" class="img-fluid">
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

</div>
<script>
    const oud = document.getElementById("inp_oud")

    const soort = document.getElementById("select_soort")
    const perc = document.getElementById("inp_percentage")

    const nieuw = document.getElementById("inp_nieuw")

    const losopknop = document.getElementById("losop_btn")

    const factor = document.getElementById("inp_factor")
    const deler = document.getElementById("inp_deler")

    const answer = document.getElementById("answer")

    let ber_factor

    function checkInput() {
        if (oud.value != "" && soort.value != "" && perc.value != "") {
            losopknop.disabled = false
            oud.classList.remove("is-invalid")
            oud.classList.add("is-valid")
            soort.classList.remove("is-invalid")
            soort.classList.add("is-valid")
            perc.classList.remove("is-invalid")
            perc.classList.add("is-valid")
        }
        else if (nieuw.value != "" && soort.value != "" && perc.value != "") {
            losopknop.disabled = false
            nieuw.classList.remove("is-invalid")
            nieuw.classList.add("is-valid")
            soort.classList.remove("is-invalid")
            soort.classList.add("is-valid")
            perc.classList.remove("is-invalid")
            perc.classList.add("is-valid")
        }
        else if (oud.value != "" && nieuw.value != "") {
            losopknop.disabled = false
            oud.classList.remove("is-invalid")
            oud.classList.add("is-valid")
            nieuw.classList.remove("is-invalid")
            nieuw.classList.add("is-valid")
        }
    }

    function solveProblem() {
        if (oud.value != "" && soort.value != "" && perc.value != "") {
            if (soort.value == 0)
                ber_factor = perc.value / 100
            else if (soort.value == 1)
                ber_factor = 1 + perc.value / 100
            else
                ber_factor = 1 - perc.value / 100
            factor.value = ber_factor
            deler.value = ber_factor
            nieuw.value = oud.value * ber_factor
        }
        else if (nieuw.value != "" && soort.value != "" && perc.value != "") {
            if (soort.value == 0)
                ber_factor = perc.value / 100
            else if (soort.value == 1)
                ber_factor = 1 + perc.value / 100
            else
                ber_factor = 1 - perc.value / 100
            factor.value = ber_factor
            deler.value = ber_factor
            oud.value = nieuw.value / ber_factor
        }
        else {
            ber_factor = (nieuw.value / oud.value).toFixed(4)
            factor.value = ber_factor
            deler.value = ber_factor
            if (ber_factor > 1) {
                soort.value = 1
                perc.value = ((ber_factor - 1) * 100).toFixed(2)
            }
            else {
                soort.value = 2
                perc.value = ((1 - ber_factor) * 100).toFixed(2)
            }
        }
        oud.disabled = true
        nieuw.disabled = true
        //alert ("je kunt opnieuw beginnen door een re-load")
        soort.disabled = true
        perc.disabled = true
        losopknop.disabled = true
    }

    function checkAnswer(antw) {
        if (answer.value == antw) {
            alert("Antwoord is goed")
        } else {
            alert("Antwoord is fout")
        }
    }
</script>