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

      <a href="/prodat-tehniku/" class="catalog__btn catalog__btn--yellow">Продать технику</a>

    </div>

  </div>

  <div class="container catalog__inner catalog_card_wrapper">



    <form method="get" action="" class="sort">

      <?php

      if( isset( $_GET['tech_type'] ) ) { $tech_type = $_GET['tech_type']; }

      if( isset( $_GET['sort_date'] ) ) { $sort_date = $_GET['sort_date']; }

      if( isset( $_GET['sort_price'] ) ) { $sort_price = $_GET['sort_price']; }

      if( isset( $_GET['sort_year'] ) ) { $sort_year = $_GET['sort_year']; }

      if( isset( $_GET['sort_city'] ) ) { $sort_city = $_GET['sort_city']; }

      ?>

      <div class="catalog-filter">

        <input id="cat_all" type="radio" onclick="this.form.submit();" value="" name="tech_type">

        <label for="cat_all" title="Все объявления" class="catalog-filter__title">Все объявления</label>



        <span class="sort_separator"></span>

        <?php

        if( $terms = get_terms( 'category', 'orderby=name' ) ) :

          foreach ( $terms as $term ) :

            $term_rus = $term->name;

            $term_tech = $term->slug;


            $class = "";

            if ($tech_type == $term_tech) {$class = 'catalog-filter__link--active';}

            if ($tech_type == $term_tech) {$current = 'checked';}

            echo '<input id="' . $term_tech . '" type="radio" onclick="this.form.submit();" value="' . $term_tech . '" name="tech_type" '. $current .'>';

            echo '<label for="' . $term_tech . '" title="' . $term_rus . '" class="catalog-filter__link '. $class .'">' . $term_rus . '</label>';

          endforeach;

        endif;

        ?>

      </div>

      <div class="sort__item sort__item--horizont">

        <p class="sort__text">Сортировать по:</p>



        <div class="catalog-filter__select_wrapper">

          <span class="catalog-filter__name">Дате</span>



          <select name="sort_date" id="sort_date" onChange="this.form.submit();" class="catalog-filter__link catalog-filter__select">

            <option value=""></option>

            <option value="DESC" <?php if($sort_date=="DESC") echo "selected"; ?> >По возрастанию</option>

            <option value="ASC" <?php if($sort_date=="ASC"  ) echo "selected"; ?> >По убыванию</option>

          </select>

        </div>

        <!--<div class="catalog-filter__select_wrapper">

          <span class="catalog-filter__name">Цене</span>

          <select name="sort_price" id="sort_price" onChange="this.form.submit();" class="catalog-filter__link catalog-filter__select">

            <option value=""></option>

            <option value="DESC" <?php /*if($sort_price=="DESC") echo "selected"; */?> >По возрастанию</option>

            <option value="ASC" <?php /*if($sort_price=="ASC"  ) echo "selected"; */?> >По убыванию</option>

          </select>

        </div>

        <div class="catalog-filter__select_wrapper">

          <span class="catalog-filter__name">Году выпускa</span>

          <select name="sort_year" id="sort_year" onChange="this.form.submit();" class="catalog-filter__link catalog-filter__select">

            <option value=""></option>

            <option value="DESC" <?php /*if($sort_year=="DESC") echo "selected"; */?> >По возрастанию</option>

            <option value="ASC" <?php /*if($sort_year=="ASC"  ) echo "selected"; */?> >По убыванию</option>

          </select>

        </div>-->

      </div>

      <div class="catalog-filter__select_wrapper">

        <p class="catalog-filter__name">По городу</p>

        <?php 

        $args = array(

          'taxonomy' => 'cities',

          'hide_empty' => true,

        );

        $terms = get_terms( $args );

        echo '<select class="catalog-filter__select" name="sort_city" onChange="this.form.submit();">';

        echo '<option value=""></option>';

        echo '<option value="">По всей России</option>';

        foreach ($terms as $term) {

          echo '<option value="'.$term->slug.'">'.$term->name.'</option>';

        }

        echo '</select>';

        $term = get_term_by( 'slug', $sort_city, 'cities');

        $term_name = $term->name;

        echo '<span class="filter_current_city">'.$term_name.'</span>'

        ?>

      </div>

    </form>

    <div id="itemContainer" class="catalog__card-wrapper catalog__card-wrapper--narrow">

      <?php

      $args = array(

        'posts_per_page' => 18,

        'category_name' => $tech_type,

        'post_type' => 'catalog_technics',

          'meta_key' => 'tech_info_rent_sale',
          
          'meta_value'=> 'Продажа',

        'orderby' => array( 

          'date' => $sort_date,

        ),

      );

      $args[] = array('relation' => 'AND');   



      if ( $sort_city != "" ) {              

       $args['tax_query'][] = array(                    

        'taxonomy'  => 'cities', 

        'field'     => 'slug', 

        'terms' => $_GET['sort_city'],


      );}



       $posts = new WP_Query( $args );


       if (!$posts->have_posts()):

           ?>



           <div class="catalog-card__img-wrapper">

               <p class="catalog-card__text catalog-card__text--normal">Нет техники по вашим параметрам</p>

           </div>



       <?php endif;

       while( $posts->have_posts() ) :

           $posts->the_post();


           $year = get_post_meta( get_the_id(), 'tech_info_year', true);

           $rent_info_price = get_post_meta( get_the_id(), 'tech_info_price', true);

           $rent_info_cat = get_post_meta( get_the_id(), 'category_id', true);

           $tech = array(
               'buldozer' => 'Бульдозер',
               'excavator' => 'Экскаватор',
               'pogruzchik' => 'Погрузчик',
               'samosval' => 'Самосвал',
               'autokran' => 'Автокран',
               'road_ratok' => 'Дорожный каток',
               'asphaltoukladchik' => 'Асфальтоукладчик',
               'burovaya_ustanovka' => 'Буровая установка',
           );

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

          <p class="catalog-card__type"><?=$tech[$rent_info_cat]?></p>

          <p class="catalog-card__text catalog-card__text--normal"><?= $rent_info_brand.' '.$rent_info_model?></p>

          <p class="catalog-card__price"><?= $rent_info_price.' р.'?></p>

        </a>

        <?php

      endwhile;

      wp_reset_postdata();

      ?>

      

    </div>

    <div class="holder pagination">

    </div>

  </div>



</section>







<?php  get_template_part( '/modules/consult'); ?>



<?php get_footer(); ?>