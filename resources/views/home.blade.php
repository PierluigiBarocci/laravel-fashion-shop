@extends('layouts.main')

@section('title', 'homepage')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-success">Laravel Fashion Shop</h1>
        </div>
        <div class="d-flex flex-wrap justify-content-around mt-5">
            @foreach ($vestiti as $prodotto)
                <div class="card mr-5 mb-5">
                    <div class="card-header">
                        {{$prodotto->nome}}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Id: {{$prodotto->ID}}</li>
                        <li class="list-group-item">Genere: {{$prodotto->genere}}</li>
                        <li class="list-group-item">Codice Prodotto: {{$prodotto->codice_prodotto}}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
