<?php
$operation = $operationVar ?? 'plus';
$operationSymbol = '+';
switch ($operation) {
  case 'plus':
    $operationSymbol = '+';
    break;
  case 'min':
    $operationSymbol = '-';
    break;
  case 'x':
    $operationSymbol = 'x';
    break;
  case 'divide':
    $operationSymbol = '÷';
    break;
}
?>

<div style="display: flex; align-items: center; width: 300px;">
  <input type="number" class="form-control" placeholder="1" id="bereken1" style="margin-right: 10px;">
  <h2 class="text-muted" style="margin-right: 10px;" id="berekenValue"><?php echo $operationSymbol; ?></h2>
  <input type="number" class="form-control" placeholder="1" id="bereken2" style="margin-right: 10px;">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
    onClick="bereken()">Bereken</button>
</div>

<script>
  let errorTekst =
    "Er is iets misgegaan bij het genereren van je antwoord, heb je wel een cijfer ingevuld?";

  function bereken() {
    let eersteInput = parseFloat(document.getElementById("bereken1").value);
    let TweedeInput = parseFloat(document.getElementById("bereken2").value);
    let operation = "<?php echo $operation; ?>";
    let result;

    if (isNaN(eersteInput) || isNaN(TweedeInput)) {
      document.getElementById("antwoord").innerHTML = errorTekst;
      return;
    }

    switch (operation) {
      case 'plus':
        result = eersteInput + TweedeInput;
        break;
      case 'min':
        result = eersteInput - TweedeInput;
        break;
      case 'x':
        result = eersteInput * TweedeInput;
        break;
      case 'divide':
        result = eersteInput / TweedeInput;
        break;
      default:
        document.getElementById("antwoord").innerHTML = errorTekst;
        return;
    }

    document.getElementById("antwoord").innerHTML =
      eersteInput + "<?php echo $operationSymbol; ?>" + TweedeInput + "=" + result;
  }
</script>