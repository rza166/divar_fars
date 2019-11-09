<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
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
    public function rules(Request $request)

    {
      // $GLOBALS['menu1']=$request->menu1;
      // $GLOBALS['menu2']=$request->menu2;
      // $GLOBALS['menu3']=$request->menu3;
        return [
          'city'=>'required',
          'map'=>'nullable',
          'price'=>'nullable|numeric',
          // 'price'=>'required_if:menu,121,122,123,124,131,132,133,134|nullable|numeric',
//           'moaveze'=>"required, function($request){
//
//     return (($request->menu1 == 1) && ($request->menu2 == 1) && ($request->menu3 == 3))
// }|nullable|numeric", // معاوضه
          'moaveze'=>'required_if:menu,121,122,123,124,131,132,133,134|nullable|numeric',
          // 'moaveze'=>'required_if:menu,113|nullable|numeric', // معاوضه
          'typeagahi'=>'required|alpha_dash',
           'agahidahande'=>'nullable|alpha_dash',
           'meter'=>'nullable|numeric',
            'vadie'=>'required_if:menu,111,112,113,141,142,143,144|nullable|numeric',
            'ejare'=>'required_if:menu,111,112,113,141,142,143,144|nullable|numeric',
            'tedadotagh'=>'required_if:menu,111,112,121,122,131,132,133,141,142,143,151,152,153,154|nullable|numeric',
            'salesakht'=>'required_if:menu,111,112,121,122,131,132,133,141,142,143|nullable|numeric',
            'ejareday'=>'required_if:menu,151,152,153,154|nullable|numeric',
            // 'ejareday'=>'nullable|numeric',
            'sanad'=>'nullable|numeric',
            'mobile'=>'required|numeric',
            'codemeli'=>'nullable|numeric',
            'chat'=>'nullable|numeric',
            'onvanagahi'=>'required|alpha_dash',
             'tozihat'=>'required|alpha_dash',
             'menu'=>'required|alpha_dash',

        ];
    }
}
