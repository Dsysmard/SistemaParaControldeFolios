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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/folios', 'FoliosController');
Route::get('folios/destroy/{id}', ['as' => 'folios/destroy', 'uses' => 'FoliosController@destroy']);
Route::post('folios/search', ['as' => 'folios/search', 'uses'=>'FoliosController@search']);
