<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">
  <title>home</title>
  <!-- Bootstrap core CSS -->
  <link href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="incription.css">
  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
  <!-- link to css -->
  <link rel="stylesheet" href="styles.css">
  <!-- box icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- Box Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
</head>

<body>
  <!-- header -->

  <!-- header -->
  <header>
    <?php include ("menu.php") ?>
    <!-- <nav class="navbar navbar-expand-lg  bg-dark">
  <div class="container-fluid">
  <div class="logo">
  <img src="27.webp" class="A">
  <h4>Marque <span>MILA</span> </h4> 
</div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 300px;">
        <li class="nav-item">
        
            <a class="nav-link text-white" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
        
            <a class="nav-link text-white" href="about.php">About</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            LES Produit
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="chaussure.php">Chaussure</a></li>
            <li><a class="dropdown-item" href="sac.php">Sac</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="inscription.php">Inscription</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="connexion.php">Connexion</a>
          </li>
      </ul>
    
  <div class="header-icons">
            
            <i class="bx bx-shopping-bag" id="cart-icon"></i>
          </div>
  <div class="cart">
  <h2 class="cart-title"> votre panier</h2>
<div class="cart-content">
<div class="cart-box">
<img src="18.webp" alt="" class="cart-img">
<div class="detail-box">
<div class="cart-product-title">SAC 5</div>
<div class="cart-price">4000CFA</div>
<input type="number" value="1" class="cart-quantity">
</div>
<i class='bx bxs-trash-alt cart-remove' ></i>
     </div>
  </div>
  <div class="total">
    <div class="total-title">Total</div>
    <div class="total-price">0</div>
  </div>
  <button type="button" class="btn-buy">Acheter maintenant</button>
  <i class='bx bx-x' id="close-cart"></i> 
  </div>
</div> 
</nav> -->
  </header> <br> <br> <br> <br>

<?php
// session_start();
try
{
$bdd = new PDO('mysql:host=localhost;dbname=espace', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage()); 
}
?>
<div class="contenaire">

<h1>Inscription</h1>


 
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
    <label class="form-label" for="form5Example1"></label>
  </div>
  

  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Se connecter</button>
</form>
</div>


  <script src="main.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>

    <!-- link to js -->
    <script src="index.js"></script>


  </body>

  </html>

 