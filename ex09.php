
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 09</title>
</head>
<body>
    <h1>Exercice 09 : Tableau associatif</h1>

    <?php
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $somme = 0;
    $nombreValides = 0;
    $meilleurEtudiant = "";
    $meilleureNote = -1;
    ?>

    <h2>Liste des étudiants</h2>

    <table border="1" cellpadding="8">
        <tr>
            <th>Nom</th>
            <th>Note</th>
            <th>Résultat</th>
        </tr>

        <?php
        foreach ($notes as $nom => $note) {
            $somme += $note;

            if ($note >= 10) {
                $resultat = "Validé";
                $nombreValides++;
            } else {
                $resultat = "Non validé";
            }

            if ($note > $meilleureNote) {
                $meilleureNote = $note;
                $meilleurEtudiant = $nom;
            }

            echo "<tr>";
            echo "<td>$nom</td>";
            echo "<td>$note</td>";
            echo "<td>$resultat</td>";
            echo "</tr>";
        }

        $moyenne = $somme / count($notes);
        ?>
    </table>

    <h2>Statistiques</h2>

    <?php
    echo "<p>Somme des notes : $somme</p>";
    echo "<p>Moyenne : $moyenne</p>";
    echo "<p>Nombre d'étudiants ayant validé : $nombreValides</p>";
    echo "<p>Meilleur étudiant : $meilleurEtudiant avec $meilleureNote/20</p>";
    ?>
</body>
</html>
