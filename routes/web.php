<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OeuvresdartController;


use App\Http\Controllers\CategoryController;
use App\Models\Oeuvresdart;

// Routes pour les catégories
Route::resource('categories', CategoryController::class);

// Routes pour les œuvres d'art
Route::resource('artworks', OeuvresdartController::class);
