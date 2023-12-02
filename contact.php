<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">
  <link rel="stylesheet" href="contact.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/3477ae541c.js" crossorigin="annanymous"></script>
  <!-- Bootstrap core CSS -->
  <link href="bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
</head>
<title>Contact</title>
</head>

<body>

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
                <i class="bx bx-shopping-bag" id="cart-icon"></i>
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
</nav>  -->

  </header> <br> <br> <br><br> <br><br>

  <section class="container">
    <div class="loca">
      <div class="rows">
        <div class="col-lg-6">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.278118304931!2d-4.295850125392157!3d11.16703170186839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe34fb0d112af6f5%3A0x9afc8f16dcea3680!2sMaison%20d%C2%B4Arr%C3%AAt%20et%20de%20Correction%20de%20Bobo%2C%20Zone%20Residentielle%20B%2C%20Bobo-Dioulasso!5e0!3m2!1sfr!2sbf!4v1701370902117!5m2!1sfr!2sbf"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-lg-6">
          <form">

            <!-- Name input -->
            <div class="form-outline mb-4">
              <input type="text" name="nom" id="form4Example1" class="form-control" />
              <label class="form-label" for="form4Example1">Name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name="email" id="form4Example2" class="form-control" />
              <label class="form-label" for="form4Example2">Email address</label>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
              <textarea class="form-control" type="texte" name="mess" id="form4Example3" rows="4"></textarea>
              <label class="form-label" for="form4Example3">Message</label>
            </div>


            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Send</button>
            </form>
        </div>
      </div>
    </div>
  </section>


  <section class="omni">
    <?php include ("footer.php") ?>

    <!-- <div class="D">
        <img src="4.jpg" alt="">
        <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <h5>NOUVEAU SUR LE SITE ?</h5>
              <p>Inscrivez-vous à nos communications pour recevoir nos meilleures offres!</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Email address</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-primary" type="button">Homme</button>
                <button class="btn btn-primary" type="button">Femme</button>
              </div>
            </form>
          </div>
        </div>
    <div class="footer container-fluid">
      <div class="Q">
        <img src="4.jpg" alt="">
        <p class="T">Burkina Faso</p>
        <p class="T">Pays des Hommes intègres</p>
        <p class="T">Terre d'accueil et de traditions,</p>
        <p class="T">Pays de culture</p>
      </div>
      <div>
        <p class="R">Contact</p>
        <div class="S">
          <i class="bi bi-egg-fill"></i>
          <P>01 B.P. 1311 Ouagadougou <br>01 Burkina Faso</P>
        </div>
        <div class="V">
          <i class="bi bi-telephone-fill"></i>
          <p>+226 65 90 44 32</p>
        </div>
        <div class="W">
          <i class="bi bi-envelope"></i>
          <p>info@ontb.bf</p>
        </div>
        <div class="X">
          <i class="bi bi-facebook"></i>
          <i class="bi bi-instagram i"></i>
          <i class="bi bi-youtube i"></i>
          <i class="bi bi-twitter i"></i>
        </div>
      </div>
      <div>
        <p class="Z">GAGNEZ DE L'ARGENT AVEC ....</p>
        <div class="a">
          <i class="bi bi-check"></i>
          <p>Vendez sur ....</p>
        </div>
        <div class="b">
          <i class="bi bi-check"></i>
          <p>Assistant vendeur</p>
        </div>
        <div class="c">
          <i class="bi bi-check"></i>
          <p>Devenez Consultant ....</p>
        </div>
        <div class="d">
          <i class="bi bi-check"></i>
          <p>Devenir partenaire de service logistique</p>
        </div>
        <div class="e">
          <i class="bi bi-check"></i>
          <p>Devenir partenaire de service logistique</p>
        </div>
      </div>

      <div>
        <p class="f">Liens utiles</p>
        <div class="g">
          <i class="bi bi-check"></i>
          <p>Contactez-nous</p>
        </div>
        <div class="h">
          <i class="bi bi-check"></i>
          <p>Commandez par Tél: 05.22.04.18.18</p>
        </div>
        <div class="j">
          <i class="bi bi-check"></i>
          <p>Acheter sur ....</p>
        </div>
        <div class="k">
          <i class="bi bi-check"></i>
          <p>Utiliser un Bon d'achat</p>
        </div>
        <div class="l">
          <i class="bi bi-check"></i>
          <p>Modalités de Livraison</p>
        </div>
      </div>
</div>
    <div class="m">
      <P class="o">Propulsé par. FasoCompute.</P>
      <div class="n">
        <P>ONTB © 2023 Tous droits réservés - Mentions Légales..</P>
      </div>
    </div> -->
  </section>



  <script src="index.js"></script>
  <script src="bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>