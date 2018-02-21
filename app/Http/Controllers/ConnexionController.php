<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller {
	public function __construct() {
		$this->middleware('guest')->except(['destroy']);
	}

	public function create() {
		return view('auths.connexion');
	}

	public function store(Request $request) {
		/*if(!auth()->attempt(request['email', 'password'])) {
			return back()->withErrors(['', 'Erreur de connexion']);
		}*/
		return redirect('/accueil');
	}
}
