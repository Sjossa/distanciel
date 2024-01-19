<?php
// Remplacez ces valeurs par celles de votre propre base de données
$serveur = "votre_serveur";
$utilisateur = "votre_utilisateur";
$motDePasse = "votre_mot_de_passe";
$baseDeDonnees = "votre_base_de_donnees";


$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

if ($connexion->connect_error) {
    die("Erreur de connexion à la base de données : " . $connexion->connect_error);
}

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$classe = $_POST['password'];


$insertion = "INSERT INTO table_utilisateurs (nom, prenom, classe) VALUES ('$nom', '$prenom', '$classe')";


if ($connexion->query($insertion) === TRUE) {
    echo "Inscription réussie!";
} else {
    echo "Erreur lors de l'inscription : " . $connexion->error;
}

$connexion->close();
?>
