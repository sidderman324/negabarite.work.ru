<?php
/*
 * Template name: Продажа техники
 */
?>

<?php get_header(); ?>

<section class="catalog">
  <div class="container catalog__inner">

    <div class="breadcrumbs">
      <div class="container breadcrumbs__inner">
        <a href="/" class="breadcrumbs__link">Главная</a>
        <a href="/" class="breadcrumbs__link">Продажа</a>
        <span class="breadcrumbs__current">Покупка дорожно-строительной техники</span>
      </div>
    </div>

    <div class="catalog__title-wrapper catalog__title-wrapper--wide">
      <h1 class="catalog__title">Продажа</h1>
      <p class="catalog__subtitle">Дорожно-строительной техники</p>
    </div>

    <div class="catalog__btn-wrapper catalog__btn-wrapper--left">
      <a href="/sell_form/" class="catalog__btn catalog__btn--yellow">Продать технику</a>
    </div>
    <div class="sort">
      <div class="sort__item">
        <p class="sort__text">Сортировать по:</p>
        <p class="sort__text sort__text--separator sort__text--active">Дата размещения</p>
        <p class="sort__text sort__text--separator">Цена</p>
        <p class="sort__text">Год выпуска</p>
      </div>
      <div class="sort__item">
        <p class="sort__text">Сортировать по:</p>
        <div class="location">
          <p class="location__title">Краснодар</p>
          <div class="location__select">
            <p class="location__text">Выбрать город</p>
            <ul class="location__select-list">
              <li class="location__select-item"><a href="#">Волгоград</a></li>
              <li class="location__select-item"><a href="#">Воронеж</a></li>
              <li class="location__select-item"><a href="#">Екатеринбург</a></li>
              <li class="location__select-item"><a href="#">Казань</a></li>
              <li class="location__select-item"><a href="#">Краснодар</a></li>
              <li class="location__select-item"><a href="#">Красноярск</a></li>
              <li class="location__select-item"><a href="#">Москва</a></li>
              <li class="location__select-item"><a href="#">Новосибирск</a></li>
              <li class="location__select-item"><a href="#">Новгород</a></li>
              <li class="location__select-item"><a href="#">Омск</a></li>
              <li class="location__select-item"><a href="#">Пермь</a></li>
              <li class="location__select-item"><a href="#">Ростов-на-Дону</a></li>
              <li class="location__select-item"><a href="#">Санкт-Петербург</a></li>
              <li class="location__select-item"><a href="#">Уфа</a></li>
              <li class="location__select-item"><a href="#">Челябинск</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container catalog__inner">
    <div class="catalog-filter">
      <p class="catalog-filter__title">Все объявления</p>
      <ul class="catalog-filter__list">
        <li class="catalog-filter__item"><a href="/catalog/sale/sale_buldozer/" class="catalog-filter__link">Бульдозеры</a></li>
        <li class="catalog-filter__item"><a href="/catalog/sale/sale_buldozer/" class="catalog-filter__link">Экскаваторы</a></li>
        <li class="catalog-filter__item"><a href="/catalog/sale/sale_buldozer/" class="catalog-filter__link">Погрузчики</a></li>
        <li class="catalog-filter__item"><a href="/catalog/sale/sale_buldozer/" class="catalog-filter__link">Самосвалы</a></li>
        <li class="catalog-filter__item"><a href="/catalog/sale/sale_buldozer/" class="catalog-filter__link">Автокраны</a></li>
        <li class="catalog-filter__item"><a href="/catalog/sale/sale_buldozer/" class="catalog-filter__link">Катки дорожные</a></li>
        <li class="catalog-filter__item"><a href="/catalog/sale/sale_buldozer/" class="catalog-filter__link">Асфальтоукладчики</a></li>
        <li class="catalog-filter__item"><a href="/catalog/sale/sale_buldozer/" class="catalog-filter__link">Буровые установки</a></li>
      </ul>
      <p class="catalog-filter__sticker">Все категории</p>
    </div>

    <div id="itemContainer" class="catalog__card-wrapper catalog__card-wrapper--narrow">


      <a href="/catalog/sale/sale_buldozer/komatsu_d65ex_16/" class="catalog-card">
        <img src="/img/komatsu_d65ex_16.png" alt="" class="catalog-card__img">
        <p class="catalog-card__type">Бульдозер</p>
        <p class="catalog-card__text catalog-card__text--normal">KOMATSU D65EX-16</p>
        <p class="catalog-card__price">4 250 340</p>
      </a>
      

    </div>
    <div class="holder pagination">
    </div>
  </div>

</section>

<?php include ('/modules/consult.php'); ?>

<?php get_footer(); ?>