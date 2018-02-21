<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller {
	public function __construct() {
		$this->middleware('guest');
	}

	public function create() {
		return view('auths.inscription');
	}

	public function store(Request $request) {
		$this->validate(request(),[
			'nom' => 'required|max:255',
			'prenom' => 'required|max:255',
			'email' => 'required|max:255|email',
			'mot_de_passe' => 'required|min:8|max:32|confirmed',
			'genre' => 'required|max:255',
			'date' => 'required|max:255',
			'pays' => 'required|max:255',
			'niveau' => 'required|max:255',
			'etab' => 'required|max:255'
		]);

		User::create([
			'nom' => request('nom'),
			'prenom' => request('prenom'),
			'email' => request('email'),
			'mot_de_passe' => bcrypt(request('mot_de_passe')),
			'genre' => request('genre'),
			'date' => request('date'),
			'pays' => request('pays'),
			'niveau' => request('niveau'),
			'etab' => request('etab')
		]);

		return redirect('/');
	}
}
