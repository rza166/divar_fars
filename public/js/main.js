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
function showMenu(classShow , classI) {
  $('.li_4').css('display','none');
  $('.' + classShow ).css('display','block');
  $('.' + classI ).css('display','inline-block')
  $('.e40-1').css('display','none');
}
