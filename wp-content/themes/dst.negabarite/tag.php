<?php get_header(); ?>
<section id="main" class="wrapper">
	<div class="inner">
		<?php
		$count = get_post_meta( get_the_id(), '_look', true);
		if($count == "") {$count = 0;} 
		if( have_posts() ) :
			while( have_posts() ) : the_post();
				?>
				<div class="post_wrapper split reversed">
					<div class="content">
						<h2 class="post_title"><?php the_title(); ?></h2>
						<p class="post_date">Опубликовано: <?php the_date(); ?> в <?php the_time(); ?></p>
						<?php the_excerpt(); ?>
						<ul class="actions actions--post">
							<li class="button_wrapper"><a href="<?php the_permalink(); ?>" class="button">Читать далее</a></li>
							<li><span class="icon fa-eye"> <?php echo $count ?></span></li>
							<li><span class="icon fa-commenting-o"> <?php echo comments_number('0','1'); ?></span></li>
						</ul>
						<?php the_category() ?>
						<?php the_tags() ?>
					</div>
					<div class="image"><?php the_post_thumbnail(); ?></div>
				</div>
				<?php
			endwhile;
		else:
			?><p>Нет постов под этим тегом</p><?php
		endif;
		paginate_links( );

		?>
	</div>
</section>
<?php get_footer(); ?>