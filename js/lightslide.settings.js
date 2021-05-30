
$(document).ready(function() {
  var slider = $(".light-slider").lightSlider({
    item: 5,
    controls: true,
    slideMargin: 13,
     loop: true,
     responsive : [
      {
          breakpoint:800,
          settings: {
              item:3,
              slideMove:1,
              slideMargin:6,
            }
      },
      {
          breakpoint:480,
          settings: {
              item:1,
              slideMove:1
            }
      }
  ]
  });

  $('.slideControls .slidePrev').each(function(){
    $(this).click(function(){
      slider.goToPrevSlide();
            })
  });

});

//Responsive
