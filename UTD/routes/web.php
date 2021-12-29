<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientPanelCotroller;
use App\Http\Controllers\AddOrderController;

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

Route::post('/findOrder', [AddOrderController::class, 'findOrder'])->name('findOrder');

Auth::routes();

Route::middleware(['auth', 'verified'])->group(function() {

    Route::get('/home', [App\Http\Controllers\clientPanelCotroller::class, 'index']);
        
    Route::post('/senderAddress', [App\Http\Controllers\clientPanelCotroller::class, 'senderAddress'])->name('senderAddress');
    Route::post('/deliveryAddress', [App\Http\Controllers\clientPanelCotroller::class, 'deliveryAddress'])->name('deliveryAddress');
    Route::post('/paymentMethods', [App\Http\Controllers\clientPanelCotroller::class, 'paymentMethods']);

    Route::get('/backToSenderAddress', [App\Http\Controllers\clientPanelCotroller::class, 'backToSenderAddress']);
    Route::get('/backToDeliveryAddress', [App\Http\Controllers\clientPanelCotroller::class, 'backToDeliveryAddress']);

    Route::get('/addOrder/{id}', [App\Http\Controllers\AddOrderController::class, 'createOrder']);


    Route::middleware(['can:isWorker'])->group(function() {
        Route::get('/magazine', [App\Http\Controllers\workerPanelController::class, 'index']);
        
        Route::post('/changeSort', [App\Http\Controllers\workerPanelController::class, 'changeSort']);
    });
});


Route::get('/destroy', [App\Http\Controllers\clientPanelCotroller::class, 'destroy']);