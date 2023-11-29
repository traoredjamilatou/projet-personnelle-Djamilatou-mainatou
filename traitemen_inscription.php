<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$baseDeDonnees = "espace";

$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);


if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
}


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); 


$requete = "INSERT INTO users (nom, prenom, email, password) VALUES ('$nom', '$prenom', '$email', '$password')";

if ($connexion->query($requete) === TRUE) {
   
    header("Location: connexion.php");
    exit();
} else {
    echo "Erreur lors de l'inscription : " . $connexion->error;
}


$connexion->close();
?>