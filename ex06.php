
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 06</title>
</head>
<body>
    <h1>Exercice 06 : Switch et les mois</h1>

    <?php
    $mois = (int) date("m");

    switch ($mois) {
        case 1: $nomMois = "Janvier"; break;
        case 2: $nomMois = "Février"; break;
        case 3: $nomMois = "Mars"; break;
        case 4: $nomMois = "Avril"; break;
        case 5: $nomMois = "Mai"; break;
        case 6: $nomMois = "Juin"; break;
        case 7: $nomMois = "Juillet"; break;
        case 8: $nomMois = "Août"; break;
        case 9: $nomMois = "Septembre"; break;
        case 10: $nomMois = "Octobre"; break;
        case 11: $nomMois = "Novembre"; break;
        case 12: $nomMois = "Décembre"; break;
        default: $nomMois = "Mois invalide";
    }

    echo "<p>Le mois actuel est : $nomMois</p>";

    $numero = 13;

    switch ($numero) {
        case 1: echo "Janvier"; break;
        case 2: echo "Février"; break;
        case 3: echo "Mars"; break;
        case 4: echo "Avril"; break;
        case 5: echo "Mai"; break;
        case 6: echo "Juin"; break;
        case 7: echo "Juillet"; break;
        case 8: echo "Août"; break;
        case 9: echo "Septembre"; break;
        case 10: echo "Octobre"; break;
        case 11: echo "Novembre"; break;
        case 12: echo "Décembre"; break;
        default: echo "<p>Numéro de mois invalide</p>";
    }
    ?>
</body>
</html>