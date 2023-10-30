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

    <h1>Tafels leren</h1>
    <p>Gebruik de onderstaande inputs om de tafels naar jou wens tevoorschijn te laten komen t/m x10.</p>
    <div style="display: flex; align-items: center; width: 300px;">
      <h4 style="width: 440px; margin-right: 10px;">Tafel van:</h2>
        <input type="number" class="form-control" placeholder="1" id="tafelInput" style="margin-right: 10px;">
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#tafelCollapse"
          aria-expanded="false" aria-controls="tafelCollapse" onClick="genereerTafel()">Genereer</button>
    </div><br>

    <div class="collapse" id="tafelCollapse">
      <div id="tafel" class="card card-body"></div>
    </div>

    <?php
    include("inc/footer.php")
      ?>
  </div>


</body>

</html>