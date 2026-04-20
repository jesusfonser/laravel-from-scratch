<?php

use Illuminate\Support\Facades\Route;

Route::view("/hola", "hola", [
    "saludo" => "Holiwiiiis"
]);

Route::get('/', function () {
    return view('welcome');
});

Route::view("/contacto", "contacto");