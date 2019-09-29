<?php

namespace App\Http\Controllers;
use App\Models\City;

use Illuminate\Http\Request;

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

}//end class
