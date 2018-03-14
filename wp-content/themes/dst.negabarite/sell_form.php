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
    <span class="breadcrumbs__current">Продать технику</span>
  </div>
</div>
<div class="container">
  <div class="form__title-wrapper">
    <h2 class="form__title"><?php the_title(); ?></h2>
  </div>
</div>

<?php
$args = array();
$posts = new WP_Query( $args );
while( $posts->have_posts() ) :

  $posts->the_post();

endwhile;
wp_reset_postdata();
?>

<?php
require_once( ABSPATH . 'wp-admin/includes/image.php' );
require_once( ABSPATH . 'wp-admin/includes/file.php' );
require_once( ABSPATH . 'wp-admin/includes/media.php' );
?>



<form id="featured_upload" method="post" action="#" enctype="multipart/form-data">
  <input type="file" name="my_image_upload[]" id="my_image_upload[]"  multiple="multiple" />
  <input type="hidden" name="post_id" id="post_id" value="555" />
  <input id="submit_my_image_upload" name="submit_my_image_upload" type="submit" value="Upload" />
</form>

<?php
/* Эти файлы должны быть подключены в лицевой части (фронт-энде). */
require_once( ABSPATH . 'wp-admin/includes/image.php' );
require_once( ABSPATH . 'wp-admin/includes/file.php' );
require_once( ABSPATH . 'wp-admin/includes/media.php' );

/* Позволим WordPress перехватить загрузку. */
/* не забываем указать атрибут name поля input - 'my_image_upload' */
$attachment_id = media_handle_upload( 'my_image_upload', $_POST['post_id'] );

if ( is_wp_error( $attachment_id ) ) {
  echo "Ошибка загрузки медиафайла.";
} else {
  echo "Медиафайл был успешно загружен!";
}

print_r($attachment_id);

?>


<div class="form">
  <div class="container">
    <form action="<?php echo admin_url('admin-ajax.php?action=send_form'); ?>" method="post" class="form__inner">
      <div class="form__row">
        <p class="form__text">Стоимость</p>
        <input name="price" type="text" class="form__input">
      </div>
      <div class="form__row">
        <p class="form__text">Категория</p>

        <select name="category" id="">
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
        <p class="form__text">Марка</p>
        <input type="text" name="brand" class="form__input">
      </div>
      <div class="form__row">
        <p class="form__text">Модель</p>
        <input type="text" name="model" class="form__input">
      </div>
      <div class="form__row">
        <p class="form__text">Год выпуска</p>
        <input type="number" name="year" class="form__input">
      </div>
      <div class="form__row">
        <p class="form__text">Наработка</p>
        <input type="number" name="working_time" class="form__input">
      </div>
      <div class="form__row">
        <p class="form__text">Расположение</p>
        <input type="text" name="location" class="form__input">
      </div>
      <div class="form__row">
        <p class="form__text">Телефон</p>
        <input type="text" name="phone" class="form__input">

        <?php



        echo '<input type="file" name="upload_attachment[]" multiple="multiple"  />';
        ?>


      </div>

      <div class="form__row form__row--wide">
        <p class="form__text">Комментарии</p>
        <textarea type="text" name="comment" class="form__input form__input--big"></textarea>
      </div>
      <div class="form__row form__row--wide">
        <p class="form__text">Дополнительное<br> оборудование</p>
        <textarea type="text" name="add_equip" class="form__input form__input--big"></textarea>
      </div>
      <input type="submit" id="form_send" class="form__submit" name="" value="Опубликовать">
    </form>
  </div>
</div>

<div class="form">
  <div class="container">
    <?php // the_content(); ?>
  </div>
</div>






<?php get_footer(); ?>