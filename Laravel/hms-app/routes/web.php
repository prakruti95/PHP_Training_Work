<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminDashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/',function(){
//     return view('helloworld');
// });

// Route::get('/',function(){
//     return view('portfolio/index');
// });

// hospital management systems template routing
Route::get('/',[HomeController::class,'index']);
Route::get('/contact-us',[ContactController::class,'index']);
Route::post('/contact-us',[ContactController::class,'store']);
// create a admin panel routing
Route::get('/admin-login',[AdminLoginController::class,'index']);
Route::get('/admin-login/dashboard',[AdminDashboardController::class,'index']);
Route::get('/admin-login/manage-contacts',[ContactController::class,'show']);