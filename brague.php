<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brague</title>
    <!-- link To CSS-->
    <link rel="stylesheet" href="brague.css">
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <!-- header -->
    <header>
        <div class="logo">
            <img src="27.webp" class="A">
            <h4>Marque MILA</h4>
        </div>
        <ul class="navbar">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="chaussure.php">Chaussure</a></li>
            <li><a href="sac.php">Sac</a></li>
            <li><a href="brague.php">Brague</a></li>
            <li><a href="brague.php">Contact</a></li>
        </ul>
        <!-- icons -->
        <div class="header-icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-search' id="search-icon"></i>
            <i class='bx bx-cart-alt' id="cart2-icon"></i>
            <i class='bx bx-user' id="user-icon"></i>
        </div>

        <!-- Search Box -->
        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search Here...">
        </div>

        <!-- cart-box -->
        <div class="cart2">
            <!-- Box 1 -->
            <div class="box">
                <img src="5.jpg" alt="">
                <div class="text">
                    <h3>T-Shirt 39P</h3>
                    <span>5000f</span>
                    <span>39</span>
                </div>
                <i class="bx bx-trash-alt"></i>
            </div>

            <!-- Box 2 -->
            <div class="box">
                <img src="4.jpg" alt="">
                <div class="text">
                    <h3>T-Shirt 40P</h3>
                    <span>2000f</span>
                    <span>40</span>
                </div>
                <i class="bx bx-trash-alt"></i>
            </div>
            <h2>Total:0f</h2>
            <a href="#" class="btn">Vérifier</a>
        </div>

        <!-- User -->
        <div class="user">
            <h2>Login Now</h2>
            <input type="email" placeholder="Your Email...">
            <input type="password" name="" id="" placeholder="password">
            <input type="submit" value="Login" class="login-btn">
            <p>Mot de Passe Oublié <a href="#">Réinitialiser Maintenant</a></p>
            <p>Je n'ai pas de compte<a href="#">Créer Une</a></p>
        </div>
    </header>
    <!-- Home -->
    <section class="home" id="home">
        <div class="home-text">
            <span>Achetez maintenant</span>
            <h1>New Arrival of <br>Fresh Products</h1>
            <a href="#" class="btn">Achetez maintenant</a>
        </div>
        <div class="home-img">
            <img src="6.jpg" alt="">
        </div>
    </section>
    <!-- New Arrival -->
    <section class="new" id="new">
        <div class="heading">
            <h1>New <span>Arrival</span></h1>
        </div>
        <div class="swiper new-arrival">
            <div class="swiper-wrappeer">
                <div class="swiper-slide box">
                    <img src="4.jpg" alt="">
                    <div class="content">
                        <a href="#" class="btn">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- link to js  -->
    <script src="main.js"></script>
</body>

</html>