<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'email' => 'required|max:255|email',
            'mot_de_passe' => 'required|min:8|max:32|confirmed',
            'genre' => 'required|max:255',
            'date' => 'required|max:255',
            'pays' => 'required|max:255',
            'niveau' => 'required|max:255',
            'etablissement' => 'required|max:255'
        ];
    }


    public function persist(){

            User::create(
            $this->only(['nom' ,'prenom', 'email','mot_de_passe','genre' ,'date', 'pays','niveau' , 'etablissement'])
        );


    }
}
