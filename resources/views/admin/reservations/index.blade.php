@extends('admin.master')
@section('title','résérvations')
@section('active','active')
@section('content')
    <div class="container">
            @isset($users)
                @foreach($users as $user)
                <div class="user-res bg-light rounded p-3 mb-2">
                    <p><b>Nom d'utilisateur : </b>{{ $user->nom }}</p>
                    <p><b>Email : </b>{{ $user->email }}</p>
                    <p><b>Réservations faits : </b></p>
                    <div class="res">
                        @foreach($user->posts as $post)
                            <table class="table table-striped">
                                <tr>
                                    <td><b>Nom d'annonce : </b>{{ $post->titre}}</td>
                                    <td><b>Debut : </b>{{ $post->pivot->date_debut}}</td>
                                    <td><b>fin : </b>{{ $post->pivot->date_fin}}</td>
                                </tr>
                            </table>
                        @endforeach
                    </div>
                </div>

                @endforeach
            @endisset
        
    </div>
        
        <!-- @isset($users)
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->nom}}</td>
                    <td>{{ $user->email}}</td>
                    <td>
                    @foreach($user->posts as $post)
                        {{ $post->titre}} | {{ $post->pivot->date_debut}} {{ $post->pivot->date_fin}}
                    @endforeach
                    </td>
                    <td></td>
                </tr>
            @endforeach
        @endisset -->
@endsection