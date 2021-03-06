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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('teachingObject', 'TeachingObjectController');
Route::resource('tag','TagController');
Route::resource('resource','ResourceController');
Route::resource('moment', 'MomentController');
Route::resource('file', 'FileController');
Route::resource('user', 'UserController');
Route::get('resource/{id}/download', 'ResourceController@download');
