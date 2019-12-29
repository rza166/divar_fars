@extends('layout')
@section('title')
  صفحه آگهی نهایی
@endsection
@section('content')
  <div class="a6">
    <span class="a6-1">ثبت رایگان آگهی</span>
  <h3 class="a6-2" style="color: rgb(230, 81, 0);font-size:20px;">در صف انتشار</h3>
    <p class="a6-2" style="font-size:16px; color: rgb(92, 92, 92);">آگهی‌ در صف انتشار قرار دارد. زمان انتظار در صف حداکثر ۲ ساعت خواهد بود.</p>
    <button type="button" onclick="" class="btn btn-danger a6-3"><i class="fa fa-trash-o" style="font-size:17px"></i> حـذف آکهی</button>

  </div>
  <div class="a5">
    <span class="a3 a4">پیش نمایش آگهی </span>
    <span class="a3">ارتقا</span>
    <span class="a3 ">ویرایش</span>
  </div>

  <form>
    <div class="a10" id="error2">
    </div>


<div class="a7">
  @if ($collection=='amlak' && $menu==123||$menu==124 ||$menu==134||$menu==143||$menu==144||$menu==154||$menu==161||$menu==162||$menu==163||$menu==164||$menu==165||$menu==171 )
<label class="sabt4"for="">پیش نمایش آگهی </label>
<label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
<label class="sabt5"for="">دقایقی پیش</label>
<label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
<label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
<label class="sabt6"for="">{{$mainagahi->tozihat}}</label>
{{-- <label class="sabt1" for="">قیمت</label> <label class="sabt2"for="">{{$tableChild->price}}</label> --}}  <label class="sabt1"for="">نوع آگهی</label><label class="sabt2"for="">{{$tableChild->typeagahi}}</label>
@elseif ($collection=='amlak' && $menu==111||$menu==112||$menu==113 )
  <label class="sabt4"for="">پیش نمایش آگهی </label>
  <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
  <label class="sabt5"for="">دقایقی پیش</label>
  <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
  <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
    <label class="sabt1" for="">متراژ</label> <label class="sabt2"for="">{{$tableChild->meter}}</label>
    <label class="sabt1" for="">ودیعه</label> <label class="sabt2"for="">{{$tableChild->vadie}}</label>
    <label class="sabt1" for="">اجاره</label> <label class="sabt2"for="">{{$tableChild->ejare}}</label>
    <label class="sabt1" for="">تعداد اتاق</label> <label class="sabt2"for="">{{$tableChild->tedadotagh}}</label>
    <label class="sabt1" for="">سال ساخت</label> <label class="sabt2"for="">{{$tableChild->salesakht}}</label>
    <label class="sabt1" for=""> آگهی دهنده</label> <label class="sabt2"for="">{{$tableChild->agahidahande}}</label>
    <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>

@elseif ($collection=='amlak' && $menu==121||$menu==122 )
  <label class="sabt4"for="">پیش نمایش آگهی </label>
  <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
  <label class="sabt5"for="">دقایقی پیش</label>
  <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
  <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
  <label class="sabt1" for="">تعداد اتاق</label> <label class="sabt2"for="">{{$tableChild->tedadotagh}}</label>
  <label class="sabt1" for="">سال ساخت</label> <label class="sabt2"for="">{{$tableChild->salesakht}}</label>
  <label class="sabt1" for=""> آگهی دهنده</label> <label class="sabt2"for="">{{$tableChild->agahidahande}}</label>
    <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>
@elseif ($collection=='amlak'&& $menu==131||$menu==132||$menu==133)
  <label class="sabt4"for="">پیش نمایش آگهی </label>
  <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
  <label class="sabt5"for="">دقایقی پیش</label>
  <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
  <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
  <label class="sabt1" for="">متراژ</label> <label class="sabt2"for="">{{$tableChild->meter}}</label>
  <label class="sabt1" for="">تعداد اتاق</label> <label class="sabt2"for="">{{$tableChild->tedadotagh}}</label>
  <label class="sabt1" for="">سال ساخت</label> <label class="sabt2"for="">{{$tableChild->salesakht}}</label>
  <label class="sabt1" for=""> آگهی دهنده</label> <label class="sabt2"for="">{{$tableChild->agahidahande}}</label>
    <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>
@elseif ($collection=='amlak' && $menu==141||$menu==142 )
  <label class="sabt4"for="">پیش نمایش آگهی </label>
  <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
  <label class="sabt5"for="">دقایقی پیش</label>
  <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
  <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
  <label class="sabt1" for="">متراژ</label> <label class="sabt2"for="">{{$tableChild->meter}}</label>
  <label class="sabt1" for="">تعداد اتاق</label> <label class="sabt2"for="">{{$tableChild->tedadotagh}}</label>
  <label class="sabt1" for="">سال ساخت</label> <label class="sabt2"for="">{{$tableChild->salesakht}}</label>
  <label class="sabt1" for="">ودیعه</label> <label class="sabt2"for="">{{$tableChild->vadie}}</label>
  <label class="sabt1" for="">اجاره</label> <label class="sabt2"for="">{{$tableChild->ejare}}</label>
    <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>
@elseif ($collection=='amlak' && $menu==151||$menu==152||$menu==153||$menu==154)
  <label class="sabt4"for="">پیش نمایش آگهی </label>
  <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
  <label class="sabt5"for="">دقایقی پیش</label>
  <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
  <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
  <label class="sabt1" for="">اجاره روزانه</label> <label class="sabt2"for="">{{$tableChild->ejareday}}</label>
  <label class="sabt1" for="">تعداد اتاق</label> <label class="sabt2"for="">{{$tableChild->tedadotagh}}</label>
  <label class="sabt1" for="">متراژ</label> <label class="sabt2"for="">{{$tableChild->meter}}</label>
    <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>
@endif
</div>


   <div class="a7">
       @if ($collection=='mashin' && $menu==221||$menu==231 ||$menu==241||$menu==251 )
       <label class="sabt4"for="">پیش نمایش آگهی </label>
       <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
       <label class="sabt5"for="">دقایقی پیش</label>
       <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
       <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
       <label class="sabt1" for="">قیمت</label> <label class="sabt2"for="">{{$mainagahi->price}}</label>
       <label class="sabt1" for="">سال ساخت</label> <label class="sabt2"for="">{{$tableChild->salesakht}}</label>
       <label class="sabt1" for="">کارکرد</label> <label class="sabt2"for="">{{$tableChild->karkard}}</label>
       <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>

     @elseif ($collection=='mashin' && $menu==211)
       <label class="sabt4"for="">پیش نمایش آگهی </label>
       <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
       <label class="sabt5"for="">دقایقی پیش</label>
       <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
       <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
          <label class="sabt1" for="">برند</label> <label class="sabt2"for="">{{$tableChild->barand}}</label>
          <label class="sabt1" for="">سال ساخت</label> <label class="sabt2"for="">{{$tableChild->salesakht}}</label>
          <label class="sabt1" for="">کارکرد</label> <label class="sabt2"for="">{{$tableChild->karkard}}</label>
          <label class="sabt1" for="">سند</label> <label class="sabt2"for="">{{$tableChild->sanad}}</label>
          <label class="sabt1" for="">نحوه فروش</label> <label class="sabt2"for="">{{$tableChild->nahveforoush}}</label>
          <label class="sabt1" for="">گیربکس</label> <label class="sabt2"for="">{{$tableChild->girbox}}</label>
          <label class="sabt1" for="">بدنه</label> <label class="sabt2"for="">{{$tableChild->badane}}</label>
          <label class="sabt1" for="">رنگ</label> <label class="sabt2"for="">{{$tableChild->rang}}</label>
           <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>

        @elseif ($collection=='mashin' && $menu==212 || $menu==213 || $menu==214 || $menu==215)
          <label class="sabt4"for="">پیش نمایش آگهی </label>
          <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
          <label class="sabt5"for="">دقایقی پیش</label>
          <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
          <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
          <label class="sabt1" for="">قیمت</label> <label class="sabt2"for="">{{$mainagahi->price}}</label>
          <label class="sabt1" for="">سال ساخت</label> <label class="sabt2"for="">{{$tableChild->salesakht}}</label>
          <label class="sabt1" for="">کارکرد</label> <label class="sabt2"for="">{{$tableChild->karkard}}</label>
           <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>
     @endif
     </div>


     <div class="a7">
       @if ($collection=='electriki' && $menu==313||$menu==315 ||$menu==321||$menu==322||$menu==323||$menu==324 ||$menu==325||$menu==326||$menu==331||$menu==341 ||$menu==342||$menu==343||$menu==344||$menu==345||$menu==346||$menu==347||$menu==348||$menu==351 ||$menu==361 )
       <label class="sabt4"for="">پیش نمایش آگهی </label>
       <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
       <label class="sabt5"for="">دقایقی پیش</label>
       <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
       <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
       <label class="sabt1" for="">قیمت</label> <label class="sabt2"for="">{{$mainagahi->price}}</label>
       <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>

     @elseif ($collection=='electriki' && $menu==311 ||$menu==312)
       <label class="sabt4"for="">پیش نمایش آگهی </label>
       <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
       <label class="sabt5"for="">دقایقی پیش</label>
       <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
       <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
       <label class="sabt1" for="">قیمت</label> <label class="sabt2"for="">{{$mainagahi->price}}</label>
       <label class="sabt1" for="">سازنده</label> <label class="sabt2"for="">{{$tableChild->sazandeh}}</label>
       <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>

     @elseif ($collection=='electriki' && $menu==314)
       <label class="sabt4"for="">پیش نمایش آگهی </label>
       <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
       <label class="sabt5"for="">دقایقی پیش</label>
       <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
       <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
       <label class="sabt1" for="">قیمت</label> <label class="sabt2"for="">{{$mainagahi->price}}</label>
       <label class="sabt1" for="">نوع سیم کارت</label> <label class="sabt2"for="">{{$tableChild->simkart}}</label>
       <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>

@elseif ($collection=='khane')
   <label class="sabt4"for="">پیش نمایش آگهی </label>
   <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
   <label class="sabt5"for="">دقایقی پیش</label>
   <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
   <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
   <label class="sabt1" for="">قیمت</label> <label class="sabt2"for="">{{$mainagahi->price}}</label>
   <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>

@elseif ($collection=='khadamat')
   <label class="sabt4"for="">پیش نمایش آگهی </label>
   <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
   <label class="sabt5"for="">دقایقی پیش</label>
   <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
   <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
   <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>

 @elseif ($collection=='vasayel')
   <label class="sabt4"for="">پیش نمایش آگهی </label>
   <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
   <label class="sabt5"for="">دقایقی پیش</label>
   <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
   <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
   <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>


 @elseif ($collection=='sargarmi')
   <label class="sabt4"for="">پیش نمایش آگهی </label>
   <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
   <label class="sabt5"for="">دقایقی پیش</label>
   <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
   <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
   <label class="sabt1" for="">قیمت</label> <label class="sabt2"for="">{{$mainagahi->price}}</label>
   <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>


 @elseif ($collection=='ejtemaei')
   <label class="sabt4"for="">پیش نمایش آگهی </label>
   <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
   <label class="sabt5"for="">دقایقی پیش</label>
   <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
   <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
   <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>

 @elseif ($collection=='forkar')
   <label class="sabt4"for="">پیش نمایش آگهی </label>
   <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
   <label class="sabt5"for="">دقایقی پیش</label>
   <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
   <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
   <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>

 @elseif ($collection=='estekhdam')
   <label class="sabt4"for="">پیش نمایش آگهی </label>
   <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
   <label class="sabt5"for="">دقایقی پیش</label>
   <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
   <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
   <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>
 @endif
 </div>




<div class="amaragahi">
  <div class="amaragahi1">
    <label for="">آمار آگهی</label>
    <label  class="amaragahi2" for=""> آمار تعداد بازدید روزانه آگهی شما از زمان انتشار آگهی در این نمودار قابل مشاهده است.</label>
  </div>
  <div class="">
   <label class="amaragahi3" for="">بازدید کلی:</label>
  </div>
</div>

  {{-- <div class="input-group mb-3 a10">    <input type="text" class="form-control" id="tavalod2" name="" value="{{$esi->tavalod}}" >
   <div class="input-group-append">      <span class="input-group-text">تاریخ تولد</span>    </div>  </div>  <div class="input-group mb-3 a10 edit"  action="index.html" method="post">
   <input type="text" class="form-control" id="mobile2" name="" disabled value="{{$esi->mobile}}" >    <span class="input-group-text">شماره موبایل</span>  </div>
 <div class="input-group mb-3 a10 edit"  action="index.html" method="post">
   <input type="text" class="form-control" id="tel2" name="" value="{{$esi->tel}}" >
   <span class="input-group-text">شماره تلفن </span>
 </div>  <div >    <button type="button" onclick="virayesh2({{$esi->id}})" class="btn btn-success a3"name="button"> ویرایش</button>
   <button type="button" onclick="window.location='/'" class="btn btn-success a3"name="button"> بازگشت</button>  </div> --}}
</form>

@endsection
