<?php

Route::get('/', 'ConnexionController@create');
Route::post('/', 'ConnexionController@store');

Route::get('/inscription', 'InscriptionController@create');
Route::post('/inscription', 'InscriptionController@store');

Route::get('/accueil', 'AccueilController@create');
Route::get('/deconnexion', 'AccueilController@destroy');
