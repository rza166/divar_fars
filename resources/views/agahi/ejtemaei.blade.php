@extends('agahi.layoutAgahi')
@section('agahi2')





  @if (!empty($typeagahiC))
    <span class="labela4" for="">نوع آگهی</span>
    <div class="a2-4" >
      <label class="form-check-label a2-4input2a" for="radio1">
              <input type="radio" id="typeagahi" class="form-check-input a2-4input111" id="radio1" name="optradio" value="1">گم کرده ام
      </label>
      <label class="form-check-label a2-4input3" for="radio2">
          <input type="radio" class="form-check-input a2-4input4" id="radio2" name="optradio" value="2">پیدا کردم
      </label>
    </div>
  @endif




      <span class="labela4-1" for="">شماره تلفن در آگهی نمایش داده نشود</span>
      <input  type="checkbox" value="1" id="numbertel" class="labela4-2">

      @section('agahi3')
      <div class="a2-6">
      <button type="button" onclick="etebar('{{$menu}}')" class="btn btn-danger">ارسال آگهی</button>
      </div>
      @endsection

@endsection
