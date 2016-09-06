<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','UserController@login');

Route::get('/users', 'UserController@index');
Route::get('/users/create', 'UserController@create');
Route::get('/users/{id}/edit', 'UserController@edit')->name('editUser');
Route::post('/users/{id}/update', 'UserController@update')->name('Update');
Route::post('/users', 'UserController@store');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/users', 'UserController@index');
});



Route::get('/home', 'HomeController@index');
