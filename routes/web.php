<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teste/{valor}', function ($valor) {
    return "Você digitou: {$valor}";
});
Route::get('/teste', function () {
    return view('teste');
});

Route::get('/teste/{valor1}/{valor2}', function ($valor1, $valor2) {
    $soma = $valor1 + $valor2;
    return "Soma: {$soma}";
});

Route::get