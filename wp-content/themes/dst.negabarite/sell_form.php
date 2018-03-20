<?php

/*

 * Template name: Форма продажи техники

 */

?>

<?php 

require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-admin/includes/image.php' );

require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-admin/includes/file.php' );

require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-admin/includes/media.php' );

?>

<?php get_header(); ?>



<div class="breadcrumbs">

  <div class="container breadcrumbs__inner">

    <a href="/" class="breadcrumbs__link">Главная</a>

    <span class="breadcrumbs__current"><?php the_title(); ?></span>

  </div>

</div>

<div class="container">

  <div class="form__title-wrapper">

    <h2 class="form__title"><?php the_title(); ?></h2>

  </div>

</div>





<?php

require_once( ABSPATH . 'wp-admin/includes/image.php' );

require_once( ABSPATH . 'wp-admin/includes/file.php' );

require_once( ABSPATH . 'wp-admin/includes/media.php' );

?>



<div class="form">

  <div class="container">

    <form action="<?php echo admin_url('admin-ajax.php?action=send_form'); ?>" method="post" id="sell_form" enctype="multipart/form-data" class="form__inner">



      <?php



      $rent_sale = get_post_meta($post->ID, 'meta_page_rent_sale', true);

      if($rent_sale == "Продажа") {

        echo '<div class="form__row">';

        echo '<p class="form__text">Стоимость</p> ';

        echo '<input name="price" type="number" class="form__input" placeholder="Введите стоимость в рублях">';

        echo '</div>';

      } 

      ?>      

      <div class="form__row">

        <p class="form__text form__text--required">Категория</p>

        <input type="hidden" name="rent_sale" value="<?php echo $rent_sale;?>">



        <select name="category" class="form__input" id="category" required>

          <option value="buldozer">Бульдозеры</option>

          <option value="excavator">Экскаваторы</option>

          <option value="pogruzchik">Погрузчики</option>

          <option value="samosval">Самосвалы</option>

          <option value="autokran">Автокраны</option>

          <option value="road_ratok">Катки дорожные</option>

          <option value="asphaltoukladchik">Асфальтоукладчики</option>

          <option value="burovaya_ustanovka">Буровые установки</option>

        </select>

      </div>

      <div class="form__row">

        <p class="form__text form__text--required">Марка</p>

        <!-- <input type="text" name="brand" id="brand" class="form__input"> -->

        <select name="brand" class="form__input" id="brand" required>

        </select>

      </div>

      <div class="form__row">

        <p class="form__text form__text--required">Модель</p>

        <input type="text" name="model" class="form__input" placeholder="Введите модель" required>

      </div>

      <div class="form__row">

        <p class="form__text form__text--required">Год выпуска</p>

        <input type="text" name="year" id="year" class="form__input" placeholder="Введите год выпуска" required>

      </div>

      <div class="form__row">

        <p class="form__text">Наработка</p>

        <input type="number" name="working_time" class="form__input" placeholder="Введите наработку">

      </div>

      <div class="form__row form__row--location">

        <p class="form__text form__text--required">Расположение</p>

        <input type="text" value="" name="location" id="location" class="form__input" placeholder="Введите город расположения" required>
        <script>
          jQuery('#location').kladr({
            verify: true,
            type: jQuery.kladr.type.city
          });
        </script>
      </div>

      <div class="form__row">

        <p class="form__text form__text--required">Телефон</p>

        <input type="text" name="phone" id="phone" class="form__input" placeholder="Введите телефон" required>



      </div>

      <div class="form__row form__row--files">

        <div class="file-upload">

         <label>

          <input type="file" id="photo" name="photo[]" multiple="multiple" required/>

          <span>Загрузите фотографии</span>

        </label>

      </div>
      <p class="form__text" id="result_upload"></p>
    </div>



    <div class="form__row form__row--wide">

      <p class="form__text">Комментарии</p>

      <textarea type="text" name="comment" class="form__input form__input--big" placeholder="Введите подробное описание техники"></textarea>

    </div>

    <div class="form__row form__row--wide">

      <p class="form__text">Дополнительное<br> оборудование</p>

      <textarea type="text" name="add_equip" class="form__input form__input--big" placeholder="Введите список дополнительного оборудования"></textarea>

    </div>


    <div class="form__row form__row--wide">

      <p class="form__text"></p>

      <div class="g-recaptcha" data-sitekey="6LfMa00UAAAAANe6BAjIBqFiLTgSsT2xG-M6tFul"></div>

    </div>

    <input type="submit" id="form_send" class="form__submit form-send-mail" name="" value="Опубликовать">


  </form>

</div>

</div>



<?php get_footer(); ?>
