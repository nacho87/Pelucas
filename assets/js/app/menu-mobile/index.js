$(document).ready(function(){
  var mobileMenu = $('.mobile-menu');
  var button = $('.hamburger');

  button.on('click',function(){
    console.log('test');

    $(this).toggleClass('is-active');
    mobileMenu.toggleClass('active');
  })
})
