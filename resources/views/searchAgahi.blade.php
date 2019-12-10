{{-- @foreach ($onvanagahi as $onvanagahies)

 <div  onclick="window.location='/{{$onvanagahies->onvanagahi}}'">
{{$onvanagahies->onvanagahi}}

</div>


@endforeach --}}

@foreach ($onvanagahi as $agahi2)
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
       {{-- @php
         $showimage=$imageAgahi->where('nameTable',$agahi2->tablename)->where('recordId',$agahi2->id)->first();
       @endphp

       {{$agahi2->ImageAgahi}}
       @if (!empty($showimage->id))
         <img width="135" height="135" src="../img_pro/" alt="">
         @else
           <i class="fa fa-camera ia tarikh2" style="font-size:42px"></i>
       @endif --}}
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
