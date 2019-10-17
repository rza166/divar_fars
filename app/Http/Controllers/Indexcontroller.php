<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\models\Aks;
use App\models\Agahi;
use Illuminate\Http\Request;
use App\Http\Requests\divar;
use App\Http\Requests\Agahim;
class Indexcontroller extends Controller
{
  public $city;
  public function __construct(Request $request)
  {
      $this->city=City::where('show',1)->orderby('bazdid', 'DESC')->get();
  }
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
  return "$name";
}
public function amlak(Request $request)
{
  $liClass=$request->liClass;
  $menu1=$request->menu1;
  $menu2=$request->menu2;
  $menu3=$request->menu3;
$city=$this->city;
if (!empty($request->kharid)) {
$kharid='ok';
}
else{
  $kharid=null;
}
$moavezeC = (!empty($request->moavezeC)) ? 'OK' : NULL ;
// $kharid='ok';
  return view('agahi.amlak',compact('liClass','city','kharid','moavezeC','menu1','menu2','menu3'));
}
public function backAgahi(Request $request)
{
  return view('agahi.agahi1');
}
//اعتبار سنجی املاک
public function etebar(Agahim  $request)
{
  $city=$request->city;
  $map=$request->map;
  $price=$request->price;
  $typeagahi=$request->typeagahi;
  $agahidahande=$request->agahidahande;
  $meter=$request->meter;
  $vadie=$request->vadie;
  $ejare=$request->ejare;
  $tedadotagh=$request->tedadotagh;
  $salesakht=$request->salesakht;
  $mobile=$request->mobile;
  $onvanagahi=$request->onvanagahi;
  $tozihat=$request->tozihat;
  $menu1=$request->menu1;
  $menu2=$request->menu2;
  $menu3=$request->menu3;
  $save=new Agahi();
  $save->city=$city;
  $save->map=$map;
  $save->price=$price;
  $save->typeagahi=$typeagahi;
  $save->agahidahande=$agahidahande;
  $save->meter=$meter;
  $save->vadie=$vadie;
  $save->ejare=$ejare;
  $save->tedadotagh=$tedadotagh;
  $save->salesakht=$salesakht;
  $save->mobile=$mobile;
  $save->onvanagahi=$onvanagahi;
  $save->tozihat=$tozihat;
  $save->menu1=$menu1;
  $save->menu2=$menu2;
  $save->menu3=$menu3;
  $save->date=time();
  $save->save();
  $id= $save->id;
  return $id;
}
}//end class
