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
		
	}


}
