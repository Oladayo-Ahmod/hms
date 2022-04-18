<?php

use App\Http\Controllers\UserController;
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
//  protected pages
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/authenticated',[UserController::class,'authenticated']);
    Route::post('/contact',[]);
    Route::post('/logout',[UserController::class,'logout']);
});

// common routes
Route::post('/register',[UserController::class,'store']); // register route
Route::post('/login',[UserController::class,'login']); // login route
Route::get('/te',[UserController::class,'index']); // login route
Route::get('/session',[UserController::class,'session']);