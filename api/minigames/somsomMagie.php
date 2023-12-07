<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <title>Rekenapp - somsomMagie</title>
  <?php
  include("../inc/head.php")
  ?>
</head>

<body>
  <div class="container">

    <?php
    include("../inc/navbar.php")
    ?>

    <h1>somSomMagie</h1>
    <p>Los deze som-som puzzel op.</p>

      <?php
      include("../inc/components/somsomMagie.php")
      ?>

    <?php
    include("../inc/footer.php")
    ?>

</body>

</html>