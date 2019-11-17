<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElectrikiM extends FormRequest
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
          'typeagahi'=>'required|alpha_dash',
            'sazandeh'=>'required_if:menu,311,312|nullable|string',
            'simkart'=>'required_if:menu,314|nullable|string',
            'mobile'=>'required|numeric',
            'chat'=>'nullable|numeric',
            'onvanagahi'=>'required|string',
             'tozihat'=>'required|string',
             'menu'=>'required|alpha_dash'
        ];
    }
}
