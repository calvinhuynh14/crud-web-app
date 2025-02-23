<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return view('home');
});

Route::get('/manage', [ItemController::class, 'index'])->name('manage');
Route::post('/manage', [ItemController::class, 'store'])->name('manage.store');
Route::put('/manage/{id}', [ItemController::class, 'update'])->name('manage.update');
Route::delete('/manage/{id}', [ItemController::class, 'destroy'])->name('manage.destroy');

Route::get('/search', [SearchController::class, 'showSearch'])->name('search');
Route::get('/search/results', [SearchController::class, 'search'])->name('search.results');

Route::get('/about', function () {
    return view('about');
});
