<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStagiaireRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nom' => 'required|max:50',
            'prenom' => 'required|max:50',
            'age' => 'required|numeric|between:17,30',
            'email' => 'required',
            'password' => 'required',
        ];
    }

}
