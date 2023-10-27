<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="f.css">
</head>
<body>
    <h2>Données du Client</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<table>";
        echo "<tr><th>Nom</th><th>Prénom</th><th>Adresse</th><th>Ville</th><th>Code Postal</th></tr>";
        echo "<tr>";
        echo "<td>" . $_POST["nom"] . "</td>";
        echo "<td>" . $_POST["prenom"] . "</td>";
        echo "<td>" . $_POST["adresse"] . "</td>";
        echo "<td>" . $_POST["ville"] . "</td>";
        echo "<td>" . $_POST["code_postal"] . "</td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
