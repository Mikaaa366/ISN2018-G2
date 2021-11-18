<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientPanelCotroller;

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

Auth::routes();

Route::middleware(['auth', 'verified'])->group(function() {
    Route::middleware(['can:isClient'])->group(function() {
        Route::get('/home', [App\Http\Controllers\clientPanelCotroller::class, 'index']);
        Route::post('/deliveryAddress', [App\Http\Controllers\clientPanelCotroller::class, 'deliveryAddress']);
        
    });
});
