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

        <h1>Tafels oefenen</h1>
        <p>Geef het juiste antwoord om verder te gaan naar een volgende som.</p>
        <?php
        include("inc/components/tafelsOefenen.php")
        ?>

        <?php
        include("inc/footer.php")
        ?>
    </div>
</body>

</html>