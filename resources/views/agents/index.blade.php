@extends('layout.app')

@section('content')

    <a href="{{route('agents.create')}}" class="btn btn-primary">
        Ajouter Agent
    </a>

    <table class="table mt-2">

        <tr>
            <th>Nom</th>
            <th>Specialite</th>
            <th>Action</th>
        </tr>

        @foreach($agents as $agent)

            <tr>

                <td>{{$agent->nom}}</td>
                <td>{{$agent->specialite}}</td>

                <td>

                    <a href="{{route('agents.edit', $agent->id)}}" class="btn btn-warning">
                        Edit
                    </a>

                    <form method="POST" action="{{route('agents.destroy', $agent->id)}}" style="display:inline">
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