<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Rekenapp - Sudoku</title>
    <?php
    include("inc/head.php")
        ?>
</head>

<body>
    <div class="container">

        <?php
        include("inc/navbar.php")
            ?>

        <h1>Sudoku</h1>
        <p>Genereer een Sudoku en los hem op.</p>

        <?php
        include("inc/components/sudoku.php")
            ?>

        <?php
        include("inc/footer.php")
            ?>

</body>

</html>