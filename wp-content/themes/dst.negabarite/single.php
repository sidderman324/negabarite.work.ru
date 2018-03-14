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

		$brand = get_post_meta( get_the_id(), 'rent_info_brand', true); 
		$rent_info_model = get_post_meta( get_the_id(), 'rent_info_model', true); 
		$rent_info_price = get_post_meta( get_the_id(), 'rent_info_price', true); 
		$year = get_post_meta( get_the_id(), 'rent_info_year_made', true); 
		$operation_time = get_post_meta( get_the_id(), 'rent_info_operation_time', true); 
		$rent_info_city = get_post_meta( get_the_id(), 'rent_info_location', true); 
		$rent_info_phone = get_post_meta( get_the_id(), 'rent_info_phone', true); 
		$rent_info_sale = get_post_meta( get_the_id(), 'checkbox_field', true); 
		$rent_info_description = get_post_meta( get_the_id(), 'comments', true); 
		$rent_info_add_eqiup = get_post_meta( get_the_id(), 'add_quip', true);

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
				$gallery_photo = get_post_meta( get_the_id(), 'gallery_photo', false );
				$attachment_id = $gallery_photo[0];
				$image_attributes = wp_get_attachment_image_src( $attachment_id, full );

				echo '<div class="gallery__big-wrapper">';
				echo '<img src="'. $image_attributes[0] .'" width="'. $image_attributes[1] .'" height="'. $image_attributes[2] .'" class="gallery__big">';
				echo '</div>';
				echo '<div class="gallery__nav-wrapper">';
				for($i = 0; $i < count($gallery_photo); $i++) {
					$attachment_id = $gallery_photo[$i];
					$image_attributes = wp_get_attachment_image_src( $attachment_id, full );
					echo '<div class="gallery__slide"><img src="'. $image_attributes[0] .'" alt="" class="gallery__nav"></div>';
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
						<span class="good-info__features-phone">+7</span>
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

<?php include ('/modules/consult.php'); ?>

<?php get_footer(); ?>