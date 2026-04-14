@extends('layout.app')

@section('content')

    <a href="{{route('clients.create')}}" class="btn btn-primary mb-2">
        Ajouter Client
    </a>

    <table class="table table-bordered">

        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Telephone</th>
            <th>Action</th>
        </tr>

        @foreach($clients as $client)

            <tr>
                <td>{{$client->nom}}</td>
                <td>{{$client->prenom}}</td>
                <td>{{$client->telephone}}</td>

                <td>

                    <a href="{{route('clients.edit', $client->id)}}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form method="POST" action="{{route('clients.destroy', $client->id)}}" style="display:inline">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

        @endforeach

    </table>

@endsection