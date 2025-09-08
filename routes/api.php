<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your authentication service.
| These routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group.
|
*/

// Health check endpoint
Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'service' => 'Authentication Service',
        'timestamp' => now()->toISOString()
    ]);
});

// Authentication routes
Route::prefix('auth')->group(function () {
    Route::post('/register', function () {
        return response()->json(['message' => 'Register endpoint - To be implemented']);
    });
    
    Route::post('/login', function () {
        return response()->json(['message' => 'Login endpoint - To be implemented']);
    });
    
    Route::post('/logout', function () {
        return response()->json(['message' => 'Logout endpoint - To be implemented']);
    });
    
    Route::post('/refresh', function () {
        return response()->json(['message' => 'Token refresh endpoint - To be implemented']);
    });
});

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
    Route::put('/user', function () {
        return response()->json(['message' => 'Update user endpoint - To be implemented']);
    });
});

// Password reset routes
Route::prefix('password')->group(function () {
    Route::post('/reset/request', function () {
        return response()->json(['message' => 'Password reset request - To be implemented']);
    });
    
    Route::post('/reset/confirm', function () {
        return response()->json(['message' => 'Password reset confirm - To be implemented']);
    });
});
