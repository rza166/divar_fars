<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\models\Aks;
use App\models\Agahi;
use App\models\ImageAgahi;
use App\models\Mainagahi;
// use App\models\ImageMashin;
// use App\models\ImageEstekhdam;
// use App\models\ImageElectrici;
// use App\models\ImageKhane;
// use App\models\ImageKHadamat;
// use App\models\Imagevasayel;
// use App\models\ImageSargarmi;
// use App\models\Imageejtemaei;
// use App\models\Imageforkar;
// use App\models\Mashin;
// use App\models\Electrici;
// use App\models\Khane;
// use App\models\KHadamat;
// use App\models\vasayel;
// use App\models\Sargarmi;
// use App\models\ejtemaei;
// use App\Models\Estejhdam;
// use App\models\Forkar;
use App\models\Berandcar;
use App\models\Modelcar;

use Cookie;
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
 $agahi=Agahi::where('date', '>=',time()-2592001)->orderby('date', 'DESC')->get();
 $imageAgahi=ImageAgahi::get();

    return view('index', compact('agahi','city','city1','agahi','imageAgahi'));
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

  $barand=$request->barand;
  $karkard=$request->karkard;
  $sanad=$request->sanad;
  $nahveforoush=$request->nahveforoush;
  $badane=$request->badane;
  $rang=$request->rang;
  $moaveze=$request->moaveze;
  $chat=$request->chat;
  $codemeli=$request->codemeli;
  $websayt=$request->chat;
  $sazandeh=$request->sazandeh;

  $mobile=$request->mobile;
  $onvanagahi=$request->onvanagahi;
  $tozihat=$request->tozihat;
  $menu=$request->menu;
  $save=new Agahi();
  $save->tablename='amlak';
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
  $numbertel=$request->numbertel;



  $save->chat=$chat;
  $save->barand=$barand;
  $save->karkard=$karkard;
  $save->sanad=$sanad;
  $save->nahveforoush=$nahveforoush;
  $save->badane=$badane;
  $save->rang=$rang;
  $save->websayt=$websayt;
  $save->numbertel=$numbertel;
  $save->sazandeh=$sazandeh;


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
$titr=$request->titr;

// $kharid='ok';
  return view('agahi.amlak',compact('liClass','city','meterC','agahidahandeC','kharidC','moavezeC','chatC','tedadotaghC','salesakhtC','codemeliC','vadieC','ejareC','sanadC','ejaredayC','menu','titr'));
}
//مربوط به منوی وسایل نقلیه
public function mashin(Request $request)
{
   Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
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
$ImageAgahi=ImageAgahi::where('show',1)->get();
// $kharid='ok';
  return view('agahi.mashin',compact('liClass','city','berandC','karkardC','kharidC','moavezeC','chatC','nahveforoushC','salesakhtC','codemeliC','girboxC','badaneC','sanadC','rangC','typeagahiC','menu','titr','berandcar','modelcar','ImageAgahi
  '));
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
  $city=$this->city;
  $sazandehC = (!empty($request->sazandehC)) ? 'OK' : NULL ;
  $simkartC = (!empty($request->simkartC)) ? 'OK' : NULL ;
  $titr=$request->titr;
  return view('agahi.electriki',compact('liClass','city','sazandehC','simkartC','menu','titr'));
}

//مربوط به خدمات خانه
public function khane(Request $request)
{
  Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $city=$this->city;
  $titr=$request->titr;
  return view('agahi.khane',compact('liClass','city','menu','titr'));
}

//مربوط به خدمات
public function khadamat(Request $request)
{
  Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $city=$this->city;
  $titr=$request->titr;
  return view('agahi.khadamat',compact('liClass','city','menu','titr'));
}

//مربوط به وسایل شخصی
public function vasayel(Request $request)
{
  Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $titr=$request->titr;
  $city=$this->city;
  $typeagahiC = (!empty($request->typeagahiC)) ? 'OK' : NULL ;
  return view('agahi.vasayel',compact('liClass','city','typeagahiC','menu','titr'));
}

//مربوط به سرگرمی وفراغت
public function sargarmi(Request $request)
{
  Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $city=$this->city;
  $codemeliC = (!empty($request->codemeliC)) ? 'OK' : NULL ;
  $titr=$request->titr;
  return view('agahi.sargarmi',compact('liClass','city','codemeliC','menu','titr'));
}

//مربوط به اجتماعی
public function ejtemaei(Request $request)
{
  Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $city=$this->city;
  $typeagahiC = (!empty($request->typeagahiC)) ? 'OK' : NULL ;
  $titr=$request->titr;
  return view('agahi.ejtemaei',compact('liClass','city','typeagahiC','menu','titr'));
}

//مربوط به برای کسب وکار
public function forkar(Request $request)
{
  Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $city=$this->city;
  $titr=$request->titr;
  return view('agahi.forkar',compact('liClass','city','menu','titr'));
}

//مربوط به استخدام وکاریابی
public function estekhdam(Request $request)
{
  Cookie::queue('picCookie','',time() - 3600);
  $liClass=$request->liClass;
  $menu=$request->menu;
  $city=$this->city;
  $titr=$request->titr;
  return view('agahi.estekhdam',compact('liClass','city','menu','titr'));
}


}//end class
