<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request\InscriptionRequest;

class InscriptionController extends Controller {
	public function __construct() {
		$this->middleware('guest');
	}

	public function create() {
		return view('auths.inscription');
	}

	public function store(InscriptionRequest $request) {
		$request->persist();

		return redirect('/');
	}
}
