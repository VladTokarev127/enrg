<?php get_header(); ?>

	<!-- start section content -->
	<section class="content">
		<div class="container">

			<div class="content__wrapper">
				<h1><?php the_title(); ?></h1>
			<?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 
						the_content();
 
        // End the loop.
        endwhile;
        ?>
			</div>

		</div>
	</section>
	<!-- end section content -->

<?php get_footer(); ?>