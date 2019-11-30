
$('#map-form')[0].reset();

$(document).ready(function () {
   $('#map-form').validate({
      rules: {
         mapname: {
            required: true,
         },
         mapphone: {
            required: true
         },
      },
      messages: {
         mapname:{
            required: "Заполните поле",
         },
         mapphone: {
            required: "Заполните поле",
         }
      },
   });
   $(".map-phone").mask("+7 (999) 999-99-99");
   $('#modal-form').validate({
      rules: {
         modalname: {
            required: true,
         },
         modalphone: {
            required: true
         },
      },
      messages: {
         modalname: {
            required: "Заполните поле",
         },
         modalphone: {
            required: "Заполните поле",
         }
      },
   });
   $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 2000,
      infinite: true,
      // autoplay: true,
      slidesToShow: 1,
      //количество слайдов, которые выводятся на экране
      slidesToScroll: 1,
      //количество слайдов, которые перелистываются за один раз
      prevArrow: $('.arrows__num'),
      nextArrow: $('.arrows__num'),
      dots: true,
   });
   $('.sliderr').slick({
      infinite: true,
      // autoplay: true,
      slidesToShow: 1,
      //количество слайдов, которые выводятся на экране
      slidesToScroll: 1,
      //количество слайдов, которые перелистываются за один раз
      prevArrow: $('.arrows__num'),
      nextArrow: $('.arrows__num'),
      dots: true,
      dotsClass: 'dots-reviews',
      responsive: [{
         breakpoint: 421,
         settings: {
            slidesToShow: 0.5,
            slidesToScroll: 0.5,
         },
      }]
   });
});