<?php

//Route::get('/admin', ['middleware'=> 'admin',  'ArticlesController@'])



Route::get('/connexion', 'ConnexionController@create')->name('login');
Route::post('/connexion', 'ConnexionController@store');
Route::get('/logout', 'ConnexionController@destroy');

Route::get('/',
	[
		'middleware' => 'auth', 
	 	'uses' => 'ArticlesController@index' 
	
])->name('home');




Route::get('/contenu', 'ContenusController@index');
Route::post('/article',['middleware'=>'admin', 'ArticlesController@store']);




Route::get('/profil', 'UsersController@edit');
Route::post('/profil' , 'UsersController@update');

Route::post('/passReset', 'UsersController@passReset');


Route::get('/inscription', 'InscriptionController@create');
Route::post('/inscription', 'InscriptionController@store');


Route::get('/deconnexion', 'ConnexionController@destroy');
