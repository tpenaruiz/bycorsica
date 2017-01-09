<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersFrontRequest extends FormRequest
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
     * Custom messages error
     */
    public function messages(){
        return[
            'firstname.required' => 'Prénom obligatoire',
            'secondname.required' => 'Nom obligatoire',
            'birthday.required' => 'Date de naissance obligatoire',
            'birthday.date' => 'Date de naissance non valide',
            'email.required' => 'Email obligatoire',
            'email.email' => 'Email non valide',
            'email.unique' => 'Email déjà attribué à un compte'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'secondname' => 'required',
            'firstname' => 'required',
            'birthday' => 'required|date',
            'email' => 'required|email|unique:users,email,'.\Auth::user()->id
        ];
    }
}
