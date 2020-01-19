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
Auth::routes();
Route::get('/','navigationController@products');

Route::get('admin','navigationController@admin');
Route::get('home','navigationController@admin');
Route::get('lands','navigationController@lands');
Route::get('owners','navigationController@owners');
Route::get('navigate/{id}','navigationController@navigate');
Route::post('add_farm','postController@addProd');
