<h1>Inscription</h1>
<form method="post" action="index.php"><br>

  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="nom" name="nom" class="form-control" placeholder="entrez votre nom" required/>
        <label class="form-label" for="form3Example1">Nom</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="prenom" name="prenom" class="form-control" placeholder="entrez votre prenom" required/>
        <label class="form-label" for="form3Example2">Prenom</label>
      </div>
    </div>
  </div>
  
  <div class="col">
      <div class="form-outline">
        <input type="text" id="pseudo" name="pseudo" class="form-control" placeholder="entrez votre pseudo" required/>
        <label class="form-label" for="form3Example2">Nom d'utilisateur</label>
      </div>
    </div>
    
<!-- number input -->

  <div class="form-outline mb-4">
    <input type="phone" id="numero" name="numero" class="form-control" placeholder="entrez votre numero" required/>
    <label class="form-label" for="form3Example3">Numero</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="email" name="email" class="form-control" placeholder="entrez votre email" required/>
    <label class="form-label" for="form3Example3"> Addresse Email</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="pass" id="mdp" name="pass" class="form-control" placeholder="entrez votre mot de passe" required/>
    <label class="form-label" for="form3Example4">Mot de passe</label>
  </div>

  
  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Se connecter</button>

  <!-- Register buttons -->
 
</form>