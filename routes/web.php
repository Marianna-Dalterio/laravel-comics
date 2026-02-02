<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Recuperiamo l'array dal file config/comics.php
    $comics_array = config("comics");

    // Passiamo l'array alla view 'home' con il nome 'comics'
    return view('home', ['comics' => $comics_array]);
});
