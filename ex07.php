
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 07</title>
</head>
<body>
    <h1>Exercice 07 : Les boucles</h1>

    <h2>Table de multiplication de 7</h2>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "7 x $i = " . (7 * $i) . "<br>";
    }
    ?>

    <h2>Pyramide d'étoiles</h2>

    <?php
    for ($i = 1; $i <= 6; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    ?>
</body>
</html>
