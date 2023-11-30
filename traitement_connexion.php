<?php

$serveur = "localhost"; 
$utilisateur = "root";
$motDePasse = ""; 
$baseDeDonnees = "espace"; 

$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

if ($connexion->connect_error) {
    die("La connexion a échoué : " . $connexion->connect_error);
}

$nom = $_POST['nom']; 

$password = $_POST['password'];

$requete = "SELECT * FROM users WHERE nom='$nom' AND password='$password'";
$resultat = $connexion->query($requete);

if ($resultat->num_rows > 0) {
    echo "Connexion réussie ! Bienvenue";
} else {
    echo "Échec de la connexion. Veuillez vérifier vos identifiants.";
}

$connexion->close();
?>