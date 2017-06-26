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


//
//Route::get('/', 'WelcomeController@index');
//Route::get('contact', 'WelcomeController@contact');
//// we define a route by using Get request, we redirect the request to a controller
//// which uses the method and give a reponse
//// in a contact methond for example we are returning a view
//// whithin the controller we can send the view with parameters
//
//
//
//Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//Route::get('articles', 'ArticlesController@index');
//Route::get('articles/create', 'ArticlesController@create');
//Route::get('articles/{id}', 'ArticlesController@show');
//Route::post('articles', 'ArticlesController@store');


Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

Route::resource('articles','ArticlesController');





