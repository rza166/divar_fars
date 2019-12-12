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
    collection:'amlak',
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
    collection:'mashin',
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
    collection:'electriki',
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
    collection:'khane',
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
    collection:'khadamat',
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
    collection:'vasayel',
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
    collection:'sargarmi',
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
   collection:'ejtemaei',
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
   collection:'forkar',
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
    collection:'estekhdam',
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
function saveAmlak(menu,collection) {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../Mainagahi',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         price:$('#price').val(),
         moaveze:$('#moaveze:checked').val(),
         typeagahi:$('input[name=optradio]:checked').val(),
         agahidahande:$('input[name=optradio3]:checked').val(),

         // nahveforoush:$('#nahveforoush').val(),
         // barand:$('#barand').val(),
         // salesakht:$('#salesakht').val(),
         // karkard:$('#karkard').val(),
         // sanad:$('#sanad').val(),
         // girbox:$('#girbox').val(),
         // badane:$('#badane').val(),
         // rang:$('#rang').val(),
         // codemeli:$('#codemeli').val(),
         // chat:$('#chat:checked').val(),
         // sazandeh:$('#sazandeh').val(),
         // websayt:$('#websayt').val(),
         // numbertel:$('#numbertel').val(),

         meter:$('#meter').val(),
         vadie:$('#vadie').val(),
         ejare:$('#ejare').val(),
         tedadotagh:$('#tedadotagh').val(),
         salesakht:$('#salesakht').val(),
         mobile:$('#mobile').val(),
         codemeli:$('#codemeli').val(),
         chat:$('#chat:checked').val(),
         ejareday:$('#ejareday').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),


          // agahidahande:$('input[name=optradio3]:checked').val(),
          // nahveforoush:$('#nahveforoush').val(),
          // barand:$('#barand').val(),
          // karkard:$('#karkard').val(),
          // sanad:$('#sanad').val(),
          // girbox:$('#girbox').val(),
          // badane:$('#badane').val(),
          // rang:$('#rang').val(),
          // sazandeh:$('#sazandeh').val(),
          menu:menu,
          collection:collection,

       },
    success:function(data){
      alert(data);
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data + '/' + collection;
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
function saveMashin(menu,collection) {
     // girbox=$('#girbox').val()
     // alert(girbox)
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../Mainagahi',
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
          collection:collection,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data  + '/' + collection;
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

// لوازم الکتریکی
function savebarghi(menu,collection) {
      $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../Mainagahi',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         sazandeh:$('#sazandeh').val(),
         moaveze:$('#moaveze:checked').val(),
         typeagahi:$('input[name=optradio]:checked').val(),
         price:$('#price').val(),
         mobile:$('#mobile').val(),
         chat:$('#chat:checked').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),
          menu:menu,
          collection:collection,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data + '/' + collection;
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

// مربوط به خانه
function savehome(menu,collection) {
      $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../Mainagahi',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         moaveze:$('#moaveze:checked').val(),
         typeagahi:$('input[name=optradio]:checked').val(),
         price:$('#price').val(),
         mobile:$('#mobile').val(),
         chat:$('#chat:checked').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),
          menu:menu,
          collection:collection,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data + '/' + collection;
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
function savehelp(menu,collection) {
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../Mainagahi',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         websayt:$('#websayt').val(),
         mobile:$('#mobile').val(),
         chat:$('#chat:checked').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),
          menu:menu,
          collection:collection,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data + '/' + collection;
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
function savevasile(menu,collection) {
        $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../Mainagahi',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         moaveze:$('#moaveze:checked').val(),
         typeagahi:$('input[name=optradio]:checked').val(),
         price:$('#price').val(),
         mobile:$('#mobile').val(),
         chat:$('#chat:checked').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),
          menu:menu,
          collection:collection,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data + '/' + collection;
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


// سرگرمی وبازی
function savegame(menu,collection) {
      $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../Mainagahi',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         numbertel:$('#numbertel').val(),
         codemeli:$('#codemeli').val(),
         moaveze:$('#moaveze:checked').val(),
         typeagahi:$('input[name=optradio]:checked').val(),
         price:$('#price').val(),
         mobile:$('#mobile').val(),
         chat:$('#chat:checked').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),
          menu:menu,
          collection:collection,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data + '/' + collection;
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

// اجتماعی
function saveejtema(menu,collection) {
        $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../Mainagahi',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         numbertel:$('#numbertel').val(),
         typeagahi:$('input[name=optradio]:checked').val(),
         mobile:$('#mobile').val(),
         chat:$('#chat:checked').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),
          menu:menu,
          collection:collection,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data + '/' + collection;
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

// برای کسب وکار
function savejob(menu,collection) {
      $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../Mainagahi',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         moaveze:$('#moaveze:checked').val(),
         typeagahi:$('input[name=optradio]:checked').val(),
         price:$('#price').val(),
         mobile:$('#mobile').val(),
         chat:$('#chat:checked').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),
          menu:menu,
          collection:collection,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data + '/' + collection;
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
function saveestekhdam2(menu,collection) {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../Mainagahi',
    data: {
         city:$('#city').val(),
         map:$('#map').val(),
         // price:$('#price').val(),
         mobile:$('#mobile').val(),
         chat:$('#chat:checked').val(),
         onvanagahi:$('#onvanagahi').val(),
          tozihat:$('#tozihat').val(),
          menu:menu,
          collection:collection,
       },
    success:function(data){
      scroll_form('reset')
      // refresh()
      $('#error').html('<div class="alert alert-success"> ثبت با موفقیت انجام شد </div>')
      document.getElementById('reset').reset();
      window.location.href = "/sabtnahaei/" + data+ '/' + collection ;
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

// تابع برند
function  berandactive(berand,div) {
  $('.a6-3brand').removeClass('active');
  $(berand).addClass('active');
  $('.divberand').removeClass('active');
  $(div).addClass('active');

}
function modelshow(check,id) {
  alert(id)
  $('.model').css('display','none')
  if (check=='ok') {
  $('.model').css('display','block');
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../modelshow',
    data: {
         id:id,

       },
    success:function(data){
    $('#modelshow').html(data);
    },

  });
}
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

function  sub1(inputId, divId) {
    $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
    $.ajax({
    success:function(data){
      var inputId2=$(inputId).val();
      $(divId).html(inputId2 + 'کیلومتر');
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

// مربوط به سرچ آگهی ها
function searchAgahi() {
// r=$('#onvanagahi').val();
// alert(r)
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../searchAgahi',
    data:{
      onvanagahi:$('#onvanagahi').val(),
    },
    success:function(data){
    $('#allagahi').html(data)

    }
  });
}
