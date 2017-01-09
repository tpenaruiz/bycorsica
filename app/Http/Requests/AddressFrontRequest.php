<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressFrontRequest extends FormRequest
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
            'libelle.required' => 'Libellé obligatoire',
            'address_firstname.required' => 'Prénom obligatoire',
            'address_secondname.required' => 'Nom obligatoire',
            'phone' => 'required',
            'country.required' => 'Pays obligatoire',
            'city.required' => 'Ville obligatoire',
            'codepostal.required' => 'Code postal obligatoire',
            'address.required' => 'Adresse obligatoire'    
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
            'libelle' => 'required',
            'address_firstname' => 'required',
            'address_secondname' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'city' => 'required',
            'codepostal' => 'required',
            'address' => 'required'
        ];
    }
}