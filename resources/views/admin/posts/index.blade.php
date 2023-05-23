@extends('admin.master')
@section('title','Annonces')
@section('active','active')
@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('assets/css/posts.css') }}">
@endsection
@section('content')
        <div class="p-3 d-flex ">
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
            </div>
            <div class="box w-25 position-relative text-light text-center">
                <div class="add-box position-fixed py-3">
                    <h2>Ajoutez</h2>
                    <div class="py-2">
                        <a href=""><i class="fa-solid fa-plus fs-1 text-light"></i></a>
                    </div>
                    <h2>Annonce</h2>
                </div>
            </div>
        </div>
    </section>
@endsection
