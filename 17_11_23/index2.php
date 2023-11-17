<?php

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "0000";
$base_de_donnees = "mbdd"; // Assurez-vous que le nom de la base de données est correct

// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $base_de_donnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Échec de connexion : " . $connexion->connect_error);
}

// Sélectionner toutes les colonnes pour tous les utilisateurs de la table "utilisateurs"
$requeteSelectionUtilisateurs = "SELECT * FROM utilisateurs";
$resultat = $connexion->query($requeteSelectionUtilisateurs);

// Vérifier s'il y a des résultats
if ($resultat->num_rows > 0) {
    echo "<h2>Liste des utilisateurs :</h2>";
    echo "<ul>";

    // Afficher chaque utilisateur dans une liste
    while ($row = $resultat->fetch_assoc()) {
        echo "<li>ID: " . $row["id"]. " - Nom: " . $row["nom"]. " - Prénom: " . $row["prenom"]. " - Email: " . $row["email"]. "</li>";
    }

    echo "</ul>";
} else {
    echo "Aucun utilisateur trouvé.";
}

// Fermer la connexion
$connexion->close();
?>
