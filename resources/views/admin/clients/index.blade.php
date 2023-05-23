@extends('admin.master')
@section('title','Clients')
@section('active','active')
@section('content')
    @isset($clients)
        <div class="table-edit d-flex justify-content-center">
            <table class="table table-striped">
                <tr class="table-dark">
                    <th>Nom</th>
                    <th>prenom</th>
                    <th>email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->prenom }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>
                            <form action="{{ route('user.destroy', $client->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('êtes vous sûre');">
                                    <i class="fa-light fa-trash-xmark"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endisset
    </section>
@endsection