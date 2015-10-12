<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('/category', 'WelcomeController@index');
Route::get('/category/{id}', 'WelcomeController@listCategory');
Route::get('/contact', 'WelcomeController@contact');
Route::post('/contact', 'WelcomeController@contactSend');
Route::get('/about', 'WelcomeController@about');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
	Route::get('/', 'WelcomeController@index');

	Route::resource('categories', 'CategoryController');
	Route::resource('links', 'LinkController');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
