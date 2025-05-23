<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
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

Route::post('/register', [UserController::class, 'storeUser']);
Route::post('/register2', [UserController::class, 'storeProfile']);
Route::post('/login', [UserController::class, 'loginUser']);
Route::get('/', [ItemController::class, 'index']);

Route::middleware('auth')->group(function () {
        Route::get('/mypage', [ItemController::class, 'index']);
        Route::get('/register2', [UserController::class, 'profile']);
    });