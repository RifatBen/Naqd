<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
class UsersController extends Controller
{


	public function __construct(){
		$this->middleware('auth');
	}
    
	public function edit(User $user){
		return view('users.profil', compact('user'));
	}

	public function update(Request $request){
		$this->validate(request(),[
           'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'genre' => 'required|max:255',
            'naissance' => 'required|date',
            'pays' => 'required',
            'niveau' => 'required|max:255',
            'etablissement' => 'required|max:255'
        ]);

		auth()->user()->update([
			 'nom' => request('nom'),
            'prenom' => request('prenom'),
            'genre' => request('genre'),
            'naissance' => request('naissance'),
            'pays' => request('pays'),
            'niveau' => request('niveau'),
            'etablissement' => request('etablissement')
		]);	

		

		return back();
		
	}


	public function passReset(Request $request){
		
			$this->validate(request(),[
				'old_password' => 'required',
				'password' => 'required|confirmed'
			]);


			if(Hash::check(request('old_password'), auth()->user()->password)){
				auth()->user()->update([
					'password' => bcrypt(request('password'))
				]);
			}

			else
				return back()->withErrors([
					'Old password : ' => 'Ancien mot de passe incorrect'
				]);
		
		Session::flash('Success', 'Le mot de passe a été modifié avec succès!');
		return back();

	}

}
