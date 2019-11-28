@extends('agahi.layoutAgahi')
@section('agahi2')



  <span class="labela4" for="">قیمت</span>
  <input oninput="sub6('#price','#priceajax')"   onkeypress='validate(event)' type="text" id="price" class="a2-3" placeholder="قیمت به تومان">
  <div class="ajax" id="priceajax" style="font-size:16px; color:rgb(106, 163, 0);">
  </div>



  @if (!empty($sazandehC))
   <span class="labela4" for="">مدل گوشی</span>
  <select class="a2-3" id="sazandeh">
    <option value=""></option>
    <option>sumsun</option>
    <option>apple</option>
    <option>htc</option>
    <option>nokia</option>
    <option>sony</option>
    <option>sony erison</option>
    <option>LG</option>
    <option>motorola</option>
    <option>huawei</option>
    <option>Acer</option>
    <option>Asusse</option>
    <option>Dell</option>
    <option>Lenevo</option>
    <option>Msi</option>
    <option>Amazon</option>
    <option>ZTE</option>
    <option>Farassoo</option>
    <option>غیره</option>
  </select>
  @endif


  <span class="labela4" for="">نوع آگهی</span>
  <div class="a2-4" >
    <label class="form-check-label a2-4input2a" for="radio1">
            <input type="radio" id="typeagahi" class="form-check-input a2-4input11" id="radio1" name="optradio" value="1">فروشی
    </label>
    <label class="form-check-label a2-4input3" for="radio2">
        <input type="radio" class="form-check-input a2-4input4" id="radio2" name="optradio" value="2">درخواستی
    </label>
  </div>



  @if (!empty($simkartC))
    <span class="labela4" for="">نوع سیم کارت</span>
   <select class="a2-3" id="tedadotagh">
     <option  value="" ></option>
     <option value="100">همراه اول</option>
     <option value="1">ایرانسل</option>
     <option value="2">رایتل</option>
     </select>
  @endif



      <span class="labela4-1" for="">مایلم معاوضه کنم</span>
      <input  type="checkbox" value="1" id="moaveze" class="labela4-2">

      @section('agahi3')
      <div class="a2-6">
      <button type="button" onclick="etebar('{{$menu}}')" class="btn btn-danger">ارسال آگهی</button>
      </div>
      @endsection
@endsection
