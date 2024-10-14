<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;
use App\Models\BestSeller;
use App\Models\FeaturedRelease;
use App\Models\MarvelItem;
use App\Http\Controllers\SubscriptionController;

// Agrega esta línea al archivo routes/web.php
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');


Route::get('/', function () {
    $description = 'Descubre el emocionante mundo del manga en nuestra tienda. 
    Desde los clásicos hasta las últimas novedades, encuentra tus historias favoritas 
    y sumérgete en universos increíbles.';

    $featuredReleases = FeaturedRelease::all(); 
    $marvelItems = MarvelItem::all(); 
    $bestSellers = BestSeller::all(); 

    return view('index', compact('description', 'featuredReleases', 'marvelItems', 'bestSellers'));
})->name('home');

/**
 * Rutas de los productos
 */
Route::get('manga', [MangaController::class, 'index'])->name('manga.index');
Route::get('manga/{id}', [MangaController::class, 'show'])->name('manga.show');

Route::get('comic', [ComicController::class, 'index'])->name('comic.index');
Route::get('comic/{id}', [ComicController::class, 'show'])->name('comic.show');

Route::get('book', [BookController::class, 'index'])->name('book.index');
Route::get('book/{id}', [BookController::class, 'show'])->name('book.show');

Route::get('zonakids', function(){
    return view('zonakids/index');
})->name('zonakid.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
