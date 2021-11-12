<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\AssetsController;
use App\Http\Controllers\SitesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\TestimoniesController;

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
    return $request->user();
});


Route::group(['prefix'=>'dashboard'], function(){

    Route::get('/users/{id}', [UsersController::class, 'readOne']);
    Route::get('/users', [UsersController::class, 'readMany']);
    Route::post('/users/one', [UsersController::class, 'writeOne']);
    Route::post('/users', [UsersController::class, 'writeMany']);
    Route::put('/users/{id}', [UsersController::class, 'putOne']);
    Route::put('/users', [UsersController::class, 'putMany']);
    Route::delete('/users/{id}', [UsersController::class, 'deleteOne']);
    Route::delete('/users', [UsersController::class, 'deleteMany']);
    
    

    Route::get('/assets/{id}', [AssetsController::class, 'readOne']);
    Route::get('/assets', [AssetsController::class, 'readMany']);
    Route::post('/assets/one', [AssetsController::class, 'writeOne']);
    Route::post('/assets', [AssetsController::class, 'writeMany']);
    Route::put('/assets/{id}', [AssetsController::class, 'putOne']);
    Route::put('/assets', [AssetsController::class, 'putMany']);
    Route::delete('/assets/{id}', [AssetsController::class, 'deleteOne']);
    Route::delete('/assets', [AssetsController::class, 'deleteMany']);
    


    Route::get('/sites/trending', [SitesController::class, 'trending_read']);
    Route::get('/sites/shuffle', [SitesController::class, 'shuffle_read']);
    Route::get('/maps/{fname}', [SitesController::class, 'get_site_map']);
    Route::get('/sites/{id}', [SitesController::class, 'readOne']);
    Route::get('/sites', [SitesController::class, 'readMany']);
    Route::post('/sites/one', [SitesController::class, 'writeOne']);
    Route::post('/sites', [SitesController::class, 'writeMany']);
    Route::put('/sites/{id}', [SitesController::class, 'putOne']);
    Route::put('/sites', [SitesController::class, 'putMany']);
    Route::delete('/sites/{id}', [SitesController::class, 'deleteOne']);
    Route::delete('/sites', [SitesController::class, 'deleteMany']);
    


    Route::get('/categories/{id}', [CategoriesController::class, 'readOne']);
    Route::get('/categories', [CategoriesController::class, 'readMany']);
    Route::post('/categories/{id}', [CategoriesController::class, 'writeOne']);
    Route::post('/categories', [CategoriesController::class, 'writeMany']);
    Route::put('/categories/{id}', [CategoriesController::class, 'putOne']);
    Route::put('/categories', [CategoriesController::class, 'putMany']);
    Route::delete('/categories/{id}', [CategoriesController::class, 'deleteOne']);
    Route::delete('/categories', [CategoriesController::class, 'deleteMany']);
    
    

    Route::get('/transactions/{id}', [TransactionsController::class, 'readOne']);
    Route::get('/transactions', [TransactionsController::class, 'readMany']);
    Route::post('/transactions/{id}', [TransactionsController::class, 'writeOne']);
    Route::post('/transactions', [TransactionsController::class, 'writeMany']);
    Route::put('/transactions/{id}', [TransactionsController::class, 'putOne']);
    Route::put('/transactions', [TransactionsController::class, 'putMany']);
    Route::delete('/transactions/{id}', [TransactionsController::class, 'deleteOne']);
    Route::delete('/transactions', [TransactionsController::class, 'deleteMany']);
    
    

    Route::get('/roles/{id}', [RolesController::class, 'readOne']);
    Route::get('/roles', [RolesController::class, 'readMany']);
    Route::post('/roles/{id}', [RolesController::class, 'writeOne']);
    Route::post('/roles', [RolesController::class, 'writeMany']);
    Route::put('/roles/{id}', [RolesController::class, 'putOne']);
    Route::put('/roles', [RolesController::class, 'putMany']);
    Route::delete('/roles/{id}', [RolesController::class, 'deleteOne']);
    Route::delete('/roles', [RolesController::class, 'deleteMany']);
    
    

    Route::get('/testimonies/{id}', [TestimoniesController::class, 'readOne']);
    Route::get('/testimonies', [TestimoniesController::class, 'readMany']);
    // Route::post('/testimonies', [TestimoniesController::class, 'writeMany']);
    // Route::post('testimonies/{id}', [TestimoniesController::class, 'writeOne']);
    // Route::put('/testimonies', [TestimoniesController::class, 'putMany']);
    // Route::put('/testimonies/{id}', [TestimoniesController::class, 'putOne']);
    Route::delete('/testimonies/{id}', [TestimoniesController::class, 'deleteOne']);
    Route::delete('/testimonies', [TestimoniesController::class, 'deleteMany']);
    
    

    Route::get('/appointments/{id}', [AppointmentsController::class, 'readOne']);
    Route::get('/appointments', [AppointmentsController::class, 'readMany']);
    Route::post('appointments/{id}', [AppointmentsController::class, 'writeOne']);
    Route::post('/appointments', [AppointmentsController::class, 'writeMany']);
    Route::put('/appointments/{id}', [AppointmentsController::class, 'putOne']);
    Route::put('/appointments', [AppointmentsController::class, 'putMany']);
    Route::delete('/appointments/{id}', [AppointmentsController::class, 'deleteOne']);
    Route::delete('/appointments', [AppointmentsController::class, 'deleteMany']);
    
    

    Route::get('/profiles/{id}', [ProfilesController::class, 'readOne']);
    Route::get('/profiles', [ProfilesController::class, 'readMany']);
    Route::post('profiles/{id}', [ProfilesController::class, 'writeOne']);
    Route::post('/profiles', [ProfilesController::class, 'writeMany']);
    Route::put('/profiles/{id}', [ProfilesController::class, 'putOne']);
    Route::put('/profiles', [ProfilesController::class, 'putMany']);
    Route::delete('/profiles/{id}', [ProfilesController::class, 'deleteOne']);
    Route::delete('/profiles', [ProfilesController::class, 'deleteMany']);
    
    

    Route::get('/permissions/{id}', [PermissionsController::class, 'readOne']);
    Route::get('/permissions', [PermissionsController::class, 'readMany']);
    Route::post('/permissions/{id}', [PermissionsController::class, 'writeOne']);
    Route::post('/permissions', [PermissionsController::class, 'writeMany']);
    Route::put('/permissions/{id}', [PermissionsController::class, 'putOne']);
    Route::put('/permissions', [PermissionsController::class, 'putMany']);
    Route::delete('/permissions/{id}', [PermissionsController::class, 'deleteOne']);
    Route::delete('/permissions', [PermissionsController::class, 'deleteMany']);
    
    

    Route::get('/locations/{id}', [LocationsController::class, 'readOne']);
    Route::get('/locations', [LocationsController::class, 'readMany']);
    Route::post('locations/{id}', [LocationsController::class, 'writeOne']);
    Route::post('/locations', [LocationsController::class, 'writeMany']);
    Route::put('/locations/{id}', [LocationsController::class, 'putOne']);
    Route::put('/locations', [LocationsController::class, 'putMany']);
    Route::delete('/locations/{id}', [LocationsController::class, 'deleteOne']);
    Route::delete('/locations', [LocationsController::class, 'deleteMany']);
    
    


    Route::get('/about/{id}', [AboutController::class, 'readOne']);
    Route::get('/about', [AboutController::class, 'readMany']);
    Route::post('about/{id}', [AboutController::class, 'writeOne']);
    Route::post('/about', [AboutController::class, 'writeMany']);
    Route::put('/about/{id}', [AboutController::class, 'putOne']);
    Route::put('/about', [AboutController::class, 'putMany']);
    Route::delete('/about/{id}', [AboutController::class, 'deleteOne']);
    Route::delete('/about', [AboutController::class, 'deleteMany']);
    
    


    Route::get('/contacts/{id}', [ContactsController::class, 'readOne']);
    Route::get('/contacts', [ContactsController::class, 'readMany']);
    Route::post('contacts/{id}', [ContactsController::class, 'writeOne']);
    Route::post('/contacts', [ContactsController::class, 'writeMany']);
    Route::put('/contacts/{id}', [ContactsController::class, 'putOne']);
    Route::put('/contacts', [ContactsController::class, 'putMany']);
    Route::delete('/contacts/{id}', [ContactsController::class, 'deleteOne']);
    Route::delete('/contacts', [ContactsController::class, 'deleteMany']);
    
    
});



Route::group(['prefix'=>'frontend'], function(){

    Route::get('/users/login', [UsersController::class, 'login']);
    // Route::get('/users/{id}', [UsersController::class, 'readOne']);
    // Route::post('/users', [UsersController::class, 'writeMany']);
    // Route::post('users/{id}', [UsersController::class, 'writeOne']);
    // Route::put('/users', [UsersController::class, 'putMany']);
    // Route::put('/users/{id}', [UsersController::class, 'putOne']);
    // Route::delete('/users', [UsersController::class, 'deleteMany']);
    // Route::delete('/users/{id}', [UsersController::class, 'deleteOne']);
    


    Route::get('/assets', [AssetsController::class, 'readMany']);
    Route::get('/assets/{id}', [AssetsController::class, 'readOne']);

    Route::get('/sites/trending', [SitesController::class, 'trending_read']);
    Route::get('/sites/shuffle', [SitesController::class, 'shuffle_read']);
    Route::get('/sites', [SitesController::class, 'detail_read_many']);
    Route::get('/sites/{id}', [SitesController::class, 'readOne']);
    Route::get('/sites/latest', [SitesController::class, 'trending_read']);

    Route::get('/categories', [CategoriesController::class, 'readMany']);
    Route::get('/categories/{id}', [CategoriesController::class, 'readOne']);
    

    Route::get('/transactions', [TransactionsController::class, 'readMany']);
    Route::get('/transactions/{id}', [TransactionsController::class, 'readOne']);
    

    Route::get('/testimonies', [TestimoniesController::class, 'readMany']);
    Route::get('/testimonies/{id}', [TestimoniesController::class, 'readOne']);
    Route::post('/testimonies', [TestimoniesController::class, 'writeMany']);
    Route::post('testimonies/{id}', [TestimoniesController::class, 'writeOne']);
    

    Route::get('/appointments', [AppointmentsController::class, 'readMany']);
    Route::get('/appointments/{id}', [AppointmentsController::class, 'readOne']);
    Route::post('/appointments', [AppointmentsController::class, 'writeMany']);
    Route::post('appointments/{id}', [AppointmentsController::class, 'writeOne']);
    

    Route::get('/locations', [LocationsController::class, 'readMany']);
    Route::get('/locations/{id}', [LocationsController::class, 'readOne']);
    

    Route::get('/about', [AboutController::class, 'readMany']);
    Route::get('/about/{id}', [AboutController::class, 'readOne']);
   

    Route::get('/contacts', [ContactsController::class, 'readMany']);
    Route::get('/contacts/{id}', [ContactsController::class, 'readOne']);
   
});