<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenu extends Model
{
    protected $guarded =['id'];

    public function scopeFilter($query, $filters){
    	if(isset($filters['region'])){
    		$query->where('region', $filters['region']);
    	}

    	if(isset($filters['categorie'])){
    		$query->where('categorie', $filters['categorie']);
    	}
	    
    	return $query;
    }
}
