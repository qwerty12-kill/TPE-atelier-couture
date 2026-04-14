@extends('layout.app')

@section('content')

    <a href="{{route('coutures.create')}}" class="btn btn-primary">
        Nouvelle Couture
    </a>

    <table class="table mt-2">

        <tr>
            <th>Client</th>
            <th>Agent</th>
            <th>Habit</th>
            <th>Statut</th>
            <th>Montant</th>
            <th>Action</th>
        </tr>

        @foreach($coutures as $c)

            <tr>

                <td>{{$c->client->nom}}</td>
                <td>{{$c->agent->nom}}</td>
                <td>{{$c->type_habit}}</td>
                <td>{{$c->statut}}</td>
                <td>{{$c->montant}}</td>

                <td>

                    <a href="{{route('coutures.edit', $c->id)}}" class="btn btn-warning">
                        Edit
                    </a>

                    <form method="POST" action="{{route('coutures.destroy', $c->id)}}" style="display:inline">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

        @endforeach

    </table>

@endsection