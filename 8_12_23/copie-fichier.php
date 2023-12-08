<?php
$file = fopen("montexte.txt", "w") or die("Impossible d'ouvrir le fichier !");
$texte = "premiere partie.<br>";
fwrite($file, $texte);
fclose($file);

$file = fopen("montexte2.txt", "w") or die("Impossible d'ouvrir le fichier !");
$texte = "deuxieme partie.";
fwrite($file, $texte);
fclose($file);

$sourceFile = "montexte2.txt";

if (file_exists($sourceFile)) {
    $contentToAdd = file_get_contents($sourceFile);

    $destinationFile = "montexte.txt";
    $currentContent = file_get_contents($destinationFile);

    file_put_contents($destinationFile, $currentContent . $contentToAdd);

    
    $finalContent = file_get_contents($destinationFile);
    echo $finalContent;
}
?>


