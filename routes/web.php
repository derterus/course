<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorsController;

Route::get('/wellCUM', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contacts', function () {
    return view('contacts');
});

Route::resource('doctors',DoctorsController::class);
