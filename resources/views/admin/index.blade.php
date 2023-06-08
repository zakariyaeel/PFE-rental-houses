@extends('admin.master')
@section('title','Dashboard')
@section('active','active')
@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('assets/css/dash.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="boxes">
            <div class="head w-100 mb-5 d-flex justify-content-evenly">
                <div class="box bg-light rounded shadow">
                    <p class="fs-4 pt-3 ps-3 fw-bold">Revenue</p>
                    <p class="fs-3 fw-bold text-center px-1">{{$revenue}} $</p>
                </div>
                <div class="box bg-light rounded shadow">
                    <p class="fs-4 pt-3 ps-3 fw-bold">Resérvations</p>
                    <p class="fs-3 fw-bold text-center px-1">{{ $reservations }}</p>
                </div>
                <div class="box bg-light rounded shadow">
                    <p class="fs-4 pt-3 ps-3 fw-bold">Clients</p>
                    <p class="fs-3 fw-bold text-center px-1">{{ $nbrClients }}</p>
                </div>
                <div class="box bg-light rounded shadow">
                    <p class="fs-4 pt-3 ps-3 fw-bold">Annonces</p>
                    <p class="fs-3 fw-bold text-center px-1">{{ $nbrPosts }}</p>
                </div>
            </div>
            <h2 class="mb-3 color-des">Clients récents</h2>
            <div class="client-list d-flex justify-content-center">
                <table class="table">
                    <tr class="">
                        <th>Nom</th>
                        <th>prenom</th>
                        <th>email</th>
                        <th>Phone</th>
                    </tr>
                    @isset($clients)
                        @foreach($clients as $client)
                            <tr>
                            <td>{{ $client->nom }}</td>
                            <td>{{ $client->prenom }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->phone }}</td>
                            </tr>
                        @endforeach
                    @endisset
                </table>
            </div>
        </div>
    </div>
@endsection
