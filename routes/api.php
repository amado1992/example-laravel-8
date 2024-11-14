<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//User
Route::post('/user', [UserController::class,'store']);

//Login
//Route::post('/login', [LoginController::class,'authenticate']);

Route::post('/register', [AuthController::class,'register']);

Route::post('/login', [AuthController::class,'login']);

Route::group(['middleware' => ['auth:sanctum']], function (){

    Route::get('/posts', [PostController::class,'index']);//GetAll

    Route::post('/post', [PostController::class,'store']);

    Route::get('/posts/{id}', [PostController::class,'show']);//Get(id)

    Route::put('/posts/{id}', [PostController::class,'update']);

    Route::delete('/posts/{id}', [PostController::class,'destroy']);

    Route::post('/logout', [AuthController::class,'logout']);

});
