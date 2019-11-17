// لوگوی انتظار
// $('#loader').hide();
// jQuery.ajaxSetup({
//   beforeSend: function() {
//      $('#loader').show();
//   },
//   complete: function(){
//      $('#loader').hide();
//   },
//   success: function() {}
// });

// مربوط به املاک
function amlak(liClass,li2,meterC,agahidahandeC,kharidC,moavezeC,chatC,tedadotaghC,salesakhtC,codemeliC,vadieC,ejareC,sanadC,ejaredayC,menu,titr) {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../amlak',
    data:{
    liClass:liClass,
    li2:li2,
    kharidC:kharidC,
    moavezeC:moavezeC,
    chatC:chatC,
    tedadotaghC:tedadotaghC,
    salesakhtC:salesakhtC,
    codemeliC:codemeliC,
    vadieC:vadieC,
    ejareC:ejareC,
    sanadC:sanadC,
    meterC:meterC,
    agahidahandeC:agahidahandeC,
    ejaredayC:ejaredayC,
    menu:menu,
    titr:titr,
    },
    success:function(data){
      $('.mainDiv1').css('display','block');
    $('.mainDiv2').css('display','none');

    $('#ajaxmindiv').html(data)

    }
  });
}


// مربوط به وسایل نقلیه
function mashin(liClass,li3,berandC,karkardC,kharidC,moavezeC,chatC,nahveforoushC,salesakhtC,codemeliC,girboxC,badaneC,sanadC,rangC,typeagahiC,menu,titr) {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../mashin',
    data:{
    liClass:liClass,
    li3:li3,
    berandC:berandC,
    karkardC:karkardC,
    kharidC:kharidC,
    moavezeC:moavezeC,
    chatC:chatC,
    nahveforoushC:nahveforoushC,
    salesakhtC:salesakhtC,
    codemeliC:codemeliC,
    girboxC:girboxC,
    badaneC:badaneC,
    sanadC:sanadC,
    rangC:rangC,
    typeagahiC:typeagahiC,
    menu:menu,
    titr:titr,
    },
    success:function(data){
      $('.mainDiv1').css('display','block');
    $('.mainDiv2').css('display','none');

    $('#ajaxmindiv').html(data)

    }
  });
}

//مربوط به لوازم الکتریکی
function electriki(liClass,li4,sazandehC,simkartC,menu,titr) {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../electriki',
    data:{
    liClass:liClass,
    li4:li4,
    sazandehC:sazandehC,
    simkartC:simkartC,
    menu:menu,
    titr:titr,
    },
    success:function(data){
      $('.mainDiv1').css('display','block');
    $('.mainDiv2').css('display','none');

    $('#ajaxmindiv').html(data)

    }
  });
}

//مربوط به خدمات خانه
function khane(liClass,li5,menu,titr) {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../khane',
    data:{
    liClass:liClass,
    li5:li5,
    menu:menu,
    titr:titr,
    },
    success:function(data){
      $('.mainDiv1').css('display','block');
    $('.mainDiv2').css('display','none');

    $('#ajaxmindiv').html(data)

    }
  });
}

// مربوط به خدمات
function khadamat(liClass,li5,menu,titr) {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../khadamat',
    data:{
    liClass:liClass,
    li5:li5,
    menu:menu,
    titr:titr,
    },
    success:function(data){
      $('.mainDiv1').css('display','block');
    $('.mainDiv2').css('display','none');

    $('#ajaxmindiv').html(data)

    }
  });
}

// مربوط به وسایل شخصی
function vasayel(liClass,li5,typeagahiC,menu,titr) {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../vasayel',
    data:{
    liClass:liClass,
    li5:li5,
    typeagahiC:typeagahiC,
    menu:menu,
    titr:titr,
    },
    success:function(data){
      $('.mainDiv1').css('display','block');
    $('.mainDiv2').css('display','none');

    $('#ajaxmindiv').html(data)

    }
  });
}


//مربوط به سرگرمی وفراغت
function sargarmi(liClass,li5,codemeliC,menu,titr) {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../sargarmi',
    data:{
    liClass:liClass,
    li5:li5,
    codemeliC:codemeliC,
    menu:menu,
    titr:titr,
    },
    success:function(data){
      $('.mainDiv1').css('display','block');
    $('.mainDiv2').css('display','none');

    $('#ajaxmindiv').html(data)

    }
  });
}

//مربوط به منوی اجتماعی
function ejtemaei(liClass,li5,typeagahiC,menu,titr) {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../ejtemaei',
    data:{
    liClass:liClass,
    li5:li5,
    typeagahiC:typeagahiC,
    menu:menu,
    titr:titr,
    },
    success:function(data){
      $('.mainDiv1').css('display','block');
    $('.mainDiv2').css('display','none');

    $('#ajaxmindiv').html(data)

    }
  });
}

//مربوط به برای کسب وکار
function forkar(liClass,li5,menu,titr) {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../forkar',
    data:{
    liClass:liClass,
    li5:li5,
    menu:menu,
    titr:titr,
    },
    success:function(data){
      $('.mainDiv1').css('display','block');
    $('.mainDiv2').css('display','none');

    $('#ajaxmindiv').html(data)

    }
  });
}


//مربوط به استخدام وکاریابی
function estekhdam(liClass,li5,menu,titr) {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../estekhdam',
    data:{
    liClass:liClass,
    li5:li5,
    menu:menu,
    titr:titr,
    },
    success:function(data){
      $('.mainDiv1').css('display','block');
    $('.mainDiv2').css('display','none');

    $('#ajaxmindiv').html(data)

    }
  });
}




function backAgahi(liClass) {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    // type:'post',
    // url:'../backAgahi',
    // data:{
    //
    // },
    success:function(data){

      // $('#ajaxmindiv').html(data)
      $('.mainDiv1').css('display','none');
      $('.mainDiv2').css('display','block');
      // $('.li1').css('display','block');
      // $('.li_5').css('display','block');
      // $('.lia1' ).css('display','block');
      // $('.ula1' ).css('display','block');
    }
  });
}
//تنظیم اسکرول فرمها پس از ایجاد خطا و نمایش خطا به کاربر
function scroll_form(class_form){
  var h= $('.'+class_form).offset();
  var fixedDiv= $('.fixed').outerHeight();
  if(fixedDiv){
  var hTop=h.top-fixedDiv-12;
  } else{
  var hTop=h.top-12;
  }
  window.scrollTo(0 ,hTop);
}

// مربوط به اعتبار سنجی آگهی
function etebar(menu) {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../etebar',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         price:$('#price').val(),
         moaveze:$('#moaveze:checked').val(),
         typeagahi:$('input[name=optradio]:checked').val(),
         agahidahande:$('input[name=optradio3]:checked').val(),
         meter:$('#meter').val(),
         vadie:$('#vadie').val(),
         ejare:$('#ejare').val(),
         tedadotagh:$('#tedadotagh').val(),
         salesakht:$('#salesakht').val(),
         mobile:$('#mobile').val(),
         codemeli:$('#codemeli').val(),
         chat:$('#chat:checked').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),
          menu:menu,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data;
    },
    error: function(xhr) {
      scroll_form('reset')
     // refresh()
    var errors = xhr.responseJSON;
        var error=errors.errors;
        if(error['city']){
          $('#error').html('<div class="alert alert-danger ">' + error['city'] +'</div>');
         }
        //   else if(error['tavalod']){
        //   $('#error').html('<div class="alert alert-danger">' + error['tavalod'] +'</div>');
        // }
        else if(error['price']){
       $('#error').html('<div class="alert alert-danger">' + error['price'] +'</div>');
     }
     else if(error['typeagahi']){
    $('#error').html('<div class="alert alert-danger">' + error['typeagahi'] +'</div>');
  }
  else if(error['agahidahande']){
 $('#error').html('<div class="alert alert-danger">'+ error['agahidahande'] + '</div>');
}
          else if(error['meter']){
         $('#error').html('<div class="alert alert-danger">' + error['meter'] +'</div>');
       }
       else if(error['vadie']){
      $('#error').html('<div class="alert alert-danger">'+ error['vadie'] + '</div>');
     }
     else if(error['ejare']){
    $('#error').html('<div class="alert alert-danger">'+ error['ejare'] + '</div>');
   }
   else if(error['tedadotagh']){
  $('#error').html('<div class="alert alert-danger">'+ error['tedadotagh'] + '</div>');
 }
 else if(error['salesakht']){
$('#error').html('<div class="alert alert-danger">'+ error['salesakht'] + '</div>');
}
else if(error['mobile']){
$('#error').html('<div class="alert alert-danger">'+ error['mobile'] + '</div>');
}
else if(error['onvanagahi']){
$('#error').html('<div class="alert alert-danger">'+ error['onvanagahi'] + '</div>');
}
else if(error['tozihat']){
$('#error').html('<div class="alert alert-danger">'+ error['tozihat'] + '</div>');
}

     }
  });
//   var esi=$('#codemeli').val();
// alert(esi);
}


//وسایل نقلیه
function car(menu) {
     // girbox=$('#girbox').val()
     // alert(girbox)
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../car',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         price:$('#price').val(),
         moaveze:$('#moaveze:checked').val(),
         typeagahi:$('input[name=optradio]:checked').val(),
         agahidahande:$('input[name=optradio3]:checked').val(),
         nahveforoush:$('#nahveforoush').val(),
         barand:$('#barand').val(),
         salesakht:$('#salesakht').val(),
         karkard:$('#karkard').val(),
         sanad:$('#sanad').val(),
         girbox:$('#girbox').val(),
         badane:$('#badane').val(),
         rang:$('#rang').val(),
         mobile:$('#mobile').val(),
         codemeli:$('#codemeli').val(),
         chat:$('#chat:checked').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),
          menu:menu,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data;
    },
    error: function(xhr) {
      scroll_form('reset')
     // refresh()
    var errors = xhr.responseJSON;
        var error=errors.errors;
        if(error['city']){
          $('#error').html('<div class="alert alert-danger ">' + error['city'] +'</div>');
         }
        //   else if(error['tavalod']){
        //   $('#error').html('<div class="alert alert-danger">' + error['tavalod'] +'</div>');
        // }
        else if(error['price']){
       $('#error').html('<div class="alert alert-danger">' + error['price'] +'</div>');
     }
     else if(error['typeagahi']){
    $('#error').html('<div class="alert alert-danger">' + error['typeagahi'] +'</div>');
  }
  else if(error['moaveze']){
 $('#error').html('<div class="alert alert-danger">'+ error['moaveze'] + '</div>');
}
          else if(error['barand']){
         $('#error').html('<div class="alert alert-danger">' + error['barand'] +'</div>');
       }
       else if(error['salesakht']){
      $('#error').html('<div class="alert alert-danger">'+ error['salesakht'] + '</div>');
     }
     else if(error['karkard']){
    $('#error').html('<div class="alert alert-danger">'+ error['karkard'] + '</div>');
   }
   else if(error['sanad']){
  $('#error').html('<div class="alert alert-danger">'+ error['sanad'] + '</div>');
 }
 else if(error['nahveforoush']){
$('#error').html('<div class="alert alert-danger">'+ error['nahveforoush'] + '</div>');
}
else if(error['girbox']){
$('#error').html('<div class="alert alert-danger">'+ error['girbox'] + '</div>');
}
else if(error['badane']){
$('#error').html('<div class="alert alert-danger">'+ error['badane'] + '</div>');
}
else if(error['rang']){
$('#error').html('<div class="alert alert-danger">'+ error['rang'] + '</div>');
}
else if(error['mobile']){
$('#error').html('<div class="alert alert-danger">'+ error['mobile'] + '</div>');
}
else if(error['onvanagahi']){
$('#error').html('<div class="alert alert-danger">'+ error['onvanagahi'] + '</div>');
}
else if(error['tozihat']){
$('#error').html('<div class="alert alert-danger">'+ error['tozihat'] + '</div>');
}

     }
  });
//   var esi=$('#codemeli').val();
// alert(esi);
}

//لوازم الکتریکی
function barghi(menu) {
      $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../barghi',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         sazandeh:$('#sazandeh').val(),
         moaveze:$('#moaveze:checked').val(),
         typeagahi:$('input[name=optradio]:checked').val(),
         price:$('#price').val(),
         mobile:$('#mobile').val(),
         chat:$('#chat:checked').val(),
         chat:$('#chat:checked').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),
          menu:menu,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data;
    },
    error: function(xhr) {
      scroll_form('reset')
     // refresh()
    var errors = xhr.responseJSON;
        var error=errors.errors;
        if(error['city']){
          $('#error').html('<div class="alert alert-danger ">' + error['city'] +'</div>');
         }

        else if(error['price']){
       $('#error').html('<div class="alert alert-danger">' + error['price'] +'</div>');
 }
     else if(error['typeagahi']){
    $('#error').html('<div class="alert alert-danger">' + error['typeagahi'] +'</div>');
  }
  else if(error['moaveze']){
 $('#error').html('<div class="alert alert-danger">'+ error['moaveze'] + '</div>');
}
else if(error['mobile']){
$('#error').html('<div class="alert alert-danger">'+ error['mobile'] + '</div>');
}
else if(error['onvanagahi']){
$('#error').html('<div class="alert alert-danger">'+ error['onvanagahi'] + '</div>');
}
else if(error['tozihat']){
$('#error').html('<div class="alert alert-danger">'+ error['tozihat'] + '</div>');
}

     }
  });
}

//مربوط به خانه
function home(menu) {
      $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../home',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         moaveze:$('#moaveze:checked').val(),
         typeagahi:$('input[name=optradio]:checked').val(),
         price:$('#price').val(),
         mobile:$('#mobile').val(),
         chat:$('#chat:checked').val(),
         chat:$('#chat:checked').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),
          menu:menu,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data;
    },
    error: function(xhr) {
      scroll_form('reset')
     // refresh()
    var errors = xhr.responseJSON;
        var error=errors.errors;
        if(error['city']){
          $('#error').html('<div class="alert alert-danger ">' + error['city'] +'</div>');
         }

        else if(error['price']){
       $('#error').html('<div class="alert alert-danger">' + error['price'] +'</div>');
 }
     else if(error['typeagahi']){
    $('#error').html('<div class="alert alert-danger">' + error['typeagahi'] +'</div>');
  }
  else if(error['moaveze']){
 $('#error').html('<div class="alert alert-danger">'+ error['moaveze'] + '</div>');
}
else if(error['mobile']){
$('#error').html('<div class="alert alert-danger">'+ error['mobile'] + '</div>');
}
else if(error['onvanagahi']){
$('#error').html('<div class="alert alert-danger">'+ error['onvanagahi'] + '</div>');
}
else if(error['tozihat']){
$('#error').html('<div class="alert alert-danger">'+ error['tozihat'] + '</div>');
}

     }
  });
}

// خدمات
function help(menu) {
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../help',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         websayt:$('#websayt').val(),
         mobile:$('#mobile').val(),
         chat:$('#chat:checked').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),
          menu:menu,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data ;
    },
    error: function(xhr) {
      scroll_form('reset')
     // refresh()
    var errors = xhr.responseJSON;
        var error=errors.errors;
        if(error['city']){
          $('#error').html('<div class="alert alert-danger ">' + error['city'] +'</div>');
         }

else if(error['mobile']){
$('#error').html('<div class="alert alert-danger">'+ error['mobile'] + '</div>');
}
else if(error['onvanagahi']){
$('#error').html('<div class="alert alert-danger">'+ error['onvanagahi'] + '</div>');
}
else if(error['tozihat']){
$('#error').html('<div class="alert alert-danger">'+ error['tozihat'] + '</div>');
}

     }
  });

}

//وسایل شخصی
function vasile(menu) {
        $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../vasile',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         moaveze:$('#moaveze:checked').val(),
         typeagahi:$('input[name=optradio]:checked').val(),
         price:$('#price').val(),
         mobile:$('#mobile').val(),
         chat:$('#chat:checked').val(),
         chat:$('#chat:checked').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),
          menu:menu,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data;
    },
    error: function(xhr) {
      scroll_form('reset')
     // refresh()
    var errors = xhr.responseJSON;
        var error=errors.errors;
        if(error['city']){
          $('#error').html('<div class="alert alert-danger ">' + error['city'] +'</div>');
         }

        else if(error['price']){
       $('#error').html('<div class="alert alert-danger">' + error['price'] +'</div>');
 }
     else if(error['typeagahi']){
    $('#error').html('<div class="alert alert-danger">' + error['typeagahi'] +'</div>');
  }
  else if(error['moaveze']){
 $('#error').html('<div class="alert alert-danger">'+ error['moaveze'] + '</div>');
}
else if(error['mobile']){
$('#error').html('<div class="alert alert-danger">'+ error['mobile'] + '</div>');
}
else if(error['onvanagahi']){
$('#error').html('<div class="alert alert-danger">'+ error['onvanagahi'] + '</div>');
}
else if(error['tozihat']){
$('#error').html('<div class="alert alert-danger">'+ error['tozihat'] + '</div>');
}

     }
  });
}


//استخدام
function estekhdam2(menu) {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../estekhdam2',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         // price:$('#price').val(),
         mobile:$('#mobile').val(),
         chat:$('#chat:checked').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),
          menu:menu,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data ;
    },
    error: function(xhr) {
      scroll_form('reset')
     // refresh()
    var errors = xhr.responseJSON;
        var error=errors.errors;
        if(error['city']){
          $('#error').html('<div class="alert alert-danger ">' + error['city'] +'</div>');
         }

else if(error['mobile']){
$('#error').html('<div class="alert alert-danger">'+ error['mobile'] + '</div>');
}
else if(error['onvanagahi']){
$('#error').html('<div class="alert alert-danger">'+ error['onvanagahi'] + '</div>');
}
else if(error['tozihat']){
$('#error').html('<div class="alert alert-danger">'+ error['tozihat'] + '</div>');
}

     }
  });
//   var esi=$('#codemeli').val();
// alert(esi);
}



// تابع زیر نویس
function  sub(inputId, divId) {
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
    $.ajax({
    success:function(data){
      var inputId2=$(inputId).val();
      $(divId).html(inputId2 + ' مترمربع');
    }
    })
}
function  sub2(inputId, divId) {
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
    $.ajax({
    success:function(data){
      var inputId2=$(inputId).val();
      $(divId).html(inputId2 + ' تومان');
    }
    })
}
function  sub3(inputId, divId) {
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
    $.ajax({
    success:function(data){
      var inputId2=$(inputId).val();
      $(divId).html(inputId2 + ' تومان');
    }
    })
}

function  sub4(inputId, divId) {
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
    $.ajax({
    success:function(data){
      var inputId2=$(inputId).val();
      $(divId).html(inputId2 + ' تومان');
    }
    })
}
function  sub5(inputId, divId) {
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
    $.ajax({
    success:function(data){
      var inputId2=$(inputId).val();
      $(divId).html(inputId2 + ' تومان');
    }
    })
}

function  sub6(inputId, divId) {
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
    $.ajax({
    success:function(data){
      var inputId2=$(inputId).val();
      $(divId).html(inputId2 + ' تومان');
    }
    })
}

function  sub7(inputId, divId) {
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
    $.ajax({
    success:function(data){
      var inputId2=$(inputId).val();
      $(divId).html(inputId2 + ' تومان');
    }
    })
}

function  sub8(inputId, divId) {
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
    $.ajax({
    success:function(data){
      var inputId2=$(inputId).val();
      $(divId).html(inputId2 + ' تومان');
    }
    })
}

// وارد کردن فقط بصورت عدد
function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
