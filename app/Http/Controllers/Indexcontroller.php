<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\models\Aks;
use Illuminate\Http\Request;
use App\Http\Requests\divar;

class Indexcontroller extends Controller
{
  public function view(Request $request)
  {
    $agahi='ok';
 if ( !empty($request->city2)) {
   $city=$request->city2;
 }
 else{
   $city="ارسنجان";
 }

    $city1=City::where('show',1)->orderby('bazdid', 'DESC')->get();

    return view('index', compact('agahi','city','city1'));
  }
public function searchName(Request $request)
{
  $city=$request->city;
  $city1=City::where('show',1)->where('city','like',"%$city%")->get();
  return view('searchName', compact('city','city1'));
}

public function pagei()
{
  $agahi='ok';
  if ( !empty($request->city2)) {
    $city=$request->city2;
  }
  else{
    $city="ارسنجان";
  }

     $city1=City::where('show',1)->orderby('bazdid', 'DESC')->get();

  return view('pagei',compact('agahi','city','city1'));

}

public function about()
{
  $agahi='ok';
  if ( !empty($request->city2)) {
    $city=$request->city2;
  }
  else{
    $city="ارسنجان";
  }

     $city1=City::where('show',1)->orderby('bazdid', 'DESC')->get();

  return view('about',compact('agahi','city','city1'));

}

public function tamas()
{
  $agahi='ok';
  if ( !empty($request->city2)) {
    $city=$request->city2;
  }
  else{
    $city="ارسنجان";
  }

     $city1=City::where('show',1)->orderby('bazdid', 'DESC')->get();

  return view('tamas',compact('agahi','city','city1'));

}

public function sabt()
{
  if ( !empty($request->city2)) {
    $city=$request->city2;
  }
  else{
    $city="ارسنجان";
  }

     $city1=City::where('show',1)->orderby('bazdid', 'DESC')->get();

  return view('sabt',compact('city','city1'));

}

public function uplod_img_pro(Request $request)
{
  $this->validate($request, [
        'file' => 'required|mimes:jpeg,jpg,png|max:3000',

    ]);
 $file=$request->file('file');

  $name= time() . $file->getClientOriginalName();
  $file->move('img_pro' , $name);
  //ذخیره نام عکس در جدول imgpros جهت نمایش هنگام آپلود عکس
  // $imagpros=new Aks();
  // $imagpros->name=$name;
  // $imagpros->show=1;
  // $imagpros-> save();
  return "$name";
}

}//end class
