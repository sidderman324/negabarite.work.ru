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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2182.572830427631!2d60.61231511625937!3d56.8361175808569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c16e8ee174b355%3A0x455e34edde5c9932!2z0YPQuy4g0JzQsNC70YvRiNC10LLQsCwgNTEsINCV0LrQsNGC0LXRgNC40L3QsdGD0YDQsywg0KHQstC10YDQtNC70L7QstGB0LrQsNGPINC-0LHQuy4sIDYyMDA3NQ!5e0!3m2!1sru!2sru!4v1517991623538"
              width="100%" height="100%" frameborder="0" style="border:0" id="map_wrapper" allowfullscreen></iframe>
          </div>
          <div class="contacts__info">
            <ul class="contacts__list">
                <?php
                global $gorod;
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
                    } ?>
            </ul>
          </div>
        </div>


      </div>
    </section>


<?php  get_template_part( '/modules/consult'); ?>

<?php get_footer(); ?>
