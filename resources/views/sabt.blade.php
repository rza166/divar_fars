@extends('layout')
@section('title')
  ثبت آگهی رایگان
@endsection
@section('content')
  <div class="e38">
    <span class="e38-1">ثبت رایگان آگهی</span>
    <div class="maindiv mainDiv1" id="ajaxmindiv">

    </div>
    <div class="maindiv mainDiv2" id="">
      @include('agahi.agahi1')
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

@endsection
