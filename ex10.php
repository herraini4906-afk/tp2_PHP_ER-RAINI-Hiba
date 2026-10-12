
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 10</title>
</head>
<body>
    <h1>Exercice 10 : GET et POST</h1>

    <h2>Formulaire GET</h2>

    <form method="GET" action="">
        <label>Nom :</label>
        <input type="text" name="nom" required>

        <br><br>

        <label>Prénom :</label>
        <input type="text" name="prenom" required>

        <br><br>

        <label>Groupe :</label>
        <select name="groupe" required>
            <option value="G1">G1</option>
            <option value="G2">G2</option>
            <option value="G3">G3</option>
            <option value="G4">G4</option>
        </select>

        <br><br>
        <button type="submit">Envoyer avec GET</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "GET"
        && isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"])) {

        $nom = htmlspecialchars(trim($_GET["nom"]), ENT_QUOTES, "UTF-8");
        $prenom = htmlspecialchars(trim($_GET["prenom"]), ENT_QUOTES, "UTF-8");
        $groupe = htmlspecialchars($_GET["groupe"], ENT_QUOTES, "UTF-8");

        if ($nom !== "" && $prenom !== ""
            && in_array($groupe, ["G1", "G2", "G3", "G4"], true)) {
            echo "<h3>Informations reçues avec GET</h3>";
            echo "<p>Nom : $nom</p>";
            echo "<p>Prénom : $prenom</p>";
            echo "<p>Groupe : $groupe</p>";
        } else {
            echo "<p>Veuillez remplir correctement les champs.</p>";
        }
    }
    ?>

    <hr>

    <h2>Formulaire POST</h2>

    <form method="POST" action="">
        <label>Nom :</label>
        <input type="text" name="nom" required>

        <br><br>

        <label>Prénom :</label>
        <input type="text" name="prenom" required>

        <br><br>

        <label>Groupe :</label>
        <select name="groupe" required>
            <option value="G1">G1</option>
            <option value="G2">G2</option>
            <option value="G3">G3</option>
            <option value="G4">G4</option>
        </select>

        <br><br>
        <button type="submit">Envoyer avec POST</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"
        && isset($_POST["nom"], $_POST["prenom"], $_POST["groupe"])) {

        $nom = htmlspecialchars(trim($_POST["nom"]), ENT_QUOTES, "UTF-8");
        $prenom = htmlspecialchars(trim($_POST["prenom"]), ENT_QUOTES, "UTF-8");
        $groupe = htmlspecialchars($_POST["groupe"], ENT_QUOTES, "UTF-8");

        if ($nom !== "" && $prenom !== ""
            && in_array($groupe, ["G1", "G2", "G3", "G4"], true)) {
            echo "<h3>Informations reçues avec POST</h3>";
            echo "<p>Nom : $nom</p>";
            echo "<p>Prénom : $prenom</p>";
            echo "<p>Groupe : $groupe</p>";
        } else {
            echo "<p>Veuillez remplir correctement les champs.</p>";
        }
    }
    ?>
</body>
</html>
