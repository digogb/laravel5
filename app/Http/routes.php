<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('about', 'PagesController@about');
Route::get('home', 'HomeController@index');

Route::get('user/{id}','UserController@edit');
Route::resource('user','UserController');


/*Route::get('user','UserController@index');
Route::get('user/create','UserController@create');
Route::get('user/{id}','UserController@show');
Route::post('user','UserController@store');*/


/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

