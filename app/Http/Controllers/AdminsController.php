<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;

class AdminsController extends Controller
{

	public function __construct(){
		$this->middleware('admin');
	}

	public function index(){
		return view('admins.index');
	}



	public function articleCreate(){
		return view('admins.articles.add');
	}

	public function articleDestroy(){
		$articles=\App\Article::all();
		return view('admins.articles.delete',compact('articles'));
	}




	public function contenuCreate(){
		return view('admins.contenus.add');
	}

	public function contenuDestroy(){
		return view('admins.contenus.delete');
	}


    
	public function notificationCreate(){
		return view('admins.notifications.add');
	}

	public function notificationDestroy(){
			$importants = Notification::where('type', '=', 'important')->get();
	 		$rendezvous = Notification::where('type', '=' , 'rendezvous')->get();
	 		$nouveautes = Notification::where('type', '=', 'nouveautes')->get();
		return view('admins.notifications.delete',compact('importants','rendezvous','nouveautes'));
	}

}
