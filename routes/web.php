<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/{id}', function ($id) {
//     return view('welcome');
// });

//route homepage
Route::get('/', [PageController::class, 'index'])->name('home');
//route products
Route::get('/product/{id}', [PageController::class, 'show'])->name('product');

