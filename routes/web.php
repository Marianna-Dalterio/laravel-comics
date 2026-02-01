<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $salute = "Hello world";
    return view('home', compact("salute"));
});
