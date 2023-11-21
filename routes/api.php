<?php
use  App\Http\Controllers\OrderController;
use  App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('products', ProductController::class);
Route::get('/productos', [ProductController::class, 'index']);
Route::post('/orders', [OrderController::class,"store"]);
Route::get('/orders', [OrderController::class, 'index']);
Route::put('/orders/{id}/status', [OrderController::class, 'updateStatus']);
Route::get('/orders/user/{identifier}', [OrderController::class, "getOrdersByUser"]);
Route::put('/orders/{id}/updateEstado', [OrderController::class, "updateEstado"]);
Route::post('/login',[AuthController::class,"autenticar"]);
