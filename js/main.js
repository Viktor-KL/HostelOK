
$('.hamburger').click(function (){
  $('.nav__mob-nav').addClass('active');
  $('.nav__mob-nav').removeClass('hide');
})
$('.hamburger-close').click(function (){
  $('.nav__mob-nav').addClass('hide');
  $('.nav__mob-nav').removeClass('active');
})
$('.nav__mob-links').click(function (){
  $('.nav__mob-nav').addClass('hide');
  $('.nav__mob-nav').removeClass('active');
})