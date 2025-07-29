<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/', function () {
    return view('welcome');
});

// Weather route
Route::get('/weather', [WeatherController::class, 'index']);