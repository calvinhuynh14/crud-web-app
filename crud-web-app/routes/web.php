<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
Route::get('/', function () {
    return view('home');
});

Route::get('/manage', [ItemController::class, 'index'])->name('manage');
Route::post('/manage', [ItemController::class, 'store'])->name('manage.store');
Route::put('/manage/{id}', [ItemController::class, 'update'])->name('manage.update');
Route::delete('/manage/{id}', [ItemController::class, 'destroy'])->name('manage.destroy');

Route::get('/search', [ItemController::class, 'search'])->name('search');

Route::get('/about', function () {
    return view('about');
});
