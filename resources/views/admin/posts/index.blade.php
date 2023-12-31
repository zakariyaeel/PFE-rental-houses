@extends('admin.master')
@section('title','Annonces')
@section('active','active')
@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('assets/css/posts.css') }}">
@endsection
@section('content')
        <div class="p-2 d-flex ">
            <div class="posts w-75 ">
                @isset($posts) 
                    @foreach($posts as $post)
                        <div class="post shadow w-100 mb-5 bg-light p-1 ps-2 d-flex position-relative">
                            <div class="img d-flex align-items-center h-100">
                                <img src="{{ asset($post->image) }}" alt="">
                            </div>
                            <div class="info py-1 ms-2 h-100 ">
                                <p class="fs-4 mb-0 fw-bold">{{ $post->titre }}</p>
                                <p class="fs-5 mb-0">Lieux : {{ $post->description }} | {{ $post->adress }}</p>
                                <p class="fs-6 mb-0 fw-light">Prix : {{ $post->prix }}$/nuit</p>
                                @if($post->etat)
                                    <p class="fs-6">Disponibilité : Résérvé</p>
                                @else
                                    <p class="fs-6">Disponibilité : Libre</p>
                                @endif
                            </div>
                            <form action="{{ route('posts.destroy',$post->id) }}" class="position-static" method="post">
                                @csrf
                                @method('DELETE')
                                <!-- <a href=""></a> -->
                                <a href="{{ route('posts.edit',$post->id) }}" class="position-absolute edit fs-5 text-dark"><i class="fa-light fa-pen-to-square"></i></a>
                                <button type="submit" class="sup rounded-circle btn btn-danger position-absolute" 
                                onclick="return confirm('Voulez vous vraiment de supprimer {{ $post->titre }}');">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </form>
                        </div> 
                    @endforeach
                @endisset

                {{ $posts->links()}}
            </div>
            <div class="box w-25 position-relative text-light text-center">
                <div class="add-box position-fixed py-3">
                    <h2>Ajoutez</h2>
                    <div class="py-2">
                        <button class="popplus btn"><i class="fa-solid fa-plus fs-1 text-light"></i></button>
                    </div>
                    <h2>Annonce</h2>
                </div>
            </div>
        </div>
        <div class="popup ">
            <div class="popup-overlay h-100 w-100 position-fixed top-0 left-0 d-flex align-items-center">
                <div class="popup-box rounded bg-light w-50 ">
                    <header class="rounded d-flex justify-content-between">
                    <h2 class="p-1">Ajouter une annonce</h2>
                    <button class="btn"><i class="fa-light fa-xmark text-danger x"></i></button>
                    </header>
                    <form action="{{ route('posts.store') }}" method="post" class="p-3" enctype="multipart/form-data">
                        @csrf
                        <div class="input-box mb-2">
                            <label for="image" >Image</label>
                            <input type="file"  class="form-control" name="image" id="image">
                        </div>
                        <div class="input-box mb-2">
                            <label for="titre" >Titre</label>
                            <input type="text" placeholder="titre" name="titre" id="titre" class="form-control">
                        </div>
                        <div class="input-box mb-2">
                            <label for="description" >Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="description"></textarea>
                        </div>
                        <div class="input-box mb-2">
                            <label for="adress" >Adress</label>
                            <input type="text" placeholder="adress" name="adress" id="adress" class="form-control">
                        </div>
                        <div class="input-box mb-2">
                            <label for="prix" >Prix</label>
                            <input type="number" placeholder="prix" name="prix" id="prix" class="form-control">
                        </div>
                        <div class="input-box mb-2">
                            <h6>Etat</h6>
                            <label for="etat" >Libre</label>
                            <input type="radio" name="etat" id="etat" class="form-check-label" value="0">
                            <label for="etat2" >Resérvée</label>
                            <input type="radio" name="etat" id="etat2" class="form-check-label" value="1">
                        </div>
                        <div class="input-box mb-2">
                            <select class="form-select" name="type">
                                <option selected>type d'annonce</option>
                                @isset($types)
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->nom }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="button-s mt-3">
                            <button class="btn btn-success" type="submit">Ajoutez</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        var plus = document.querySelector('.popplus');
        var popup = document.querySelector('.popup');
        var x = document.querySelector('.x');

        plus.addEventListener('click',()=>{
            popup.classList.add('popup-show');
        });
        x.addEventListener('click',()=>{
            popup.classList.remove('popup-show');
        });
    </script>
@endsection
