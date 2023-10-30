<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <title>Rekenapp - Tafels</title>
  <?php
  include("inc/head.php")
    ?>
</head>

<body>
  <div class="container">

    <?php
    include("inc/navbar.php")
      ?>

    <h1>Tafels</h1>
    <p>Gebruik de onderstaande inputs om jou som op te lossen.</p>
    <div style="display: flex; align-items: center; width: 300px;">
      <input type="number" class="form-control" placeholder="1" id="x1" style="margin-right: 10px;">
      <h2 class="text-muted" style="margin-right: 10px;">x</h2>
      <input type="number" class="form-control" placeholder="1" id="x2" style="margin-right: 10px;">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
        onClick="berekenX()">Bereken</button>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tafel</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="antwoord"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sluit</button>
            <button type="button" class="btn btn-primary" onclick="copyAntwoord()">Kopieer antwoord</button>
          </div>
        </div>
      </div>
    </div>

    <?php
    include("inc/footer.php")
      ?>
  </div>


</body>

</html>