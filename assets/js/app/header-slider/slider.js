$(document).ready(function(){
  var slider = $('.owl-carousel');

  slider.owlCarousel({
    singleItem: true,
    autoPlay: 3000,
    transitionStyle : "fadeUp",
    dragBeforeAnimFinish : false,
    mouseDrag : false,
    touchDrag : false,
  });
});
