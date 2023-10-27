<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="f.css">
</head>
<body>
    <h2>Formulaire Adresse Client</h2>
    <form action="formulaire2.php" method="post">
        <fieldset>
            <legend>Adresse client</legend>
            <label for="nom">Nom : </label>
            <input type="text" id="nom" name="nom" required><br><br>

            <label for="prenom">Prénom : </label>
            <input type="text" id="prenom" name="prenom" required><br><br>

            <label for="adresse">Adresse : </label>
            <input type="text" id="adresse" name="adresse" required><br><br>

            <label for="ville">Ville : </label>
            <input type="text" id="ville" name="ville" required><br><br>

            <label for="code_postal">Code Postal : </label>
            <input type="text" id="code_postal" name="code_postal" required><br><br>
        </fieldset>
        <input type="submit" value="Soumettre">
    </form>
</body>
</html>
