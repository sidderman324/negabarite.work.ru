<?php
/*
 * Template name: Главная страница
 */
?>

<?php get_header(); ?>


<section class="promo">
  <div class="promo__item promo__item-excavator">
    <div class="promo__mask">
      <div class="container">
        <div class="promo__text-box">
          <h2 class="promo__title">Аренда экскаватора</h2>
          <p class="promo__text">Услуги и аренда экскаваторов.<br>У нас большой парк собственной техники!</p>
          <div class="promo__btn-wrapper">
            <a href="/sdat-tehniku-v-arendu/" class="promo__btn promo__btn--yellow">Арендовать</a>
            <a href="/prodat-tehniku/" class="promo__btn">Каталог спецтехники</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include ('/modules/type.php'); ?>

<section class="trall">
  <div class="container trall__inner">

    <!-- Вставка логотипа -->
    <div class="logo">
      <p class="logo__title">Негабарит</p>
      <p class="logo__title">Онлайн</p>
    </div>


    <div class="trall__info"><?php the_content(); ?>
      <h1 class="trall__title">МЫ ТАКЖЕ ПЕРЕВОЗИМ <br>НЕГАБАРИТНЫЕ ГРУЗЫ <br>ПО ВСЕЙ РОССИИ</h1>
      <p class="trall__text">Собственными траллами весом до 115 тонн. <br>Перевозка негабаритных грузов на длинные расстояния по России от 500 до 10 000 км.</p>
    </div>

    <a href="#" class="trall__btn">Перевоз негабаритных грузов</a>
  </div>
</section>

<section class="about">
  <div class="container about__inner">
    <div class="about__title-wrapper">
      <h2 class="about__title">О компании</h2>
      <p class="about__subtitle">Негабарит онлайн</p>
    </div>


    <div class="about__counter-wrapper">
      <div class="counter">
        <p class="counter__number">148</p>
        <p class="counter__text">Постоянных<br> клиентов</p>
      </div>
      <div class="counter">
        <p class="counter__number">10</p>
        <p class="counter__text">Лет<br> надежной работы</p>
      </div>
      <div class="counter">
        <p class="counter__number">79</p>
        <p class="counter__text">Единиц<br> дорожно-строительной<br> техники</p>
      </div>
    </div>

    <div class="about__text-wrapper">
      <p class="about__text">Аренда спецтехники необходима при проведении строительно-монтажных, дорожно-ремонтных, погрузочно-разгрузочных или любых других видов работ, где задействуют специализированные виды машин.</p>
      <p class="about__text">Услуги спецтехники являются ежедневной необходимости большинства строительных компаний. Зачастую, крупные компании имеют собственный автопарк специализированных машин, однако даже им иногда приходится брать в аренду дополнительные единицы техники.</p>
      <p class="about__text">Компания «НЕГАБАРИТ ОНЛАЙН» владеет собственным достаточно крупным автопарком техники. Мы предлагаем: оказание услуг, спецтехника различных видов, аренда техники с экипажем, ремонт и транспортировка спецмашин и выгодные условия для сотрудничества.</p>

      <a href="#" class="about__btn">Сотрудничество</a>
    </div>
  </div>
</section>

<section class="catalog" id="catalog">
  <div class="container catalog__inner">

    <div class="catalog__title-wrapper">
      <h2 class="catalog__title">Каталог</h2>
      <p class="catalog__subtitle">Дорожно-строительной техники</p>
    </div>
    <div class="catalog__btn-wrapper">
      <a href="#" class="catalog__btn catalog__btn--yellow">Заказать</a>
      <a href="#" class="catalog__btn">Купить</a>
    </div>


    <div class="catalog__card-wrapper">
      <a href="/arenda-buldozerov/" class="catalog-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/buldozer_card.png" alt="" class="catalog-card__img">
        <p class="catalog-card__text">Аренда<br> бульдозера</p>
      </a>
      <a href="/arenda-excavatorov/" class="catalog-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/excavator_card.png" alt="" class="catalog-card__img">
        <p class="catalog-card__text">Аренда<br> экскаватора</p>
      </a>
      <a href="/arenda-pogruzchikov/" class="catalog-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pogruzchik_card.png" alt="" class="catalog-card__img">
        <p class="catalog-card__text">Аренда<br> погрузчика</p>
      </a>
      <a href="/arenda-samosvalov/" class="catalog-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/samosval_card.png" alt="" class="catalog-card__img">
        <p class="catalog-card__text">Аренда<br> самосвала</p>
      </a>
      <a href="/arenda-avtokranov/" class="catalog-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/autokran_card.png" alt="" class="catalog-card__img">
        <p class="catalog-card__text">Аренда<br> автокрана</p>
      </a>
      <a href="/arenda-dorozhnyh-katkov/" class="catalog-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/road_ratok_card.png" alt="" class="catalog-card__img">
        <p class="catalog-card__text">Аренда<br> катка дорожного</p>
      </a>
      <a href="/arenda-asfaltoukladchikov/" class="catalog-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/asphaltoukladchik_card.png" alt="" class="catalog-card__img">
        <p class="catalog-card__text">Аренда<br> асфальтоукладчика</p>
      </a>
      <a href="/arenda-burovoj-ustanovki/" class="catalog-card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/burovaya_ustanovka_card.png" alt="" class="catalog-card__img">
        <p class="catalog-card__text">Аренда<br> буровой установки</p>
      </a>
    </div>
  </div>
</section>

<section class="service">
  <div class="container service__inner">
    <div class="service__title-wrapper">
      <h2 class="service__title">Услуги</h2>
      <p class="service__subtitle">Виды работ</p>
    </div>

    <a href="#" class="service__btn">Заказать услугу</a>

    <div class="service__item-wrapper">
      <a href="#" class="service-card">
        <div class="service-card__img-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/service_remont.png" alt="" data-unhover-img="<?php echo get_template_directory_uri(); ?>/img/service_remont.png" data-hover-img="<?php echo get_template_directory_uri(); ?>/img/service_remont_color.png" class="service-card__img">
        </div>
        <p class="service-card__text">Ремонт<br> дорог</p>
      </a>
      <a href="#" class="service-card">
        <div class="service-card__img-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/service_stroitelstvo.png" alt="" data-unhover-img="<?php echo get_template_directory_uri(); ?>/img/service_stroitelstvo.png" data-hover-img="<?php echo get_template_directory_uri(); ?>/img/service_stroitelstvo_color.png" class="service-card__img">
        </div>
        <p class="service-card__text">Строительство<br> дорог</p>
      </a>
      <a href="#" class="service-card">
        <div class="service-card__img-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/service_stroitelstvo_neft.png" alt="" data-unhover-img="<?php echo get_template_directory_uri(); ?>/img/service_stroitelstvo_neft.png" data-hover-img="<?php echo get_template_directory_uri(); ?>/img/service_stroitelstvo_neft_color.png" class="service-card__img">
        </div>
        <p class="service-card__text">Строительство<br> нефтепроводов</p>
      </a>
      <a href="#" class="service-card">
        <div class="service-card__img-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/service_stroitelstvo_gaz.png" alt="" data-unhover-img="<?php echo get_template_directory_uri(); ?>/img/service_stroitelstvo_gaz.png" data-hover-img="<?php echo get_template_directory_uri(); ?>/img/service_stroitelstvo_gaz_color.png" class="service-card__img">
        </div>
        <p class="service-card__text">Строительство<br> газопроводов</p>
      </a>
      <a href="#" class="service-card">
        <div class="service-card__img-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/img/service_stroitelstvo_otsipka.png" alt="" data-unhover-img="<?php echo get_template_directory_uri(); ?>/img/service_stroitelstvo_otsipka.png" data-hover-img="<?php echo get_template_directory_uri(); ?>/img/service_stroitelstvo_otsipka_color.png" class="service-card__img">
        </div>
        <p class="service-card__text">Отсыпка<br> дорог</p>
      </a>
    </div>
  </div>
</section>
<?php include ('/modules/consult.php'); ?>
<?php get_footer(); ?>
