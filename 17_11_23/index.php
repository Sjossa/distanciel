<?php

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "0000";
$base_de_donnees = "mbdd";  

$connexion = new mysqli($serveur, $utilisateur, $motdepasse);

if ($connexion->connect_error) {
    die("Échec de connexion : " . $connexion->connect_error);
}

$requeteCreationBase = "CREATE DATABASE IF NOT EXISTS $base_de_donnees";
if ($connexion->query($requeteCreationBase) === TRUE) {
    echo "Base de données créée avec succès ou déjà existante. ";
} else {
    die("Erreur lors de la création de la base de données : " . $connexion->error);
}

// Utilisation de la base de données
$connexion->select_db($base_de_donnees);

// Création de la table "utilisateurs"
$requeteCreationTable = "
    CREATE TABLE IF NOT EXISTS utilisateurs (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nom VARCHAR(50),
        prenom VARCHAR(50),
        email VARCHAR(100)
    )
";
if ($connexion->query($requeteCreationTable) === TRUE) {
    echo "Table utilisateurs créée avec succès ou déjà existante. ";
} else {
    die("Erreur lors de la création de la table utilisateurs : " . $connexion->error);
}

$connexion->close();
?>

