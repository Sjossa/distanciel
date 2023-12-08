<?php
// Création
$file = fopen("montexte.txt", "w") or die("Impossible d'ouvrir le fichier !");
$texte = "premiere texte creer .<br>";
fwrite($file, $texte);
fclose($file);

// Rajout
$file = fopen("montexte.txt", "a") or die("Impossible d'ouvrir le fichier !");
$texte = "\nNouveau texte ajouté à la fin.";
fwrite($file, $texte);
fclose($file);

// Affichage du contenu final
$finalContent = file_get_contents("montexte.txt");
echo $finalContent;
?>

