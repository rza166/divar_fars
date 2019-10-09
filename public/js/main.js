// مربوط به انتخاب شهر مورد نظر
function searchName() {
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}});
  $.ajax({
    type:'post',
    url:'../searchName',
    data:{
      city:$('#searchName').val(),
    },
    success:function(data){
    $('#searchName2').html(data)

    }
  });
}
// مربوط به نوار  همه محله ها در index.blade.php
function nsh() {
$('.e27').css('display','none')
}
function  sho() {
    $('.e27').css('display','block')
    $('#sh').css({"border-color":"#920a99","border-bottom": "none", 'border-radius':'3px 0 0 0'});
    $('#ii').css({"border-color":"#920a99","border-bottom": "none" , 'border-radius':'0 3px 0 0'});

}
function showMenu(classShow , classI , classUl) {
  var cmd = $('.' + classShow ).attr('data-show');
  if (cmd=='show') {
    $('.li_4').css('display','none');
    $('.' + classShow ).css('display','block');
    $('.' + classI ).css('display','inline-block')
    $('.e40-1').css('opacity', 0);
    $('.li_4').css({"font-size":"22px","padding-top": "2px" , "border-bottom":"2px solid rgb(201, 201, 201)"});
    $('.' + classShow ).attr('data-show','hide');
    $('.' + classUl).css('display','block');
  }
  else{
    $('.li_4').css('display','block');
    // $('.' + classShow ).css('display','none');
    $('.' + classI ).css('display','none')
    $('.e40-1').css('opacity', 1);
    // $('.e40-1').css('display','inline-block');
    // $( ".li1" ).hover ( function() {$('.e40-1-1').css('display','inline-block');},function() {$('.e40-1').css('display','none');} );
    // $( ".li2" ).hover ( function() {$('.e40-1-2').css('display','inline-block');},function() {$('.e40-1').css('display','none');} );
    // $( ".li3" ).hover ( function() {$('.e40-1-3').css('display','inline-block');},function() {$('.e40-1').css('display','none');} );
    // $( ".li4" ).hover ( function() {$('.e40-1-4').css('display','inline-block');},function() {$('.e40-1').css('display','none');} );
    // $( ".li5" ).hover ( function() {$('.e40-1-5').css('display','inline-block');},function() {$('.e40-1').css('display','none');} );
    // $( ".li6" ).hover ( function() {$('.e40-1-6').css('display','inline-block');},function() {$('.e40-1').css('display','none');} );
    // $( ".li7" ).hover ( function() {$('.e40-1-7').css('display','inline-block');},function() {$('.e40-1').css('display','none');} );
    // $( ".li8" ).hover ( function() {$('.e40-1-8').css('display','inline-block');},function() {$('.e40-1').css('display','none');} );
    // $( ".li9" ).hover ( function() {$('.e40-1-9').css('display','inline-block');},function() {$('.e40-1').css('display','none');} );
    // $( ".li10" ).hover ( function() {$('.e40-1-10').css('display','inline-block');},function() {$('.e40-1').css('display','none');} );
    $('.li_4').css({"font-size":"18px","padding-top": "2px" , "border-bottom":"2px solid rgb(201, 201, 201)"});
    $('.' + classShow ).attr('data-show','show');
    $('.ul2').css('display','none');
  }

}


function showMenu2( classShow ,classShow2 ,classShow3) {
  var cmd2 = $('.' + classShow2 ).attr('data-show2');
  if (cmd2=='show') {
    $('.li_4' ).css('display','none');
    $('.li_5').css('display','none');
    $('.' + classShow2).css('display','block');
    $('.' + classShow3 ).css('display','block');
  //   $('.' + classI2 ).css('display','inline-block')
  //   // $('.e40-1').css('opacity', 0);
    $('.li_5').css({"font-size":"22px","padding-top": "2px" , "border-bottom":"2px solid rgb(201, 201, 201)"});
    $('.' + classShow2 ).attr('data-show2','hide');
  //   $('.' + classUl2).css('display','block');
  }
  else{
    $('.li_4' ).css('display','none');
    $('.' + classShow).css('display','block');
    $('.li_5').css('display','block');
    $('.' + classShow2).css('display','block');
    $('.' + classShow3 ).css('display','none');

  //   $('.' + classI2 ).css('display','inline-block')
  //   // $('.e40-1').css('opacity', 0);
    $('.li_5').css({"font-size":"18px","padding-top": "0" , "border-bottom":"none"});
    $('.' + classShow2 ).attr('data-show2','show');
  //   $('.' + classUl2).css('display','block');
  }

}
