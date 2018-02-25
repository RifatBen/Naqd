<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $guarded = [];


	public function lien(){
		return '<a href="/articles/' . $this->id . '">[...] Lire la suite</a>';
	}

	public function extrait(){
		$extrait = substr($this->contenu, 0 , 200) . $this->lien();

		return $extrait;
	}    
}
