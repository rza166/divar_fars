<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Agahim extends FormRequest
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
          'price'=>'required|numeric',
          'moaveze'=>'required, function($input){
    return (($input->menu1 == 1) && ($input->menu2 == 1) && ($input->menu3 == 3))
}|nullable|numeric', // معاوضه
// 'moaveze'=>'required|numeric', // معاوضه
          'typeagahi'=>'required|numeric',
           'agahidahande'=>'required|numeric',
           'meter'=>'required|numeric',
            'vadie'=>'required|numeric',
            'ejare'=>'required|numeric',
            'tedadotagh'=>'required|numeric',
            'salesakht'=>'required|numeric',
            'mobile'=>'required|numeric',
            'onvanagahi'=>'required|alpha_dash',
             'tozihat'=>'required|alpha_dash',
             'menu1'=>'required|numeric',
             'menu2'=>'required|numeric',
             'menu3'=>'required|numeric',

        ];
    }
}
