<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TypeController;
use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\CharacterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;

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
Route::get('/types', [TypeController::class, 'index']);
Route::get('/items', [ItemController::class, 'index']);
Route::get('/characters', [CharacterController::class, 'index']);
Route::get('/characters/{slug}', [CharacterController::class, 'show']);
Route::get('/items/{slug}', [ItemController::class, 'show']);
Route::get('/types/{slug}', [TypeController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);
