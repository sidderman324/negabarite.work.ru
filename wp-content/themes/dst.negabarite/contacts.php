<?php
/*
 * Template name: Контакты
 */
?>

<?php get_header(); get?>

<?php  get_template_part( '/modules/type'); ?>

    <section class="contacts">
      <div class="container contacts__inner">

        <div class="breadcrumbs">
          <div class="container breadcrumbs__inner">
            <a href="/" class="breadcrumbs__link">Главная</a>
            <span class="breadcrumbs__current">Контакты</span>
          </div>
        </div>

        <div class="contacts__title-wrapper">
          <h2 class="contacts__title">Контакты</h2>
          <p class="contacts__subtitle">Негабарит онлайн</p>
        </div>

        <div class="contacts__info-wrapper">
          <div class="contacts__info">
            <iframe src="<?php echo (get_option('contact_gmap'.$gorod)!='')? get_option('contact_gmap'.$gorod): get_option('contact_gmap-ekaterinburg') ; ?>"
              width="100%" height="100%" frameborder="0" style="border:0" id="map_wrapper" allowfullscreen></iframe>
          </div>
          <div class="contacts__info">
            <ul class="contacts__list">
                <?php
                global $gorod;
                if((get_sub()=='negabarite')||(get_option('contact_gmap'.$gorod)=='')){
                    $allsubs = get_allsubs();
                foreach ($allsubs as $subdom){
                    if(get_option('contact_adres-'.$subdom)and get_option('contact_gmap-'.$subdom) ) {
                        ?>
                        <li class="contacts__item">
                            <a href="<?php echo get_option('contact_gmap-'.$subdom); ?>"
                               class="contacts__link "><?php echo get_option('contact_adres-'.$subdom); ?></a>
                        </li>
                        <?php
                    }
                }
                }else { ?>
                    <li class="contacts__item">
                        <a href="<?php echo get_option('contact_gmap'.$gorod); ?>"
                           class="contacts__link "><?php echo get_option('contact_adres'.$gorod); ?></a>
                    </li>
                <?php } ?>


            </ul>
          </div>
        </div>


      </div>
    </section>


<?php  get_template_part( '/modules/consult'); ?>

<?php get_footer(); ?>
