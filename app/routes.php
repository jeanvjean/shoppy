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

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/products', 'ProductsController@index');

Route::get('/usercreate', 'UsersController@create');
Route::post('/usercreate', 'UsersController@store');
Route::resource('/users', 'UsersController', ['only' => ['create', 'store', 'destroy', 'show']]);

Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');
Route::resource('/sessions', 'SessionsController', ['only' => ['store', 'destroy', 'create']]);