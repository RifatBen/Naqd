<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenu extends Model
{
    protected $guarded =['id'];

    public function scopeFilter($query, $filters){
    	if(isset($filters['region'])){
            
            if($filters['region'] != 'Monde'){
    		$query->where('region', $filters['region']);
            }

            if($filters['region'] == 'Afrique'){
                $query->where('region', $filters['region'])
                        ->orWhere('region', 'Algérie');
            }
    	}

    	else if(isset($filters['categorie'])){
    		$query->where('categorie', $filters['categorie']);
    	}
	    
    	return $query;
    }
}
