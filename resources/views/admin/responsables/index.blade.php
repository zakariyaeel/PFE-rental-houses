@extends('admin.master')
@section('title','responsables')
@section('active','active')
@section('content')
@isset($responsables)
        <div class="table-edit d-flex justify-content-center">
            <table class="table table-striped">
                <tr class="table-dark">
                    <th>Nom</th>
                    <th>prenom</th>
                    <th>email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
                @foreach($responsables as $responsable)
                    <tr>
                        <td>{{ $responsable->nom }}</td>
                        <td>{{ $responsable->prenom }}</td>
                        <td>{{ $responsable->email }}</td>
                        <td>{{ $responsable->phone }}</td>
                        <td>
                            <form action="{{ route('user.destroy', $responsable->id) }}" method="post">
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