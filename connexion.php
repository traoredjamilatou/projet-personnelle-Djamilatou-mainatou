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

if ($resultat) {
    if ($resultat->num_rows > 0) {
        echo "Connexion réussie ! Bienvenue";
    } else {
        echo "Échec de la connexion. Veuillez vérifier vos identifiants.";
    }
} else {
    echo "Erreur lors de l'exécution de la requête : " . $connexion->error;
}

$connexion->close();
?>





<!-- <div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5 form-container">
            <h2 class="text-center mb-4">Connexion</h2>


            <form method="post" action="traitement_connexion.php">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom :</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe :</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </div>
            </form>


        </div>
    </div>
</div> -->