<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
$serveur = "localhost"; 
$utilisateur = "root";
$motDePasse = ""; 
$baseDeDonnees = "espace"; 
    $connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

    if ($connexion->connect_error) {
        die("La connexion a échoué : " . $connexion->connect_error);
    }

   
    $email = $_POST['email']; 
    $password = $_POST['password'];

   
    $requete = "SELECT * FROM users WHERE email=?"; 
    $statement = $connexion->prepare($requete);
    $statement->bind_param("s", $email);
    $statement->execute();
    $resultat = $statement->get_result();


    if ($resultat->num_rows > 0) {
        $utilisateur = $resultat->fetch_assoc();
        if (password_verify($password, $utilisateur['password'])) {
            echo "Connexion réussie ! Bienvenue";
           
           header("Location: index.php");
             exit();
        } else {
            echo "Échec de la connexion. Veuillez vérifier vos identifiants.";
        }
    } else {
        echo "Utilisateur non trouvé.";
    }

    $connexion->close();
}
?>