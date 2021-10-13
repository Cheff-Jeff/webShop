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

  $('.checkBox').click(function(e) {
    let cat = $(this).find('p');
    cat = cat.html();
    let filterArr = [];

    $('.checkBox').each(function() {
      const box = $(this);
      if($(this).find('input').is(":checked"))
      {
        const char = box.find('p').html();
        filterArr.push(char);
      }
      else
      {
        const char = box.find('p').html();
        for(let i = 0; i < filterArr.length; i++)
        {
          if(filterArr[i] === char)
          {
            filterArr.splice(i, 1);
          }
        }
      }
    });
    //https://www.w3schools.com/js/tryit.asp?filename=tryjs_ajax_post2
    //https://stackoverflow.com/questions/9001526/send-array-with-ajax-to-php-script
    // if($(this).find('input').is(":checked")){
    //   $('.comicWrap').each(function(){
    //     if($(this).hasClass(cat)){
    //       $(this).addClass('active');
    //     }
    //     else{
    //       $(this).addClass('close');
    //     }
    //   });
    // }
    filterComics(filterArr);
  })
});

const filterComics = (filterArr) => {
  if(filterArr.length > 0)
  { 
    let json_upload = JSON.stringify(filterArr);
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/src/php/functions/flterComics.php', true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(json_upload);
    xhr.onload = function()
    {
      console.log(this.responseText);
    }
  }
}