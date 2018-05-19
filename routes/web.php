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

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/Categories', 'CategoryController@show')->name('Categories');
Route::post('/Categories', 'CategoryController@store');
Route::get('/Category/{cat_id}', 'CategoryController@create');
Route::delete('/Category/{cat_id}', 'CategoryController@destroy');

Route::get('/test');
