<?php
/*
 * Template name: О компании
 */
?>

<?php get_header(); get?>

<?php include ('/modules/type.php'); ?>

  <section class="about">
    <div class="container about__inner">
      <div class="about__title-wrapper">
        <h2 class="about__title"><?= $post->post_title ?></h2>
        <p class="about__subtitle">Негабарит онлайн</p>
      </div>


      <div class="about__text-wrapper--wide">
          <h1 class="about__main-title"><?= get_post_meta( get_the_id(), 'meta_page_h1', true)?></h1>
          <?php
          echo $post->post_content;
          ?>


        <h3 class="about__stage-title"></h3>
        <p class="about__text"></p>
        <p class="about__text"></p>
        <p class="about__text"></p>
        <p class="about__text"></p>

      </div>
    </div>
  </section>


<?php include ('/modules/consult.php'); ?>

<?php get_footer(); ?>