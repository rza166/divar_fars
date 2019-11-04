<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MashinM extends FormRequest
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
          // 'price'=>'required_if:menu,121,122,123,124,131,132,133,134|nullable|numeric',
//           'moaveze'=>"required, function($request){
//
//     return (($request->menu1 == 1) && ($request->menu2 == 1) && ($request->menu3 == 3))
// }|nullable|numeric", // معاوضه
          'moaveze'=>'nullable|numeric',
          // 'moaveze'=>'required_if:menu,113|nullable|numeric', // معاوضه
          'typeagahi'=>'required|alpha_dash',
           'girbox'=>'required_if:menu,211|nullable|numeric',
            'badane'=>'required_if:menu,211|nullable|numeric',
            'barand'=>'required_if:menu,211|nullable|numeric',
            'karkard'=>'required_if:menu,211,214,215,221,231,241,251|nullable|numeric',
            'rang'=>'required_if:menu,211|nullable|numeric',
            'salesakht'=>'required_if:menu,211,214,215,221,231,241,251|nullable|numeric',
            'nahveforoush'=>'required_if:menu,211|nullable|numeric',
            'sanad'=>'required_if:menu,211|nullable|numeric',
            'mobile'=>'required|numeric',
            'codemeli'=>'nullable|numeric',
            'chat'=>'nullable|numeric',
            'onvanagahi'=>'required|alpha_dash',
             'tozihat'=>'required|alpha_dash',
             'menu'=>'required|alpha_dash',
        ];
    }
}
