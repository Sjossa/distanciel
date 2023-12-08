<?php
// Exercice 3
$largeur = 800;
$hauteur = 600;

// Créer une image de 800x600 pixels avec fond vert
$image = imagecreatetruecolor($largeur, $hauteur);
$couleurFond = imagecolorallocate($image, 0, 255, 0);
imagefill($image, 0, 0, $couleurFond);

// Coordonnées des coins du trapèze isocèle
$x1 = 200;
$y1 = 100;
$x2 = 600;
$y2 = 100;
$x3 = 500;
$y3 = 500;
$x4 = 300;
$y4 = 500;

// Remplir le trapèze avec la couleur jaune
$couleurTrapeze = imagecolorallocate($image, 255, 255, 0);
imagefilledpolygon($image, [$x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4], 4, $couleurTrapeze);

// Écrire le mot "trapèze" au centre
$texte = "trapèze";
$taillePolice = 30;
$couleurTexte = imagecolorallocate($image, 0, 0, 0);
$dimensionsTexte = imagettfbbox($taillePolice, 0, 'arial.ttf', $texte);
$texteX = ($largeur - $dimensionsTexte[4]) / 2;
$texteY = ($hauteur - $dimensionsTexte[5]) / 2;
imagettftext($image, $taillePolice, 0, $texteX, $texteY, $couleurTexte, 'arial.ttf', $texte);

// Afficher l'image
header("Content-type: image/png");
imagepng($image);
imagedestroy($image);
?>
