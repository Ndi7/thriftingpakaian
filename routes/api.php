<?php

use App\Http\Controllers\checkoutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/midtrans-callback', [checkoutController::class,'callback']);

Route::middleware('auth')->group(function () {
    Route::post('/products/{id}/keep', [produkController::class, 'keepProduct']);
    Route::post('/products/{id}/buy', [produkController::class, 'buyProduct']);


});
