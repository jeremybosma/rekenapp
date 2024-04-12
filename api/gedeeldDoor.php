<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rekenapp - Delen</title>
    <?php include ("inc/head.php") ?>
</head>

<body>
    <div class="container">

        <?php include ("inc/navbar.php") ?>

        <h1>Gedeeld Door</h1>
        <p>Gebruik de onderstaande inputs om jou som op te lossen.</p>

        <?php
        $operationVar = 'divide';
        include ("inc/components/bereken.php")
            ?>

        <?php include ("inc/components/antwoordModal.php") ?>

        <?php include ("inc/footer.php") ?>
    </div>

</body>

</html>