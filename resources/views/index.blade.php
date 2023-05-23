<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent House | Acceuil </title>
    <link rel="icon" href="{{ asset('assets/img/seclg.svg') }}" type="image/x-icon">
    <meta name="description" 
    content="Trouvez votre location de rêve en quelques clics avec notre site de location de maisons. 
    Découvrez une large sélection de logements pour des vacances inoubliables. 
    Réservez dès maintenant et profitez de nos offres exclusives">
    <!-- <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/css/glob.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <a href="{{ route('index') }}"><img src="{{ asset('assets/img/logo-head.svg') }}" alt=""></a>
        </div>
        <div class="search-section">
            <!-- <input type="text" name="searchbar" id=""> -->
            <form class="search-bar" action="{{ route('annonces.index') }}" method="get">
                @csrf
                <div class="bar">Destination<input type="text" class="input hide" name="ville"></div>
                <div class="bar">Check in<input type="date" class="input hide" name="checkin"></div>
                <div class="checkout">check out<input type="date" class="input hide" name="checkout"></div>
                <div> 
                    <button type="submit">
                        <span class="input hide">Rechercher</span>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="menu">
            <i class="fa-solid fa-bars icon"></i>
            <i class="fa-regular fa-user user icon"></i>
            <div class="drop">
                <ul>
                    @guest
                    <a href="{{ route('signUp') }}"><li>Inscription</li></a>
                    <a href="{{ route('login') }}"><li>Connexion</li></a>
                    @endguest
                    <a href="{{ route('contactUs') }}"><li>Contactez nous</li></a>
                    <a href="./#aboutUs"><li>Sur nous</li></a>
                    @auth
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit">logout</button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </header>
    <div class="section1">
        <div class="text">
            Réservez votre
            logement idéal dès  
            maintenant 
            sur notre site web !
            <div class="div">
                <a href="{{ route('annonces.index') }}">Réservez </a>
            </div>
        </div>
    </div>
    <div class="section2">
        <div class="img-container">
            <div class="card card-1">
                <div class="img-content">
                    <div class="card-image">
                        <img src="{{ asset('assets/img/slide1.webp') }}" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <div class="name">
                        <span class="title">
                            <i class="fa-solid fa-location-dot"></i>
                            Riad Marrakech
                        </span>
                        <span class="details">
                            l'ancienne Medina   
                        </span>
                    </div>
                    <p class="review">
                        4.7
                    </p>
                </div>
            </div>
            <div class="card card-2">
                <div class="img-content">
                    <div class="card-image">
                        <img src="{{ asset('assets/img/slide2.webp') }}" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <div class="name">
                        <span class="title">
                            <i class="fa-solid fa-location-dot"></i>
                            Maldive Island
                        </span>
                        <span class="details">
                            Vue sur la mer
                        </span>
                    </div>
                    <p class="review">
                        4.7
                    </p>
                </div>
            </div>
            <div class="card card-3">
                <div class="img-content">
                    <div class="card-image">
                        <img src="{{ asset('assets/img/slide3.webp') }}" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <div class="name">
                        <span class="title">
                            <i class="fa-solid fa-location-dot"></i>
                            Maldive Island
                        </span>
                        <span class="details">
                            Vue sur la mer
                        </span>
                    </div>
                    <p class="review">
                        4.7
                    </p>
                </div>
            </div>
            <div class="card card-4">
                <div class="img-content">
                    <div class="card-image">
                        <img src="{{ asset('assets/img/slide4.webp') }}" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <div class="name">
                        <span class="title">
                            <i class="fa-solid fa-location-dot"></i>
                            Maldive Island
                        </span>
                        <span class="details">
                            Vue sur la mer
                        </span>
                    </div>
                    <p class="review">
                        4.7
                    </p>
                </div>
            </div>
            <div class="card card-5">
                <div class="img-content">
                    <div class="card-image">
                        <img src="{{ asset('assets/img/slide5.webp') }}" alt="" class="card-img">
                    </div>
                </div>
                <div class="card-content">
                    <div class="name">
                        <span class="title">
                            <i class="fa-solid fa-location-dot"></i>
                            Maldive Island
                        </span>
                        <span class="details">
                            Vue sur la mer
                        </span>
                    </div>
                    <p class="review">
                        4.7
                    </p>
                </div>
            </div>
        </div>
        <div class="img-controls">

        </div>
    </div>
    <div class="section3" id="aboutUs">
        <div class="raisons">
            <div class="raisons-title">
                <h1>Pourquoi choisir notre site web ?</h1>
                <h3>Voici trois raisons pour lesquelles vous devriez choisir notre site web</h3>
            </div>
            <div class="raison">
                <div class="icon">
                    <img src="{{ asset('assets/img/choice.png') }}" alt="">
                </div>
                <div class="gap2">
                    <h2>Un large choix de propriétés</h2>
                    <p>Nous proposons une grande variété de maisons à louer dans différentes villes et régions, 
                    ce qui vous permet de trouver la maison idéale qui correspond à vos besoins et vos préférences.
                    </p>
                </div>
            </div>
            <div class="raison">
                <div class="icon">
                    <img src="{{ asset('assets/img/customer-service.png') }}" alt="">
                </div>
                <div class="gap2">
                    <h2>Un service client de qualité</h2>
                    <p>Nous sommes disponibles pour répondre à toutes vos questions et préoccupations. Nous sommes engagés à fournir 
                    un service client de qualité supérieure et à vous aider à trouver 
                    la maison de location qui convient le mieux à vos besoins.
                    </p>
                </div>
            </div>
            <div class="raison">
                <div class="icon">
                    <img src="{{ asset('assets/img/securit.png') }}" alt="">
                </div>
                <div class="gap2">
                    <h2>Une plateforme sécurisée</h2>
                    <p> Notre site web est sécurisé et vos informations personnelles et financières sont protégées. Nous prenons 
                        la sécurité très au sérieux et nous travaillons continuellement pour protéger
                        notre site web et les données de nos clients.
                    </p>
                </div>
            </div>
        </div>
        <div class="img">
            <img src="{{ asset('assets/img/grille.png') }}" alt="image grille">
        </div>
    </div>
    <div class="section4">
        <div class="form">
            <h2>Restez informé(e) de nos dernières nouveautés</h2>
            <form action="" method="post">
                @csrf
                <div class="box">
                    <input type="email" name="ns_email" id="" placeholder="Entrez votre email">
                    <button type="submit">Envoyez</button>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <div class="info">
            <div class="col1">
                <img src="{{ asset('assets/img/seclg.svg') }}" alt="">
            </div>
            <div class="col col2">
                <h3>à propos</h3>
                <ul>
                    <li><a href="#aboutUs">Sur nous </a></li>
                </ul>
            </div>
            <div class="col col3">
                <h3>Contact</h3>
                <ul>
                    <li><i class="fa-solid fa-phone"></i> +212 606204503 </li>
                    <li><i class="fa-regular fa-envelope"></i> contact@renthouse.com</li>
                    <li><i class="fa-sharp fa-solid fa-location-dot"></i> Al Adarissa, FES 30000</li>
                    <li><a href="{{ route('contactUs') }}">Nous Contactez </a></li>
                </ul>
            </div>
            <div class="col col4">
                <h3>Social</h3>
                <ul>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i> Instagram </a></li>
                    <li><a href="#"><i class="fa-brands fa-square-facebook"></i> Facebook </a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i> Twitter </a></li>
                    <li><a href="#"><i class="fa-brands fa-tiktok"></i> TikTok </a></li>
                </ul>
            </div>
        </div>
        <div class="copy">
            &copy;2023
        </div>
    </footer>
</body>
<script src="{{ asset('assets/js/header.js') }}"></script>
<script src="{{ asset('assets/js/slider.js') }}"></script>
</html>