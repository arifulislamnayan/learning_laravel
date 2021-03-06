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

Route::get('welcome', 'WelcomeController@index');
Route::get('home', 'MyController@home');
Route::get('pages', 'PagesController@page');
Route::get('pages/{id}', 'PagesController@show');
Route::get('about', 'PagesController@about');



//Route::get('home', 'HomeController@home');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


