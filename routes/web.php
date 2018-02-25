<?php


Route::get('/connexion', 'ConnexionController@create')->name('login');
Route::post('/connexion', 'ConnexionController@store');
Route::get('/logout', 'ConnexionController@destroy');
Route::get('/', function(){
	return view('accueil');
})->name('home');


Route::get('/contenu', 'ArticlesController@index');


Route::get('/profil', 'UsersController@edit');


Route::get('/inscription', 'InscriptionController@create');
Route::post('/inscription', 'InscriptionController@store');


Route::get('/deconnexion', 'ConnexionController@destroy');
