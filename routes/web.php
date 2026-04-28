<?php

use Illuminate\Support\Facades\Route;

Route::view("/hola", "hola", [
    "saludo" => "Holiwiiiis",
    "persona" => request("person", "anon")
]);

Route::get('/', function () {
    return view('ideas');
});

//Route::view("/contacto", "contacto");

Route::get("/contacto", function(){
    return view("contacto", ["alv" => [1, 2, 3]]);
});