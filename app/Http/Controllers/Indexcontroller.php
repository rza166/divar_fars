<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\models\Aks;
use App\models\Agahi;
use App\models\ImageAgahi;
use App\models\Mainagahi;
use App\models\Amlak;
// use App\models\ImageMashin;
// use App\models\ImageEstekhdam;
// use App\models\ImageElectrici;
// use App\models\ImageKhane;
// use App\models\ImageKHadamat;
// use App\models\Imagevasayel;
// use App\models\ImageSargarmi;
// use App\models\Imageejtemaei;
// use App\models\Imageforkar;
use App\models\Mashin;
use App\models\Electrici;
use App\models\Khane;
use App\models\KHadamat;
use App\models\vasayel;
use App\models\Sargarmi;
use App\models\ejtemaei;
use App\Models\Estejhdam;
use App\models\Forkar;
use App\models\Berandcar;
use App\models\Modelcar;

use Cookie;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\divar;
use App\Http\Requests\Agahim;
use App\Http\Requests\RequestMainAgahi;
// use App\Http\Requests\Mashinm;
// use App\Http\Requests\Electrikim;
// use App\Http\Requests\KHadamatM;
// use App\Http\Requests\vasayelM;
// use App\Http\Requests\SargarmiM;
// use App\Http\Requests\EjtemaeiM;
// use App\Http\Requests\ForkarM;
// use App\Http\Requests\Estekhdam;
// use App\Http\Requests\Khanem;

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
 // $mashin=Mashin::where('date', '>=',time()-2592001)->orderby('date', 'DESC')->get();
 $agahi=Mainagahi::where('date', '>=',time()-2592001)->orderby('date', 'DESC')->get();
 $imageAgahi=ImageAgahi::get();

    return view('index', compact('agahi','city','city1','agahi','imageAgahi'));
  }
public function searchName(Request $request)
{
  $city=$request->city;
  $city1=City::where('show',1)->where('city','like',"%$city%")->get();
  return view('searchName', compact('city','city1'));
}

public function searchAgahi(Request $request)
{
  $onvanagahi=$request->onvanagahi;
  $onvanagahi=Mainagahi::where('onvanagahi','like',"%$onvanagahi%")->get();
  return view('searchAgahi', compact('onvanagahi'));
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
    $name= time() . 'agahi' . '.' . $file->getClientOriginalExtension();
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




//جدول اصلی
public function Mainagahi(RequestMainAgahi  $request)
{
  // global $collection=$request->collection;
  // $collection=$request->collection;


  // $barand=$request->barand;
  // $karkard=$request->karkard;
  // $sanad=$request->sanad;
  // $nahveforoush=$request->nahveforoush;
  // $badane=$request->badane;
  // $rang=$request->rang;
  // $moaveze=$request->moaveze;
  // $chat=$request->chat;
  // $codemeli=$request->codemeli;
  // $websayt=$request->chat;
  // $sazandeh=$request->sazandeh;
  // $menu=$request->menu;

  DB::transaction(function () use($request) {
  $collection=$request->collection;
  $save=new Mainagahi();
  $save->collection=$request->collection;
  $save->onvanagahi=$request->onvanagahi;
  $save->mobile=$request->mobile;
  $save->ostan='فارس';
  $save->city=$request->city;
  $save->map=$request->map;
  $save->tozihat=$request->tozihat;
  $save->price=$request->price;
  $save->date=time();
  $save->show=1;
  $save->save();
  $id= $save->id;

if ($collection=='amlak') {
 $amlak=new Amlak();
 $amlak->mainagahi_id=$id;
 $amlak->onvanagahi=$request->onvanagahi;
 $amlak->mobile=$request->mobile;
 // $amlak->ostan='فارس';
 $amlak->city=$request->city;
 $amlak->map=$request->map;
 $amlak->tozihat=$request->tozihat;
 $amlak->price=$request->price;
 $amlak->moaveze=$request->moaveze;
 $amlak->typeagahi=$request->typeagahi;
 $amlak->agahidahande=$request->agahidahande;
 $amlak->meter=$request->meter;
 $amlak->vadie=$request->vadie;
 $amlak->ejare=$request->ejare;
 $amlak->tedadotagh=$request->tedadotagh;
 $amlak->salesakht=$request->salesakht;
 $amlak->sanad=$request->sanad;
 $amlak->ejareday=$request->ejareday;
 $amlak->codemeli=$request->codemeli;
 $amlak->chat=$request->chat;
 $amlak->menu=$request->menu;
 $amlak->save();

} elseif($collection=='mashin') {
  $mashin=new Mashin();
  $mashin->mainagahi_id=$id;
  $mashin->onvanagahi=$request->onvanagahi;
  $mashin->mobile=$request->mobile;
  // $mashin->ostan='فارس';
  $mashin->city=$request->city;
  $mashin->map=$request->map;
  $mashin->tozihat=$request->tozihat;
  $mashin->price=$request->price;
  $mashin->moaveze=$request->moaveze;
  $mashin->typeagahi=$request->typeagahi;
  $mashin->girbox=$request->girbox;
  $mashin->badane=$request->badane;
  $mashin->barand=$request->barand;
  $mashin->karkard=$request->karkard;
  $mashin->rang=$request->rang;
  $mashin->salesakht=$request->salesakht;
  $mashin->sanad=$request->sanad;
  $mashin->nahveforoush=$request->nahveforoush;
  $mashin->codemeli=$request->codemeli;
  $mashin->chat=$request->chat;
  $mashin->menu=$request->menu;
  $mashin->save();
}
elseif($collection=='electriki') {
  $electriki=new Electrici();
  $electriki->mainagahi_id=$id;
  $electriki->onvanagahi=$request->onvanagahi;
  $electriki->mobile=$request->mobile;
  // $electriki->ostan='فارس';
  $electriki->city=$request->city;
  $electriki->map=$request->map;
  $electriki->tozihat=$request->tozihat;
  $electriki->price=$request->price;
  $electriki->moaveze=$request->moaveze;
  $electriki->typeagahi=$request->typeagahi;
  $electriki->simkart=$request->simkart;
  $electriki->sazandeh=$request->sazandeh;
  $electriki->chat=$request->chat;
  $electriki->menu=$request->menu;
  $electriki->save();
}
elseif($collection=='khane') {
  $khane=new khane();
  $khane->mainagahi_id=$id;
  $khane->onvanagahi=$request->onvanagahi;
  $khane->mobile=$request->mobile;
  // $khane->ostan='فارس';
  $khane->city=$request->city;
  $khane->map=$request->map;
  $khane->tozihat=$request->tozihat;
  $khane->price=$request->price;
  $khane->moaveze=$request->moaveze;
  $khane->typeagahi=$request->typeagahi;
  $khane->chat=$request->chat;
  $khane->menu=$request->menu;
  $khane->save();
}
elseif($collection=='khadamat') {
  $khadamat=new KHadamat();
  $khadamat->mainagahi_id=$id;
  $khadamat->onvanagahi=$request->onvanagahi;
  $khadamat->mobile=$request->mobile;
  // $khadamat->ostan='فارس';
  $khadamat->city=$request->city;
  $khadamat->map=$request->map;
  $khadamat->tozihat=$request->tozihat;
  $khadamat->price=$request->price;
  $khadamat->websayt=$request->websayt;
  $khadamat->typeagahi=$request->typeagahi;
  $khadamat->chat=$request->chat;
  $khadamat->menu=$request->menu;
  $khadamat->save();
}
elseif($collection=='vasayel') {
  $vasayel=new vasayel();
  $vasayel->mainagahi_id=$id;
  $vasayel->onvanagahi=$request->onvanagahi;
  $vasayel->mobile=$request->mobile;
  // $vasayel->ostan='فارس';
  $vasayel->city=$request->city;
  $vasayel->map=$request->map;
  $vasayel->tozihat=$request->tozihat;
  $vasayel->price=$request->price;
  $vasayel->moaveze=$request->moaveze;
  $vasayel->typeagahi=$request->typeagahi;
  $vasayel->numbertel=$request->numbertel;
  $vasayel->chat=$request->chat;
  $vasayel->menu=$request->menu;
  $vasayel->save();
}
elseif($collection=='sargarmi') {
  $sargarmi=new Sargarmi();
  $sargarmi->onvanagahi=$request->onvanagahi;
  $sargarmi->mobile=$request->mobile;
  // $sargarmi->ostan='فارس';
  $sargarmi->city=$request->city;
  $sargarmi->map=$request->map;
  $sargarmi->tozihat=$request->tozihat;
  $sargarmi->mainagahi_id=$id;
  $sargarmi->price=$request->price;
  $sargarmi->moaveze=$request->moaveze;
  $sargarmi->typeagahi=$request->typeagahi;
  $sargarmi->codemeli=$request->codemeli;
  $sargarmi->chat=$request->chat;
  $sargarmi->menu=$request->menu;
  $sargarmi->save();
}
elseif($collection=='ejtemaei') {
  $ejtemaei=new ejtemaei();
  $ejtemaei->onvanagahi=$request->onvanagahi;
  $ejtemaei->mobile=$request->mobile;
  // $ejtemaei->ostan='فارس';
  $ejtemaei->city=$request->city;
  $ejtemaei->map=$request->map;
  $ejtemaei->tozihat=$request->tozihat;
  $ejtemaei->mainagahi_id=$id;
  $ejtemaei->typeagahi=$request->typeagahi;
  $ejtemaei->numbertel=$request->numbertel;
  $ejtemaei->chat=$request->chat;
  $ejtemaei->menu=$request->menu;
  $ejtemaei->save();
}
elseif($collection=='forkar') {
  $forkar=new Forkar();
  $forkar->onvanagahi=$request->onvanagahi;
  $forkar->mobile=$request->mobile;
  // $forkar->ostan='فارس';
  $forkar->city=$request->city;
  $forkar->map=$request->map;
  $forkar->tozihat=$request->tozihat;
  $forkar->mainagahi_id=$id;
  $forkar->price=$request->price;
  $forkar->moaveze=$request->moaveze;
  $forkar->typeagahi=$request->typeagahi;
  $forkar->chat=$request->chat;
  $forkar->menu=$request->menu;
  $forkar->save();
}
elseif($collection=='estekhdam') {
  $estekhdam=new Estejhdam();
  $estekhdam->onvanagahi=$request->onvanagahi;
  $estekhdam->mobile=$request->mobile;
  // $estekhdam->ostan='فارس';
  $estekhdam->city=$request->city;
  $estekhdam->map=$request->map;
  $estekhdam->tozihat=$request->tozihat;
  $estekhdam->mainagahi_id=$id;
  $estekhdam->chat=$request->chat;
  $estekhdam->menu=$request->menu;
  $estekhdam->save();
}
elseif($collection=='') {
  // code...
}


  $picture=new ImageAgahi();
  $picture->nameTable =$collection;
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
    });

  //
  // $save->chat=$chat;
  // $save->barand=$barand;
  // $save->karkard=$karkard;
  // $save->sanad=$sanad;
  // $save->nahveforoush=$nahveforoush;
  // $save->badane=$badane;
  // $save->rang=$rang;
  // $save->websayt=$websayt;
  // $save->numbertel=$numbertel;
  // $save->sazandeh=$sazandeh;
}
//
// //وسایل نقلیه
// public function car(MashinM  $request)
// {
//   $city=$request->city;
//   $map=$request->map;
//   $price=$request->price;
//   $typeagahi=$request->typeagahi;
//   $barand=$request->barand;
//   $salesakht=$request->salesakht;
//   $karkard=$request->karkard;
//   $sanad=$request->sanad;
//   $nahveforoush=$request->nahveforoush;
//   $badane=$request->badane;
//   $rang=$request->rang;
//   $moaveze=$request->moaveze;
//   $mobile=$request->mobile;
//   $chat=$request->chat;
//   $codemeli=$request->codemeli;
//   $onvanagahi=$request->onvanagahi;
//   $tozihat=$request->tozihat;
//   $menu=$request->menu;
//   $save=new Mashin();
//   $save->city=$city;
//   $save->map=$map;
//   $save->price=$price;
//   $save->typeagahi=$typeagahi;
//   $save->barand=$barand;
//   $save->salesakht=$salesakht;
//   $save->karkard=$karkard;
//   $save->sanad=$sanad;
//   $save->nahveforoush=$nahveforoush;
//   $save->badane=$badane;
//   $save->rang=$rang;
//   $save->moaveze=$moaveze;
//   $save->mobile=$mobile;
//   $save->chat=$chat;
//   $save->codemeli=$codemeli;
//   $save->onvanagahi=$onvanagahi;
//   $save->tozihat=$tozihat;
//   $save->menu=$menu;
//   $save->date=time();
//   $save->save();
//   $id= $save->id;
//   $picture=new ImageMashin();
//   $picture->nameTable ='mashin';
//   $picture->recordId =$id;
//     if(!empty($request->cookie('picCookie'))){
//     $nameImg=unserialize($request->cookie('picCookie'));
//     $picture->nameImage1 =  (!empty($nameImg[0])) ? $nameImg[0] : null ;
//     $picture->nameImage2 =  (!empty($nameImg[1])) ? $nameImg[1] : null  ;
//     $picture->nameImage3 =  (!empty($nameImg[2])) ? $nameImg[2] : null  ;
//     $picture->nameImage4 =  (!empty($nameImg[3])) ? $nameImg[3] : null  ;
//     $picture->nameImage5 =  (!empty($nameImg[4])) ? $nameImg[4] : null  ;
//     $picture->nameImage6 =  (!empty($nameImg[5])) ? $nameImg[5] : null  ;
//
//     }
//     $picture->save();
//   return $id;
// }
//لوازم الکتریکی
// public function barghi(ElectrikiM  $request)
// {
//   $city=$request->city;
//   $map=$request->map;
//   $sazandeh=$request->sazandeh;
//   $price=$request->price;
//   $typeagahi=$request->typeagahi;
//   $moaveze=$request->moaveze;
//   $mobile=$request->mobile;
//   $chat=$request->chat;
//   $onvanagahi=$request->onvanagahi;
//   $tozihat=$request->tozihat;
//   $menu=$request->menu;
//   $save=new Electrici();
//   $save->city=$city;
//   $save->map=$map;
//   $save->sazandeh=$sazandeh;
//   $save->price=$price;
//   $save->typeagahi=$typeagahi;
//   $save->mobile=$mobile;
//   $save->chat=$chat;
//   $save->onvanagahi=$onvanagahi;
//   $save->tozihat=$tozihat;
//   $save->menu=$menu;
//   $save->date=time();
//   $save->save();
//   $id= $save->id;
//   $picture=new ImageElectrici();
//   $picture->nameTable ='electriki';
//   $picture->recordId =$id;
//     if(!empty($request->cookie('picCookie'))){
//     $nameImg=unserialize($request->cookie('picCookie'));
//     $picture->nameImage1 =  (!empty($nameImg[0])) ? $nameImg[0] : null ;
//     $picture->nameImage2 =  (!empty($nameImg[1])) ? $nameImg[1] : null  ;
//     $picture->nameImage3 =  (!empty($nameImg[2])) ? $nameImg[2] : null  ;
//     $picture->nameImage4 =  (!empty($nameImg[3])) ? $nameImg[3] : null  ;
//     $picture->nameImage5 =  (!empty($nameImg[4])) ? $nameImg[4] : null  ;
//     $picture->nameImage6 =  (!empty($nameImg[5])) ? $nameImg[5] : null  ;
//
//     }
//     $picture->save();
//   return $id;
// }
//مربوط به خانه
// public function home(Khanem  $request)
// {
//   $city=$request->city;
//   $map=$request->map;
//   $price=$request->price;
//   $typeagahi=$request->typeagahi;
//   $moaveze=$request->moaveze;
//   $mobile=$request->mobile;
//   $chat=$request->chat;
//   $onvanagahi=$request->onvanagahi;
//   $tozihat=$request->tozihat;
//   $menu=$request->menu;
//   $save=new khane();
//   $save->city=$city;
//   $save->map=$map;
//   $save->price=$price;
//   $save->typeagahi=$typeagahi;
//   $save->mobile=$mobile;
//   $save->chat=$chat;
//   $save->onvanagahi=$onvanagahi;
//   $save->tozihat=$tozihat;
//   $save->menu=$menu;
//   $save->date=time();
//   $save->save();
//   $id= $save->id;
//   $picture=new ImageKhane();
//   $picture->nameTable ='khane';
//   $picture->recordId =$id;
//     if(!empty($request->cookie('picCookie'))){
//     $nameImg=unserialize($request->cookie('picCookie'));
//     $picture->nameImage1 =  (!empty($nameImg[0])) ? $nameImg[0] : null ;
//     $picture->nameImage2 =  (!empty($nameImg[1])) ? $nameImg[1] : null  ;
//     $picture->nameImage3 =  (!empty($nameImg[2])) ? $nameImg[2] : null  ;
//     $picture->nameImage4 =  (!empty($nameImg[3])) ? $nameImg[3] : null  ;
//     $picture->nameImage5 =  (!empty($nameImg[4])) ? $nameImg[4] : null  ;
//     $picture->nameImage6 =  (!empty($nameImg[5])) ? $nameImg[5] : null  ;
//
//     }
//     $picture->save();
//   return $id;
// }
//خدمات
// public function help(KHadamatM $request)
// {
//   $city=$request->city;
//   $map=$request->map;
//   $mobile=$request->mobile;
//   $chat=$request->chat;
//   $websayt=$request->chat;
//   $onvanagahi=$request->onvanagahi;
//   $tozihat=$request->tozihat;
//   $menu=$request->menu;
//   $save=new KHadamat();
//   $save->city=$city;
//   $save->map=$map;
//   $save->websayt=$websayt;
//   $save->mobile=$mobile;
//   $save->chat=$chat;
//   $save->onvanagahi=$onvanagahi;
//   $save->tozihat=$tozihat;
//   $save->menu=$menu;
//   $save->date=time();
//   $save->save();
//   $id= $save->id;
//   $picture=new ImageKHadamat();
//   $picture->nameTable ='khadamat';
//   $picture->recordId =$id;
//     if(!empty($request->cookie('picCookie'))){
//     $nameImg=unserialize($request->cookie('picCookie'));
//     $picture->nameImage1 =  (!empty($nameImg[0])) ? $nameImg[0] : null ;
//     $picture->nameImage2 =  (!empty($nameImg[1])) ? $nameImg[1] : null  ;
//     $picture->nameImage3 =  (!empty($nameImg[2])) ? $nameImg[2] : null  ;
//     $picture->nameImage4 =  (!empty($nameImg[3])) ? $nameImg[3] : null  ;
//     $picture->nameImage5 =  (!empty($nameImg[4])) ? $nameImg[4] : null  ;
//     $picture->nameImage6 =  (!empty($nameImg[5])) ? $nameImg[5] : null  ;
//
//     }
//     $picture->save();
//   return $id;
// }
//مربوط به وسایل شخصی
// public function vasile(vasayelM  $request)
// {
//   $city=$request->city;
//   $map=$request->map;
//   $price=$request->price;
//   $typeagahi=$request->typeagahi;
//   $moaveze=$request->moaveze;
//   $mobile=$request->mobile;
//   $chat=$request->chat;
//   $onvanagahi=$request->onvanagahi;
//   $tozihat=$request->tozihat;
//   $menu=$request->menu;
//   $save=new vasayel();
//   $save->city=$city;
//   $save->map=$map;
//   $save->price=$price;
//   $save->typeagahi=$typeagahi;
//   $save->mobile=$mobile;
//   $save->chat=$chat;
//   $save->onvanagahi=$onvanagahi;
//   $save->tozihat=$tozihat;
//   $save->menu=$menu;
//   $save->date=time();
//   $save->save();
//   $id= $save->id;
//   $picture=new Imagevasayel();
//   $picture->nameTable ='vasayel';
//   $picture->recordId =$id;
//     if(!empty($request->cookie('picCookie'))){
//     $nameImg=unserialize($request->cookie('picCookie'));
//     $picture->nameImage1 =  (!empty($nameImg[0])) ? $nameImg[0] : null ;
//     $picture->nameImage2 =  (!empty($nameImg[1])) ? $nameImg[1] : null  ;
//     $picture->nameImage3 =  (!empty($nameImg[2])) ? $nameImg[2] : null  ;
//     $picture->nameImage4 =  (!empty($nameImg[3])) ? $nameImg[3] : null  ;
//     $picture->nameImage5 =  (!empty($nameImg[4])) ? $nameImg[4] : null  ;
//     $picture->nameImage6 =  (!empty($nameImg[5])) ? $nameImg[5] : null  ;
//
//     }
//     $picture->save();
//   return $id;
// }

//سرگرمی وبازی
// public function game(SargarmiM $request)
// {
//   $city=$request->city;
//   $map=$request->map;
//   $numbertel=$request->numbertel;
//   $codemeli=$request->codemeli;
//   $price=$request->price;
//   $typeagahi=$request->typeagahi;
//   $moaveze=$request->moaveze;
//   $mobile=$request->mobile;
//   $chat=$request->chat;
//   $onvanagahi=$request->onvanagahi;
//   $tozihat=$request->tozihat;
//   $menu=$request->menu;
//   $save=new Sargarmi();
//   $save->city=$city;
//   $save->map=$map;
//   $save->numbertel=$numbertel;
//   $save->codemeli=$codemeli;
//   $save->price=$price;
//   $save->typeagahi=$typeagahi;
//   $save->mobile=$mobile;
//   $save->chat=$chat;
//   $save->onvanagahi=$onvanagahi;
//   $save->tozihat=$tozihat;
//   $save->menu=$menu;
//   $save->date=time();
//   $save->save();
//   $id= $save->id;
//   $picture=new ImageSargarmi();
//   $picture->nameTable ='sargarmi';
//   $picture->recordId =$id;
//     if(!empty($request->cookie('picCookie'))){
//     $nameImg=unserialize($request->cookie('picCookie'));
//     $picture->nameImage1 =  (!empty($nameImg[0])) ? $nameImg[0] : null ;
//     $picture->nameImage2 =  (!empty($nameImg[1])) ? $nameImg[1] : null  ;
//     $picture->nameImage3 =  (!empty($nameImg[2])) ? $nameImg[2] : null  ;
//     $picture->nameImage4 =  (!empty($nameImg[3])) ? $nameImg[3] : null  ;
//     $picture->nameImage5 =  (!empty($nameImg[4])) ? $nameImg[4] : null  ;
//     $picture->nameImage6 =  (!empty($nameImg[5])) ? $nameImg[5] : null  ;
//
//     }
//     $picture->save();
//   return $id;
// }
//
// //اجتماعی
// public function ejtema(EjtemaeiM $request)
// {
//   $city=$request->city;
//   $map=$request->map;
//   $numbertel=$request->numbertel;
//   $typeagahi=$request->typeagahi;
//   $mobile=$request->mobile;
//   $chat=$request->chat;
//   $onvanagahi=$request->onvanagahi;
//   $tozihat=$request->tozihat;
//   $menu=$request->menu;
//   $save=new ejtemaei();
//   $save->city=$city;
//   $save->map=$map;
//   $save->numbertel=$numbertel;
//   $save->typeagahi=$typeagahi;
//   $save->mobile=$mobile;
//   $save->chat=$chat;
//   $save->onvanagahi=$onvanagahi;
//   $save->tozihat=$tozihat;
//   $save->menu=$menu;
//   $save->date=time();
//   $save->save();
//   $id= $save->id;
//   $picture=new Imageejtemaei();
//   $picture->nameTable ='ejtemaei';
//   $picture->recordId =$id;
//     if(!empty($request->cookie('picCookie'))){
//     $nameImg=unserialize($request->cookie('picCookie'));
//     $picture->nameImage1 =  (!empty($nameImg[0])) ? $nameImg[0] : null ;
//     $picture->nameImage2 =  (!empty($nameImg[1])) ? $nameImg[1] : null  ;
//     $picture->nameImage3 =  (!empty($nameImg[2])) ? $nameImg[2] : null  ;
//     $picture->nameImage4 =  (!empty($nameImg[3])) ? $nameImg[3] : null  ;
//     $picture->nameImage5 =  (!empty($nameImg[4])) ? $nameImg[4] : null  ;
//     $picture->nameImage6 =  (!empty($nameImg[5])) ? $nameImg[5] : null  ;
//
//     }
//     $picture->save();
//   return $id;
// }
//
// //برای کسب وکار
// public function job(ForkarM  $request)
// {
//   $city=$request->city;
//   $map=$request->map;
//   $price=$request->price;
//   $typeagahi=$request->typeagahi;
//   $moaveze=$request->moaveze;
//   $mobile=$request->mobile;
//   $chat=$request->chat;
//   $onvanagahi=$request->onvanagahi;
//   $tozihat=$request->tozihat;
//   $menu=$request->menu;
//   $save=new Forkar();
//   $save->city=$city;
//   $save->map=$map;
//   $save->price=$price;
//   $save->typeagahi=$typeagahi;
//   $save->mobile=$mobile;
//   $save->chat=$chat;
//   $save->onvanagahi=$onvanagahi;
//   $save->tozihat=$tozihat;
//   $save->menu=$menu;
//   $save->date=time();
//   $save->save();
//   $id= $save->id;
//   $picture=new Imageforkar();
//   $picture->nameTable ='forkar';
//   $picture->recordId =$id;
//     if(!empty($request->cookie('picCookie'))){
//     $nameImg=unserialize($request->cookie('picCookie'));
//     $picture->nameImage1 =  (!empty($nameImg[0])) ? $nameImg[0] : null ;
//     $picture->nameImage2 =  (!empty($nameImg[1])) ? $nameImg[1] : null  ;
//     $picture->nameImage3 =  (!empty($nameImg[2])) ? $nameImg[2] : null  ;
//     $picture->nameImage4 =  (!empty($nameImg[3])) ? $nameImg[3] : null  ;
//     $picture->nameImage5 =  (!empty($nameImg[4])) ? $nameImg[4] : null  ;
//     $picture->nameImage6 =  (!empty($nameImg[5])) ? $nameImg[5] : null  ;
//
//     }
//     $picture->save();
//   return $id;
// }
//
// //استخدام
// public function estekhdam2(Estekhdam $request)
// {
//   $city=$request->city;
//   $map=$request->map;
//   $mobile=$request->mobile;
//   $chat=$request->chat;
//   $onvanagahi=$request->onvanagahi;
//   $tozihat=$request->tozihat;
//   $menu=$request->menu;
//   $save=new Estejhdam();
//   $save->city=$city;
//   $save->map=$map;
//   $save->mobile=$mobile;
//   $save->chat=$chat;
//   $save->onvanagahi=$onvanagahi;
//   $save->tozihat=$tozihat;
//   $save->menu=$menu;
//   $save->date=time();
//   $save->save();
//   $id= $save->id;
//   $picture=new ImageEstekhdam();
//   $picture->nameTable ='estekhdam';
//   $picture->recordId =$id;
//     if(!empty($request->cookie('picCookie'))){
//     $nameImg=unserialize($request->cookie('picCookie'));
//     $picture->nameImage1 =  (!empty($nameImg[0])) ? $nameImg[0] : null ;
//     $picture->nameImage2 =  (!empty($nameImg[1])) ? $nameImg[1] : null  ;
//     $picture->nameImage3 =  (!empty($nameImg[2])) ? $nameImg[2] : null  ;
//     $picture->nameImage4 =  (!empty($nameImg[3])) ? $nameImg[3] : null  ;
//     $picture->nameImage5 =  (!empty($nameImg[4])) ? $nameImg[4] : null  ;
//     $picture->nameImage6 =  (!empty($nameImg[5])) ? $nameImg[5] : null  ;
//
//     }
//     $picture->save();
//   return $id;
// }



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
 $esi=Mainagahi::find($id);
return view('agahi.sabtnahaei',compact('esi','agahi','city','city1'));
}
// مربوط به منوی املاک
public function amlak(Request $request)
{
   Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $collection=$request->collection;
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
$titr=$request->titr;

// $kharid='ok';
  return view('agahi.amlak',compact('liClass','city','meterC','agahidahandeC','kharidC','moavezeC','chatC','tedadotaghC','salesakhtC','codemeliC','vadieC','ejareC','sanadC','ejaredayC','menu','titr','collection'));
}
//مربوط به منوی وسایل نقلیه
public function mashin(Request $request)
{
   Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $collection=$request->collection;
  $city=$this->city;
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
$typeagahiC = (!empty($request->typeagahiC)) ? 'OK' : NULL ;
$titr=$request->titr;
$berandcar=Berandcar::where('show',1)->get();
$modelcar=Modelcar::where('show',1)->get();
// $ImageAgahi=ImageAgahi::where('show',1)->get();
// $kharid='ok';
  return view('agahi.mashin',compact('liClass','city','berandC','karkardC','kharidC','moavezeC','chatC','nahveforoushC','salesakhtC','codemeliC','girboxC','badaneC','sanadC','rangC','typeagahiC','menu','titr','berandcar','modelcar','collection'));
}

public function modelshow(Request $request)
{
  $this->validate($request, ['id' => 'required|numeric',]);
  $id=$request->id;
$modelcar=Modelcar::where('berandcar_id',$id)->where('show',1)->get();
return view('agahi.modelshow',compact('modelcar'));

}

//مربوط به لوازم الکتریکی
public function electriki(Request $request)
{
  Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $collection=$request->collection;
  $city=$this->city;
  $sazandehC = (!empty($request->sazandehC)) ? 'OK' : NULL ;
  $simkartC = (!empty($request->simkartC)) ? 'OK' : NULL ;
  $titr=$request->titr;
  return view('agahi.electriki',compact('liClass','city','sazandehC','simkartC','menu','titr','collection'));
}

//مربوط به خدمات خانه
public function khane(Request $request)
{
  Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $collection=$request->collection;
  $city=$this->city;
  $titr=$request->titr;
  return view('agahi.khane',compact('liClass','city','menu','titr','collection'));
}

//مربوط به خدمات
public function khadamat(Request $request)
{
  Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $collection=$request->collection;
  $city=$this->city;
  $titr=$request->titr;
  return view('agahi.khadamat',compact('liClass','city','menu','titr','collection'));
}

//مربوط به وسایل شخصی
public function vasayel(Request $request)
{
  Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $collection=$request->collection;
  $titr=$request->titr;
  $city=$this->city;
  $typeagahiC = (!empty($request->typeagahiC)) ? 'OK' : NULL ;
  return view('agahi.vasayel',compact('liClass','city','typeagahiC','menu','titr','collection'));
}

//مربوط به سرگرمی وفراغت
public function sargarmi(Request $request)
{
  Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $collection=$request->collection;
  $city=$this->city;
  $codemeliC = (!empty($request->codemeliC)) ? 'OK' : NULL ;
  $titr=$request->titr;
  return view('agahi.sargarmi',compact('liClass','city','codemeliC','menu','titr','collection'));
}

//مربوط به اجتماعی
public function ejtemaei(Request $request)
{
  Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $collection=$request->collection;
  $city=$this->city;
  $typeagahiC = (!empty($request->typeagahiC)) ? 'OK' : NULL ;
  $titr=$request->titr;
  return view('agahi.ejtemaei',compact('liClass','city','typeagahiC','menu','titr','collection'));
}

//مربوط به برای کسب وکار
public function forkar(Request $request)
{
  Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $collection=$request->collection;
  $city=$this->city;
  $titr=$request->titr;
  return view('agahi.forkar',compact('liClass','city','menu','titr','collection'));
}

//مربوط به استخدام وکاریابی
public function estekhdam(Request $request)
{
  Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $collection=$request->collection;
  $city=$this->city;
  $titr=$request->titr;
  return view('agahi.estekhdam',compact('liClass','city','menu','titr','collection'));
}


}//end class
