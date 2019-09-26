 <div class="e1">
<a href="/"> <img src="../image/1.jpg" class="e2" alt=""></a>



  <div class="e3" data-toggle="modal" data-target="#modalCity">
    <div class="e4">
        {{$city}}
    </div>
    <div class="e5">
      <i class="fas fa-angle-down" ></i>
    </div>
  </div>
  <div class="e15">

  <ul class="u15">
    <li class="">
     <a class="nav-link" href="/pagei">دیوار من</a>
    </li>
    <li class="">
      <a class="nav-link" href="">چت</a>
    </li>
    <li class="">
      <a class="nav-link" href="/about">درباره ما</a>
    </li>
    <li class="">
      <a class="nav-link" href="#">بلاگ</a>
    </li>
    <li class="">
      <a class="nav-link" href="#">قوانین وپشتیبانی</a>
    </li>
    <li class="">
      <a class="nav-link" href="/tamas">تماس با ما</a>
    </li>
    {{-- <li class="">
      <a class="nav-link" href="#">خروج</a>
    </li> --}}
  </ul>

  </div>
  <div class="e16">
  <button type="button" class="btn btn-danger">ثبت رایگان آگهی</button>
  </div>

</div>

<!-- The Modal -->
  <div class="modal fade" id="modalCity">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title e12">انتخاب شهر </h5>

        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="e7">
            <input type="text" class="e13" id="searchName" oninput="searchName()" placeholder="جستجوی سریع نام شهر ..." name="search">
            <button type="button" class="e14"  ><i class="fa fa-search"></i></button>
          </div>
          <div class="" id="searchName2">


          <div class="e7">
            <h5 class="modal-title e12">  شهرهای پربازدید </h5>
          </div>
          <div class="e8">
            @php
              $r=0;
            @endphp
            @foreach ($city1 as $cites)
           <?php
           $r++;
           ?>
                @break($r==6)

              <div class="e10" onclick="window.location='/{{$cites->city}}'">
                    {{$cites->city}}
              </div>

            @endforeach

          </div>
          <h5 class="modal-title e12">همه شهرها </h5>
        <div class="e9">
          @foreach ($city1 as $cites)

           <div class="e10" onclick="window.location='/{{$cites->city}}'">
            {{$cites->city}}

        </div>
          @endforeach
      </div>
      </div>
          </div>


        <!-- Modal footer -->
        <div class="modal-footer">

      </div>

    </div>
  </div>
</div>
