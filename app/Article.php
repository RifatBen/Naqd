<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $guarded = [];


	public function lien(){
		$link ='/article/' . $this->id;
		return $link;
	}

	public function extrait(){
		if(strlen($this->contenu)> 400){
			$extrait = substr($this->contenu, 0 , 400) . '[...]';	
			return $extrait;

		}
		return $this->contenu;
	}    
}
