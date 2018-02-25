<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{


	public function __construct(){
		$this->middleware('auth');
	}
    
	public function edit(User $user){
		return view('users.profil', compact('user'));
	}

	public function update(Request $request, User $user){
		$user->update([
			 'nom' => request('nom'),
            'prenom' => request('prenom'),
            'email' => request('email'),
            'genre' => request('genre'),
            'date_naissance' => request('naissance'),
            'pays' => request('pays'),
            'niveau' => request('niveau'),
            'etablissement' => request('etablissement')
		]);	

		return back();
		
	}


}
