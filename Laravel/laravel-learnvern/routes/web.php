<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('getBrandsData', [\App\Http\Controllers\BrandsController::class, 'getBrandsData']);
Route::get('getBrandsManyData', [\App\Http\Controllers\BrandsController::class, 'getBrandsManyData']);
Route::get('getDealersData', [\App\Http\Controllers\BrandsController::class, 'getDealersData']);
Route::get('belogsToManyBrands', [\App\Http\Controllers\BrandsController::class, 'belogsToManyBrands']);
Route::get('belogsToManyDealers', [\App\Http\Controllers\BrandsController::class, 'belogsToManyDealers']);

Route::get('view-cities', [\App\Http\Controllers\RelationController::class, 'viewCities'])->name('view_cities');
Route::get('view-multiple-cities', [\App\Http\Controllers\RelationController::class, 'viewMultipleCities'])->name('view_multiple_cities');

Route::get('accessors', [\App\Http\Controllers\UserController::class, 'accessors'])->name('accessors');
Route::get('mutators', [\App\Http\Controllers\UserController::class, 'mutators'])->name('mutators');

// Type - 1 Simple Route Model Binding
Route::get('implicit-1/users/{users}', function (\App\Models\User $users) {
    echo "<pre>";
    print_r($users);
    exit;
});

// Type - 2 User defined column Route Model Binding
Route::get('implicit-2/users/{users:first_name}', function (\App\Models\User $users) {
    echo "<pre>";
    print_r($users);
    exit;
});

// Type - 3 Using Controller Action and column name modification
Route::get('implicit-3/users/{users:first_name}', [\App\Http\Controllers\UserController::class, 'getUsers'])->name('getUsers');

// Type - 4 Using Controller Action
Route::get('implicit-4/users/{users}', [\App\Http\Controllers\UserController::class, 'getUsers'])->name('getUsers');

// Type - 5 Using Multiple Models
Route::get('implicit-5/users/{users}/brands/{brand}', function (\App\Models\User $users, \App\Models\Brands $brand) {
    echo "<pre>";
    print_r([$users, $brand]);
    exit;
});

// Type - 6 Using Multiple Models With Controller Action
Route::get('implicit-6/users/{users}/brands/{brand}', [\App\Http\Controllers\UserController::class, 'getUsers']);

// Type - 1 Explicit Binding - Simple Route Model Binding
Route::get('explicit-1/users/{users}', function ($users) {
    echo "<pre>";
    print_r($users);
    exit;
});

// Type - 2 Explicit Binding - Using Controller Action
Route::get('explicit-2/users/{users}', [\App\Http\Controllers\UserController::class, 'explicitGetUsers']);

// Type - 3 Explicit Binding - Using Custom Logic
Route::get('explicit-3/users/{user}', [\App\Http\Controllers\UserController::class, 'explicitGetUsers']);


// Localization
Route::get('localization', [\App\Http\Controllers\UserController::class, 'localization']);
Route::get('localization-example', function () {
    return view('localization');
});
Route::get('changeLanguage/{language}', [\App\Http\Controllers\UserController::class, 'changeLanguage'])->name('change_language');

// CRUD Operations
Route::resource('crud', \App\Http\Controllers\CrudOperationsController::class);
