<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=espace', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage()); 
}

// $Nom= $_POST['nom'];
// $Prenom= $_POST['prenom'];
$Email_address= $_POST['email'];
$password= $_POST['pass'];
$req= $bdd->prepare("SELECT * FROM users WHERE nom= :nom AND prenom= :prenom AND email= :email AND pass= :pass");
$req->execute([
    // "nom"=> $nom,
    // "prenom"=> $prenom,
    "email"=> $Email_address,
    "pass"=> $password, 
]);
$user= $req->fetch();


$recu= $bdd->prepare("SELECT statut FROM users WHERE nom= :nom AND prenom= :prenom AND email= :email AND pass= :pass");
$recu->execute([
    // "nom"=> $nom,
    // "prenom"=> $prenom,
    "email"=>$Email_address,
    "pass"=> $password,
]);
$statut= $recu->fetch();

if($user['nom'] AND $user['prenom'] AND $user['email'] AND $user['pass'] AND $statut['statut'] == 'administrateur'){
    session_start();
    // $_SESSION['nom']= $nom;
    // $_SESSION['prenom']= $prenom;
    $_SESSION['email']= $Email_address;
    $_SESSION['pass']= $password;
    header('Location: tablau.php');
    
    
} else if ($user['nom'] AND $user['prenom'] AND $user['email'] AND $user['pass'] AND $statut['statut'] == 'utilisateur'){
    session_start();
    // $_SESSION['nom']= $nom;
    // $_SESSION['prenom']= $prenom;
    $_SESSION['email']= $Email_address;
    $_SESSION['pass']= $password;
    header('Location: index.php'); 
}

?>