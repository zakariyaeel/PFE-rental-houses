<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des Annonces</title>
    @extends('master')
    @yield('head')
    <link rel="stylesheet" href="{{ asset('assets/css/listing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/glob.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="icon" href="{{ asset('assets/img/seclg.svg') }}" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo">
            <a href="{{ route('index') }}"><img src="{{ asset('assets/img/logo-head.svg') }}" alt=""></a>
        </div>
        <div class="search-section">
            <!-- <input type="text" name="searchbar" id=""> -->
            <form class="search-bar" action="{{ route('annonces.cherche') }}" method="post">
                @csrf
                <div class="bar">Destination<input type="text" class="input hide" name="ville" value="{{ old('ville') }}"></div>
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
                        <a href="{{ route('contactUs') }}"><li>Contactez nous</li></a>
                        <a href="./#aboutUs"><li>Sur nous</li></a>
                    @endguest
                    @auth
                    @if(auth()->user()->role == 'admin')
                        <a href="{{ route('admin') }}"><li>Dashboard</li></a>
                    @else
                        <a href="{{ route('contactUs') }}"><li>Contactez nous</li></a>
                        <a href="./#aboutUs"><li>Sur nous</li></a>
                    @endif
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
    <div class="filter">
        <div class="box">
            <i class="fa-solid fa-sliders filterI"></i>
            <span>Filtrer</span>
        </div>
    </div>
    <div class="annonces">
        @if(isset($posts))
            @forelse($posts as $post)
                <div class="annonce">
                    <i class="fa-regular fa-heart heart"></i>
                    <i class="fa-solid fa-heart c-heart"></i>
                    <div class="img">
                        <img src="{{ asset($post->image) }}" alt="image d'annonce" srcset="">
                    </div>
                    <div class="content">
                        <p class="titre">{{ $post->titre }}, {{ $post->adress }}</p>
                        <p class="description">{{ $post->description }}</p>
                        <p class="valable"><span class="type">{{ $post->type->nom }}</span></p>
                        <p class="prix"><span class="cash">{{ $post->prix }}$ </span>par nuit</p>
                        <a href="{{ route('annonces.show',$post->id) }}" class="affichage">Afficher plus</a>
                    </div>
                </div>
            @empty
                <h1 class="pas">Ooops!</h1>
            @endforelse
        @endif
        </div>
    </div>
    <div class="popup ">
        <div class="popup-overlay ">
            <div class="popup-box">
                <div class="close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="filtrage">
                    <div class="price-box">
                        <header>
                            <h2>Price Range</h2>
                        </header>
                        <div class="price-input">
                            <div class="field">
                                <span>Min</span>
                                <span class="currency">$</span>
                                <input type="number" class="input-min" value="30" name="minprice">
                            </div>
                            <div class="separator">-</div>
                            <div class="field">
                                <span>Max</span>
                                <span class="currency">$</span>
                                <input type="number" class="input-max" value="400" name="maxprice">
                            </div>
                        </div>
                        <div class="slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min='10' max="500" value="30">
                            <input type="range" class="range-max" min='10' max="500" value="400" >
                        </div>
                    </div>
                    <div class="types-box">
                        <header>
                            <h2>Type de propriété</h2>
                        </header>
                        <div class="types">
                            <div class="type">
                                <button class="type-button" name="maison">
                                    <i class="fa-regular fa-house"></i>
                                    <span class="type-name">Maison</span>
                                </button>
                            </div>
                            <div class="type">
                                <button class="type-button" name="appartement">
                                    <i class="fa-regular fa-building"></i>
                                    <span class="type-name">Appartement</span>
                                </button>
                            </div>
                            <div class="type">
                                <button class="type-button" name="villa">
                                    <i class="fa-regular fa-house-tree"></i>
                                    <span class="type-name">Villa</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit-section">
                    <div>
                        <button type="submit">
                            <i class="fa-solid fa-sliders filterI"></i>
                            <span>Filtrer</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('assets/js/listing.js') }}"></script>
<script src="{{ asset('assets/js/header.js') }}"></script>
</html>