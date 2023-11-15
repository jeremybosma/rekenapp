<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <title>Rekenapp - Plus</title>
  <?php
  include("inc/head.php")
  ?>
</head>

<body>
  <div class="container">

    <?php
    include("inc/navbar.php")
    ?>

    <h1>Plus</h1>
    <p>Gebruik de onderstaande inputs om jou som op te lossen.</p>
    <div style="display: flex; align-items: center; width: 300px;">
      <input type="number" class="form-control" placeholder="1" id="plus1" style="margin-right: 10px;">
      <h2 class="text-muted" class="text-muted" style="margin-right: 10px;">+</h2>
      <input type="number" class="form-control" placeholder="1" id="plus2" style="margin-right: 10px;">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onClick="berekenPlus()">Bereken</button>

      <?php
      include("inc/components/antwoordModal.php")
      ?>

    </div>
    <?php
    include("inc/footer.php")
    ?>
  </div>


</body>

</html>