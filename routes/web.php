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



Route::get('/', function(){
	return view('home');
});


Route::get('/connexion', 'SessionsController@create');
Route::post('/connexion' , 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');


Route::get('/inscription', 'RegistrationsController@create');
Route::post('/inscription', 'RegistrationsController@store');


Route::get('/home', 'HomeController@index')->name('home');
