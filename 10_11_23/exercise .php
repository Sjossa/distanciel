<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>exercise 1</h1>
    <?php
        $phrase = "je ";
        $phrase1 = "m'apelle ";
        $phrase2 = "johnny ";

        $resultat = ucwords($phrase) . ucwords($phrase1) . ucwords($phrase2);

        echo $resultat;
    ?>
    <h1>exercise 2</h1>
    <?php
        $chaine = " PHP MySQL";
        $resultat = strlen($chaine);

        for ($i = 0; $i < $resultat; $i++) {
            echo $chaine[$i] . PHP_EOL;
        }
    ?>
    <h1>EXERCISE 3</h1>
    <?php
        // Liste de noms et prénoms
        $liste_noms_prenoms = ["Jean Dupont", "Marie Martin", "Pierre Lefevre", "Sophie Dubois"];

        // Définir la longueur maximale pour chaque ligne
        $longueur_max = 20;

        // Afficher les noms et prénoms verticalement
        foreach ($liste_noms_prenoms as $nom_prenom) {
            list($prenom, $nom) = explode(' ', $nom_prenom, 2);

            for ($i = 0; $i < $longueur_max; $i++) {
                echo ($i < strlen($prenom) ? $prenom[$i] : ' ') . "\n";
            }

            echo "\n";

            for ($i = 0; $i < $longueur_max; $i++) {
                echo ($i < strlen($nom) ? $nom[$i] : ' ') . "\n";
            }

            echo "<br>";
        }
    ?>
    <h1>exercise 4</h1>
    <?php
        $a = '<form action="script.php">';
        $r = htmlspecialchars($a);
        echo "$r";
    ?>
    <h1>exercise 5</h1>
    <?php
        $chaine1 = "Hello";
        $chaine2 = "Bonjour";

        $chaines = [$chaine1, $chaine2];
        sort($chaines);

        foreach ($chaines as $chaine) {
            echo $chaine . "\n";
        }
    ?>
    <h1>exercise 6</h1>
    
<?php
$texte1 = "Ceci est un texte sans le mot zut.";
$texte2 = "Oh zut, ce texte devrait être censuré.";

$textes = [$texte1, $texte2];

foreach ($textes as $texte) {
    if (strpos($texte, "zut") === false) {
        echo $texte . "<br>";
    }
}
?>

    <h1>exercise 7</h1>
    <?php
        function validerAdresse($adresse) {
            return (bool) filter_var($adresse, FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED | FILTER_FLAG_HOST_REQUIRED);
        }

        $adresse1 = "http://www.facebook.com";
        $adresse2 = "ftp://ftp.example.com";

        if (validerAdresse($adresse1)) {
            echo "Adresse 1 valide.\n";
        }

        if (validerAdresse($adresse2)) {
            echo "Adresse 2 valide.\n";
        }
    ?>
    <h1>exercise 8</h1>
<?php
$age = "25";

if (preg_match('/^[0-9]{1,2}$/', $age) && $age < 100) {
    echo "Âge valide.\n";
} else {
    echo "Âge non valide.\n";
}
?>

    <h1>exercise 9</h1>
    <?php
        $chaine = "PHP \n est meilleur \n que ASP \n et JSP \n réunis.";

        $nouvelleChaine = str_replace("\n", "<br />", $chaine);

        echo $nouvelleChaine;
    ?>
    <?php
        $chaine = "PHP \n est meilleur \n que ASP \n et JSP \n réunis.";

        $nouvelleChaine = preg_replace('/\n/', '<br />', $chaine);

        echo $nouvelleChaine;
    ?>
</body>
</html>
