<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\PropertyDetailsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainDashboardController;
use App\Http\Controllers\HomeDashboardController;
use App\Http\Controllers\PropertyDashboardController;
use App\Http\Controllers\SiteDashboardController;
use App\Http\Controllers\CategoryDashboardController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\ProfileDashboardController;

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
Route::get('/login', [LoginController::class, 'show']);
Route::group(['prefix'=>'dashboard'], function()
{
    # code...
    Route::get('/', [MainDashboardController::class, 'show']);
    Route::get('/property', [PropertyDashboardController::class, 'show']);
    Route::get('/site', [SiteDashboardController::class, 'show']);
    Route::get('/category', [CategoryDashboardController::class, 'show']);
    Route::get('/customer', [CustomerDashboardController::class, 'show']);
    Route::get('/profile', [ProfileDashboardController::class, 'show']);
});