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
		if(strlen($this->contenu)> 200){
			$extrait = substr($this->contenu, 0 , 200) . '[...]';	
			return $extrait;

		}
		return $this->contenu;
	}    
}
