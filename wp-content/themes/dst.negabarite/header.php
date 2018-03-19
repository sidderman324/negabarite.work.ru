<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="shortcut icon" href="/favicon.png" type="image/png">

  <?php wp_head(); ?>

  <?php

  if (is_single()) {

    $meta_title =  get_post_meta( get_the_id(), 'page_desc', true);

    $meta_description =  get_post_meta( $post->ID, 'page_desc', true);

    $meta_keys = get_post_meta( get_the_id(), 'page_keys', true);

  }

  if (is_page()) {

    $meta_title = get_post_meta( get_the_id(), 'meta_page_title', true);

    $meta_description = get_post_meta( get_the_id(), 'meta_page_description', true);

    $meta_keys = get_post_meta( get_the_id(), 'meta_page_keywords', true);

  }

  if (is_front_page()) {

    $meta_title = get_option('styles_meta_title');

    $meta_description = get_option('styles_meta_description');

    $meta_keys = get_option('styles_meta_keywords');

  }





  ?>

  <?php

  global $gorod;

  if (get_sub()!='negabarite'){

    $gorod = '-'.get_sub();

  }else{

    $gorod = '';

  }

  ?>

  <title><?php echo $meta_title; ?></title>

  <meta name="description" content="<?php echo $meta_description; ?>" />

  <meta name="keywords" content="<?php echo $meta_keys; ?>" />


    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<style>

html { margin-top: 0 !important; margin-bottom: 0 !important; }

</style>

<body>



 <header class="page-header">



  <div class="container page-header__inner">



    <!-- Вставка логотипа -->

    <a href="/" class="logo">

      <p class="logo__title">Негабарит</p>

      <p class="logo__title">Онлайн</p>

    </a>



    <?php

    $subdomain = explode('.', $_SERVER['HTTP_HOST']);

    $city_domain = $subdomain[0] .'.';

    if($city_domain == "dst") {$city_domain = ""; }

    switch ($subdomain[0]) {

      case 'volgograd': { $city_name = "Волгоград";} break;

      case 'voronezh': { $city_name = "Воронеж";} break;

      case 'ekaterinburg': { $city_name = "Екатеринбург";} break;

      case 'kazan': { $city_name = "Казань";} break;

      case 'krasnodar': { $city_name = "Краснодар";} break;

      case 'krasnojarsk': { $city_name = "Красноярск";} break;

      case 'moscow': { $city_name = "Москва";} break;

      case 'novosibirsk': { $city_name = "Новосибирск";} break;

      case 'novgorod': { $city_name = "Новгород";} break;

      case 'omsk': { $city_name = "Омск";} break;

      case 'perm': { $city_name = "Пермь";} break;

      case 'rostov-na-donu': { $city_name = "Ростов-на-Дону";} break;

      case 'sankt-peterburg': { $city_name = "Санкт-Петербург";} break;

      case 'ufa': { $city_name = "Уфа";} break;

      case 'cheljabinsk': { $city_name = "Челябинск";} break;

      default: { $city_name = "По всей России";} break;

    }

    // echo $subdomain[0];

    ?>



    <?php

    if (get_cityname(get_sub())!=''){

      $cur_city = get_cityname(get_sub());

    }else{

      $cur_city = Россия;

    }

    ?>



    <div class="location">

      <p class="location__title"><?=$cur_city?></p>

      <div class="location__select">

        <p class="location__text">Выбрать город</p>

        <ul class="location__select-list">

          <li class="location__select-item"><a href="http://volgograd.negabarite.ru<?=$_SERVER['REQUEST_URI']?>">Волгоград</a></li>

          <li class="location__select-item"><a href="http://voronezh.negabarite.ru<?=$_SERVER['REQUEST_URI']?>">Воронеж</a></li>

          <li class="location__select-item"><a href="http://ekaterinburg.negabarite.ru<?=$_SERVER['REQUEST_URI']?>">Екатеринбург</a></li>

          <li class="location__select-item"><a href="http://kazan.negabarite.ru<?=$_SERVER['REQUEST_URI']?>">Казань</a></li>

          <li class="location__select-item"><a href="http://krasnodar.negabarite.ru<?=$_SERVER['REQUEST_URI']?>">Краснодар</a></li>

          <li class="location__select-item"><a href="http://krasnoyarsk.negabarite.ru<?=$_SERVER['REQUEST_URI']?>">Красноярск</a></li>

          <li class="location__select-item"><a href="http://moscow.negabarite.ru<?=$_SERVER['REQUEST_URI']?>">Москва</a></li>

          <li class="location__select-item"><a href="http://novosibirsk.negabarite.ru<?=$_SERVER['REQUEST_URI']?>">Новосибирск</a></li>

          <li class="location__select-item"><a href="http://novgorod.negabarite.ru<?=$_SERVER['REQUEST_URI']?>">Новгород</a></li>

          <li class="location__select-item"><a href="http://omsk.negabarite.ru<?=$_SERVER['REQUEST_URI']?>">Омск</a></li>

          <li class="location__select-item"><a href="http://perm.negabarite.ru<?=$_SERVER['REQUEST_URI']?>">Пермь</a></li>

          <li class="location__select-item"><a href="http://rostovnadonu.negabarite.ru<?=$_SERVER['REQUEST_URI']?>">Ростов-на-Дону</a></li>

          <li class="location__select-item"><a href="http://saintpetersburg.negabarite.ru<?=$_SERVER['REQUEST_URI']?>">Санкт-Петербург</a></li>

          <li class="location__select-item"><a href="http://ufa.negabarite.ru<?=$_SERVER['REQUEST_URI']?>">Уфа</a></li>

          <li class="location__select-item"><a href="http://chelyabinsk.negabarite.ru<?=$_SERVER['REQUEST_URI']?>">Челябинск</a></li>

        </ul>

      </div>

    </div>



    <div class="feedback">

      <a href="#" class="feedback__btn btn_popup">Заказать звонок</a>

      <div class="feedback__contact">

        <a href="tel:+78007770508" class="feedback__phone"><? echo (get_option('contact_phone'.$gorod))? get_option('contact_phone'.$gorod): get_option('contact_phone') ?></a>

        <a href="mailto:zakaz@negabarite.com" class="feedback__mail"><?=get_option('contact_email') ?></a>

      </div>

    </div>



    <div class="page-header__burger-wrapper">

      <span class="page-header__burger"></span>

    </div>



  </div>



  <nav class="main-menu">

    <div class="container">

      <ul class="main-menu__list">

        <li class="main-menu__item"><a href="/about/" class="main-menu__link">О компании</a></li>

        <li class="main-menu__item"><p class="main-menu__link">Каталог спецтехники</p>

          <span class="main-menu__marker"></span>

          <ul class="submenu">

            <li class="submenu__item"><a href="/arenda-buldozerov<?= $gorod ?>/" class="submenu__link">Бульдозеры</a></li>

            <li class="submenu__item"><a href="/arenda-ekskavatorov<?= $gorod ?>/" class="submenu__link">Экскаваторы</a></li>

            <li class="submenu__item"><a href="/arenda-pogruzchikov<?= $gorod ?>/" class="submenu__link">Погрузчики</a></li>

            <li class="submenu__item"><a href="/arenda-samosvalov<?= $gorod ?>/" class="submenu__link">Самосвалы</a></li>

            <li class="submenu__item"><a href="/arenda-avtokranov<?= $gorod ?>/" class="submenu__link">Автокраны</a></li>

            <li class="submenu__item"><a href="/arenda-dorozhnyh-katkov<?= $gorod ?>/" class="submenu__link">Катки дорожные</a></li>

            <li class="submenu__item"><a href="/arenda-asfaltoukladchikov<?= $gorod ?>/" class="submenu__link">Асфальтоукладчики</a></li>

            <li class="submenu__item"><a href="/arenda-burovoj-ustanovki<?= $gorod ?>/" class="submenu__link">Буровые установки</a></li>
            <li class="submenu__item"><a href="/sdat-tehniku-v-arendu/" class="submenu__link">Сдать в аренду</a></li>
          </ul>

        </li>

        <li class="main-menu__item"><p class="main-menu__link">Услуги</p>

          <span class="main-menu__marker"></span>

          <ul class="submenu submenu--wide">

            <li class="submenu__item"><a href="/remont-dorog<?= $gorod ?>/" class="submenu__link">Ремонт дорог</a></li>

            <li class="submenu__item"><a href="/stroitelstvo-dorog<?= $gorod ?>/" class="submenu__link">Строительство дорог</a></li>

            <li class="submenu__item"><a href="/stroitelstvo-nefteprovodov<?= $gorod ?>/" class="submenu__link">Строительство нефтепроводов</a></li>

            <li class="submenu__item"><a href="/stroitelstvo-gazoprovodov<?= $gorod ?>/" class="submenu__link">Строительство газопроводов</a></li>

            <li class="submenu__item"><a href="/otsypka-dorog<?= $gorod ?>/" class="submenu__link">Отсыпка дорог</a></li>

          </ul>

        </li>

        <li class="main-menu__item"><p class="main-menu__link">Продажа</p>

          <span class="main-menu__marker"></span>

          <ul class="submenu submenu--wide">

            <li class="submenu__item"><a href="/katalog-tehniki/" class="submenu__link">Продажа ДСТ</a></li>

            <li class="submenu__item"><a href="/katalog-tehniki/" class="submenu__link">Продажа ДТ</a></li>

            <li class="submenu__item"><a href="/prodat-tehniku/" class="submenu__link">Продать технику</a></li>
          </ul>

        </li>

        <li class="main-menu__item"><a href="/contacts/" class="main-menu__link">Контакты</a></li>

      </ul>

      <a href="#" class="main-menu__btn btn_popup">Заказать звонок</a>

      <a href="tel:+78001000625" class="main-menu__phone">8-800-1000-625</a>

    </div>

  </nav>

</header>