<?php
/*
 * Template name: Услуги
 */
?>

<?php get_header(); get?>

<?php  get_template_part( '/modules/type'); ?>

  <section class="about">
    <div class="container about__inner">
      <div class="about__title-wrapper">
        <h2 class="about__title"><?= $post->post_title ?></h2>
        <p class="about__subtitle">Негабарит онлайн</p>
      </div>


        <div class="container">
         <div class="about__text-wrapper">
          <h1 class="about__main-title"><?= get_post_meta( get_the_id(), 'meta_page_h1', true)?></h1>
             <p>
                 <?php
                 echo $post->post_content;
                 ?>
             </p>


          </div>

        <h3 class="about__stage-title"></h3>
        <p class="about__text"></p>
        <p class="about__text"></p>
        <p class="about__text"></p>
        <p class="about__text"></p>

        </div>
    </div>
  </section>


<?php  get_template_part( '/modules/consult'); ?>

<?php get_footer(); ?>