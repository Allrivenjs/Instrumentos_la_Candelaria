<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
//

Route::prefix('auth')->group(function (){
    Route::post('login',[AuthController::class, 'login'])->name('login');
    Route::post('register',[AuthController::class, 'register'])->name('register');
    Route::post('logout',[AuthController::class, 'logout'])->name('logout')->middleware('auth:sanctum');
});

Route::apiResource('products', ProductController::class);

Route::apiResource('categories', CategoryController::class);

