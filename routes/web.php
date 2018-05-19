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


Route::group(['middleware' => ['web']], function(){

	Route::get('/', function () {
    	return view('index');
	});

	Route::get('/users/create', 'UsersController@getCreate') -> name('signup');
	Route::post('/users/create', 'UsersController@postCreate');
	Route::get('/signup', 'UsersController@getCreate');
	
	Route::get('/about', function (){
		return view('layouts.about');
	});


	Route::get('/contact', function (){
		return view('layouts.contactUs');
	});

	Route::get('/services', function (){
		return view('layouts.services');
	});

	Route::get('/team', function (){
		return view('layouts.team');
	});

	Route::get('/testimonials', function (){
		return view('layouts.testimonials');
	});

	Route::post('/signup', ['as' => 'register', 'uses' => 'RegisterController@create']);
});