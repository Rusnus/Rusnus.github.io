<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Ремонт квартир</title>
   <link rel="shortcut icon" href="/img/favicon.ico" type="image/png">
   <link rel="stylesheet" href="./css/normalize.css">
   <link rel="stylesheet" href="./css/slick.css">
   <link rel="stylesheet" href="./css/style.css" />
   <link rel="stylesheet" href="./css/animate.css">
</head>

<body>
   <nav class="navbar wow fadeInDown">
      <div class="container">
         <div class="navbar-block">
            <div class="navbar__logo">
               <a href='http://doctor-grigoryan.ru'><img class="img" src="./img/logo.png" alt="Логотип"></a>
            </div>
            <div class="navbar__info">
               <div class="navbar__contacts">
                  <span class="navbar__adress">Калуга, Москва, МО</span>
                  <a href="tel:+7(495)42-251-31" class="navbar__phone">
                     +7 (495) 42-251-31
                  </a>
               </div>
               <button class="button navbar__button" id="button">
                  Перезвоните мне
               </button>
            </div>
         </div>
      </div>
   </nav>
   <header id="#header" class="header">
      <div class="container">
         <div class="header__section">
            <div class="header__text wow fadeInLeft">
               <h1 class="header__title">Внутренняя отделка помещений "под ключ"</h1>
               <span class="header__suptitle">с гарантией качества, прописанной в договоре</span>
               <ul class="header__list">
                  <li class="header__list__item">
                     <div class="header__list__image">
                        <img class="img" src="./img/icon-1.png" alt="">
                     </div>
                     <span class="header__list__text">Точно соблюдаем сроки</span>
                  </li>
                  <li class="header__list__item">
                     <div class="header__list__image">
                        <img class="img" src="./img/icon-2.png" alt="">
                     </div>
                     <span class="header__list__text">Рассчитаем смету на работы<br>
                        и материалы в день обращения</span>
                  </li>
                  <li class="header__list__item">
                     <div class="header__list__image">
                        <img class="img" src="./img/icon-3.png" alt="">
                     </div>
                     <span class="header__list__text">Предложим более 100 вариантов<br>
                        исполнения дизайна Вашего жилья</span>
                  </li>
               </ul>
            </div>
            <div class="header__photo wow fadeInRight">
               <img class="img" src="./img/photo-1.jpg" alt="Вид комнаты сверху">
            </div>
         </div>
      </div>
   </header>
   <section class="offer section">
      <div class="container">
         <div class="offer-block wow fadeInLeft" data-wow-offset="30">
            <h2 class="offer__title">Мы бесплатно разработаем дизайн-проект Вашего жилья и реализуем его!</h2>
            <span class="offer__suptitle">Оставьте заявку на разработку бесплатного дизайн-проекта!</span>
            <form action="mail.php" method="POST" id="offer-form" class="form offer__form">
               <input type="text" name="offerusername" class="input offer__input" placeholder="Ваше имя">
               <input type="tel" name="offerphone" class="input offer__input phone" placeholder="Ваш телефон">
               <button id="offerbutton" class="button offer__button">
                  Получить бесплатный дизайн-проект
               </button>
            </form>
            <div class="offer__box">
               <span class="offer__meneg">Наш менеджер перезвонит Вам<br>в течение 60 секунд</span>
               <span class="offer__phone">или перезвоните нам сами<br><a class="phone-offer"
                     href="tel:+7(495)42-251-31"><strong>+7 (495)
                        42-251-31</strong></a></span>
            </div>
         </div>
      </div>
   </section>
   <section class="portfolio">
      <div class="container">
         <h2 class="section-title portfolio__title wow fadeIn" data-wow-duration="1s">Работая с 2007 года,<br> мы
            сделали более 500 ремонтов в квартирах и домах</h2>
         <div class="slider wow fadeIn" data-wow-offset="50">
            <div class="slider__item"> <img class="slider__image" src="./img/portfolio/slider-1.jpg" alt=""> </div>
            <div class="slider__item"> <img class="slider__image" src="./img/portfolio/slider-2.png" alt=""> </div>
            <div class="slider__item"> <img class="slider__image" src="./img/portfolio/slider-3.png" alt=""> </div>
            <div class="slider__item"> <img class="slider__image" src="./img/portfolio/slider-1.jpg" alt=""> </div>
            <div class="slider__item"> <img class="slider__image" src="./img/portfolio/slider-2.png" alt=""> </div>
            <div class="slider__item"> <img class="slider__image" src="./img/portfolio/slider-3.png" alt=""> </div>
         </div>
         <div class="arrows portfolio__arrows">
            <div class="arrows__left">
               <img class="img" src="./img/portfolio/left_arrow.png" alt="">
            </div>
            <div class="arrows__right">
               <img class="img" src="./img/portfolio/right_arrow.png" alt="">
            </div>
         </div>
      </div>
   </section>

   <section class="price">
      <div class="container">
         <h2 class="price__title wow fadeIn" data-wow-duration="1s">У нас очень гибкая система скидок на комплексные
            работы!
         </h2>
         <p class="price__suptitle wow fadeIn" data-wow-duration="1s">Прайс на наши услуги</p>
         <div class="cards">
            <div class="card price__card wow fadeInUp">
               <div class="card__image"> <img src="./img/price/photo-1.jpg" alt=""></div>
               <div class="card__text">
                  <div class="card__title">Ремонт ванных комнат и с/у</div>
                  <a href="#" class="card__link">Узнать цены</a>
               </div>
            </div>
            <div class="card price__card wow fadeInUp" data-wow-delay="0.03s">
               <div class="card__image"> <img src="./img/price/photo-2.jpg" alt=""></div>
               <div class="card__text">
                  <div class="card__title">Ремонт комнат и квартир</div>
                  <a href="#" class="card__link">Узнать цены</a>
               </div>
            </div>
            <div class="card price__card wow fadeInUp" data-wow-delay="0.06s">
               <div class="card__image"> <img src="./img/price/photo-3.jpg" alt=""></div>
               <div class="card__text">
                  <div class="card__title">Отделка офисных помещений</div>
                  <a href="#" class="card__link">Узнать цены</a>
               </div>
            </div>
            <div class="card price__card wow fadeInUp" data-wow-delay="0.09s">
               <div class="card__image"> <img src="./img/price/photo-4.jpg" alt=""></div>
               <div class="card__text">
                  <div class="card__title">Ремонт в новостройках</div>
                  <a href="#" class="card__link">Узнать цены</a>
               </div>
            </div>
            <div class="card price__card wow fadeInUp" data-wow-delay="0.12s">
               <div class="card__image"> <img src="./img/price/photo-5.jpg" alt=""></div>
               <div class="card__text">
                  <div class="card__title">Ремонт кухонь</div>
                  <a href="#" class="card__link">Узнать цены</a>
               </div>
            </div>
            <div class="card price__card wow fadeInUp" data-wow-delay="0.15s">
               <div class="card__image"> <img src="./img/price/photo-6.jpg" alt=""></div>
               <div class="card__text">
                  <div class="card__title">Ремонт дач и коттеджей</div>
                  <a href="#" class="card__link">Узнать цены</a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="steps">
      <div class="container">
         <h2 class="step__title wow fadeIn">Наши специалисты готовы выехать на замер в любое удобное для Вас время</h2>
         <p class="step__suptitle wow fadeIn">5 шагов до ремонта</p>
         <div class="step-block">
            <div class="step wow fadeIn" data-wow-delay="0.1s">
               <div class="step__image"> <img class="img" src="./img/step/icon-1.png" alt=""></div>
               <p class="step__text">Вы звоните нам<br> или оставляете заявку</p>
            </div>
            <div class="step wow fadeIn" data-wow-delay="0.3s">
               <div class="step__image"> <img class="img" src="./img/step/icon-2.png" alt=""></div>
               <p class="step__text">Согласуем удобное<br> для Вас время выезда специалиста на замер</p>
            </div>
            <div class="step wow fadeIn" data-wow-delay="0.5s">
               <div class="step__image"> <img class="img" src="./img/step/icon-3.png" alt=""></div>
               <p class="step__text">Рассчитываем смету согласовываем<br> с Вами</p>
            </div>
            <div class="step wow fadeIn" data-wow-delay="0.7s">
               <div class="step__image"> <img class="img" src="./img/step/icon-4.png" alt=""></div>
               <p class="step__text">Подписываем договор закупаем материал<br> по оптовым ценам</p>
            </div>
            <div class="step wow fadeIn" data-wow-delay="0.9s">
               <div class="step__image"> <img class="img" src="./img/step/icon-5.png" alt=""></div>
               <p class="step__text">Выполняем ремонт<br> в указанные сроки</p>
            </div>
         </div>
      </div>
   </section>

   <section class="brif">
      <div class="container">
         <div class="brif-block">
            <div class="interview brif__interview">
               <h3 class="interview__title">Мы можем озвучить Вам примерную стоимость работы и материалов по телефону
               </h3>
               <span class="interview__suptitle">Для этого нужно ответить на 4 вопроса:</span>
               <ul class="interview-list">
                  <li class="interview-list__item">
                     <span class="interview-list__counter">1</span>
                     <span class="span interview-list__text">Какова площадь изменения?</span>
                  </li>
                  <li class="interview-list__item">
                     <span class="interview-list__counter">2</span>
                     <span id="list-text-2" class="span interview-list__text">У вас новостройка или вторичное
                        жильё?</span>
                  </li>
                  <li id="li-3" class="interview-list__item">
                     <span id="counter-3" class="interview-list__counter">3</span>
                     <span id="list-text-3" class="span interview-list__text">Где находится помещение, в котором будет
                        производиться
                        ремонт?</span>
                  </li>
                  <li class="interview-list__item">
                     <span class="interview-list__counter">4</span>
                     <span class="span interview-list__text">Назначение помещения?</span>
                  </li>
               </ul>
            </div>
            <div class="form brif__form">
               <h3 class="form__title">Оставьте заявку на бесплатный расчет ремонта по телефону</h3>
               <span class="form__suptitle">Для этого заполните форму ниже</span>
               <form action="mail.php" method="POST" id="brif-form">
                  <input type="text" name="brifusername" class="input brif__input" placeholder="Ваше имя">
                  <input type="text" name="brifphone" class="input brif__input phone" placeholder="Ваш телефон">
                  <input type="text" name="brifemail" class="input brif__input" placeholder="Ваш email">
                  <button class="button brif__button">Рассчитать стоимость</button>
                  <span class="form__description">Мы перезвоним Вам в течение 60 секунд</span>
               </form>
            </div>
         </div>
      </div>
   </section>
   <footer class="footer">
      <div class="map" id="map">
         <iframe class="maps"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4627.198653763941!2d37.19966068987913!3d55.61128538782185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b556d92c52e921%3A0x7069f1a444f51ab2!2z0YPQuy4g0JvQtdC90LjQvdCwLCAxMCwg0KLQvtC70YHRgtC-0L_QsNC70YzRhtC10LLQviwg0JzQvtGB0LrQstCwLCAxNDMzNTA!5e0!3m2!1sru!2sru!4v1573546106254!5m2!1sru!2sru"
            height="640" style="border:0;" allowfullscreen=""></iframe>
      </div>
      <div class="container">
         <div class="contacts-block">
            <div class="contacts">
               <h3 class="contacts__title">
                  Приезжайте к нам в гости! Проконсультируем Вас<br> по всем вопросам ремонта
               </h3>
               <ul class="contacts-list">
                  <li class="contacts-list__item">
                     <span class="contacts-list__icon">
                        <img class="img" src="./img/footer/map-icon-1.png" alt="">
                     </span>
                     <div class="span contacts-list__text">г. Москва<br>
                        <span class="text-strong">ул. Ленинга, д. 10,<br>корпус 2, оф. 308</span></div>
                  </li>
                  <li class="contacts-list__item">
                     <span class="contacts-list__icon">
                        <img class="img" src="./img/footer/map-icon-2.png" alt="">
                     </span>
                     <div class="span contacts-list__text">Режим работы: <br>
                        <span class="text-strong">с 9:00 до 18:00</span></div>
                  </li>
                  <li class="contacts-list__item">
                     <span class="contacts-list__icon">
                        <img class="img" src="./img/footer/map-icon-3.png" alt="">
                     </span>
                     <div class="span contacts-list__text">Телефон:<br>
                        <a class="map__phone" href="tel:tel:+7(495)42-251-31">+ 7 (495) 42-251-31</a> </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </footer>

   <div class="modal" id="modal">
      <div class="modal-dialog">
         <button class="modal-dialog__close" id="close">Закрыть</button>
         <div class="modal-dialog__section">
            <span class="modal-dialog__title">Узнайте точную стоимость ремонта по телефону!</span>
            <span class="modal-dialog__suptitle">Заполните поля ниже - мы свяжемся с Вами</span>
            <form action="mail.php" method="POST" class="form modal-dialog__form" id="modal-form">
               <input type="text" name="modalusername" class="input modal-dialog__input" placeholder="Ваше имя">
               <input type="tel" name="modalphone" class="input modal-dialog__input phone" placeholder="Ваш телефон">
               <button id="modalbutton" class="button modal-dialog__button">Узнать стоимость</button>
            </form>
            <div class="modal-dialog__box">
               <span class="modal-dialog__box__text">Или Вы можете перезвонить нам сами по телефону:</span>
               <a href="tel:+7(8182)42-51-31" class="modal-dialog__box__phone">+7 (8182) 42-51-31</a>
            </div>
         </div>
      </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
   <script src="./js/modal.js"></script>
   <script src="./js/slick.min.js"></script>
   <script src="./js/wow.min.js"></script>
   <script src="./js/jquery.validate.min.js"></script>
   <script src="./js/jquery.maskedinput.min.js"></script>
   <script src="./js/main.js"></script>
</body>

</html>