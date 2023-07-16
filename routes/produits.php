<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produits\ProduitsController;

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

Route::get('/produits', [ProduitsController::class, 'listing'])
                ->name('produits-listing');

Route::get('/produit/form', [ProduitsController::class, 'create'])
                ->name('produit-form');

Route::post('/produit/form', [ProduitsController::class, 'store'])
                ->name('produit-create');