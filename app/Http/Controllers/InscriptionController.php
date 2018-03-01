<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InscriptionRequest;
use App\User;
use Illuminate\Support\Facades\Session;

class InscriptionController extends Controller {
	public function __construct() {
		$this->middleware('guest');
	}

	public function create() {
		return view('auths.inscription');
	}

	public function store(InscriptionRequest $request) {
		$request->persist();

		

		return redirect()->home();
	}


	public function confirm(Request $request){
		$user = User::where('email', '=' , request('email'))
		->where('confirm_code', '=' , request('code'))
		->update([
			'confirmed' => 1,
			'confirm_code' => null
		]);

		Session::flash('Success', 'Votre email a été confirmé avec succès');
		return redirect('/connexion');
	}
}
