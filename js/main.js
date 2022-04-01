$(function(){

  //hamburger
  $('.burger-btn').on('click',function(){
    if($(this).attr('aria-expanded') == 'false'){
      $(this).attr('aria-expanded','true');
      $('.sp-menu-wrapper').addClass('is-active');
      $('.sp-menu-wrapper').css('visibility','visible');
      $('.sp-menu-wrapper').attr('aria-hidden','false');
    } else {
      $(this).attr('aria-expanded','false');
      $('.sp-menu-wrapper').removeClass('is-active');
      $('.sp-menu-wrapper').css('visibility','hidden');
      $('.sp-menu-wrapper').attr('aria-hidden','true');
    };
  });

  //accordion 
  $('.faq__toggle-btn').on('click',function(){
    $(this).toggleClass('is-active');
    $(this).parent().next().toggleClass('is-active');
  });
})

  //ScrollHint
  if(document.URL.match('price')){
  window.addEventListener('DOMContentLoaded',function(){
    new ScrollHint('.js-scrollable', {
      i18n: {
        scrollable: 'スクロールできます。'
      }
    });
  });
};