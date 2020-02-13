@extends('layouts.main')

@section('title', 'homepage')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-success">Laravel Fashion Shop</h1>
        </div>
        <div class="d-flex flex-wrap justify-content-around mt-5">
            <div class="card mr-5 mb-5">
                <div class="card-header">
                    Featured
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
