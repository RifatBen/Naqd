<?php


Route::get('/', 'ConnexionController@create');
Route::post('/', 'ConnexionController@store');

Route::get('/inscription', 'InscriptionController@create');
Route::post('/inscription', 'InscriptionController@store');


Route::get('/deconnexion', 'ConnexionController@destroy');
