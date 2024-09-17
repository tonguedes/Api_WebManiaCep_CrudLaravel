<?php

use App\Http\Controllers\ClientController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CepController;



Route::get('/',[ClientController::class, 'index']);

Route::get('/cep/{cep}',[CepController::class, '__invoke']);

Route::resource('clients', ClientController::class);
