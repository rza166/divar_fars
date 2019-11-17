<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
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
           'girbox'=>'required_if:menu,211|nullable|string',
            'badane'=>'required_if:menu,211|nullable|string',
            'barand'=>'required_if:menu,211|nullable|string',
            'karkard'=>'required_if:menu,211,214,215,221,231,241,251|nullable|numeric',
            'rang'=>'required_if:menu,211|nullable|alpha',
            'salesakht'=>'required_if:menu,211,214,215,221,231,241,251|nullable|numeric',
            'nahveforoush'=>'required_if:menu,211|nullable|string',
            'sanad'=>'required_if:menu,211|nullable|string',
            'mobile'=>'required|numeric',
            'codemeli'=>'nullable|numeric',
            'chat'=>'nullable|numeric',
            'onvanagahi'=>'required|string',
             'tozihat'=>'required|string',
             'menu'=>'required|alpha_dash',
        ];
    }
}
