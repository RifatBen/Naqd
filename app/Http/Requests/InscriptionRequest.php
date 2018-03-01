<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use App\Mail\ConfirmMail;

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
            'password' => 'required|min:8|max:32|confirmed',
            'genre' => 'required|max:255',
            'naissance' => 'required|date',
            'pays' => 'required',
            'niveau' => 'required|max:255',
            'etablissement' => 'required|max:255'
        ];
    }


    public function persist(){
        
            $user=User::create([

            'nom' => $this->get('nom'),
            'prenom' => $this->get('prenom'),
            'email' => $this->get('email'),
            'password' => bcrypt($this->get('password')),
            'genre' => $this->get('genre'),
            'naissance' => $this->get('naissance'),
            'pays' => $this->get('pays'),
            'niveau' => $this->get('niveau'),
            'etablissement' => $this->get('etablissement')
                    
        ]);
        $user->confirm_code = str_random(16);
        $user->save();

            \Mail::to($user)->send(new ConfirmMail($user));
    }
}
