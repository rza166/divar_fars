@extends('agahi.layoutAgahi')
@section('agahi2')


  <span class="labela4" for="">قیمت</span>
  <input oninput="sub6('#price','#priceajax')"   onkeypress='validate(event)' type="text" id="price" class="a2-3" placeholder="قیمت به تومان">
  <div class="ajax" id="priceajax" style="font-size:16px; color:rgb(106, 163, 0);">
  </div>


  @if (!empty($typeagahiC))
    <span class="labela4" for="">نوع آگهی</span>
    <div class="a2-4" >
      <label class="form-check-label a2-4input2a" for="radio1">
              <input type="radio" id="typeagahi" class="form-check-input a2-4input11" id="radio1" name="optradio" value="1">مردانه
      </label>
      <label class="form-check-label a2-4input3" for="radio2">
          <input type="radio" class="form-check-input a2-4input4" id="radio2" name="optradio" value="2">زنانه
      </label>
    </div>
  @endif

      <span class="labela4-1" for="">مایلم معاوضه کنم</span>
      <input  type="checkbox" value="1" id="moaveze" class="labela4-2">


      <span class="labela4-1" for="">شماره تلفن در آگهی نمایش داده نشود</span>
      <input  type="checkbox" value="1" id="numbertel" class="labela4-2">
      @section('agahi3')
      <div class="a2-6">
      <button type="button" onclick="etebar('{{$menu}}')" class="btn btn-danger">ارسال آگهی</button>
      </div>
      @endsection
@endsection
