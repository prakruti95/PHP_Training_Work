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

//1. Basic Routing
Route::get('/', function () 
{
     return view('welcome');
});
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/home2', function () {
//     return 'hello from prakruti';
// });

// //2. Redirect Routing
// Route::redirect('/', '/home2');

// //3. View Routing
// Route::view('/welcome', 'home');

// // View with static parameters
// Route::view('/greeting', 'welcome', ['name' => 'prakruti']);

// //4. Route parameters
// Route::get('/user/{fname}/{lname}', function ($fname , $lname)
//  {
//     return 'User name is '.$fname . ' ' . $lname;
// });

// //5.Named Routes - example of pet names
// Route::get('/user/profile/', function () {
//     return 'This is profile page';
// })->name('profile');

// // php artisan route:cache-1st
// // php artisan route:clear-2nd [Run After checking 1st command]

// //6. Route Caching
// Route::get('/new_route', function () 
// {
//     return 'Route caching';
// })->name('cache');