<?php /* Template Name: Template - Generic */ get_header(); ?>

	<section class="hero">
		<div class="row">

			<div class="columns large-12 center">
				<h1><?php wp_title(''); ?></h1>
			</div>

		</div>
	</section>

	<section class="page-content">
		<div class="row">
			<div class="columns large-10 large-offset-1 medium-12">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<?php the_content(); ?>

					<?php endwhile; ?>

					<?php else: ?>

				<?php endif; ?>			
			</div>
		</div>
	</section>

<?php get_footer(); ?>
