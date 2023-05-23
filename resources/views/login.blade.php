<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent House | se connecter</title>
    <link rel="stylesheet" href="{{ asset('assets/css/signin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/glob.css') }}">
    @extends('master')
    @yield('head')
</head>
<body>
    <div class="flex">
        <section class="form">
            <h1>Se connecter</h1>
            <div class="form-control">
                <form action="{{ route('loginA') }}" method="post">
                    @csrf
                    <div class="block item3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="fill" required value="{{ old('email') }}">
                        @error('email')
                            <p style="color: red; margin-bottom: 20px;">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="block item4">
                        <label for="pswd">Mot de passe</label>
                        <input type="password" name="password" id="pswd" class="fill"required>
                    </div>
                    <div class="block item5">
                        <button type="submit">Se connecter</button>
                    </div>
                    
                    <a href="{{ route('index') }}">Retoure vers l'acceuil</a>
                </form>
            </div>
        </section>
        <section class="banner">
            <svg xmlns="http://www.w3.org/2000/svg" class="waves" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" 
            d="M0,192L30,202.7C60,213,120,235,180,250.7C240,267,300,277,360,266.7C420,256,480,224,540,224C600,224,660,256,720,240C780,224,840,160,900,133.3C960,107,1020,117,1080,149.3C1140,181,1200,235,1260,256C1320,277,1380,267,1410,261.3L1440,256L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            </path></svg>
        </section>
    </div>
</body>
</html>