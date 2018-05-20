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
Route::delete('/Category/{cat_id}', 'CategoryController@destroy');
Route::get('/Category/{cat_id}', 'CategoryController@create');
Route::post('/subCategory', 'subCategoryController@store');
Route::delete('/subCategory/{subCat_id}', 'subCategoryController@destroy');
Route::get('/subCategory/{subCat_id}', 'subCategoryController@create');
Route::post('/product', 'productController@store');
Route::delete('/product/{Pid}', 'ProductController@destroy');
