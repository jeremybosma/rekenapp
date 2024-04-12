<!DOCTYPE html>
<html lang="en">

<head>
  <title>Rekenapp - Tafels</title>
  <?php include ("inc/head.php") ?>
</head>

<body>
  <div class="container">

    <?php include ("inc/navbar.php") ?>

    <h1>Tafels</h1>
    <p>Gebruik de onderstaande inputs om jou som op te lossen.</p>

    <?php
    $operationVar = 'x';
    include ("inc/components/bereken.php")
      ?>

    <?php include ("inc/components/antwoordModal.php") ?>

    <?php include ("inc/footer.php") ?>
  </div>

</body>

</html>