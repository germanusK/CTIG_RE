<?php

use App\Http\Controllers\AssetsController;
use App\Models\User;
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

// Route::middleware('auth:api')->group(
//     Route::get('/user', function (Request $request) {
//         return $request->user();
//     }),
//     Route::get('users', [User::class, 'showdb']),
//     Route::get('/users/{id}', [UserDetails::class, 'showdb']),
//     Route::get('/assets', [AssetsController::class, 'show']),
//     // Route::get('assets/{id}', [AssetDetailsController::class, 'showdb']),
// );


    Route::get('/user', function (Request $request) {
        return $request->user();
    });


