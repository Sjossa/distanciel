<?php
// Exercice 1
$largeur = 500;
$hauteur = 300;

// Créer une image de 500x300 pixels avec fond rouge
$image = imagecreatetruecolor($largeur, $hauteur);
$couleurFond = imagecolorallocate($image, 255, 0, 0); // Rouge
imagefill($image, 0, 0, $couleurFond);

// Écrire un texte de bienvenue en blanc
$texte = "Bienvenue";
$taillePolice = 20;
$couleurTexte = imagecolorallocate($image, 255, 255, 255); // Blanc
$dimensionsTexte = imagettfbbox($taillePolice, 0, 'arial.ttf', $texte);
$texteX = ($largeur - $dimensionsTexte[4]) / 2;
$texteY = ($hauteur - $dimensionsTexte[5]) / 2;
imagettftext($image, $taillePolice, 0, $texteX, $texteY, $couleurTexte, 'arial.ttf', $texte);

// Afficher l'image
header("Content-type: image/png");
imagepng($image);
imagedestroy($image);
?>ffff