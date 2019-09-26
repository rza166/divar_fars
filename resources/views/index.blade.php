@extends('layout')
@section('title')
  صفحه اصلی
@endsection
@section('content')


  <!-- left site -->
  <div class="e17">
		<li class="e18"><a href="">همه آگهی ها</a></li>
		<li><a href="#">املاک</a></li>
		<li><a href="#">وسایل نقلیه</a>
    <li><a href="#">لوازم الکتریکی</a></li>
  	<li><a href="#">مربوط به خانه</a></li>
  	<li><a href="#">خدمات</a>
    <li><a href="#">وسایل شخصی</a></li>
  	<li><a href="#">سرگرمی وفراغت</a></li>
  	<li><a href="#">اجتماعی</a>
    <li><a href="#">برای کسب وکار</a></li>
  	<li><a href="#">استخدام وکاریابی</a></li>
</div>



  <div class="e19">


    <form >
      <div class=" e20">
        <input type="text" class=" e22 e23" placeholder="جستجو در همه آگهی ها" id="usr" name="username">
        <div class=" e21">
          <i class="material-icons ">&#xe8b6;</i>
        </div >
      </div>


      <div class=" e20">
          <input type="text" class=" e22 e24 e26" placeholder="همه آگهی ها" id="usr" name="username">
        <div class=" e21 ">
          <i class='fas fa-caret-down e25' style='font-size:14px'></i>
        </div >
      </div>


      <div class=" e20 ">
        <input type="text" class=" e22 e23" onclick="sho()" placeholder="همه محله ها " id="sh" name="username">
        <div class=" e21" onclick="sho()" id="ii">
          <i class='fas fa-caret-down e25' style='font-size:14px'></i>
        </div >
        <ul class="e27">
          <li type="button" name="button">1</li>
          <li type="button" name="button">2</li>
          <li type="button" name="button">3</li>
          <li type="button" name="button">4</li>
          <li type="button" name="button">5</li>
          <li type="button" name="button">6</li>
          <li type="button" name="button">7</li>
          <li type="button" name="button">8</li>
          <li type="button" name="button">9</li>
          <li type="button" name="button">10</li>
          <li type="button" name="button">11</li>
          <li type="button" name="button">12</li>
          <li type="button" name="button">13</li>
          <li type="button" name="button">14</li>
        </ul>

      </div>


      <div class="e30">
        <label for="" class="e31"> عکس دار</label>
        <input type="checkbox" id="pure-toggle-4" hidden />
        <label class="pure-toggle brick" for="pure-toggle-4"> <span class="fontawesome-ok"></span><span class="fontawesome-remove"> </span></label>
      </div>
      <div class="e30">
        <label for="" class="e31">فوری</label>
        <input type="checkbox" id="pure-toggle-5" hidden />
        <label class="pure-togglee brick" for="pure-toggle-5"> <span class="fontawesome-ok"></span><span class="fontawesome-remove"></span></label>

      </div>



    <button type="text" class="btn btn-danger e28">جستجو</button>
    </form>




  </div>

  {{-- <div class="e27">

      <div class="form-group e20">
        <select class="form-control e21" id="sel1" name="sellist1">
          <option>همه آگهی ها</option>
          <option>املاک</option>
          <option>وسایل نقلیه</option>
          <option>لوازم الکتریکی</option>
          <option>مربوط به خانه</option>
          <option>خذمات</option>
          <option>وسایل شخصی</option>
          <option>سرگرمی وفراغت</option>
          <option>اجتماعی</option>
          <option>برای کسب وکار</option>
          <option>اسنخدام وکاریابی</option>
        </select>
      </div>

  </div> --}}

@endsection
