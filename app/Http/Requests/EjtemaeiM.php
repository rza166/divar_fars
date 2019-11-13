<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EjtemaeiM extends FormRequest
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
          'typeagahi'=>'required_if:menu,821,822,823|nullable|numeric',
            'mobile'=>'required|numeric',
            'chat'=>'nullable|numeric',
            'numbertel'=>'nullable|numeric',
            'onvanagahi'=>'required|alpha_dash',
             'tozihat'=>'required|alpha_dash',
             'menu'=>'nullable|alpha
        ];
    }
}
