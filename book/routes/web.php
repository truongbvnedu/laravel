<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('books',bookController::class);