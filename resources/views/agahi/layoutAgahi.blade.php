

<a href=""><div class="a1">
<span class="span1">سیم کارت</span>
<span class="span2">تغییر دسته بندی</span>
</div>
</a>
<div class="a2">
  <div class=" a2-1">
    <span class="labela1" for="">شهر</span>
    <input type="text" class=" e22 e24 e26" placeholder="انتخاب شهر" id="usr2" name="username">
  <div class=" e21 ">
    <i class='fas fa-caret-down e25' style='font-size:14px'></i>
  </div >
  </div>
  <span class="labela2" for="">نقشه</span>
  <div class="a2-5">
      نقشه
  </div>

  <div class="a2-2">
     <span class="labela3" for="">عکس آگهی</span>
     <p class="p1">افزودن عکس بازدید آگهی شما را تا سه برابر افزایش می دهد.</p>
     <div class="aksa " onclick="showmodal()" >
        <i class="fa fa-camera ia" style="font-size:24px"></i>
     </div>
  </div>

  <span class="labela4" for="">قیمت</span>
  <input  type="text" class="a2-3">

  <span class="labela4" for="">نوع آگهی</span>
  <div class="a2-4">
    <label class="form-check-label a2-4input2" for="radio1">
            <input type="radio" class="form-check-input a2-4input1" id="radio1" name="optradio" value="option1" checked>ارائه
    </label>
    <label class="form-check-label a2-4input3" for="radio2">
        <input type="radio" class="form-check-input a2-4input4" id="radio2" name="optradio" value="option2">درخواستی
    </label>
  </div>

  <span class="labela5" for="">شماره موبایل</span>
  <p class="p2">توجه: لطفاً پس از ثبت آگهی، از طریق هیچ پیامکی برای پرداخت وجه جهت انتشار آگهی اقدام نکنید.</p>
  <p class="p2">کد تأیید به شمارهٔ موبایل شما ارسال خواهد شد. تماس و چت نیز با این شماره انجام می‌شود.</p>
  <input  type="text" class="a2-3">

  <span class="labela5" for="">عنوان آگهی</span>
  <p class="p2">در عنوان آگهی به موارد مهم و چشمگیر اشاره کنید.</p>
  <input  type="text" class="a2-3">

  <span class="labela5" for="">توضیحات آگهی</span>
  <p class="p2">جزئیات و نکات قابل توجه آگهی خود را کامل و دقیق بنویسید تا شانس موفقیت آگهی شما بیشتر شود.</p>
  <textarea class="a2-5" rows="5" id="comment" name="text"></textarea>

  <div class="a2-6">
  <button type="button" onclick="window.location=''" class="btn btn-danger">ارسال آگهی</button>
  </div>

</div>


<!-- The Modal -->
<div class="modal" id="aks">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id="imgAddPro1">

        </div>
        <form class="dropzone" id="zabi" action="/uplod_img_pro"   enctype="multipart/form-data" method="post">
          {{ csrf_field() }}

          <div class="dz-message">
              <div class="col-xs-8">
                  <div class="message">
                      <p>جهت آپلود عکس این کادر را کلیک کنید</p>
                  </div>
              </div>
          </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
