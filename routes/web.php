<?php

use App\Http\Controllers\CepController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cep', [CepController::class, 'index'])
    ->name('cep.index');

Route::post('/cep', [CepController::class, 'consultar'])
    ->name('cep.consultar');