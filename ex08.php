
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 08</title>
</head>
<body>
    <h1>Exercice 08 : Les boucles</h1>

    <h2>1. Nombres pairs de 0 à 20</h2>

    <?php
    $i = 0;
    while ($i <= 20) {
        if ($i == 10) {
            echo "<strong>$i</strong><br>";
        } else {
            echo "$i<br>";
        }
        $i += 2;
    }
    ?>

    <h2>2. while et do-while</h2>

    <?php
    $i = 5;
    while ($i < 5) {
        echo "while : $i<br>";
        $i++;
    }

    $i = 5;
    do {
        echo "do-while : $i<br>";
        $i++;
    } while ($i < 5);
    ?>

    <h2>3. Continue et break</h2>

    <?php
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 3 == 0) {
            continue;
        }

        if ($i == 16) {
            break;
        }

        echo "$i ";
    }
    ?>
</body>
</html>
