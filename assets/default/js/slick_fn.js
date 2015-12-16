$(document).ready(function(){
  $('.slick').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 540,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true
      }
    }
  ]
});
});