$(document).ready(function() {
  $('.titleWrap').click(function() { 
    $(this).children('.icon').toggleClass('open');
    let elm = $(this).siblings('.sub-option');
    elm.toggleClass('open');
    if(elm.height() == 0)
    {
      curHeight = elm.height();
      autoHeight = elm.css('height', 'auto').height();
      elm.height(curHeight).animate({height: autoHeight}, 200);
    }
    else
    {
      elm.animate({height: 0}, 200)
    }
  });
});