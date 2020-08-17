(function ($) {

   $.fn.downCount = function (options, callback) {
      var settings = $.extend({
         date: null,
         offset: null
      }, options);

      // Throw error if date is not set
      if (!settings.date) {
         $.error('Date is not defined.');
      }

      // Throw error if date is set incorectly
      if (!Date.parse(settings.date)) {
         $.error('Incorrect date format, it should look like this, 12/24/2012 12:00:00.');
      }

      // Save container
      var container = this;

      /**
       * Change client's local date to match offset timezone
       * @return {Object} Fixed Date object.
       */
      var currentDate = function () {
         // get client's current date
         var date = new Date();

         // turn date to utc
         var utc = date.getTime() + (date.getTimezoneOffset());

         // set new Date object
         var new_date = new Date(utc + (3600000 * settings.offset))

         return new_date;
      };

      /**
       * Main downCount function that calculates everything
       */
      function countdown() {
         var target_date = new Date(settings.date), // set target date
            current_date = currentDate(); // get fixed current date

         // difference of dates
         var difference = target_date - current_date;

         // if difference is negative than it's pass the target date
         if (difference < 0) {
            // stop timer
            clearInterval(interval);

            if (callback && typeof callback === 'function') callback();

            return;
         }

         // basic math variables
         var _second = 1000,
            _minute = _second * 60,
            _hour = _minute * 60,
            _day = _hour * 24;

         // calculate dates
         var days = Math.floor(difference / _day),
            hours = Math.floor((difference % _day) / _hour),
            minutes = Math.floor((difference % _hour) / _minute),
            seconds = Math.floor((difference % _minute) / _second);

         // fix dates so that it will show two digets
         days = (String(days).length >= 2) ? days : '0' + days;
         hours = (String(hours).length >= 2) ? hours : '0' + hours;
         minutes = (String(minutes).length >= 2) ? minutes : '0' + minutes;
         seconds = (String(seconds).length >= 2) ? seconds : '0' + seconds;

         // based on the date change the refrence wording
         var ref_days = (days === 1) ? 'дни' : 'дни',
            ref_hours = (hours === 1) ? 'часы' : 'часы',
            ref_minutes = (minutes === 1) ? 'мин' : 'мин',
            ref_seconds = (seconds === 1) ? 'сек' : 'сек';

         // set to DOM
         container.find('.days').text(days);
         container.find('.hours').text(hours);
         container.find('.minutes').text(minutes);
         container.find('.seconds').text(seconds);

         container.find('.days_ref').text(ref_days);
         container.find('.hours_ref').text(ref_hours);
         container.find('.minutes_ref').text(ref_minutes);
         container.find('.seconds_ref').text(ref_seconds);
      };

      // start
      var interval = setInterval(countdown, 1000);
   };

})(jQuery);

$(document).ready(function () {

   var carousel = $(this);
   $(".owl-license").owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      navText: ["", ""],
      dots: false,
      responsive: {
         0: {
            items: 1,
            dots: true,
            nav: false,
         },
         575: {
            items: 2,
            dots: true,
            nav: false,
         },
         1000: {
            items: 3
         }
      }
   });
   carousel.find(".nav-next").click(function () {
      slider.trigger("next.owl.carousel");
   });
   carousel.find(".nav-prev").click(function () {
      slider.trigger("prev.owl.carousel");
   });
   $(".owljug").owlCarousel({
      loop: true,
      nav: false,
      navText: ["", ""],
      dots: true,
      responsive: {
         0: {
            items: 1,
         },
         575: {
            items: 1,
         },
         1000: {
            items: 1
         }
      }
   });
});

$(document).ready(function () {
   var carousel = $(this);
   $(".owl").owlCarousel({
      loop: true,
      nav: false,
      navText: ["", ""],
      dots: true,
      autoHeight: true,
      responsive: {
         0: {
            items: 1,
         },

      }
   });
   carousel.find(".nav-next").click(function () {
      slider.trigger("next.owl.carousel");
   });
   carousel.find(".nav-prev").click(function () {
      slider.trigger("prev.owl.carousel");
   });
   // Модальные окна по фоткам
   var filter = $("#filter")
   var filtermodal = $("#filtermodal")
   var closefilter = $(".closefilter")
   var filterjug = $("#filterjug")
   var jugfiltermodal = $("#jugfiltermodal")

   filter.on('click', function () {
      filtermodal.addClass('filtermodal_active');
      document.querySelector('body').style.overflow = 'hidden';
   });

   filterjug.on('click', function () {
      jugfiltermodal.addClass('jugfiltermodal_active');
      document.querySelector('body').style.overflow = 'hidden';
   });
   // навигация
   var navshower = $("#navshower")
   var navcompany = $("#navcompany")
   var navreviews = $("#navreviews")
   var navcontacts = $("#navcontacts")


   navshower.on('click', function () {
      modalmenu.removeClass('modalmenu_active');
      document.querySelector('body').style.overflow = 'auto';
   });
   navcompany.on('click', function () {
      modalmenu.removeClass('modalmenu_active');
      document.querySelector('body').style.overflow = 'auto';
   });
   navreviews.on('click', function () {
      modalmenu.removeClass('modalmenu_active');
      document.querySelector('body').style.overflow = 'auto';
   });
   navcontacts.on('click', function () {
      modalmenu.removeClass('modalmenu_active');
      document.querySelector('body').style.overflow = 'auto';
   });

   // меню
   var burgermodal = $("#burgermodal")
   var modalmenu = $("#modalmenu")

   burgermodal.on('click', function () {
      modalmenu.addClass('modalmenu_active');
      document.querySelector('body').style.overflow = 'hidden';
   });

   // Модальные окна по кнопкам
   var button = $('#button');
   var button2 = $('#button2');
   var modal = $('#modal');
   var jugbutton = $(".jugbutton")
   var buttonfilter = $("#buttonfilter")
   var closebuttonfilter = $(".closebuttonfilter")



   var modalshower = $("#modalshower")
   var about_shower = $('#about_shower');
   var close = $(".closemodal")
   var closelenard = $(".closelenard")
   var modalshowerwork = $("#modalshowerwork")
   var work_shower = $("#work_shower")

   var lenard = $("#lenard")
   var lenardmodal = $("#lenardmodal")
   var stone = $("#stone")
   var stonemodal = $("#stonemodal")
   var jugmodal = $("#jugmodal")
   var buttonjug = $("#buttonjug")

   buttonfilter.on('click', function () {
      modal.addClass('modal_active');
   });

   buttonjug.on('click', function () {
      jugmodal.addClass('jugmodal_active');
      document.querySelector('body').style.overflow = 'hidden';
   });

   button.on('click', function () {
      modal.addClass('modal_active');
      document.querySelector('body').style.overflow = 'hidden';
   });

   button2.on('click', function () {
      modal.addClass('modal_active');
      document.querySelector('body').style.overflow = 'hidden';
   });

   about_shower.on('click', function () {
      modalshower.addClass('modalshower_active');
      document.querySelector('body').style.overflow = 'hidden';

   });

   close.on('click', function () {
      modal.removeClass('modal_active');
      modalshower.removeClass('modalshower_active');
      modalshowerwork.removeClass('modalshowerwork_active');
      jugmodal.removeClass('jugmodal_active');
      modalmenu.removeClass('modalmenu_active');
      document.querySelector('body').style.overflow = 'inherit';

   });

   work_shower.on('click', function () {
      modalshowerwork.addClass('modalshowerwork_active');
      document.querySelector('body').style.overflow = 'hidden';

   });

   lenard.on('click', function () {
      lenardmodal.addClass('lenardmodal_active');
      modalshowerwork.removeClass('modalshowerwork_active');
      document.querySelector('body').style.overflow = 'hidden';

   });

   closelenard.on('click', function () {
      lenardmodal.removeClass('lenardmodal_active');
      stonemodal.removeClass('stonemodal_active');
      modalshowerwork.addClass('modalshowerwork_active');
      document.querySelector('body').style.overflow = 'inherit';
   })
   stone.on('click', function () {
      stonemodal.addClass('stonemodal_active');
      modalshowerwork.removeClass('modalshowerwork_active');
      document.querySelector('body').style.overflow = 'hidden';

   });

   closefilter.on('click', function () {
      filtermodal.removeClass('filtermodal_active');
      jugfiltermodal.removeClass('jugfiltermodal_active');
      document.querySelector('body').style.overflow = 'inherit';

   })

   jugbutton.on('click', function () {
      modal.addClass('modal_active');
      document.querySelector('body').style.overflow = 'hidden';
   });

});