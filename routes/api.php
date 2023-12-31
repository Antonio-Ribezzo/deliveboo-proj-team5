<?php

use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\Orders\OrderController;
use App\Http\Controllers\Api\RestaurantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TypeController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/restaurants', [RestaurantController::class, 'index']);
Route::get('/restaurants/{restaurant}/items', [RestaurantController::class, 'getItems']);
Route::get('/restaurants/{slug}', [RestaurantController::class, 'show']);

Route::get('/types', [TypeController::class, 'index']);

// Route::get('/orders/generate', [OrderController::class, 'generate']);
Route::post('/payment', [OrderController::class, 'getInfoCustomer']);