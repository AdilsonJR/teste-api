<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/** 
 * instalar jwt
 * estudar error randling 
 * polices
*/

use  App\Http\Controllers\{
    LojaController
};
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/stores', [LojaController::class, 'returnAllStores'])->name('stores.return.all.stores');
Route::get('/stores/{id}', [LojaController::class, 'returnStore'])->name('return.store');
Route::post('/stores', [LojaController::class, 'create'])->name('stores.create');
Route::put('/stores/{id}', [LojaController::class, 'update'])->name('stores.update');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
