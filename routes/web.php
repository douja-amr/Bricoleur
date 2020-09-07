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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('/contact', function () {
//     return view('contact');
// });
Route::resource('/ville','VilleController');
Route::resource('/secteur','SecteurController');
Route::resource('/bricoleur','BricoleurController');
Route::resource('/contact','ContactController');



// Route::get('/ville/create','VilleController@create');
