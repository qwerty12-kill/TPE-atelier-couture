@extends('layout.app')

@section('content')

    <form method="POST" action="{{route('depenses.store')}}">
        @csrf

        <input name="libelle" class="form-control mb-2" placeholder="Libelle">

        <input name="montant" class="form-control mb-2" placeholder="Montant">

        <select name="type" class="form-control mb-2">
            <option>electricite</option>
            <option>materiel</option>
            <option>autre</option>
        </select>

        <input type="date" name="date" class="form-control mb-2">

        <button class="btn btn-success">
            Ajouter
        </button>

    </form>

    <hr>

    <table class="table">

        @foreach($depenses as $d)

            <tr>
                <td>{{$d->libelle}}</td>
                <td>{{$d->montant}}</td>
                <td>{{$d->type}}</td>
            </tr>

        @endforeach

    </table>

@endsection