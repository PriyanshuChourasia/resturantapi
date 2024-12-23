<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemGroupController;
use App\Http\Controllers\ItemUnitController;
use App\Http\Controllers\UserTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/restaurant', function (Request $request) {
    return response()->json([
        'data' => [
            'name' => 'Priyanshu Chourasia',
            'email' => 'priyanshuchourasia916@gmail.com',
            'occupation' => 'Software Developer'
        ],
        'status' => true,
    ], 200);
});


Route::apiResource('user_types', UserTypeController::class);
Route::apiResource('items', ItemController::class);
Route::apiResource('item_groups', ItemGroupController::class);
Route::apiResource('item_categories', ItemCategoryController::class);
Route::apiResource('item_units', ItemUnitController::class);



Route::prefix('auth/')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
});
