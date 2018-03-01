<?php

use  App\Http\Middleware\IsAdmin;
use App\Article;
use App\Notification;

Route::get('/connexion', 'ConnexionController@create')->name('login');
Route::post('/connexion', 'ConnexionController@store');

Route::get('/oublie', 'OubliesController@index');
Route::post('/oublie', 'OubliesController@sendMail');


Route::get('/oublie_msg', function(){
	return view('users.oublie_msg');
});
Route::get('/resetpassword', function(){
	return view('users.resetpassword');
});
Route::post('/resetpassword', 'OubliesController@passReset');


Route::get('/logout', 'ConnexionController@destroy');

Route::get('/inscription', 'InscriptionController@create');
Route::post('/inscription', 'InscriptionController@store');
 
Route::get('/inscription/confirm', 'InscriptionController@confirm');



Route::get('/',
	[
		'middleware' => 'auth', 
	 	'uses' => function(){
	 		  $articles = Article::all();
	 		  $importants = Notification::where('type', '=', 'important')->get();
	 		  $rendezvous = Notification::where('type', '=' , 'rendezvous')->get();
	 		  $nouveautes = Notification::where('type', '=', 'nouveautes')->get();
        return view('accueil', compact('articles','importants','rendezvous','nouveautes'));
	 	} 
	
])->name('home');




Route::get('/contenu', 'ContenusController@index');

Route::get('/article/{article}', 'ArticlesController@show');
Route::post('/article',['middleware'=>'admin', 'ArticlesController@store']);




Route::get('/profil', 'UsersController@edit');
Route::post('/profil' , 'UsersController@update');
Route::post('/passReset', 'UsersController@passReset');


Route::get('/admin', 'AdminsController@index');
Route::get('/admin/article/ajout', 'AdminsController@articleCreate');
Route::post('/admin/article/ajout', 'ArticlesController@store');
Route::get('/admin/article/sup', 'AdminsController@articleDestroy');
Route::delete('/admin/article/sup/{id}', 'ArticlesController@destroy');


Route::get('/admin/contenu/ajout', 'AdminsController@contenuCreate');
Route::get('/admin/contenu/sup', 'AdminsController@contenuDestroy');


Route::get('/admin/notification/ajout', 'AdminsController@notificationCreate');
Route::post('/admin/notification/ajout', 'NotificationsController@store');
Route::get('/admin/notification/sup', 'AdminsController@notificationDestroy');