<?php

use App\Http\Controllers\CalculosController;
use App\Http\Controllers\keepinhoController;
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

Route::get('/calc/somar/{x}/{y}', [CalculosController::class, 'somar']);

Route::get('/calc/subtrair/{x}/{y}', [CalculosController::class, 'subtrair']);

Route::get('/calc/multiplicar/{x}/{y}', [CalculosController::class, 'multiplicar']);

Route::get('/calc/dividir/{x}/{y}', [CalculosController::class, 'dividir']);

Route::get('/calc/quadrado/{x}', [CalculosController::class, 'quadrado']);

//keepinho
Route::prefix('/keep')-> group(function () {
    Route::get('/', [keepinhoController::class, 'index'])->name('keep');
    Route::post('/gravar', [keepinhoController::class,'gravar'])->name('keep.gravar');

    Route::get('/editar/{nota}', [keepinhoController::class,'editar'])->name('keep.editar');
    Route::put('/editar', [keepinhoController::class, 'editar'])->name('keep.editarGravar');

    Route::delete('/apagar/{nota}', [keepinhoController::class,'apagar'])->name('keep.apagar');

    Route::get('/lixeira', [keepinhoController::class,'lixeira'])->name('keep.lixeira');
    
    Route::get('/restaurar/{nota}', [keepinhoController::class, 'restaurar'])->name('keep.restaurar');
});