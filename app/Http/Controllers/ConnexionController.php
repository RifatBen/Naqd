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
		
		if(!auth()->attempt(request(['email', 'password']))) {
			return back()->withErrors(['', 'Erreur de connexion']);
		}
		else if(auth()->user()->confirmed==0){
			auth()->logout();
			return back()->withErrors(['Confirmation', 'Votre compte n\'est pas validé, veuillez consulter votre email']);
		}
		return redirect('/');
	}



	public function destroy() {
		auth()->logout();
		return redirect()->home();
	}
}

