<?php
session_start();
try
{
$bdd = new PDO('mysql:host=localhost;dbname=espace', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage()); 
}
?>



 
 <form method="POST" action="traitemen_inscription.php">
  <!-- Name input -->
  <div class="form-outline mb-4">
    <input type="nom" id="nom" name="nom" class="form-control" />
    <label class="form-label" for="form5Example1">Nom</label>
  </div>
  
  <div class="form-outline mb-4">
    <input type="prenom" id="prenom" name="prenom" class="form-control" />
    <label class="form-label" for="form5Example1">Prenom</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="email" name="email" class="form-control" />
    <label class="form-label" for="form5Example2">Email</label>
  </div>
  
  <div class="form-outline mb-4">
    <input type="password" id="password" name="password" class="form-control" />
    <label class="form-label" for="form5Example1">password</label>
  </div>
  

  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Se connecter</button>
</form>
 