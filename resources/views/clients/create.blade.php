@extends('layout.app')

@section('content')

    <form method="POST" action="{{route('clients.store')}}">

        @csrf

        <input name="nom" class="form-control mb-2" placeholder="Nom">

        <input name="prenom" class="form-control mb-2" placeholder="Prenom">

        <input name="telephone" class="form-control mb-2" placeholder="Telephone">

        <textarea name="adresse" class="form-control mb-2"></textarea>

        <button class="btn btn-success">
            Enregistrer
        </button>

    </form>

@endsection