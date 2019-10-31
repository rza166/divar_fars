<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\models\Aks;
use App\models\Agahi;
use App\models\ImageAgahi;
use App\models\Mashin;
use Cookie;
use Illuminate\Http\Request;
use App\Http\Requests\divar;
use App\Http\Requests\Agahim;
use App\Http\Requests\Mashinm;
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
  $nameCookei='picCookie';
   if (!empty($request->cookie($nameCookei))) {
       $nameImg=unserialize($request->cookie($nameCookei));
       if(count($nameImg)>5){
         return response()->json(['errors' => ['no_uplod' => ['بیشتر از 6 عکس نمی شود بارکذاری کرد.']]], 422);
       }
   }
  $this->validate($request, [
        'file' => 'required|mimes:jpeg,jpg,png|max:3000',

    ]);
 $file=$request->file('file');
  // $name= time() . $file->getClientOriginalName();
    $name= time() . 'agahi';
  $file->move('img_pro' , $name);
  if (empty($request->cookie($nameCookei))) {
     $nameImg=[$name];
     Cookie::queue($nameCookei, serialize($nameImg));
   } else {
   $nameImg=unserialize($request->cookie($nameCookei));
   $nameImg[]=$name;
     Cookie::queue($nameCookei, serialize($nameImg));
   }
  return "$name";
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
  $menu=$request->menu;
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
  $save->menu=$menu;
  $save->date=time();
  $save->save();
  $id= $save->id;
  $picture=new ImageAgahi();
  $picture->nameTable ='amlak';
  $picture->recordId =$id;
    if(!empty($request->cookie('picCookie'))){
    $nameImg=unserialize($request->cookie('picCookie'));
    $picture->nameImage1 =  (!empty($nameImg[0])) ? $nameImg[0] : null ;
    $picture->nameImage2 =  (!empty($nameImg[1])) ? $nameImg[1] : null  ;
    $picture->nameImage3 =  (!empty($nameImg[2])) ? $nameImg[2] : null  ;
    $picture->nameImage4 =  (!empty($nameImg[3])) ? $nameImg[3] : null  ;
    $picture->nameImage5 =  (!empty($nameImg[4])) ? $nameImg[4] : null  ;
    $picture->nameImage6 =  (!empty($nameImg[5])) ? $nameImg[5] : null  ;

    }
    $picture->save();
  return $id;
}
public function sabtnahaei(Request $request)
{
  $agahi='ok';
  if ( !empty($request->city2)) {
    $city=$request->city2;
  }
  else{
    $city="ارسنجان";
  }

$city1=City::where('show',1)->orderby('bazdid', 'DESC')->get();  $id=$request->id;
 $esi=Agahi::find($id);
return view('agahi.sabtnahaei',compact('esi','agahi','city','city1'));
}
// مربوط به منوی املاک
public function amlak(Request $request)
{
   Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
$city=$this->city;
// if (!empty($request->kharidC)) {
// $kharidC='ok';
// }
// else{
//   $kharidC=null;
// }
$kharidC = (!empty($request->kharidC)) ? 'OK' : NULL ;
$moavezeC = (!empty($request->moavezeC)) ? 'OK' : NULL ;
$chatC = (!empty($request->chatC)) ? 'OK' : NULL ;
$tedadotaghC = (!empty($request->tedadotaghC)) ? 'OK' : NULL ;
$salesakhtC = (!empty($request->salesakhtC)) ? 'OK' : NULL ;
$codemeliC = (!empty($request->codemeliC)) ? 'OK' : NULL ;
$vadieC = (!empty($request->vadieC)) ? 'OK' : NULL ;
$ejareC = (!empty($request->ejareC)) ? 'OK' : NULL ;
$ejaredayC = (!empty($request->ejaredayC)) ? 'OK' : NULL ;
$sanadC = (!empty($request->sanadC)) ? 'OK' : NULL ;
$meterC = (!empty($request->meterC)) ? 'OK' : NULL ;
$agahidahandeC = (!empty($request->agahidahandeC)) ? 'OK' : NULL ;

// $kharid='ok';
  return view('agahi.amlak',compact('liClass','city','meterC','agahidahandeC','kharidC','moavezeC','chatC','tedadotaghC','salesakhtC','codemeliC','vadieC','ejareC','sanadC','ejaredayC','menu'));
}

//مربوط به منوی وسایل نقلیه
public function mashin(Request $request)
{
   Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $city=$this->city;
// if (!empty($request->kharidC)) {
// $kharidC='ok';
// }
// else{
//   $kharidC=null;
// }
$berandC = (!empty($request->berandC)) ? 'OK' : NULL ;
$karkardC = (!empty($request->karkardC)) ? 'OK' : NULL ;
$kharidC = (!empty($request->kharidC)) ? 'OK' : NULL ;
$moavezeC = (!empty($request->moavezeC)) ? 'OK' : NULL ;
$chatC = (!empty($request->chatC)) ? 'OK' : NULL ;
$nahveforoushC = (!empty($request->nahveforoushC)) ? 'OK' : NULL ;
$salesakhtC = (!empty($request->salesakhtC)) ? 'OK' : NULL ;
$codemeliC = (!empty($request->codemeliC)) ? 'OK' : NULL ;
$girboxC = (!empty($request->girboxC)) ? 'OK' : NULL ;
$badaneC = (!empty($request->badaneC)) ? 'OK' : NULL ;
$sanadC = (!empty($request->sanadC)) ? 'OK' : NULL ;
$rangC = (!empty($request->rangC)) ? 'OK' : NULL ;

// $kharid='ok';
  return view('agahi.mashin',compact('liClass','city','berandC','karkardC','kharidC','moavezeC','chatC','nahveforoushC','salesakhtC','codemeliC','girboxC','badaneC','sanadC','rangC','menu'));
}

}//end class
