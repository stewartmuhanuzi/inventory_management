<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoriesController;
use \App\Http\Controllers\BrandsController;
use App\Http\Controllers\SizesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Categories Routes
    Route::resource('categories', CategoriesController::class);
    // Brands Routes
    Route::resource('brands', BrandsController::class);
    //Sizes Routes
    Route::resource('sizes', SizesController::class);
});

