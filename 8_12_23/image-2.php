<?php
// Exercice 2
$largeur = 400;
$hauteur = 200;

// Créer une image de 400x200 pixels avec fond transparent
$image = imagecreatetruecolor($largeur, $hauteur);
$couleurTransparente = imagecolorallocatealpha($image, 0, 0, 0, 127);
imagefill($image, 0, 0, $couleurTransparente);
imagesavealpha($image, true);

// Dessiner une suite de rectangles emboîtés de couleurs différentes
$couleurs = [
    imagecolorallocate($image, 255, 0, 0),   // Rouge
    imagecolorallocate($image, 0, 255, 0),   // Vert
    imagecolorallocate($image, 0, 0, 255),   // Bleu
    imagecolorallocate($image, 255, 255, 0), // Jaune
];

$x = 10;
$y = 10;
$largeurRectangle = $largeur - 20;
$hauteurRectangle = $hauteur - 20;

foreach ($couleurs as $couleur) {
    imagefilledrectangle($image, $x, $y, $x + $largeurRectangle, $y + $hauteurRectangle, $couleur);
    $x += 10;
    $y += 10;
    $largeurRectangle -= 20;
    $hauteurRectangle -= 20;
}

// Afficher l'image
header("Content-type: image/png");
imagepng($image);
imagedestroy($image);
?>
