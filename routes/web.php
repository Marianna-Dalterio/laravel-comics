<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Recuperiamo l'array dal file config/comics.php
    $comics_array = config("comics");

    // Passiamo l'array alla view 'home' con il nome 'comics' che è il nome della variabile che useremo in Blade; ricorda che il secondo argomento della funzione view() deve essere sempre un array associativo quindi coppia "chiave"=>"valore"
    return view('home', ["comics" => $comics_array]);
});



//rotta x visualizzare i dettagli della singola card

Route::get("/comics/{index}", function ($index) {
    $comics = config('comics');

    //verifichiamo che l'indice esista
    if (isset($comics[$index])) {
        $comic = $comics[$index];
        return view("comics_show", compact("comic", "index"));
    } else {
        abort(404);
    }
})->name("comics.show");
