<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return new \App\Http\Resources\UserResource($request->user());
});


Route::prefix('V1')->group(function () {
    Route::post('/login', [\App\Http\Controllers\Api\V1\AuthController::class, 'login']);
    Route::post('/update-user', [\App\Http\Controllers\Api\V1\UserController::class, 'update']);
    Route::post('/update-image', [\App\Http\Controllers\Api\V1\UserController::class, 'updateImage']);
    Route::delete('/delete-image', [\App\Http\Controllers\Api\V1\UserController::class, 'deleteImage']);

    Route::post('/register', [\App\Http\Controllers\Api\V1\AuthController::class, 'register']);
    Route::post('/register-clinic', [\App\Http\Controllers\Api\V1\AuthController::class, 'registerClinic']);


    Route::get('/countries', [\App\Http\Controllers\Api\V1\ApiController::class, 'countries']);
    Route::get('/cities', [\App\Http\Controllers\Api\V1\ApiController::class, 'cities']);
    Route::get('/bad-habits', [\App\Http\Controllers\Api\V1\ApiController::class, 'badHabits']);
    Route::get('/lifestyles', [\App\Http\Controllers\Api\V1\ApiController::class, 'lifestyles']);

    Route::middleware(['auth:sanctum', 'manager'])->prefix('web')->group(function () {
        Route::post('/doctor-add', [\App\Http\Controllers\Api\V1\ManagerController::class, 'doctorAdd']);
    });

    Route::prefix('/get-well')->group(function () {
        Route::post('/register', [\App\Http\Controllers\Api\V1\Client\AuthController::class, 'register']);
        Route::post('/login', [\App\Http\Controllers\Api\V1\Client\AuthController::class, 'login']);

        Route::middleware('auth:sanctum')->group(function () {
            Route::get('/client-by-token',[\App\Http\Controllers\Api\V1\Client\AuthController::class, 'get']);
        });
    });

    Route::prefix('/wellit')->group(function () {
        Route::post('/register', [\App\Http\Controllers\Api\V1\Wellit\AuthController::class, 'register']);
        Route::post('/login', [\App\Http\Controllers\Api\V1\Wellit\AuthController::class, 'login']);
    });
});
