<?php get_header(); ?>

	<!-- start section hero -->
	<section class="hero" style="background-image: url('<?php the_field('bg_1'); ?>');">
		<div class="hero__video">
			<video src="<?php the_field('video_1'); ?>" autoplay muted loop></video>
		</div>
		<div class="container">

			<div class="hero__suptitle wow fadeInUp"><?php the_field('suptitle_1'); ?></div>
			<h1 class="hero__title wow fadeInUp"><?php the_field('title_1'); ?></h1>
			<div class="hero__btn-wrapper wow fadeInUp">
				<a href="<?php the_field('link_1'); ?>" class="hero__btn btn btn_red">Получить каталог</a>
			</div>

			<div class="hero__grid">
				<?php while( the_repeater_field('list_1') ): ?>
					<div class="hero__item wow fadeInUp" data-wow-delay="0.<?php echo get_row_index(); ?>s">
						<div class="hero__item-icon"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
						<div class="hero__item-content">
							<h3 class="hero__item-title"><?php the_sub_field('title'); ?></h3>
							<div class="hero__item-text"><?php the_sub_field('text'); ?></div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>

		</div>
	</section>
	<!-- end section hero -->

<?php get_footer(); ?>