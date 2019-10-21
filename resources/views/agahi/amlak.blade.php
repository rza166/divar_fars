@extends('agahi.layoutAgahi')
@section('agahi2')
  <span class="labela4" for="">آگهی دهنده</span>
  <div class="a2-4">
    <label class="form-check-label a2-4input2a" for="radio3">
            <input type="radio" class="form-check-input a2-4input1a" id="radio3" name="optradio3" value="1"  >شخصی
    </label>
    <label class="form-check-label a2-4input3" for="radio4">
        <input type="radio" class="form-check-input a2-4input4a" id="radio4" name="optradio3" value="2">مشاور املاک
  </div>

  <span class="labela4" for="">متراژ</span>
  <input  type="text" id="meter" class="a2-3" placeholder="مترمربع">

@if (!empty($kharid))
  <span class="labela4" for="">خرید</span>
  <input  type="text" id="meter" class="a2-3" placeholder="مترمربع">
@endif


  <span class="labela4" for="">ودیعه</span>
  <input  type="text" id="vadie" class="a2-3" placeholder="قیمت به تومان">

  <span class="labela4" for="">اجاره</span>
  <input  type="text" id="ejare" class="a2-3" placeholder="قیمت به تومان">

  <span class="labela4" for="">تعداد اتاق</span>
 <select class="a2-3" id="tedadotagh">
   <option  value="" ></option>
   <option value="100">بدون اتاق</option>
   <option value="1">یک</option>
   <option value="2">دو</option>
   <option value="3">سه</option>
   <option value="4">چهار</option>
   <option value="5">پنج یا بیشتر</option>
 </select>

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



@endsection
