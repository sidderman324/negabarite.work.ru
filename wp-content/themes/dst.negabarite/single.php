<?php get_header(); ?>

<section class="catalog catalog--good-page">
	<div class="container catalog__inner">

		<?php 
		
		the_post();


		$count = get_post_meta( get_the_id(), '_look', true);
		$count = $count+1;
		$look = update_post_meta( get_the_id(), '_look', $count );
		$hidden = update_post_meta( get_the_id(), '_hidden', 'Это скрытое поле!!!');
		$hidden1 = get_post_meta( get_the_id(), '_hidden', true);

		$brand = get_post_meta( get_the_id(), 'tech_info_brand', true); 
		$rent_info_model = get_post_meta( get_the_id(), 'tech_info_model', true); 
		$rent_info_price = get_post_meta( get_the_id(), 'tech_info_price', true); 
		$year = get_post_meta( get_the_id(), 'tech_info_year', true); 
		$operation_time = get_post_meta( get_the_id(), 'tech_info_working_time', true); 
		$rent_info_city = get_post_meta( get_the_id(), 'tech_info_location', true); 
		$rent_info_phone = get_post_meta( get_the_id(), 'tech_info_phone', true); 
		$rent_info_sale = get_post_meta( get_the_id(), 'checkbox_field', true); 
		$rent_info_description = get_post_meta( get_the_id(), 'tech_info_comment', true); 
		$rent_info_add_eqiup = get_post_meta( get_the_id(), 'tech_info_add_equip', true);

		?>

		<div class="catalog__title-wrapper">
			<h1 class="catalog__title"><?php echo $brand; ?> <?php echo $rent_info_model; ?></h1>
			<p class="catalog__subtitle">В городе <?php echo $rent_info_city; ?></p>
		</div>

		<div class="catalog__btn-wrapper catalog__btn-wrapper--good-page">
			<?php if($rent_info_sale=="продажа") {
				echo '<a href="#" class="catalog__btn catalog__btn--yellow btn_popup">Купить</a>';
			} else {
				echo '<a href="#" class="catalog__btn catalog__btn--yellow btn_popup">Арендовать</a>';
			} ?>
			
		</div>
	</div>
</section>

<section class="good-info">
	<div class="container good-info__inner">

		<div class="good-info__block">
			<div class="gallery">
				<?php
				$args = array( 'post_type' => 'attachment', 'posts_per_page' => -1, 'post_status' => null, 'post_parent' => $post->ID );
				$attachments = get_posts($args);
				$attach_array = [];
				foreach ( $attachments as $attachment ) {
					$attachment_id = $attachment->ID;
					$image_attributes = wp_get_attachment_image_src( $attachment_id, full );
					$attach_array[] = $image_attributes;
				}

				echo '<div class="gallery__big-wrapper">';
				echo '<img src="'. $image_attributes[0] .'" class="gallery__big">';
				echo '</div>';
				echo '<div class="gallery__nav-wrapper">';

				foreach ($attach_array as $value) {
					echo '<div class="gallery__slide"><img src="'. $value[0] .'" alt="" class="gallery__nav"></div>';
				}


				echo '</div>';
				?> 
			</div>
		</div>



		<div class="good-info__block">
			<div class="good-info__features">
				<ul class="good-info__features-list">
					<?php if($rent_info_sale=="продажа") {echo '<li class="good-info__features-item">
					<span class="good-info__features-text">Цена</span><span class="good-info__features-text good-info__features-text--price">'. number_format($rent_info_price, 0, ",", " ") .' <img src="'.get_template_directory_uri().'/img/rouble_icon.png" class="icon_rouble"></span>
					</li>';}

					?>
					<li class="good-info__features-item">
						<span class="good-info__features-text">Марка</span><span class="good-info__features-text"><?php echo $brand; ?></span>
					</li>
					<li class="good-info__features-item">
						<span class="good-info__features-text">Модель</span><span class="good-info__features-text"><?php echo $rent_info_model; ?></span>
					</li>
					<li class="good-info__features-item">
						<span class="good-info__features-text">Год выпуска</span><span class="good-info__features-text"><?php echo $year; ?></span>
					</li>
					<li class="good-info__features-item">
						<span class="good-info__features-text">Наработка</span><span class="good-info__features-text"><?php echo $operation_time; ?> моточасов</span>
					</li>
					<li class="good-info__features-item">
						<span class="good-info__features-text">Расположение</span><span class="good-info__features-text"><?php echo $rent_info_city; ?></span>
					</li>
					<li class="good-info__features-item">
						<span class="good-info__features-text">Кол-во  просмотров</span><span class="good-info__features-text"><?php echo $count; ?></span>
					</li>
					<li class="good-info__features-item good-info__features-item--phone">
						<span class="good-info__features-phone"></span>
						<span class="good-info__features-text">
							<span class="good-info__features-phone good-info__features-phone--left"><?php echo $rent_info_phone; ?></span>
							<a href="" class="good-info__features-btn">Показать телефон</a>
						</span>
					</li>
				</ul>
			</div>

			<div class="description">
				<h2 class="description__title">Комментарии продавца</h2>
				<div class="description__text description__text--margined"><?php echo $rent_info_description; ?></div>
				<h2 class="description__title">Дополнительное оборудование</h2>
				<p class="description__text"><?php echo $rent_info_add_eqiup; ?></p>
			</div>
		</div>
	</div>
</section>

<?php  get_template_part( '/modules/consult'); ?>


<?php get_footer(); ?>