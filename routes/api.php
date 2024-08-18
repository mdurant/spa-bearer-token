<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\LocationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

#Login User API
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


#User protected routes with Sanctum
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


#Create Token - SHA-256
Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});

#API Location protected routes with Sanctum
Route::middleware('auth:sanctum')->get('/locations', [LocationController::class, 'index']);


