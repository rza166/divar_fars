@extends('agahi.layoutAgahi')
@section('agahi2')



  @if (!empty($kharidC))
  <span class="labela4" for="">قیمت</span>
  <input oninput="sub6('#price','#priceajax')"   onkeypress='validate(event)' type="text" id="price" class="a2-3" placeholder="قیمت به تومان">
  <div class="ajax" id="priceajax" style="font-size:16px; color:rgb(106, 163, 0);">
  </div>
  @endif

@if (!empty($berandC))
  <span class="labela4" for="">برند</span>
  <input  oninput="sub2('#vadie','#vadieajax')" type="text" id="vadie" class="a2-3"  onkeypress='validate(event)' placeholder="قیمت به تومان">
  <div class="ajax" id="vadieajax" style="font-size:16px; color:rgb(106, 163, 0);">

  </div>
  @endif

  @if (!empty($karkardC))
  <span class="labela4" for="">کارکرد</span>
  <input  oninput="sub3('#ejare','#ejareajax')" type="text" id="ejare" class="a2-3"  onkeypress='validate(event)' placeholder="کیلومتر">
  <div class="ajax" id="ejareajax" style="font-size:16px; color:rgb(106, 163, 0);">

  </div>
  @endif

  @if (!empty($salesakhtC))
   <span class="labela4" for="">سال ساخت</span>
  <select class="a2-3" id="salesakht">
    <option value=""></option>
    <option>1398</option>
    <option>1397</option>
    <option>1396</option>
    <option>1395</option>
    <option>1394</option>
    <option>1392</option>
    <option>1391</option>
    <option>1390</option>
    <option>1389</option>
    <option>1388</option>
    <option>1387</option>
    <option>1386</option>
    <option>1385</option>
    <option>1384</option>
    <option>1383</option>
    <option>1382</option>
    <option>1381</option>
    <option>1380</option>
  </select>
  @endif




  @if (!empty($sanadC))
    <span class="labela4" for="">سند</span>
   <select class="a2-3" id="tedadotagh">
     <option  value="" ></option>
     <option value="100">تک برگی</option>
     <option value="1">دو برگی</option>
     <option value="2">چند برگی</option>
   </select>
  @endif


  @if (!empty($nahveforoushC))
    <span class="labela4" for="">نحوه فروش</span>
   <select class="a2-3" id="tedadotagh">
     <option  value="" ></option>
     <option value="100">نقدی</option>
     <option value="1">قسطی</option>
     <option value="2">نقدی -قسطی</option>
   </select>
  @endif


  @if (!empty($girboxC))
    <span class="labela4" for="">گیربکس</span>
   <select class="a2-3" id="tedadotagh">
     <option  value="" ></option>
     <option value="100">دنده ای</option>
     <option value="1">اتوماتیک</option>
   </select>
  @endif



  @if (!empty($badaneC))
    <span class="labela4" for="">وضعیت بدنه</span>
   <select class="a2-3" id="tedadotagh">
     <option  value="" ></option>
     <option value="100">بدون رنگ</option>
     <option value="1">یک لکه رنگ</option>
     <option value="2">دو لکه رنگ</option>
     <option value="3">چند لکه رنگ</option>
     <option value="4">تصادفی</option>
     <option value="5">اوراقی</option>
   </select>
  @endif



    @if (!empty($rangC))
    <span class="labela4" for="">رنگ</span>
    <input  oninput="sub7('#ejareday','#ejareajax')" type="text" id="ejareday" class="a2-3"  onkeypress='validate(event)' placeholder="قیمت به تومان">
    <div class="ajax" id="ejareajax" style="font-size:16px; color:rgb(106, 163, 0);">

    </div>
    @endif

    @if (!empty($moavezeC))
      <span class="labela4-1" for="">مایلم معاوضه کنم</span>
      <input  type="checkbox" value="1" id="moaveze" class="labela4-2">
    @endif

@if (!empty($codemeliC))
  <span class="labela4" for="">کد ملی(اختیاری)</span>
  <input  type="text" id="codemeli" class="a2-3"  onkeypress='validate(event)' placeholder="اختیاری">
@endif


@endsection
