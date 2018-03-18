<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFilm extends FormRequest
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
            'naslov'=>'required|string|unique:films|max:20',
            'id_zanr'=>'required|integer',
            'godina'=>'required|string|size:4',
            'trajanje'=>'required|integer',
            'slika'=>'required|mimes:jpeg,png'
        ];
    }
}
