<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Khanem extends FormRequest
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
          'city'=>'required',
          'map'=>'nullable',
          'price'=>'nullable|numeric',
          'moaveze'=>'nullable|numeric',
          'typeagahi'=>'nullable|alpha_dash',
            'mobile'=>'required|numeric',
            'chat'=>'nullable|numeric',
            'onvanagahi'=>'required|string',
             'tozihat'=>'required|string',
             'menu'=>'nullable|alpha_dash'
        ];
    }
}
