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




    @if ($collection=="amlak") {
      <div class="a7">
        <label class="sabt4"for="">پیش نمایش آگهی </label>
        <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
        <label class="sabt5"for="">دقایقی پیش</label>
        <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
        <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
        <label class="sabt1" for="">قیمت</label> <label class="sabt2"for="">{{$mainagahi->price}}</label>
        <label class="sabt1"for="">نوع گهی</label><label class="sabt2"for="">{{$tableChild->typeagahi}}</label>
        <label class="sabt1" for=""> آگهی دهنده</label> <label class="sabt2"for="">{{$tableChild->agahidahande}}</label>
        <label class="sabt1" for="">متراژ</label> <label class="sabt2"for="">{{$tableChild->meter}}</label>
        <label class="sabt1" for="">سال ساخت</label> <label class="sabt2"for="">{{$tableChild->salesakht}}</label>
        <label class="sabt1" for="">ودیعه</label> <label class="sabt2"for="">{{$tableChild->vadie}}</label>
        <label class="sabt1" for="">اجاره</label> <label class="sabt2"for="">{{$tableChild->ejare}}</label>
        <label class="sabt1" for="">تعداد اتاق</label> <label class="sabt2"for="">{{$tableChild->tedadotagh}}</label>
        <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>
      {{-- <span class="input-group-text">شهر <input type="text" class="input-group-text a7-input" id="city2" disabled name=""  value="{{$mainagahi->city}}"></span>
      <span class="input-group-text">قیمت<input type="text" class="input-group-text a7-input" id="price2" name="" disabled value="{{$mainagahi->price}}"></span>
      <span class="input-group-text">نوع آگهی<input type="text" class="input-group-text a7-input" id="typeagahi2" name="" disabled @if ($tableChild->typeagahi==1)value="ارایه"@else value="درخواستی"@endif ></span>
      <span class="input-group-text">آگهی دهنده<input type="text" class="input-group-text a7-input2" id="agahidahande2" name="" disabled value="{{$tableChild->agahidahande}}"></span>
      <span class="input-group-text">متراژ<input type="text" class="input-group-text a7-input" id="meter2" name="" disabled value="{{$tableChild->meter}}"></span>
      <span class="input-group-text">ودیعه<input type="text" class="input-group-text a7-input" id="vadie2" name="" disabled value="{{$tableChild->vadie}}"></span>
      <span class="input-group-text">اجاره<input type="text" class="input-group-text a7-input" id="ejare2" name="" disabled value="{{$tableChild->ejare}}"></span>
      <span class="input-group-text">تعداد اتاق<input type="text" class="input-group-text a7-input2" id="tedadotagh2" name="" disabled value="{{$tableChild->tedadotagh}}"></span>
      <span class="input-group-text">سال ساخت<input type="text" class="input-group-text a7-input2" id="salesakht" name="" disabled value="{{$tableChild->salesakht}}"></span>
      <span class="input-group-text">موبایل<input type="text" class="input-group-text a7-input2" id="mobile2" name="" disabled value="{{$mainagahi->mobile}}"></span> --}}
    </div>
    }
  @elseif ($collection=='mashin') {
    <div class="a7">
         <label class="sabt4"for="">پیش نمایش آگهی </label>
         <label class="sabt3"for="">{{$tableChild->typeagahi}}</label>
         <label class="sabt5"for="">دقایقی پیش</label>
         <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
         <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
         <label class="sabt1" for="">برند</label> <label class="sabt2"for="">{{$tableChild->barand}}</label>
         <label class="sabt1" for="">قیمت</label> <label class="sabt2"for="">{{$mainagahi->price}}</label>
         <label class="sabt1" for="">کارکرد</label> <label class="sabt2"for="">{{$tableChild->karkard}}</label>
         <label class="sabt1" for="">سال ساخت</label> <label class="sabt2"for="">{{$tableChild->salesakht}}</label>
         <label class="sabt1" for="">سند</label> <label class="sabt2"for="">{{$tableChild->sanad}}</label>
         <label class="sabt1" for="">نحوه فروش</label> <label class="sabt2"for="">{{$tableChild->nahveforoush}}</label>
         <label class="sabt1" for="">گیربکس</label> <label class="sabt2"for="">{{$tableChild->girbox}}</label>
         <label class="sabt1" for="">بدنه</label> <label class="sabt2"for="">{{$tableChild->badane}}</label>
         <label class="sabt1" for="">رنگ</label> <label class="sabt2"for="">{{$tableChild->rang}}</label>
         <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>
    {{-- <label class="sabt1" for="">نوع آگهی<lable>@if ($tableChild->typeagahi==1)"فروشی"@else "اجاره ای"@endif ></label> --}}
    {{-- <span class="input-group-text">موبایل<input type="text" class="input-group-text a7-input2" id="mobile2" name="" disabled value="{{$mainagahi->mobile}}"></span>
    <span class="input-group-text">برند <input type="text" class="input-group-text a7-input" id="cbarand" disabled name=""  value="{{$tableChild->barand}}"></span>
    <span class="input-group-text">قیمت<input type="text" class="input-group-text a7-input" id="price2" name="" disabled value="{{$mainagahi->price}}"></span>
    <span class="input-group-text">کارکرد<input type="text" class="input-group-text a7-input2" id="karkard" name="" disabled value="{{$tableChild->karkard}}"></span>
    <span class="input-group-text">سال ساخت <input type="text" class="input-group-text a7-input" id="salesakht" name="" disabled value="{{$tableChild->salesakht}}"></span>
    <span class="input-group-text">سند<input type="text" class="input-group-text a7-input" id="sanad" name="" disabled value="{{$tableChild->sanad}}"></span>
    <span class="input-group-text">نحوه فروش<input type="text" class="input-group-text a7-input" id="nahveforoush" name="" disabled value="{{$tableChild->nahveforoush}}"></span>
    <span class="input-group-text">گیربکس<input type="text" class="input-group-text a7-input2" id="girbox" name="" disabled value="{{$tableChild->girbox}}"></span>
    <span class="input-group-text">وضعیت بدنه<input type="text" class="input-group-text a7-input2" id="badane" name="" disabled value="{{$tableChild->badane}}"></span>
    <span class="input-group-text">رنگ<input type="text" class="input-group-text a7-input2" id="rang" name="" disabled value="{{$mainagahi->rang}}"></span> --}}
  </div>
    }
  @elseif ($collection=='electriki') {
    <label class="sabt4"for="">پیش نمایش آگهی </label>
    <label class="sabt3"for="">{{$mainagahi->onvanagahi}}</label>
    <label class="sabt5"for="">دقایقی پیش</label>
    <label class="sabt1" for="">موبایل</label> <label class="sabt2"for="">{{$mainagahi->mobile}}</label>
    <label class="sabt1" for="">شهر</label> <label class="sabt2"for="">{{$mainagahi->city}}</label>
    <label class="sabt1" for="">قیمت</label> <label class="sabt2"for="">{{$mainagahi->price}}</label>
    <label class="sabt1"for="">نوع گهی</label><label class="sabt2"for="">{{$tableChild->typeagahi}}</label>
    <label class="sabt1" for=""> آگهی دهنده</label> <label class="sabt2"for="">{{$tableChild->agahidahande}}</label>
    <label class="sabt1" for="">متراژ</label> <label class="sabt2"for="">{{$tableChild->meter}}</label>
    <label class="sabt1" for="">سال ساخت</label> <label class="sabt2"for="">{{$tableChild->salesakht}}</label>
    <label class="sabt1" for="">ودیعه</label> <label class="sabt2"for="">{{$tableChild->vadie}}</label>
    <label class="sabt1" for="">اجاره</label> <label class="sabt2"for="">{{$tableChild->ejare}}</label>
    <label class="sabt1" for="">تعداد اتاق</label> <label class="sabt2"for="">{{$tableChild->tedadotagh}}</label>
    <label class="sabt6"for="">{{$mainagahi->tozihat}}</label>
    }
  @elseif ($collection=='khane') {

    }
  @elseif ($collection=='khadamat') {

    }
  @elseif ($collection=='vasayel') {

    }
  @elseif ($collection=='sargarmi') {

    }
  @elseif ($collection=='ejtema') {

    }
  @elseif ($collection=='forkar') {

    }
  @elseif ($collection=='estekhdam') {

    }
@endif

<div class="amaragahi">
  <div class="amaragahi1">
    <label for="">آمار آگهی</label>
    <label  class="amaragahi2" for=""> آمار تعداد بازدید روزانه آگهی شما از زمان انتشار آگهی در این نمودار قابل مشاهده است.</label>
  </div>
  <div class="">
   <label class="amaragahi3" for="">بازدید کلی:</label>
  </div>
</div>

 {{-- <div class="input-group mb-3 a10">
   <input type="text" class="form-control" id="tavalod2" name="" value="{{$esi->tavalod}}" >
   <div class="input-group-append">
     <span class="input-group-text">تاریخ تولد</span>
   </div>
 </div>

 <div class="input-group mb-3 a10 edit"  action="index.html" method="post">
   <input type="text" class="form-control" id="mobile2" name="" disabled value="{{$esi->mobile}}" >
   <span class="input-group-text">شماره موبایل</span>
 </div>
 <div class="input-group mb-3 a10 edit"  action="index.html" method="post">
   <input type="text" class="form-control" id="tel2" name="" value="{{$esi->tel}}" >
   <span class="input-group-text">شماره تلفن </span>
 </div>

 <div >
   <button type="button" onclick="virayesh2({{$esi->id}})" class="btn btn-success a3"name="button"> ویرایش</button>
   <button type="button" onclick="window.location='/'" class="btn btn-success a3"name="button"> بازگشت</button>
 </div> --}}
</form>

@endsection
