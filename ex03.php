
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 03</title>
</head>
<body>
    <h1>Exercice 03 : Constantes et opérateurs</h1>

    <?php
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    $prixHT = 60;
    $quantite = 3;

    $totalHT = $prixHT * $quantite;
    $tva = $totalHT * TAUX_TVA / 100;
    $totalTTC = $totalHT + $tva;

    echo "<p>Prix unitaire HT : $prixHT " . DEVISE . "</p>";
    echo "<p>Quantité : $quantite</p>";
    echo "<p>Total HT : $totalHT " . DEVISE . "</p>";
    echo "<p>TVA : $tva " . DEVISE . "</p>";
    echo "<p>Total TTC : $totalTTC " . DEVISE . "</p>";

    $totalTTC += 15;

    echo "<p>Total TTC avec livraison : $totalTTC " . DEVISE . "</p>";

    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA est définie.</p>";
    }
    ?>
</body>
</html>
