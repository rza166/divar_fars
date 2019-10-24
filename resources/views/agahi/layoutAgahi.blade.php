
<form class="reset" id="reset">
  <div class="a2-8" id="error"></div>
<a onclick="backAgahi()"><div class="a1">
<span class="span1">آپارتمان</span>
<span class="span2">تغییر دسته بندی</span>
</div>
</a>
<div class="a2">
  {{-- <div class=" a2-1"> --}}
    <span class="labela1"  for="">شهر</span>
    {{-- <input type="text" class=" e22 e24 e26"  placeholder="انتخاب شهر" id="usr2" name="username"> --}}
    <select class="a2-1" id="city" name="">
      <option value="" class=" a2-1">انتخاب شهر</option>
      @foreach ($city as $element)
        <option value="{{$element->city}}">{{$element->city}}</option>
      @endforeach
    </select>
  {{-- <div class=" e21 ">
    <i class='fas fa-caret-down e25' style='font-size:14px'></i>
  </div > --}}
  {{-- </div> --}}
  <span class="labela2"  for="">نقشه</span>
  <div class="a2-5" id="map">
      نقشه
  </div>

  <div class="a2-2">
     <span class="labela3"  for="">عکس آگهی</span>
     <p class="p1">افزودن عکس بازدید آگهی شما را تا سه برابر افزایش می دهد.</p>
     <div class="aksa" id="image"  onclick="showmodal()" >
        <i class="fa fa-camera ia" style="font-size:24px"></i>
     </div>
  </div>

  <span class="labela4" for="">متراژ</span>
  <input oninput="sub('#meter','#meterajax')"  onkeypress='validate(event)' type="text" id="meter" class="a2-3" placeholder="مترمربع">
  <div class="ajax" id="meterajax" style="font-size:16px; color:rgb(106, 163, 0);">

  </div>

  <span class="labela4" for="">نوع آگهی</span>
  <div class="a2-4" >
    <label class="form-check-label a2-4input2a" for="radio1">
            <input type="radio" id="typeagahi" class="form-check-input a2-4input1" id="radio1" name="optradio" value="1" >ارائه
    </label>
    <label class="form-check-label a2-4input3" for="radio2">
        <input type="radio" class="form-check-input a2-4input4" id="radio2" name="optradio" value="2">درخواستی
    </label>
  </div>

  <span class="labela4" for="">آگهی دهنده</span>
  <div class="a2-4">
    <label class="form-check-label a2-4input2a" for="radio3">
            <input type="radio" class="form-check-input a2-4input1a" id="radio3" name="optradio3" value="شخصی"  >
            شخصی
    </label>
    <label class="form-check-label a2-4input3" for="radio4">
        <input type="radio" class="form-check-input a2-4input4a" id="radio4" name="optradio3" value="مشاوره املاک">
        مشاور املاک
  </div>



{{--  --}}
  <div class="agahi2">
    @yield('agahi2')
  </div>

  <span class="labela5" for="">شماره موبایل</span>
  <p class="p2">توجه: لطفاً پس از ثبت آگهی، از طریق هیچ پیامکی برای پرداخت وجه جهت انتشار آگهی اقدام نکنید.</p>
  <p class="p2">کد تأیید به شمارهٔ موبایل شما ارسال خواهد شد. تماس و چت نیز با این شماره انجام می‌شود.</p>
  <input  type="text" id="mobile" class="a2-3">

  @if (!empty($chatC))
    <span class="labela4-1" for="">چت دیوار فعال شود</span>
    <input  type="checkbox" value="1" id="chat" class="labela4-2">
  @endif

  <span class="labela5" for="">عنوان آگهی</span>
  <p class="p2">در عنوان آگهی به موارد مهم و چشمگیر اشاره کنید.</p>
  <input  type="text" id="onvanagahi" class="a2-3">

  <span class="labela5" for="">توضیحات آگهی</span>
  <p class="p2">جزئیات و نکات قابل توجه آگهی خود را کامل و دقیق بنویسید تا شانس موفقیت آگهی شما بیشتر شود.</p>
  <textarea class="a2-7" rows="5" id="tozihat" name="text"></textarea>

  <div class="a2-6">
  <button type="button" onclick="etebar('{{$menu}}')" class="btn btn-danger">ارسال آگهی</button>
  </div>


</form>
