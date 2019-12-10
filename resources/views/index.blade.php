@extends('layout')
@section('title')
  صفحه اصلی
@endsection
@section('content')


  <!-- left site -->
  <div class="e17">
		<li class="e18"><a href="">همه آگهی ها</a></li>
		<li><i class="fa fa-home nemad"></i><a href="#">املاک</a></li>
		<li><i class='fas fa-car nemad'></i><a href="#">وسایل نقلیه</a></li>
    <li><i class='fas fa-mobile-alt nemad' ></i><a href="#">لوازم الکتریکی</a></li>
  	<li><i class='fas fa-tv nemad'></i><a href="#">مربوط به خانه</a></li>
  	<li><i class='far fa-handshake nemad'></i><a href="#">خدمات</a></li>
    <li><i class='fas fa-bicycle nemad'></i><a href="#">وسایل شخصی</a></li>
  	<li><i class='fas fa-gamepad nemad'></i><a href="#">سرگرمی وفراغت</a></li>
  	<li><i class='fas fa-people-carry nemad'></i><a href="#">اجتماعی</a></li>
    <li><i class='fas fa-bullhorn nemad'></i><a href="#">برای کسب وکار</a></li>
  	<li><i class='fas fa-street-view nemad'></i><a href="#">استخدام وکاریابی</a></li>
</div>



  <div class="e19">



      <div class=" e20">
         <input type="text"  class=" e22 e23 e22-1" placeholder="جستجو در همه آگهی ها" id="onvanagahi" name="username">
        <div class=" e21 e22-1">
          <i onclick="searchAgahi()" class="material-icons">&#xe8b6;</i>
            {{-- <button type="button" onclick="searchAgahi()" class="e21 e22-1"  ></button> --}}
  {{-- <button type="button" onclick="searchAgahi()" class="e14-1 "  ><i class="material-icons">&#xe8b6;</i></button> --}}
           <div class="" id="searchName3">

          </div >
          </div >
        </div >


        {{-- <div class=" e20">
          <input type="text" class=" e22 e24 e26" placeholder="همه آگهی ها" id="usr2" name="username">
        <div class=" e21 ">
          <i class='fas fa-caret-down e25' style='font-size:14px'></i>
        </div >
      </div> --}}


       {{-- <div class=" e20 ">
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

      </div> --}}


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

           {{-- <button type="text" class="btn btn-danger e28" >جستجو</button> --}}


    </form>


    <div class="allagahi" id="allagahi">
      <div class="khat2">

      </div>
      @foreach ($agahi as $agahi2)
        <div class="oneagahi">
           <div class="matnagahi">
             <div class="titragahi">
                   {{$agahi2->onvanagahi}}
             </div>
             <div class="priceagahi">
               {{$agahi2->price}} تومان
             </div>
             <div class="tarikh">
               {{-- {{date('y/m/d h:i:s',$agahi2->date)}} --}}
               @php
                $time=time()-$agahi2->date;
                  // $time=604900;
                if ($time<=3599) {
                  // $time=ceil($time/60);
                  $time=floor($time/60);
                 switch ($time) {
                    case $time<=5: $zaman='لحظاتی پیش';  break;
                    case $time<15: $zaman='دقایقی پیش';  break;
                    case $time>=15: $zaman=$time . 'دقیقه پیش';  break;

                  default:
                    // code...
                    break;
                }
              } else if($time<=86400) {
                  $time=floor($time/60/60);
                  $zaman=$time . 'ساعت پیش';
              } else if($time>86400) {
                  $time=floor($time/60/60/24);
                  $zaman=$time . 'روز پیش';
                }

               @endphp
             {{$zaman}}
             <br>
             {{-- {{time()}} --}}
             </div>
           </div>
           <div class="aksagahi">
             @php
               $showimage=$imageAgahi->where('nameTable',$agahi2->tablename)->where('recordId',$agahi2->id)->first();
             @endphp

             {{$agahi2->ImageAgahi}}
             @if (!empty($showimage->id))
               <img width="135" height="135" src="../img_pro/" alt="">
               @else
                 <i class="fa fa-camera ia tarikh2" style="font-size:42px"></i>
             @endif
             </div>

 {{-- <img src="../img_pro/1574349578agahi.jpg" alt=""> --}}
           {{-- </div>

        </div>
           </div>
        </div>


      {{-- @foreach ($agahi as $agahi2)
        <div class="oneagahi">
           <div class="matnagahi">
             <div class="titragahi">
                   {{$agahi2->onvanagahi}}
             </div>
             <div class="priceagahi">
               {{$agahi2->price}}
             </div>
             <div class="tarikh">
               {{date('y/m/d',$agahi2->date)}}
             </div>
           </div>
           <div class="aksagahi">
             @php
               $showimage=$imageAgahi->where('nameTable',$agahi2->tablename)->where('recordId',$agahi2->id)->first();
             @endphp

             {{$agahi2->ImageAgahi}}
             @if (!empty($showimage->id))
               <img width="135" height="135" src="../img_pro/1574349578agahi.jpg" alt="">
               @else
                 <i class="fa fa-camera ia" style="font-size:42px"></i>
             @endif
 {{-- <img src="../img_pro/1574349578agahi.jpg" alt=""> --}}
           {{-- </div>

        </div>
      @endforeach --}}

    </div>

@endforeach
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
