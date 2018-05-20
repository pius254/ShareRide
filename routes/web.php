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
	
	// Route::get('/about', function (){
	// 	return view('layouts.about');
	// });


	// Route::get('/contact', function (){
	// 	return view('layouts.contactUs');
	// });

	// Route::get('/services', function (){
	// 	return view('layouts.services');
	// });

	// Route::get('/team', function (){
	// 	return view('layouts.team');
	// });

	// Route::get('/testimonials', function (){
	// 	return view('layouts.testimonials');
	// });

	Route::resource('users', 'UsersController');
	Route::resource('rides', 'RidesController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
