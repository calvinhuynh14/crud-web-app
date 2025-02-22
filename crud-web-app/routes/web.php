<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
Route::get('/', function () {
    return view('home');
});

Route::get('/manage', [ItemController::class, 'index'])->name('manage');
Route::post('/manage', [ItemController::class, 'store'])->name('items.store');

Route::get('/search', function () {
    return view('search');
});

Route::get('/about', function () {
    return view('about');
});
