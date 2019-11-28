@extends('agahi.layoutAgahi')
@section('agahi2')
<
  <span class="labela4" for="">نوع آگهی</span>
  <div class="a2-4" >
    <label class="form-check-label a2-4input2a" for="radio1">
            <input type="radio" id="typeagahi" class="form-check-input a2-4input11" id="radio1" name="optradio" value="1">فروشی
    </label>
    <label class="form-check-label a2-4input3" for="radio2">
        <input type="radio" class="form-check-input a2-4input4" id="radio2" name="optradio" value="2">درخواستی
    </label>
  </div>


    <span class="labela4" for="">لینک وب سایت شما</span>
    <p class="p2">لینک وب‌سایت شما، در وب‌سایت دیوار و در نسخهٔ ۱۰ اندروید قابل مشاهده و کلیک است. هزینهٔ فعال‌سازی درج لینک در آگهی ۲۰,۰۰۰ تومان است.</p>
    <input  type="text" id="websayt" class="a2-3"  placeholder="اختیاری">

  <


    <span class="labela4-1" for="">چت دیوار فعال شود</span>
    <input  type="checkbox" value="1" id="chat" class="labela4-2">

    @section('agahi3')
    <div class="a2-6">
    <button type="button" onclick="etebar('{{$menu}}')" class="btn btn-danger">ارسال آگهی</button>
    </div>
    @endsection
  @endsection
  <
