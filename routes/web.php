<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OeuvresdartController;

Route::resource('categories', CategoryController::class);
Route::resource('artworks', OeuvresdartController::class);

