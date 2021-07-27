<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
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

Route::get('/', [ProductController::class, 'showProducts'], function () {
    return view('showProducts');
});

Route::get('showProducts', [ProductController::class, 'showProducts'])->name('showProducts');
Route::get('/buynow/{id}', [ProductController::class, 'buynow'])->name('buy');
Route::post('clientform', [ClientController::class, 'clientform']);
Route::view('clientform', 'clientform');
Route::get('showClients', [ClientController::class, 'showClients'])->name('clients');
Route::get('showUnAvailableProducts', [ProductController::class, 'showUnAvailableProducts'])->name('unavailableproducts');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
