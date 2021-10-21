<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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


Route::get('/test', function(Request $request){
    return "Authenticated";
});

Route::group(['prefix'=>'dashboard', 'as'=>'dashboard'], function(){

    Route::get('/users', [UsersController::class, 'readMany']);
    Route::get('/users/{id}', [UsersController::class, 'readOne']);
    Route::post('/users', [UsersController::class, 'writeMany']);
    Route::post('users/{id}', [UsersController::class, 'writeOne']);
    Route::put('/users', [UsersController::class, 'putMany']);
    Route::put('/users/{id}', [UsersController::class, 'putOne']);
    Route::delete('/users', [UsersController::class, 'deleteMany']);
    Route::delete('/users/{id}', [UsersController::class, 'deleteOne']);
    


    Route::get('/assets', [AssetsController::class, 'readMany']);
    Route::get('/assets/{id}', [AssetsController::class, 'readOne']);
    Route::post('/assets', [AssetsController::class, 'writeMany']);
    Route::post('/assets/{id}', [AssetsController::class, 'writeOne']);
    Route::put('/assets', [AssetsController::class, 'putMany']);
    Route::put('/assets/{id}', [AssetsController::class, 'putOne']);
    Route::delete('/assets', [AssetsController::class, 'deleteMany']);
    Route::delete('/assets/{id}', [AssetsController::class, 'deleteOne']);


    Route::get('/sites', [SitesController::class, 'readMany']);
    Route::get('/sites/{id}', [SitesController::class, 'readOne']);
    Route::post('/sites', [SitesController::class, 'writeMany']);
    Route::post('/sites/{id}', [SitesController::class, 'writeOne']);
    Route::put('/sites', [SitesController::class, 'putMany']);
    Route::put('/sites/{id}', [SitesController::class, 'putOne']);
    Route::delete('/sites', [SitesController::class, 'deleteMany']);
    Route::delete('/sites/{id}', [SitesController::class, 'deleteOne']);


    Route::get('/categories', [CategoriesController::class, 'readMany']);
    Route::get('/categories/{id}', [CategoriesController::class, 'readOne']);
    Route::post('/categories', [CategoriesController::class, 'writeMany']);
    Route::post('/categories/{id}', [CategoriesController::class, 'writeOne']);
    Route::put('/categories', [CategoriesController::class, 'putMany']);
    Route::put('/categories/{id}', [CategoriesController::class, 'putOne']);
    Route::delete('/categories', [CategoriesController::class, 'deleteMany']);
    Route::delete('/categories/{id}', [CategoriesController::class, 'deleteOne']);
    

    Route::get('/transactions', [TransactionsController::class, 'readMany']);
    Route::get('/transactions/{id}', [TransactionsController::class, 'readOne']);
    Route::post('/transactions', [TransactionsController::class, 'writeMany']);
    Route::post('/transactions/{id}', [TransactionsController::class, 'writeOne']);
    Route::put('/transactions', [TransactionsController::class, 'putMany']);
    Route::put('/transactions/{id}', [TransactionsController::class, 'putOne']);
    Route::delete('/transactions', [TransactionsController::class, 'deleteMany']);
    Route::delete('/transactions/{id}', [TransactionsController::class, 'deleteOne']);
    

    Route::get('/roles', [RolesController::class, 'readMany']);
    Route::get('/roles/{id}', [RolesController::class, 'readOne']);
    Route::post('/roles', [RolesController::class, 'writeMany']);
    Route::post('/roles/{id}', [RolesController::class, 'writeOne']);
    Route::put('/roles', [RolesController::class, 'putMany']);
    Route::put('/roles/{id}', [RolesController::class, 'putOne']);
    Route::delete('/roles', [RolesController::class, 'deleteMany']);
    Route::delete('/roles/{id}', [RolesController::class, 'deleteOne']);
    

    Route::get('/testimonies', [TestimoniesController::class, 'readMany']);
    Route::get('/testimonies/{id}', [TestimoniesController::class, 'readOne']);
    // Route::post('/testimonies', [TestimoniesController::class, 'writeMany']);
    // Route::post('testimonies/{id}', [TestimoniesController::class, 'writeOne']);
    // Route::put('/testimonies', [TestimoniesController::class, 'putMany']);
    // Route::put('/testimonies/{id}', [TestimoniesController::class, 'putOne']);
    Route::delete('/testimonies', [TestimoniesController::class, 'deleteMany']);
    Route::delete('/testimonies/{id}', [TestimoniesController::class, 'deleteOne']);
    

    Route::get('/appointments', [AppintmentsController::class, 'readMany']);
    Route::get('/appointments/{id}', [AppintmentsController::class, 'readOne']);
    Route::post('/appointments', [AppintmentsController::class, 'writeMany']);
    Route::post('appointments/{id}', [AppintmentsController::class, 'writeOne']);
    Route::put('/appointments', [AppintmentsController::class, 'putMany']);
    Route::put('/appointments/{id}', [AppintmentsController::class, 'putOne']);
    Route::delete('/appointments', [AppintmentsController::class, 'deleteMany']);
    Route::delete('/appointments/{id}', [AppintmentsController::class, 'deleteOne']);
    

    Route::get('/profiles', [ProfilesController::class, 'readMany']);
    Route::get('/profiles/{id}', [ProfilesController::class, 'readOne']);
    Route::post('/profiles', [ProfilesController::class, 'writeMany']);
    Route::post('profiles/{id}', [ProfilesController::class, 'writeOne']);
    Route::put('/profiles', [ProfilesController::class, 'putMany']);
    Route::put('/profiles/{id}', [ProfilesController::class, 'putOne']);
    Route::delete('/profiles', [ProfilesController::class, 'deleteMany']);
    Route::delete('/profiles/{id}', [ProfilesController::class, 'deleteOne']);
    

    Route::get('/permissions', [PermissionsController::class, 'readMany']);
    Route::get('/permissions/{id}', [PermissionsController::class, 'readOne']);
    Route::post('/permissions', [PermissionsController::class, 'writeMany']);
    Route::post('permissions/{id}', [PermissionsController::class, 'writeOne']);
    Route::put('/permissions', [PermissionsController::class, 'putMany']);
    Route::put('/permissions/{id}', [PermissionsController::class, 'putOne']);
    Route::delete('/permissions', [PermissionsController::class, 'deleteMany']);
    Route::delete('/permissions/{id}', [PermissionsController::class, 'deleteOne']);
    

    Route::get('/locations', [LocationsController::class, 'readMany']);
    Route::get('/locations/{id}', [LocationsController::class, 'readOne']);
    Route::post('/locations', [LocationsController::class, 'writeMany']);
    Route::post('locations/{id}', [LocationsController::class, 'writeOne']);
    Route::put('/locations', [LocationsController::class, 'putMany']);
    Route::put('/locations/{id}', [LocationsController::class, 'putOne']);
    Route::delete('/locations', [LocationsController::class, 'deleteMany']);
    Route::delete('/locations/{id}', [LocationsController::class, 'deleteOne']);
    


    Route::get('/about', [AboutController::class, 'readMany']);
    Route::get('/about/{id}', [AboutController::class, 'readOne']);
    Route::post('/about', [AboutController::class, 'writeMany']);
    Route::post('about/{id}', [AboutController::class, 'writeOne']);
    Route::put('/about', [AboutController::class, 'putMany']);
    Route::put('/about/{id}', [AboutController::class, 'putOne']);
    Route::delete('/about', [AboutController::class, 'deleteMany']);
    Route::delete('/about/{id}', [AboutController::class, 'deleteOne']);
    


    Route::get('/contacts', [ContactsController::class, 'readMany']);
    Route::get('/contacts/{id}', [ContactsController::class, 'readOne']);
    Route::post('/contacts', [ContactsController::class, 'writeMany']);
    Route::post('contacts/{id}', [ContactsController::class, 'writeOne']);
    Route::put('/contacts', [ContactsController::class, 'putMany']);
    Route::put('/contacts/{id}', [ContactsController::class, 'putOne']);
    Route::delete('/contacts', [ContactsController::class, 'deleteMany']);
    Route::delete('/contacts/{id}', [ContactsController::class, 'deleteOne']);
    
});



Route::group(['prefix'=>'frontend', 'as'=>'frontend'], function(){

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
    // Route::post('/assets', [AssetsController::class, 'writeMany']);
    // Route::post('/assets/{id}', [AssetsController::class, 'writeOne']);
    // Route::put('/assets', [AssetsController::class, 'putMany']);
    // Route::put('/assets/{id}', [AssetsController::class, 'putOne']);
    // Route::delete('/assets', [AssetsController::class, 'deleteMany']);
    // Route::delete('/assets/{id}', [AssetsController::class, 'deleteOne']);


    Route::get('/sites', [SitesController::class, 'readMany']);
    Route::get('/sites/{id}', [SitesController::class, 'readOne']);
    // Route::post('/sites', [SitesController::class, 'writeMany']);
    // Route::post('/sites/{id}', [SitesController::class, 'writeOne']);
    // Route::put('/sites', [SitesController::class, 'putMany']);
    // Route::put('/sites/{id}', [SitesController::class, 'putOne']);
    // Route::delete('/sites', [SitesController::class, 'deleteMany']);
    // Route::delete('/sites/{id}', [SitesController::class, 'deleteOne']);


    Route::get('/categories', [CategoriesController::class, 'readMany']);
    Route::get('/categories/{id}', [CategoriesController::class, 'readOne']);
    // Route::post('/categories', [CategoriesController::class, 'writeMany']);
    // Route::post('/categories/{id}', [CategoriesController::class, 'writeOne']);
    // Route::put('/categories', [CategoriesController::class, 'putMany']);
    // Route::put('/categories/{id}', [CategoriesController::class, 'putOne']);
    // Route::delete('/categories', [CategoriesController::class, 'deleteMany']);
    // Route::delete('/categories/{id}', [CategoriesController::class, 'deleteOne']);
    

    Route::get('/transactions', [TransactionsController::class, 'readMany']);
    Route::get('/transactions/{id}', [TransactionsController::class, 'readOne']);
    // Route::post('/transactions', [TransactionsController::class, 'writeMany']);
    // Route::post('/transactions/{id}', [TransactionsController::class, 'writeOne']);
    // Route::put('/transactions', [TransactionsController::class, 'putMany']);
    // Route::put('/transactions/{id}', [TransactionsController::class, 'putOne']);
    // Route::delete('/transactions', [TransactionsController::class, 'deleteMany']);
    // Route::delete('/transactions/{id}', [TransactionsController::class, 'deleteOne']);
    

    // Route::get('/roles', [RolesController::class, 'readMany']);
    // Route::get('/roles/{id}', [RolesController::class, 'readOne']);
    // Route::post('/roles', [RolesController::class, 'writeMany']);
    // Route::post('/roles/{id}', [RolesController::class, 'writeOne']);
    // Route::put('/roles', [RolesController::class, 'putMany']);
    // Route::put('/roles/{id}', [RolesController::class, 'putOne']);
    // Route::delete('/roles', [RolesController::class, 'deleteMany']);
    // Route::delete('/roles/{id}', [RolesController::class, 'deleteOne']);
    

    Route::get('/testimonies', [TestimoniesController::class, 'readMany']);
    Route::get('/testimonies/{id}', [TestimoniesController::class, 'readOne']);
    Route::post('/testimonies', [TestimoniesController::class, 'writeMany']);
    Route::post('testimonies/{id}', [TestimoniesController::class, 'writeOne']);
    // Route::put('/testimonies', [TestimoniesController::class, 'putMany']);
    // Route::put('/testimonies/{id}', [TestimoniesController::class, 'putOne']);
    // Route::delete('/testimonies', [TestimoniesController::class, 'deleteMany']);
    // Route::delete('/testimonies/{id}', [TestimoniesController::class, 'deleteOne']);
    

    Route::get('/appointments', [AppintmentsController::class, 'readMany']);
    Route::get('/appointments/{id}', [AppintmentsController::class, 'readOne']);
    Route::post('/appointments', [AppintmentsController::class, 'writeMany']);
    Route::post('appointments/{id}', [AppintmentsController::class, 'writeOne']);
    // Route::put('/appointments', [AppintmentsController::class, 'putMany']);
    // Route::put('/appointments/{id}', [AppintmentsController::class, 'putOne']);
    // Route::delete('/appointments', [AppintmentsController::class, 'deleteMany']);
    // Route::delete('/appointments/{id}', [AppintmentsController::class, 'deleteOne']);
    

    // Route::get('/profiles', [ProfileController::class, 'readMany']);
    // Route::get('/profiles/{id}', [ProfileController::class, 'readOne']);
    // Route::post('/profiles', [ProfileController::class, 'writeMany']);
    // Route::post('profiles/{id}', [ProfileController::class, 'writeOne']);
    // Route::put('/profiles', [ProfileController::class, 'putMany']);
    // Route::put('/profiles/{id}', [ProfileController::class, 'putOne']);
    // Route::delete('/profiles', [ProfileController::class, 'deleteMany']);
    // Route::delete('/profiles/{id}', [ProfileController::class, 'deleteOne']);
    

    // Route::get('/permissions', [PermissionsController::class, 'readMany']);
    // Route::get('/permissions/{id}', [PermissionsController::class, 'readOne']);
    // Route::post('/permissions', [PermissionsController::class, 'writeMany']);
    // Route::post('permissions/{id}', [PermissionsController::class, 'writeOne']);
    // Route::put('/permissions', [PermissionsController::class, 'putMany']);
    // Route::put('/permissions/{id}', [PermissionsController::class, 'putOne']);
    // Route::delete('/permissions', [PermissionsController::class, 'deleteMany']);
    // Route::delete('/permissions/{id}', [PermissionsController::class, 'deleteOne']);
    

    Route::get('/locations', [LocationsController::class, 'readMany']);
    Route::get('/locations/{id}', [LocationsController::class, 'readOne']);
    // Route::post('/locations', [LocationsController::class, 'writeMany']);
    // Route::post('locations/{id}', [LocationsController::class, 'writeOne']);
    // Route::put('/locations', [LocationsController::class, 'putMany']);
    // Route::put('/locations/{id}', [LocationsController::class, 'putOne']);
    // Route::delete('/locations', [LocationsController::class, 'deleteMany']);
    // Route::delete('/locations/{id}', [LocationsController::class, 'deleteOne']);
    

    Route::get('/about', [AboutController::class, 'readMany']);
    Route::get('/about/{id}', [AboutController::class, 'readOne']);
   

    Route::get('/contacts', [ContactsController::class, 'readMany']);
    Route::get('/contacts/{id}', [ContactsController::class, 'readOne']);
   
});