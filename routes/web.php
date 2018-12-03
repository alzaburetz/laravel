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

Route::get('/', 'CT@index');
Route::get('/json_', 'CT@json_')->middleware('checkcheck');
//Route::resource('items', 'ItemsController');
Route::resource('authors', 'AuthorsController');
//Route::get('authors/{author_id}', 'AuthorsController@show');
Route::get('/logonly/{id?}','CT@logonly');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
