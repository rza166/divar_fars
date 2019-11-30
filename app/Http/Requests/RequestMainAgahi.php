<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestMainAgahi extends FormRequest
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
           'collection'=>'required|alpha_dash',
           'onvanagahi'=>'required|string',
           'mobile'=>'required|numeric',
           'ostan'=>'nullable',
          'city'=>'required',
          'map'=>'nullable',
          'tozihat'=>'required|string',
          'price'=>'nullable|numeric',
          // 'price'=>'required_if:menu,121,122,123,124,131,132,133,134|nullable|numeric',
//           'moaveze'=>"required, function($request){
//
//     return (($request->menu1 == 1) && ($request->menu2 == 1) && ($request->menu3 == 3))
// }|nullable|numeric", // معاوضه
          // 'moaveze'=>'required_if:menu,121,122,123,124,131,132,133,134|nullable|numeric',
          'moaveze'=>'nullable|numeric',
          // 'moaveze'=>'required_if:menu,113|nullable|numeric', // معاوضه
          'typeagahi'=>'required|alpha_dash',
           'agahidahande'=>'nullable|string',
           'meter'=>'nullable|numeric',
            'vadie'=>'required_if:menu,111,112,113,141,142,143,144|nullable|numeric',
            'ejare'=>'required_if:menu,111,112,113,141,142,143,144|nullable|numeric',
            'tedadotagh'=>'required_if:menu,111,112,121,122,131,132,133,141,142,143,151,152,153,154|nullable|numeric',
            'salesakht'=>'required_if:menu,111,112,121,122,131,132,133,141,142,143,211,214,215,221,231,241,251|nullable|numeric',
            'ejareday'=>'required_if:menu,151,152,153,154|nullable|numeric',
            // 'ejareday'=>'nullable|numeric',
            // 'sanad'=>'nullable|numeric',
            'codemeli'=>'nullable|numeric',
            'chat'=>'nullable|numeric',
            'girbox'=>'required_if:menu,211|nullable|string',
             'badane'=>'required_if:menu,211|nullable|string',
             'barand'=>'required_if:menu,211|nullable|string',
             'karkard'=>'required_if:menu,211,214,215,221,231,241,251|nullable|numeric',
             'rang'=>'required_if:menu,211|nullable|alpha',
             // 'salesakht'=>'required_if:menu,211,214,215,221,231,241,251|nullable|numeric',
             'nahveforoush'=>'required_if:menu,211|nullable|string',
             'sanad'=>'required_if:menu,211|nullable|string',



        ];
    }
}
