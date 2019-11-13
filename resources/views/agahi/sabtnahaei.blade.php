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
      <span class="input-group-text">شهر <input type="text" class="input-group-text a7-input" id="city2" disabled name=""  value="{{$esi->city}}"></span>
      <span class="input-group-text">قیمت<input type="text" class="input-group-text a7-input" id="price2" name="" disabled value="{{$esi->price}}"></span>
      <span class="input-group-text">نوع آگهی<input type="text" class="input-group-text a7-input" id="typeagahi2" name="" disabled @if ($esi->typeagahi==1)value="ارایه"@else value="درخواستی"@endif ></span>
      <span class="input-group-text">آگهی دهنده<input type="text" class="input-group-text a7-input2" id="agahidahande2" name="" disabled value="{{$esi->agahidahande}}"></span>
      <span class="input-group-text">متراژ<input type="text" class="input-group-text a7-input" id="meter2" name="" disabled value="{{$esi->meter}}"></span>
      <span class="input-group-text">ودیعه<input type="text" class="input-group-text a7-input" id="vadie2" name="" disabled value="{{$esi->vadie}}"></span>
      <span class="input-group-text">اجاره<input type="text" class="input-group-text a7-input" id="ejare2" name="" disabled value="{{$esi->ejare}}"></span>
      <span class="input-group-text">تعداد اتاق<input type="text" class="input-group-text a7-input2" id="tedadotagh2" name="" disabled value="{{$esi->tedadotagh}}"></span>
      <span class="input-group-text">سال ساخت<input type="text" class="input-group-text a7-input2" id="salesakht" name="" disabled value="{{$esi->salesakht}}"></span>
      <span class="input-group-text">موبایل<input type="text" class="input-group-text a7-input2" id="mobile2" name="" disabled value="{{$esi->mobile}}"></span>
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
