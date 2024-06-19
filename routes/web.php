<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgeController;

Route::get('/', function () {
    return view('age.form');
});

Route::get('/age', [AgeController::class, 'show']);
