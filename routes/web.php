<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\PropertyDetailsController;
use App\Http\Controllers\LoginController;

// use App\Http\Controllers\Controller;
// use App\Http\Controllers\MainDashboardController;
// use App\Http\Controllers\HomeDashboardController;
// use App\Http\Controllers\PropertyDashboardController;
// use App\Http\Controllers\SiteDashboardController;
// use App\Http\Controllers\CategoryDashboardController;
// use App\Http\Controllers\CustomerDashboardController;
// use App\Http\Controllers\ProfileDashboardController;
// use App\Http\Controllers\ContactsControllerController;
// use App\Http\Controllers\AboutControllerController;
// use App\Http\Controllers\SiteController;

use App\Http\Controllers\AssetsControllerController;
use App\Http\Controllers\SitesControllerController;
use App\Http\Controllers\CategoriesControllerController;
use App\Http\Controllers\CustomersControllerController;
use App\Http\Controllers\ProfilesControllerController;
use App\Http\Controllers\DashboardController;



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
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/property', [AssetsControllerController::class, 'index']);
    Route::get('/site', [SitesControllerController::class, 'index']);
    Route::get('/category', [CategoriesControllerController::class, 'index']);
    Route::get('/customer', [CustomersControllerController::class, 'index']);
    Route::get('/profile', [ProfilesControllerController::class, 'index']);
});