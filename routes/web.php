<?php

use App\Http\Controllers\LufixController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/lufus', [LufixController::class, 'index'])->name('lufix.index');
