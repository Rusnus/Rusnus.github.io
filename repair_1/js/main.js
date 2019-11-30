var button = document.querySelector('#button');
var modal = document.querySelector('#modal');
var close = document.querySelector('#close');
button.addEventListener('click', function () {
   modal.classList.add('modal_active');
});

close.addEventListener('click', function () {
   modal.classList.remove('modal_active');
})



new WOW().init();
$('#brif-form')[0].reset();
$('#offer-form')[0].reset();
$('#modal-form')[0].reset();
$(document).ready(function () {
   $("#brif-form").validate({
      rules: {
         brifusername: {
            required: true,
            minlength: 2,
            maxlength: 15
         },
         brifphone: {
            required: true,
         },
         brifemail: {
            required: true,
            email: true
         }
      },
      messages: {
         brifemail: {
            required: "Заполните поле",
            email: "Введите корректный email"
         },
         brifusername: "Укажите имя",
         brifphone: "Укажите телефон",
      },
   });
   $("#modal-form").validate({
      rules: {
         modalusername: {
            required: true,
            minlength: 2,
            maxlength: 15
         },
         modalphone: {
            required: true,
         }
      },
      messages: {
         modalusername: "Укажите имя",
         modalphone: "Укажите телефон",
      },
   });

   $("#offer-form").validate({
      rules: {
         offerusername: {
            required: true,
            minlength: 2,
            maxlength: 15
         },
         offerphone: {
            required: true,
         }
      },
      messages: {
         offerusername: "Укажите имя",
         offerphone: "Укажите телефон",
      },
   });
   $(".phone").mask("+7 (999) 999-99-99");
   $('.slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: $('.arrows__left'),
      nextArrow: $('.arrows__right'),
      responsive: [{
            breakpoint: 1200,
            settings: {
               slidesToShow: 3,
               slidesToScroll: 1,
            }
         },
         {
            breakpoint: 1000,
            settings: {
               slidesToShow: 2,
               slidesToScroll: 1,
            }
         },
         {
            breakpoint: 768,
            settings: {
               slidesToShow: 1,
               slidesToScroll: 1
            }
         }
      ]
   });
});