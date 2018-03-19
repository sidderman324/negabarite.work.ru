<?php

/*

 * Template name: Аренда техники

 */

?>



<?php get_header(); get?>



<?php  get_template_part( '/modules/type'); ?>



<section class="catalog">

  <div class="container catalog__inner catalog__inner--category catalog__inner--bulldozer">

    <?php 

    $meta_h1 = get_post_meta( get_the_id(), 'meta_page_h1', true); 

    $tech_type = get_post_meta( get_the_id(), 'meta_page_type', true); 

    $title = ''; 

    switch ($tech_type) {

      case 'buldozer': {$title = 'Бульдозеры';} break;

      case 'excavator': {$title = 'Экскаваторы';} break;

      case 'pogruzchik': {$title = 'Погрузчики';} break;

      case 'samosval': {$title = 'Самосвалы';} break;

      case 'autokran': {$title = 'Автокраны';} break;

      case 'road_ratok': {$title = 'Катки дорожные';} break;

      case 'asphaltoukladchik': {$title = 'Асфальтоукладчики';} break;

      case 'burovaya_ustanovka': {$title = 'Буровые установки';} break;

      default: { $title = 'Аренда спецтехники'; } break;

    }

    ?>

    <div class="breadcrumbs">

      <div class="container breadcrumbs__inner">

        <a href="/" class="breadcrumbs__link">Главная</a>

        <span class="breadcrumbs__current"><?php echo $title; ?></span>

      </div>

    </div>



    <div class="catalog__title-wrapper">

        <h2 class="catalog__title"><?php echo $title; ?></h2>

      <p class="catalog__subtitle">Аренда Дорожно-строительной техники</p>

    </div>



    <div class="catalog__btn-wrapper catalog__btn-wrapper--wide">

      <a href="#" class="catalog__btn catalog__btn--yellow btn_popup">Арендовать</a>
      <a href="/katalog-tehniki/" class="catalog__btn">Купить</a>

      <a href="http://www.negabarite.com/" class="catalog__btn catalog__btn--big">Перевозка негабаритных грузов</a>

    </div>

    <div class="catalog__card-wrapper">





      <?php

      $args = array(

      // 'posts_per_page' => 5,

        'category_name' => $tech_type,

        'post_type' => 'catalog_technics',

      );

      $posts = new WP_Query( $args );

      while( $posts->have_posts() ) :



        $posts->the_post();

        $rent_info_brand = get_post_meta( get_the_id(), 'tech_info_brand', true); 

        $rent_info_model = get_post_meta( get_the_id(), 'tech_info_model', true); 

        $args = array( 'post_type' => 'attachment', 'posts_per_page' => -1, 'post_status' => null, 'post_parent' => $post->ID );

        $attachments = get_posts($args);

        $attach_array = [];

        foreach ( $attachments as $attachment ) {

          $attachment_id = $attachment->ID;

          $image_attributes = wp_get_attachment_image_src( $attachment_id, full );

          $attach_array[] = $image_attributes;

        }

        ?>





        <a href="<?php the_permalink(); ?>" class="catalog-card">

          <div class="catalog-card__img-wrapper">

            <img src="<?php echo $image_attributes[0]; ?>" alt="" class="catalog-card__img">

          </div>

          <p class="catalog-card__text">Аренда<br><?php echo $rent_info_brand; ?> <?php echo $rent_info_model; ?></p>

        </a>

        <?php

      endwhile;

      wp_reset_postdata();

      ?>

    </div>

  </div>

</section>





<section class="about">

  <div class="container">

    <div class="about__text-wrapper">

      <h1><?php echo $meta_h1; ?></h1>

      <?php 

      the_content();

      ?>

    </div>

  </div>

</section>



<?php  get_template_part( '/modules/consult'); ?>



<?php get_footer(); ?>