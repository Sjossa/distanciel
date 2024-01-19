<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $serveur_db1 = "localhost";
    $utilisateur_db1 = "root";
    $mot_de_passe_db1 = ""; 
    $base_de_donnees_db1 = "inscription";

    $serveur_db2 = "localhost";
    $utilisateur_db2 = "root";
    $mot_de_passe_db2 = ""; 
    $base_de_donnees_db2 = "prof";

    try {
      
        $connexion_db1 = new mysqli($serveur_db1, $utilisateur_db1, $mot_de_passe_db1, $base_de_donnees_db1);
        
        if ($connexion_db1->connect_error) {
            throw new Exception("La connexion à la première base de données a échoué : " . $connexion_db1->connect_error);
        }

   
        $connexion_db2 = new mysqli($serveur_db2, $utilisateur_db2, $mot_de_passe_db2, $base_de_donnees_db2);
        
        if ($connexion_db2->connect_error) {
            throw new Exception("La connexion à la deuxième base de données a échoué : " . $connexion_db2->connect_error);
        }

        $email = $_POST['email'];
        $mot_de_passe = $_POST['mdp1'];

        // Utilisation de la première base de données
        $req_verification_db1 = $connexion_db1->prepare("SELECT id, nom, prenom, mdp FROM inscrit WHERE email=?");
        $req_verification_db1->bind_param("s", $email);
        $req_verification_db1->execute();
        $req_verification_db1->store_result();

        // Utilisation de la deuxième base de données
        $req_verification_db2 = $connexion_db2->prepare("SELECT id, champ1, champ2 FROM table2 WHERE email=?");
        $req_verification_db2->bind_param("s", $email);
        $req_verification_db2->execute();
        $req_verification_db2->store_result();

        if ($req_verification_db1->num_rows > 0) {
            $req_verification_db1->bind_result($id, $nom, $prenom, $mot_de_passe_hache);
            $req_verification_db1->fetch();

            // Vérification du mot de passe
            if (password_verify($mot_de_passe, $mot_de_passe_hache)) {
                // Mot de passe correct, enregistrement des informations dans la session
                $_SESSION['user_id'] = $id;
                $_SESSION['user_nom'] = $nom;
                $_SESSION['user_prenom'] = $prenom; 

                
                header("location: index.php");
                exit();
            } elseif (password_verify($mot_de_passe, $mot_de_passe_hache)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['user_nom'] = $nom;
                $_SESSION['user_prenom'] = $prenom;

                 
                 header("location: index.php");
                 exit();
        } else {
            $erreur = "Email incorrect.";
        }

        $req_verification_db1->close();
        $req_verification_db2->close();

        $connexion_db1->close();
        $connexion_db2->close();
        
    } catch (Exception $e) {
        die("Erreur : " . $e->getMessage());
    }
}
?>

