<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AssetDetails;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\PropertyDetailsController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\AssetsController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteDetails;

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

Route::get('/', function(){return view('front-end.landing');});
Route::get('/home', function () {return view('front-end.welcome');});
Route::get('/property', [PropertyController::class, 'show']);
Route::get('/details', [PropertyDetailsController::class, 'show']);
Route::get('/testimony', [TestimonyController::class, 'show']);
Route::get('/contact', [ContactController::class, 'show']);
Route::get('/about', [AboutController::class, 'show']);
Route::get('/login', [LoginController::class, 'show']);



Route::group(['prefix'=>'/dashboard'], function()
{
    Route::get('/', [DashboardController::class, 'index']);
    Route::group(['prefix'=>'/property'], function(){
            Route::get('/', [AssetsController::class, 'index']);
            Route::post('/present_form', [AssetsController::class, 'store']);
            Route::get('/create', [AssetsController::class, 'create']);
            Route::get('/{id}/edit', [AssetsController::class, 'edit']);
            Route::get('/{id}/details', [AssetDetails::class, 'details']);
    });
    Route::group(['prefix'=>'/sites'], function(){
            
            Route::post('/create/process', [SiteController::class, 'store']);
            Route::get('/create', [SiteController::class, 'create']);
            Route::get('/{id}/edit', [SiteController::class, 'edit']);
            Route::get('/{id}/details', [SiteController::class, 'details']);
            Route::get('/{id}/on_delete', [SiteDetails::class, 'on_delete']);
            Route::get('/', [SiteController::class, 'index']);
    });
    Route::group(['prefix'=>'/categories'], function(){
            Route::get('/', [CategoriesController::class, 'index']);
            Route::get('/create', [CategoriesController::class, 'create']);
            Route::get('/{id}/edit', [CategoriesController::class, 'edit']);
            Route::get('/{id}/details', [CategoriesController::class, 'details']);
    });
    Route::group(['prefix'=>'/customers'], function(){
            Route::get('/', [CustomersController::class, 'index']);
            Route::get('/{id}/details', [CustomersController::class, 'details']);
    });
    Route::group(['prefix'=>'/profile'], function(){
            Route::get('/', [ProfilesController::class, 'index']);
            Route::get('/{id}/edit', [ProfilesController::class, 'edit']);
    });
});