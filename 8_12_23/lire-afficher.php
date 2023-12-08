<?php
$file = fopen("exemple.txt", "w") or die("Impossible d'ouvrir le fichier !");
$texte = "Bonjour, ceci est un xemple d'écriture dans un fichier.";
fwrite($file, $texte);
fclose($file);
?>

<?php
$file = fopen("exemple.txt", "r") or die("Impossible d'ouvrir le fichier !");
$content = fread($file, filesize("exemple.txt"));
fclose($file);

echo $content;
?>

