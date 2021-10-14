<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\PropertyDetailsController;

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

Route::get('/', function () {
    return view('front-end.welcome');
});
Route::get('/property', [PropertyController::class, 'show']);
Route::get('/details', [PropertyDetailsController::class, 'show']);
Route::get('/testimony', [TestimonyController::class, 'show']);
Route::get('/contact', [ContactController::class, 'show']);
Route::get('/about', [AboutController::class, 'show']);
