<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

Route::get('/hom', [ItemsController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});
