<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">
  <script src="https://kit.fontawesome.com/3477ae541c.js" crossorigin="annanymous"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Bootstrap core CSS -->
  <link href="bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
</head>
<title>Document</title>
</head>

<body>

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
</nav>        -->
    </header>


 
  <!-- carousel -->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images (2).jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>A PROPRE DU SITE.</h1>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="second-slide" src="(2).jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Un autre exemple de titre.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
              metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Apprendre encore plus</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="third-slide" src="6.jpg" alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Un de plus pour faire bonne mesure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
              metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Parcourir la galerie</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  
  <section class="B">
    <div class="C">
      <h1>Présentation</h1>
    </div>
    <div class="M">
      <h3>▸Mila Market est un site e-commerce</h3>
      <p>Ma mission est d’améliorer le quotidien des detenu en proposant aux clients des services en ligne innovants,
        pratiques et abordables tout en soutenant le développement d’entreprises ayant recours à mon site pour
        satisfation.</p>
      <p>Notre plateforme réunit une MarketPlace, qui connecte vendeurs et acheteurs, un réseau logistique, qui permet
        la livraison de millions de colis, et un service de paiement, qui facilite les transactions de nos clients dans
        la plupart de nos marchés.</p>
      <p>Nous ouvrons le champ des possibles pour une nouvelle génération de talents en créant des opportunités de
        carrière et en accompagnant le développement de nouvelles compétences sur le continent.</p>
    </div>
  </section>
  <section class="jk">
    <div class="jk1">
      <img src="images (1).jpg" alt="">
    </div>
    <div class="jk2">
      <img src="(3).jpg" alt="">

      <div class="txt">
        <h1>Ma vision</h1>
        <h5>Révolutionner l’expérience Shopping en Afrique</h5>
      </div>
    </div>
  </section>

  <!-- Marketing messaging and featurettes
      ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <section class="K">
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-3">
          <img class="rounded-circle" src="warranty.png" alt="Generic placeholder image" width="140" height="140">
          <p>Fournir des produits <br> 100% authentiques</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-3">
          <img class="rounded-circle" src="best-product.png" alt="Generic placeholder image" width="140" height="140">
          <p>Avec les meilleurs prix <br> au Burkina Faso</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-3">
          <img class="rounded-circle" src="shopping.png" alt="Generic placeholder image" width="140" height="140">
          <p>Offrir la plateforme <br> d’achat la plus pratique</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-3">
          <img class="rounded-circle" src="call-to-order.png" alt="Generic placeholder image" width="140" height="140">
          <p>Vous apporter la <br> meilleure assistance au <br> Burkina Faso</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
  </section>

  <section class="F">
    <div class="G">
      <h1>MA MISSION</h1>
    </div>
    <div>
      <p>Nous aidons les detenus à gagner leur indépendance en facilitant les processus de mise en marche, de gestion et
        de développement leur entreprise. je pensons que l’avenir du commerce doit inclure le plus grand nombre de
        personnes. C’est pour cette raison que je cherchons à réduire les obstacles pour rendre le commerce accessible à
        tous.</p>
    </div>
  </section>
  <section class="J">
    <div class="I">
      <h1>Créer une communauté pour faire la différence</h1>
    </div>
    <div>
      <p>Mila Market, qui se composait au départ une(1) personnes qui se retrouvaient dans un centre informatique pour
        travailler, va emploiyer bientot plus de 10 000 personnes au Burkina Faso. Des millions d’entreprises feront
        confiance à Mila Market. Notre initiatives à
        impact social met l’accent sur les moyens de garantir un futur équitable en proposent des produits et programmes
        pour aider nos équipes et nos marchands.</p>
    </div>
    <hr>
  </section>
  
   <section class="about" id="about">
  <div class="achiv">
  <div class="content">
    <i class="fa-solid fa-face-laugh-beam"><span>232</span></i>
    <p>la satisfaction des clients</p>
  </div>
  
  <div class="content">
    <i class="fa-solid fa-book"><span>521</span></i>
    <p>mon parcour</p>
  </div>
  
  <div class="content">
    <i class="fa-solid fa-headset"><span>1463</span></i>
    <p>heureux clinets conséquence</p>
  </div>
  
  <div class="content">
    <i class="fa-solid fa-user-group"><span>232</span></i>
    <p>ma familles</p>
  </div>
  </div>
  </section>
  <section class="services" id="services">
<h2 class="heading">notre services</h2>
<div class="row">

 <div class="box">
  <i class="fa-solid fa-briefcase"></i>
  <h3>Vendez au Burkina Faso</h3>
  <p>Une site unique qui vous permettra d'achat vos different produit en ligne clients en boutique et partout.</p>
</div>

<div class="box">
  <i class="fa-solid fa-list-check"></i>
  <h3>Vendez au Burkina Faso</h3>
  <p>Une site unique qui vous permettra d'achat vos different produit en ligne clients en boutique et partout.</p>
</div>

<div class="box">
  <i class="fa-solid fa-chart-column"></i>
  <h3>Vendez au Burkina Faso</h3>
  <p>Une site unique qui vous permettra d'achat vos different produit en ligne clients en boutique et partout.</p>
</div>
</div>
</section>
  <div class="main-btn">
    <a href="#" class="btn2">ACHETEZ MAINTENANT</a>
  </div> 
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

  <script src="main.js"></script>
  <script src="bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
    <script src="index.js"></script>

</body>

</html>