@extends('layout.app')

@section('content')

    <div class="row">

        <div class="col-md-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h4>Entrées</h4>
                    <h2>{{$entrees}}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h4>Sorties</h4>
                    <h2>{{$sorties}}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h4>Solde</h4>
                    <h2>{{$solde}}</h2>
                </div>
            </div>
        </div>

    </div>

@endsection