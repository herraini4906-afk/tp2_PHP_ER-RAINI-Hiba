
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 05</title>
</head>
<body>
    <h1>Exercice 05 : Les conditions</h1>

    <?php
    $notes = [-1, 9, 10, 12, 14, 16, 21];

    foreach ($notes as $note) {
        echo "<p>Note : $note — ";

        if ($note < 0 || $note > 20) {
            echo "Note invalide";
        } elseif ($note < 10) {
            echo "Non validé";
        } elseif ($note < 12) {
            echo "Passable";
        } elseif ($note < 14) {
            echo "Assez bien";
        } elseif ($note < 16) {
            echo "Bien";
        } else {
            echo "Très bien";
        }

        echo "</p>";
    }
    ?>
</body>
</html>
