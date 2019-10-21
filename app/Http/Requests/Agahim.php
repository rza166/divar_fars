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
          'price'=>'required|numeric',
//           'moaveze'=>"required, function($request){
//
//     return (($request->menu1 == 1) && ($request->menu2 == 1) && ($request->menu3 == 3))
// }|nullable|numeric", // معاوضه
          'moaveze'=>'required_if:menu,113|numeric', // معاوضه
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
             'menu'=>'required|numeric',

        ];
    }
}
