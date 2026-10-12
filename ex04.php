
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 04</title>
</head>
<body>
    <h1>Exercice 04 : Les types de données</h1>

    <?php
    $entier = 42;
    $chaine = "42";
    $decimal = 15.8;
    $vrai = true;
    $faux = false;
    $vide = null;

    echo "<h3>Types des variables</h3>";
    echo "<pre>";
    var_dump($entier);
    var_dump($chaine);
    var_dump($decimal);
    var_dump($vrai);
    var_dump($faux);
    var_dump($vide);
    echo "</pre>";

    echo "<h3>Conversions</h3>";

    $nombre = (int) "25";
    $texte = (string) 100;
    $booleen = (bool) 1;

    var_dump($nombre);
    var_dump($texte);
    var_dump($booleen);

    echo "<h3>Affichage des booléens</h3>";
    echo "true : " . true . "<br>";
    echo "false : " . false . "<br>";

    echo "<h3>Conversion en booléen</h3>";
    var_dump((bool) 0);
    var_dump((bool) "0");
    var_dump((bool) "PHP");
    var_dump((bool) []);

    ?>
</body>
</html>
