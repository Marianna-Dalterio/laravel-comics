@extends('layouts.main')

@section('content')
<div class="bg-white">
    {{-- Jumbotron mini o barra blu di separazione --}}
    <div class="divider bg-primary" style="height: 70px;"></div>

    <div class="container py-5 text-dark">
        <div class="row">
            <div class="col-8">
                <h1 class="text-uppercase fw-bold mb-3">{{ $comic['title'] }}</h1>
                
                {{-- Barra del prezzo --}}
                <div class="bg-success text-white p-3 d-flex justify-content-between mb-3">
                    <span>U.S. Price: <span class="fw-bold">{{ $comic['price'] }}</span></span>
                    <span>AVAILABLE</span>
                </div>

                <p class="lead">{{ $comic['description'] }}</p>
            </div>

            <div class="col">
                {{-- Passiamo 'comic' come 'item' e l'indice che abbiamo nella URL come 'id' --}}
                @include("partials.card", ['item' => $comic, 'id' => $index])

            </div>
            
        </div>
    </div>

    {{-- Sezione Grigia per i dettagli tecnici --}}
    <div class="bg-light border-top py-5 text-dark">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="border-bottom pb-3">Talent</h3>
                    <p class="small"><strong>Art by:</strong> {{ implode(', ', $comic['artists']) }}</p>
                    <p class="small"><strong>Written by:</strong> {{ implode(', ', $comic['writers']) }}</p>
                </div>
                <div class="col-6">
                    <h3 class="border-bottom pb-3">Specs</h3>
                    <p class="small"><strong>Series:</strong> {{ $comic['series'] }}</p>
                    <p class="small"><strong>U.S. Price:</strong> {{ $comic['price'] }}</p>
                    <p class="small"><strong>On Sale Date:</strong> {{ $comic['sale_date'] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection