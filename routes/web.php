<?php

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

//Read file route
// Route::get('movies/{filename}', [StorageFileController::class,'getPubliclyStorgeFile'])->name('movies.displayImage');

Route::get('/', 'MovieController@index')->name('welcome');
Route::post('/movies', 'MovieController@store')->name('movie.store');
Route::get('/movies/{id}', 'MovieController@show')->name('movie.show');
Route::delete('/movies/{id}', 'MovieController@destroy')->name('movie.destroy');
Route::post('/movies/search', 'MovieController@search')->name('movie.search');
Route::get('/admin', 'MovieController@admin')->name('admin');


Route::post('/profile', 'ProfileController@store')->name('profile.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cart', 'CartController@index')->name('cart');
