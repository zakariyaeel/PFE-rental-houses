<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent House | {{ $post->titre }}</title>
    @extends('master')
    @yield('head')
    <link rel="stylesheet" href="{{ asset('assets/css/show.css') }}">
    <link rel="icon" href="{{ asset('assets/img/seclg.svg') }}" type="image/x-icon">
</head>
<body>
    <div class="post">
        <img src="{{ asset($post->image) }}" alt="{{ $post->description }}">
        <div class="content">
            <h1>{{ $post->titre }}</h1>
            <h3>{{ $post->description }}</h3>
            <p><b>Adress : </b>{{ $post->adress }}</p>
            <p><b>prix : </b>{{ $post->prix }}$ par nuit</p>
            <p><b>Type : </b>{{ $post->type->nom }}</p>
            <div class="res">
                <form action="{{ route('annonces.res',$post->id) }}" method="post">
                    @csrf
                    <div class="dates">
                        <div class="debut">
                            <label for="debut">Date d'arrivée</label>
                            <input type="date" name="date_debut" id="debut">
                        </div>
                        <div class="fin">
                            <label for="fin">Date de sortie</label>
                            <input type="date" name="date_fin" id="fin">
                        </div>
                    </div>
                    <div class="btn">
                        <button type="submit">Reserver</button>
                    </div>
                </form>
            </div>
            <div class="bottom">
                <a href="{{ url('/') }}">Retour vers l'accueil</a>
            </div>
        </div>
    </div>
    @if(session()->has('sent'))
    <div class="sent">
            {{session('sent')}}
        </div>
    @endif
</body>
</html>