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
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onClick="berekenX()">Bereken</button>
    </div>

    <?php
    include("inc/components/antwoordModal.php")
    ?>

    <?php
    include("inc/footer.php")
    ?>
  </div>


</body>

</html>