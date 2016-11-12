$(document).ready(function(){
  var slider = $('.owl-carousel');

  console.log(slider);

  slider.owlCarousel({
    singleItem: true,
    autoPlay: 3000,
    transitionStyle : "fadeUp",
    dragBeforeAnimFinish : false,
    mouseDrag : false,
    touchDrag : false,
  });
})

