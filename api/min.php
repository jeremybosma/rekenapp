<!DOCTYPE html>
<html lang="en">

<head>
  <title>Rekenapp - Min</title>
  <?php include ("inc/head.php") ?>
</head>

<body>
  <div class="container">

    <?php include ("inc/navbar.php") ?>

    <h1>Min</h1>
    <p>Gebruik de onderstaande inputs om jou som op te lossen.</p>

    <?php
    $operationVar = 'min';
    include ("inc/components/bereken.php")
      ?>

    <?php include ("inc/components/antwoordModal.php") ?>

    <?php include ("inc/footer.php") ?>

  </div>

</body>

</html>