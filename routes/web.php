<?php


Route::get('/', function(){
	return view('auths.accueil');
});


Route::get('/connexion', 'ConnexionController@create');
Route::post('/connexion', 'ConnexionController@store');

Route::get('/inscription', 'InscriptionController@create');
Route::post('/inscription', 'InscriptionController@store');


Route::get('/deconnexion', 'ConnexionController@destroy');
