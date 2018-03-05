<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\OubliMail;
use Illuminate\Support\Facades\Session;
class OubliesController extends Controller
{

	public function __construct(){
		$this->middleware('guest');
	}

    public function index(){
		return view('users.oublie');
	}

	public function sendMail(Request $request){
		$user = User::where('email', '=', request('email'))
		->first();
		if($user){
			$user->confirm_code = str_random(16);
			$user->save();
			\Mail::to(request('email'))->send(new OubliMail($user));
			return redirect('/oublie_msg');
		}
		return back()->withErrors(['Introuvable', 'Aucun compte relié a cette email n\'a été trouvé']);	
	}

	public function passReset(Request $request){
		$this->validate(request(),[
			'password' => 'required|confirmed'
		]);

		$user = User::where('email', '=', request('email'))
			->where('confirm_code', '=' , request('code'))
			->first();

		if($user){
			$user->update([
				'password' => bcrypt(request('password')),
				'confirm_code' => null
			]);
			Session::flash('Success', 'Mot de passe réinitialisé avec succès');
		}

		
		return redirect('/connexion');
		
	}

	public function mailConfirm(Request $request){
		$user = User::where('email', '=' , request('email'))
		->where('confirm_code', '=' , request('code'))
		->update([
			'confirm_code' => null
		]);

		Session::flash('Success', 'Votre mot de passe a été réinitialisé avec succès');
		return redirect('/resetpassword');
	}

}
