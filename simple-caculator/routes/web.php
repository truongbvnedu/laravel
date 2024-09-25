<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\caculateController;
Route::get('/', [caculateController::class, 'index']);
Route::get('/calculate', [caculateController::class, 'calculate'])->name('calculate');
