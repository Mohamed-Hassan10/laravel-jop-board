<?php

use App\Http\Controllers\JopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', function () {
    return "new";
});

Route::get('/jop', [JopController::class, 'index']);
