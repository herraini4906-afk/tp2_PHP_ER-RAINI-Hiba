
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 02</title>
</head>
<body>
    <h1>Exercice 02 : Les variables</h1>

    <?php
    $nom = "Amine";
    $prenom = "Sara";
    $age = 20;
    $formation = "Informatique";

    $phrase = "Je m'appelle " . $prenom . " " . $nom .
              ", j'ai " . $age . " ans et j'étudie en " . $formation . ".";

    echo "<p>$phrase</p>";

    $phrase .= " J'apprends PHP.";
    echo "<p>$phrase</p>";

    $note = 12;
    $Note = 16;

    echo "<p>Note : $note</p>";
    echo "<p>Note : $Note</p>";
    ?>
</body>
</html>
