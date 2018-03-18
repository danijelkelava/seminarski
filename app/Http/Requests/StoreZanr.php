<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreZanr extends FormRequest
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
            'naziv'=>'required|string|alpha|unique:zanrs|max:20'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'naziv.required' => 'Naziv je obavezno polje',
            'naziv.unique' => 'Naziv vec postoji, unesite naziv zanra koji ne postoji u bazi podataka',
            'naziv.max'=> 'Dozvoljeno je najvise 20 znakova',
            'naziv.alpha'=>'Dotvoljena su samo slova'
        ];
    }
}
