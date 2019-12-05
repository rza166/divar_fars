@extends('agahi.layoutAgahi')
@section('agahi2')



  @if (!empty($kharidC))
  <span class="labela4" for="">قیمت</span>
  <input oninput="sub6('#price','#priceajax')"  id="price" onkeypress='validate(event)' type="text" id="price" class="a2-3 zirnevis" placeholder="قیمت به تومان">
  <div class="ajax" id="priceajax" style="font-size:16px; color:rgb(106, 163, 0);">
  </div>
  @endif

@if (!empty($berandC))
  <div class="">

    <button type="button" onclick="berandactive('.berand2', '.divberand2')" class="btn btn-danger a6-3brand active  berand1"> انتخاب دستی</button>
    <button type="button" onclick="berandactive('.berand1', '.divberand1')" class="btn btn-danger a6-3brand berand2">جستجو</button>
  </div>
  <div class="divberand divberand1 active">
    <span class="labela4brand" for="">برند</span>
    <input   type="text" id="barand" class="a2-3"   placeholder="برند ماشین">
  </div>

<div class="divberand divberand2">
  <span class="labela1"  for="">برند</span>
  <select class="a2-1" id="barand" name="">
    <option value="" class=" a2-1">انتخاب</option>
    {{-- <option onclick="modelshow('ok')"value="" class=" a2-1">1</option>
    <option onclick="modelshow('ok')" value="" class=" a2-1">2</option>
    <option onclick="modelshow('ok')" value="" class=" a2-1">3</option>
    <option onclick="modelshow('no')"value="" class=" a2-1">4</option> --}}
    @foreach ($berandcar as $element)
      @php
        $chekmodel=$modelcar->where('berandcar_id',$element->id)->first();
        if (!empty($chekmodel->id)) {
          $ok='ok';
          $id=$chekmodel->berandcar_id;
        }
        else{
          $ok='no';
          $id=0 ;
        }
      @endphp
      <option  onclick="modelshow('{{$ok}}', {{$id}})"   value="{{$element->berand}}">{{$element->berand}}</option>
    @endforeach
  </select>

<div class="model">
  <span class="labela11"  for="">مدل</span>
  <select class="a2-1" id="modelshow" name="">
    <option value="" class=" a2-1">انتخاب</option>

  </select>
</div>

<div class="model">
  <span class="labela1"  for="">تیپ</span>
  <select class="a2-1" id="barand" name="">
    <option value="" class=" a2-1">انتخاب</option>

  </select>
</div>

</div>


  @endif

  @if (!empty($karkardC))
  <span class="labela4" for="">کارکرد</span>
  <input  oninput="sub1('#karkard','#karkardajax')" type="text" id="karkard" class="a2-3 zirnevis"  onkeypress='validate(event)' placeholder="کیلومتر">
  <div class="ajax" id="karkardajax" style="font-size:14px; color:rgb(106, 163, 0);">

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

  @if (!empty($typeagahiC))
  <span class="labela4" for="">نوع آگهی</span>
  <div class="a2-4" >
    <label class="form-check-label a2-4input2a" for="radio1">
            <input type="radio" id="typeagahi" class="form-check-input a2-4input11" id="radio1" name="optradio" value="فروشی">فروشی
    </label>
    <label class="form-check-label a2-4input3" for="radio2">
        <input type="radio" class="form-check-input a2-4input4" id="radio2" name="optradio" value="درخواستی">درخواستی
    </label>
  </div>
  @endif



  @if (!empty($sanadC))
    <span class="labela4" for="">سند</span>
   <select class="a2-3" id="sanad">
     <option  value="" ></option>
     <option value="تکبرگی">تک برگی</option>
     <option value="دو برگی">دو برگی</option>
     <option value="چند برگی">چند برگی</option>
   </select>
  @endif


  @if (!empty($nahveforoushC))
    <span class="labela4" for="">نحوه فروش</span>
   <select class="a2-3" id="nahveforoush">
     <option  value="" ></option>
     <option value="نقدی">نقدی</option>
     <option value="قسطی">قسطی</option>
     <option value="نقدی -قسطی">نقدی -قسطی</option>
   </select>
  @endif


  @if (!empty($girboxC))
    <span class="labela4" for="">گیربکس</span>
   <select class="a2-3" id="girbox">
     <option  value="0" ></option>
     <option value="دنده ای">دنده ای</option>
     <option value="اتوماتیک">اتوماتیک</option>
   </select>
  @endif



  @if (!empty($badaneC))
    <span class="labela4" for="">وضعیت بدنه</span>
   <select class="a2-3" id="badane">
     <option  value="" ></option>
     <option value="بدون رنگ">بدون رنگ</option>
     <option value="یک لکه رنگ">یک لکه رنگ</option>
     <option value="دو لکه رنگ ">دو لکه رنگ</option>
     <option value="چند لکه رنگ">چند لکه رنگ</option>
     <option value="تصادفی">تصادفی</option>
     <option value="اوراقی">اوراقی</option>
   </select>
  @endif



    @if (!empty($rangC))
    <span class="labela4" for="">رنگ</span>
    <input   type="text" id="rang" class="a2-3"   placeholder=" نوع رنگ">

    @endif

    @if (!empty($moavezeC))
      <span class="labela4-1" for="">مایلم معاوضه کنم</span>
      <input  type="checkbox" value="1" id="moaveze" class="labela4-2">
    @endif

@if (!empty($codemeliC))
  <span class="labela4" for="">کد ملی(اختیاری)</span>
  <input  type="text" id="codemeli" class="a2-3"  onkeypress='validate(event)' placeholder="اختیاری">
@endif

@section('agahi3')
<div class="a2-6">
<button type="button" onclick="saveMashin('{{$menu}}','{{$collection}}')" class="btn btn-danger">ارسال آگهی</button>
</div>
@endsection


@endsection
